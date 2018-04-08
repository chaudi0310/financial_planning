<?php
include '../../connection/dbConfig.php';
session_start();

// Checking data for errors
function checkIfNumber($val){
	return is_numeric($val);
}

//get term of loan
$date = date('m-d-Y');
date_default_timezone_set('Asia/Manila');
$time = date(' h:i A');
//get the old value of funding
$getoldfunding = mysqli_query($db, "SELECT * FROM funding WHERE id = '1'");
$countgetoldfunding = mysqli_num_rows($getoldfunding);

if($countgetoldfunding > 0){
	$row = mysqli_fetch_assoc($getoldfunding);
	$old_loan_amount = $row['loan_amount'];
	$old_interest_rate = $row['anual_interest_rate'];
}
//this code is for funding
$loan_amount = $_POST['loan_amount'];
$air = $_POST['anual_interest_rate'];
$loan_term = $_POST['loan_term'];
//get monthly rate
//(1 + Anual Interest Rate) ^ (1/12)-1
$formula1 = $air/100;

$formula2 = 1;
$formula3 = 1/12;

$formula4 = $formula2 + $formula1;

$formula5 = (pow($formula4,$formula3));


$formula6 = $formula5 - 1;

$monthly_rate = $formula6 * 100;

//this formula is for payment(monthly)
//Monthly Payment = (monthly rate x loan amount)/ (1-(1+Monthly Rate)^-Term of loan)
$mratedeci = $monthly_rate/100;
$above = $mratedeci * $loan_amount;
$nega_sixty = 1*-60;
$monthly_rateplus1 = $mratedeci + 1;
$monthly_rateraise60 = (pow($monthly_rateplus1,$nega_sixty));
$below = 1 - $monthly_rateraise60;
$payment = $above/$below;
//amount payable formula
//payment * 60

function PMT($interest,$num_of_payments,$PV,$FV = 0.00, $Type = 0){
	$xp=pow((1+$interest),$num_of_payments);
	return
		($PV* $interest*$xp/($xp-1)+$interest/($xp-1)*$FV)*
		($Type==0 ? 1 : 1/($interest+1));
}

$payment = PMT($mratedeci, $loan_term, $loan_amount);
$round_payment = round($payment, 2);
$total_amount_payable = $payment * 60;

//end of code for funding
//this code is for loan payment calculator

// Updating the funding
$update = mysqli_query($db, "UPDATE funding SET loan_amount = '$loan_amount', anual_interest_rate = '$air', monthly_rate = '$monthly_rate', payment = '$payment', total_amount_payable = '$total_amount_payable', term_of_loan = '$loan_term'");

// Gather all records in loan-payment-calculator table and getting all of its value
$old_payment_calc_records = mysqli_fetch_all(mysqli_query($db, "SELECT id FROM `loan-payment-calculator`"));

// Since ID was the only data gathered each multidimension array only has 0 index which is value for ID
$old_payment_calc_records = array_column($old_payment_calc_records, '0');

$scheduled_payment =$round_payment ;

// Perform looping operation - Index was set to 0 as it is used in array gathering if record id exist in old records array
for($i = 0; $i < $loan_term; $i++) {
	$month_balance = $loan_amount;
	$month_interest = $month_balance * $mratedeci;
	$month_principal = $scheduled_payment - $month_interest;

	if($old_payment_calc_records) { // Check if old_payment array is empty. Empty will return false
		// Updates the record based on $old_payment_calc_records value un index[0]
		mysqli_query($db, "UPDATE `loan-payment-calculator` SET balance = '$month_balance', scheduled_payment = '$payment', principal = '$month_principal', interest = '$month_interest' WHERE id = '$old_payment_calc_records[0]'");
	} else {
		// Will insert new record since $old_payment_calc_records is now empty
		mysqli_query($db, "INSERT INTO `loan-payment-calculator` (`month`, `balance`, `scheduled_payment`, `principal`, `interest`) VALUES('".($i + 1)."', '$month_balance', '$scheduled_payment', '$month_principal', '$month_interest')");
	}

	array_shift($old_payment_calc_records); // removes the value of index[0] in the array

	$loan_amount = $month_balance - $month_principal; // Compute the new loan_amount in the last minute of statement

	$update = true;
}
$old_payment_calc_records = implode(',', $old_payment_calc_records); // convert the array into string as comma delimited, to be used in WHERE IN condition in query

mysqli_query($db, "DELETE FROM `loan-payment-calculator` WHERE id IN ($old_payment_calc_records)");
//end of code for loan payment calculator

if($update == true){
	if($loan_amount != $old_loan_amount && $air != $old_interest_rate){
		$text = "Funding Update! Loan amount is changed from $old_loan_amount to $loan_amount and Annual Interest Rate is changed from $old_interest_rate to $air";
		mysqli_query($db, "INSERT INTO `history`(`id`, `text`, `status`, `time`, `date`) VALUES(NULL, '$text', 'unread', '$time', '$date')");
	} else if($loan_amount == $old_loan_amount && $air != $old_interest_rate){
		$text = "Funding Update!  Annual Interest Rate is changed from $old_interest_rate to $air";
		mysqli_query($db, "INSERT INTO `history`(`id`, `text`, `status`, `time`, `date`) VALUES(NULL, '$text', 'unread', '$time', '$date')");
	} else if($loan_amount != $old_loan_amount && $air == $old_interest_rate){
		$text = "Funding Update! Loan amount is changed from $old_loan_amount to $loan_amount";
		mysqli_query($db, "INSERT INTO `history`(`id`, `text`, `status`, `time`, `date`) VALUES(NULL, '$text', 'unread', '$time', '$date')");
	} else {
		$text = "";
	}

	if($update == true){

		$_SESSION['action'] = 'modelinputs';
		//year1
		$total = mysqli_query($db, "SELECT SUM(interest) AS total_sum FROM `loan-payment-calculator` WHERE month IN (1,2,3,4,5,6,7,8,9,10,11,12)");
		$totalrow = mysqli_fetch_assoc($total);
		$totalval = $totalrow['total_sum'];
		//year2
		$total2 = mysqli_query($db, "SELECT SUM(interest) AS total_sum FROM `loan-payment-calculator` WHERE month IN (13,14,15,16,17,18,19,20,21,22,23,24)");
		$totalrow2 = mysqli_fetch_assoc($total2);
		$totalval2 = $totalrow2['total_sum'];
		//year3
		$total3 = mysqli_query($db, "SELECT SUM(interest) AS total_sum FROM `loan-payment-calculator` WHERE month IN (25,26,27,28,29,30,31,32,33,34,35,36)");
		$totalrow3 = mysqli_fetch_assoc($total3);
		$totalval3 = $totalrow3['total_sum'];
		//year4
		$total4 = mysqli_query($db, "SELECT SUM(interest) AS total_sum FROM `loan-payment-calculator` WHERE month IN (37,38,39,40,41,42,43,44,45,46,47,48)");
		$totalrow4 = mysqli_fetch_assoc($total4);
		$totalval4 = $totalrow4['total_sum'];
		//year5
		$total5 = mysqli_query($db, "SELECT SUM(interest) AS total_sum FROM `loan-payment-calculator` WHERE month IN (49,50,51,52,53,54,55,56,57,58,59,60)");
		$totalrow5 = mysqli_fetch_assoc($total5);
		$totalval5 = $totalrow5['total_sum'];
		$totalquery = mysqli_query($db, "UPDATE operating_expenses SET year1 = '$totalval', year2 = '$totalval2', year3 = '$totalval3', year4 = '$totalval4', year5 = '$totalval5' WHERE id = '9'");
	?>

		<script>
			alert("Data Updated Successfully");
			window.location = "../cash-flow.php";
		</script>
	<?php

	} else {
		?>
		<script>
			alert("Update Failed");
			window.location = "../cash-flow.php";
		</script>
		<?php

	}
} else {
	?>
	<script>
			alert("Data Update Failed");
			window.location = "../model-inputs.php";
		</script>
	<?php

}

?>
