<?php
include '../../connection/dbConfig.php'; 
//this code is for funding
$loan_amount = $_POST['loan_amount'];
$air = $_POST['anual_interest_rate'];
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
$round_payment = round($payment, 2);
$total_amount_payable = $payment * 60;
//end of code for funding
//this code is for loan payment calculator
//month1
$scheduled_payment =$round_payment ;
$month1balance = $loan_amount;
$month1interest = $month1balance * $mratedeci;
$month1principal = $scheduled_payment - $month1interest;

//month2
$month2balance = $month1balance - $month1principal;
$month2interest = $month2balance * $mratedeci;
$month2principal = $scheduled_payment - $month2interest;

//month3
$month3balance = $month2balance - $month2principal;
$month3interest = $month3balance * $mratedeci;
$month3principal = $scheduled_payment - $month3interest;
//month4
$month4balance = $month3balance - $month3principal;
$month4interest = $month4balance * $mratedeci;
$month4principal = $scheduled_payment - $month4interest;
//month5
$month5balance = $month4balance - $month4principal;
$month5interest = $month5balance * $mratedeci;
$month5principal = $scheduled_payment - $month5interest;
//month6
$month6balance = $month5balance - $month5principal;
$month6interest = $month6balance * $mratedeci;
$month6principal = $scheduled_payment - $month6interest;
//month7
$month7balance = $month6balance - $month6principal;
$month7interest = $month7balance * $mratedeci;
$month7principal = $scheduled_payment - $month7interest;
//month8
$month8balance = $month7balance - $month7principal;
$month8interest = $month8balance * $mratedeci;
$month8principal = $scheduled_payment - $month8interest;
//month9
$month9balance = $month8balance - $month8principal;
$month9interest = $month9balance * $mratedeci;
$month9principal = $scheduled_payment - $month9interest;
//month10
$month10balance = $month9balance - $month9principal;
$month10interest = $month10balance * $mratedeci;
$month10principal = $scheduled_payment - $month10interest;
//month11
$month11balance = $month10balance - $month10principal;
$month11interest = $month11balance * $mratedeci;
$month11principal = $scheduled_payment - $month11interest;
//month12
$month12balance = $month11balance - $month11principal;
$month12interest = $month12balance * $mratedeci;
$roundmonth12interest = round($month12interest, 2);
$month12principal = $scheduled_payment - $month12interest;
//month13
$month13balance = $month12balance - $month12principal;
$month13interest = $month13balance * $mratedeci;
$month13principal = $scheduled_payment - $month13interest;
//month14
$month14balance = $month13balance - $month13principal;
$month14interest = $month14balance * $mratedeci;
$month14principal = $scheduled_payment - $month14interest;
//month15
$month15balance = $month14balance - $month14principal;
$month15interest = $month15balance * $mratedeci;
$month15principal = $scheduled_payment - $month15interest;
//month16
$month16balance = $month15balance - $month15principal;
$month16interest = $month16balance * $mratedeci;
$month16principal = $scheduled_payment - $month16interest;
//month17
$month17balance = $month16balance - $month16principal;
$month17interest = $month17balance * $mratedeci;
$month17principal = $scheduled_payment - $month17interest;
//month18
$month18balance = $month17balance - $month17principal;
$month18interest = $month18balance * $mratedeci;
$month18principal = $scheduled_payment - $month18interest;
//month19
$month19balance = $month18balance - $month18principal;
$month19interest = $month19balance * $mratedeci;
$month19principal = $scheduled_payment - $month19interest;

//month20
$month20balance = $month19balance - $month19principal;
$month20interest = $month20balance * $mratedeci;
$month20principal = $scheduled_payment - $month20interest;
//month21
$month21balance = $month20balance - $month20principal;
$month21interest = $month21balance * $mratedeci;
$month21principal = $scheduled_payment - $month21interest;
//month22
$month22balance = $month21balance - $month21principal;
$month22interest = $month22balance * $mratedeci;
$month22principal = $scheduled_payment - $month22interest;
//month23
$month23balance = $month22balance - $month22principal;
$month23interest = $month23balance * $mratedeci;
$month23principal = $scheduled_payment - $month23interest;
//month24
$month24balance = $month23balance - $month23principal;
$month24interest = $month24balance * $mratedeci;
$month24principal = $scheduled_payment - $month24interest;
//month25
$month25balance = $month24balance - $month24principal;
$month25interest = $month25balance * $mratedeci;
$month25principal = $scheduled_payment - $month25interest;
//month26
$month26balance = $month25balance - $month25principal;
$month26interest = $month26balance * $mratedeci;
$month26principal = $scheduled_payment - $month26interest;
//month27
$month27balance = $month26balance - $month26principal;
$month27interest = $month27balance * $mratedeci;
$month27principal = $scheduled_payment - $month27interest;
//month28
$month28balance = $month27balance - $month27principal;
$month28interest = $month28balance * $mratedeci;
$month28principal = $scheduled_payment - $month28interest;
//month29
$month29balance = $month28balance - $month28principal;
$month29interest = $month29balance * $mratedeci;
$month29principal = $scheduled_payment - $month29interest;
//month30
$month30balance = $month29balance - $month29principal;
$month30interest = $month30balance * $mratedeci;
$month30principal = $scheduled_payment - $month30interest;
//month31
$month31balance = $month30balance - $month30principal;
$month31interest = $month31balance * $mratedeci;
$month31principal = $scheduled_payment - $month31interest;
//month32
$month32balance = $month31balance - $month31principal;
$month32interest = $month32balance * $mratedeci;
$month32principal = $scheduled_payment - $month32interest;
//month33
$month33balance = $month32balance - $month32principal;
$month33interest = $month33balance * $mratedeci;
$month33principal = $scheduled_payment - $month33interest;
//month34
$month34balance = $month33balance - $month33principal;
$month34interest = $month34balance * $mratedeci;
$month34principal = $scheduled_payment - $month34interest;
//month35
$month35balance = $month34balance - $month34principal;
$month35interest = $month35balance * $mratedeci;
$month35principal = $scheduled_payment - $month35interest;
//month36
$month36balance = $month35balance - $month35principal;
$month36interest = $month36balance * $mratedeci;
$month36principal = $scheduled_payment - $month36interest;
//month37
$month37balance = $month36balance - $month36principal;
$month37interest = $month37balance * $mratedeci;
$month37principal = $scheduled_payment - $month37interest;

//month38
$month38balance = $month37balance - $month37principal;
$month38interest = $month38balance * $mratedeci;
$month38principal = $scheduled_payment - $month38interest;

//month39
$month39balance = $month38balance - $month38principal;
$month39interest = $month39balance * $mratedeci;
$month39principal = $scheduled_payment - $month39interest;
//month40
$month40balance = $month39balance - $month39principal;
$month40interest = $month40balance * $mratedeci;
$month40principal = $scheduled_payment - $month40interest;
//month41
$month41balance = $month40balance - $month40principal;
$month41interest = $month41balance * $mratedeci;
$month41principal = $scheduled_payment - $month41interest;
//month42
$month42balance = $month41balance - $month41principal;
$month42interest = $month42balance * $mratedeci;
$month42principal = $scheduled_payment - $month42interest;
//month43
$month43balance = $month42balance - $month42principal;
$month43interest = $month43balance * $mratedeci;
$month43principal = $scheduled_payment - $month43interest;
//month44
$month44balance = $month43balance - $month43principal;
$month44interest = $month44balance * $mratedeci;
$month44principal = $scheduled_payment - $month44interest;
//month45
$month45balance = $month44balance - $month44principal;
$month45interest = $month45balance * $mratedeci;
$month45principal = $scheduled_payment - $month45interest;
//month46
$month46balance = $month45balance - $month45principal;
$month46interest = $month46balance * $mratedeci;
$month46principal = $scheduled_payment - $month46interest;
//month47
$month47balance = $month46balance - $month46principal;
$month47interest = $month47balance * $mratedeci;
$month47principal = $scheduled_payment - $month47interest;
//month48
$month48balance = $month47balance - $month47principal;
$month48interest = $month48balance * $mratedeci;
$month48principal = $scheduled_payment - $month48interest;
//month49
$month49balance = $month48balance - $month48principal;
$month49interest = $month49balance * $mratedeci;
$month49principal = $scheduled_payment - $month49interest;

//month50
$month50balance = $month49balance - $month49principal;
$month50interest = $month50balance * $mratedeci;
$month50principal = $scheduled_payment - $month50interest;
//month51
$month51balance = $month50balance - $month50principal;
$month51interest = $month51balance * $mratedeci;
$month51principal = $scheduled_payment - $month51interest;
//month52
$month52balance = $month51balance - $month51principal;
$month52interest = $month52balance * $mratedeci;
$month52principal = $scheduled_payment - $month52interest;
//month53
$month53balance = $month52balance - $month52principal;
$month53interest = $month53balance * $mratedeci;
$month53principal = $scheduled_payment - $month53interest;
//month54
$month54balance = $month53balance - $month53principal;
$month54interest = $month54balance * $mratedeci;
$month54principal = $scheduled_payment - $month54interest;
//month55
$month55balance = $month54balance - $month54principal;
$month55interest = $month55balance * $mratedeci;
$month55principal = $scheduled_payment - $month55interest;
//month56
$month56balance = $month55balance - $month55principal;
$month56interest = $month56balance * $mratedeci;
$month56principal = $scheduled_payment - $month56interest;
//month57
$month57balance = $month56balance - $month56principal;
$month57interest = $month57balance * $mratedeci;
$month57principal = $scheduled_payment - $month57interest;
//month58
$month58balance = $month57balance - $month57principal;
$month58interest = $month58balance * $mratedeci;
$month58principal = $scheduled_payment - $month58interest;
//month59
$month59balance = $month58balance - $month58principal;
$month59interest = $month59balance * $mratedeci;
$month59principal = $scheduled_payment - $month59interest;
//month60
$month60balance = $month59balance - $month59principal;
$month60interest = $month60balance * $mratedeci;
$month60principal = $scheduled_payment - $month60interest;


//end of code for loan payment calculator

$update = mysqli_query($db, "UPDATE funding SET loan_amount = '$loan_amount', anual_interest_rate = '$air', monthly_rate = '$monthly_rate', payment = '$payment', total_amount_payable = '$total_amount_payable'");
if($update == true){
	$m1 = mysqli_query($db, "UPDATE `loan-payment-calculator` SET balance = '$month1balance', scheduled_payment = '$payment', principal = '$month1principal', interest = '$month1interest' WHERE month = '1'");
	$m2 = mysqli_query($db, "UPDATE `loan-payment-calculator` SET balance = '$month2balance', scheduled_payment = '$payment', principal = '$month2principal', interest = '$month2interest' WHERE month = '2'");
	$m3 = mysqli_query($db, "UPDATE `loan-payment-calculator` SET balance = '$month3balance', scheduled_payment = '$payment', principal = '$month3principal', interest = '$month3interest' WHERE month = '3'");
	$m4 = mysqli_query($db, "UPDATE `loan-payment-calculator` SET balance = '$month4balance', scheduled_payment = '$payment', principal = '$month4principal', interest = '$month4interest' WHERE month = '4'");
	$m5 = mysqli_query($db, "UPDATE `loan-payment-calculator` SET balance = '$month5balance', scheduled_payment = '$payment', principal = '$month5principal', interest = '$month5interest' WHERE month = '5'");
	$m6 = mysqli_query($db, "UPDATE `loan-payment-calculator` SET balance = '$month6balance', scheduled_payment = '$payment', principal = '$month6principal', interest = '$month6interest' WHERE month = '6'");
	$m7 = mysqli_query($db, "UPDATE `loan-payment-calculator` SET balance = '$month7balance', scheduled_payment = '$payment', principal = '$month7principal', interest = '$month7interest' WHERE month = '7'");
	$m8 = mysqli_query($db, "UPDATE `loan-payment-calculator` SET balance = '$month8balance', scheduled_payment = '$payment', principal = '$month8principal', interest = '$month8interest' WHERE month = '8'");
	$m9 = mysqli_query($db, "UPDATE `loan-payment-calculator` SET balance = '$month9balance', scheduled_payment = '$payment', principal = '$month9principal', interest = '$month9interest' WHERE month = '9'");
	$m10 = mysqli_query($db, "UPDATE `loan-payment-calculator` SET balance = '$month10balance', scheduled_payment = '$payment', principal = '$month10principal', interest = '$month10interest' WHERE month = '10'");
	$m11 = mysqli_query($db, "UPDATE `loan-payment-calculator` SET balance = '$month11balance', scheduled_payment = '$payment', principal = '$month11principal', interest = '$month11interest' WHERE month = '11'");
	$m12 = mysqli_query($db, "UPDATE `loan-payment-calculator` SET balance = '$month12balance', scheduled_payment = '$payment', principal = '$month12principal', interest = '$month12interest' WHERE month = '12'");
	$m13 = mysqli_query($db, "UPDATE `loan-payment-calculator` SET balance = '$month13balance', scheduled_payment = '$payment', principal = '$month13principal', interest = '$month13interest' WHERE month = '13'");
	$m14 = mysqli_query($db, "UPDATE `loan-payment-calculator` SET balance = '$month14balance', scheduled_payment = '$payment', principal = '$month14principal', interest = '$month14interest' WHERE month = '14'");
	$m15 = mysqli_query($db, "UPDATE `loan-payment-calculator` SET balance = '$month15balance', scheduled_payment = '$payment', principal = '$month15principal', interest = '$month15interest' WHERE month = '15'");
	$m16 = mysqli_query($db, "UPDATE `loan-payment-calculator` SET balance = '$month16balance', scheduled_payment = '$payment', principal = '$month16principal', interest = '$month16interest' WHERE month = '16'");
	$m17 = mysqli_query($db, "UPDATE `loan-payment-calculator` SET balance = '$month17balance', scheduled_payment = '$payment', principal = '$month17principal', interest = '$month17interest' WHERE month = '17'");
	$m18 = mysqli_query($db, "UPDATE `loan-payment-calculator` SET balance = '$month18balance', scheduled_payment = '$payment', principal = '$month18principal', interest = '$month18interest' WHERE month = '18'");
	$m19 = mysqli_query($db, "UPDATE `loan-payment-calculator` SET balance = '$month19balance', scheduled_payment = '$payment', principal = '$month19principal', interest = '$month19interest' WHERE month = '19'");
	$m20 = mysqli_query($db, "UPDATE `loan-payment-calculator` SET balance = '$month20balance', scheduled_payment = '$payment', principal = '$month20principal', interest = '$month20interest' WHERE month = '20'");
	$m21 = mysqli_query($db, "UPDATE `loan-payment-calculator` SET balance = '$month21balance', scheduled_payment = '$payment', principal = '$month21principal', interest = '$month21interest' WHERE month = '21'");
	$m22 = mysqli_query($db, "UPDATE `loan-payment-calculator` SET balance = '$month22balance', scheduled_payment = '$payment', principal = '$month22principal', interest = '$month22interest' WHERE month = '22'");
	$m23 = mysqli_query($db, "UPDATE `loan-payment-calculator` SET balance = '$month23balance', scheduled_payment = '$payment', principal = '$month23principal', interest = '$month23interest' WHERE month = '23'");
	$m24 = mysqli_query($db, "UPDATE `loan-payment-calculator` SET balance = '$month24balance', scheduled_payment = '$payment', principal = '$month24principal', interest = '$month24interest' WHERE month = '24'");
	$m25 = mysqli_query($db, "UPDATE `loan-payment-calculator` SET balance = '$month25balance', scheduled_payment = '$payment', principal = '$month25principal', interest = '$month25interest' WHERE month = '25'");
	$m26 = mysqli_query($db, "UPDATE `loan-payment-calculator` SET balance = '$month26balance', scheduled_payment = '$payment', principal = '$month26principal', interest = '$month26interest' WHERE month = '26'");
	$m27 = mysqli_query($db, "UPDATE `loan-payment-calculator` SET balance = '$month27balance', scheduled_payment = '$payment', principal = '$month27principal', interest = '$month27interest' WHERE month = '27'");
	$m28 = mysqli_query($db, "UPDATE `loan-payment-calculator` SET balance = '$month28balance', scheduled_payment = '$payment', principal = '$month28principal', interest = '$month28interest' WHERE month = '28'");
	$m29 = mysqli_query($db, "UPDATE `loan-payment-calculator` SET balance = '$month29balance', scheduled_payment = '$payment', principal = '$month29principal', interest = '$month29interest' WHERE month = '29'");
	$m30 = mysqli_query($db, "UPDATE `loan-payment-calculator` SET balance = '$month30balance', scheduled_payment = '$payment', principal = '$month30principal', interest = '$month30interest' WHERE month = '30'");
	$m31 = mysqli_query($db, "UPDATE `loan-payment-calculator` SET balance = '$month31balance', scheduled_payment = '$payment', principal = '$month31principal', interest = '$month31interest' WHERE month = '31'");
	$m32 = mysqli_query($db, "UPDATE `loan-payment-calculator` SET balance = '$month32balance', scheduled_payment = '$payment', principal = '$month32principal', interest = '$month32interest' WHERE month = '32'");
	$m33 = mysqli_query($db, "UPDATE `loan-payment-calculator` SET balance = '$month33balance', scheduled_payment = '$payment', principal = '$month33principal', interest = '$month33interest' WHERE month = '33'");
	$m34 = mysqli_query($db, "UPDATE `loan-payment-calculator` SET balance = '$month34balance', scheduled_payment = '$payment', principal = '$month34principal', interest = '$month34interest' WHERE month = '34'");
	$m45 = mysqli_query($db, "UPDATE `loan-payment-calculator` SET balance = '$month35balance', scheduled_payment = '$payment', principal = '$month35principal', interest = '$month35interest' WHERE month = '35'");
	$m36 = mysqli_query($db, "UPDATE `loan-payment-calculator` SET balance = '$month36balance', scheduled_payment = '$payment', principal = '$month36principal', interest = '$month36interest' WHERE month = '36'");
	$m37 = mysqli_query($db, "UPDATE `loan-payment-calculator` SET balance = '$month37balance', scheduled_payment = '$payment', principal = '$month37principal', interest = '$month37interest' WHERE month = '37'");
	$m38 = mysqli_query($db, "UPDATE `loan-payment-calculator` SET balance = '$month38balance', scheduled_payment = '$payment', principal = '$month38principal', interest = '$month38interest' WHERE month = '38'");
	$m39 = mysqli_query($db, "UPDATE `loan-payment-calculator` SET balance = '$month39balance', scheduled_payment = '$payment', principal = '$month39principal', interest = '$month39interest' WHERE month = '39'");
	$m40 = mysqli_query($db, "UPDATE `loan-payment-calculator` SET balance = '$month40balance', scheduled_payment = '$payment', principal = '$month40principal', interest = '$month40interest' WHERE month = '40'");
	$m41 = mysqli_query($db, "UPDATE `loan-payment-calculator` SET balance = '$month41balance', scheduled_payment = '$payment', principal = '$month41principal', interest = '$month41interest' WHERE month = '41'");
	$m42 = mysqli_query($db, "UPDATE `loan-payment-calculator` SET balance = '$month42balance', scheduled_payment = '$payment', principal = '$month42principal', interest = '$month42interest' WHERE month = '42'");
	$m43 = mysqli_query($db, "UPDATE `loan-payment-calculator` SET balance = '$month43balance', scheduled_payment = '$payment', principal = '$month43principal', interest = '$month43interest' WHERE month = '43'");
	$m44 = mysqli_query($db, "UPDATE `loan-payment-calculator` SET balance = '$month44balance', scheduled_payment = '$payment', principal = '$month44principal', interest = '$month44interest' WHERE month = '44'");
	$m45 = mysqli_query($db, "UPDATE `loan-payment-calculator` SET balance = '$month45balance', scheduled_payment = '$payment', principal = '$month45principal', interest = '$month45interest' WHERE month = '45'");
	$m46 = mysqli_query($db, "UPDATE `loan-payment-calculator` SET balance = '$month46balance', scheduled_payment = '$payment', principal = '$month46principal', interest = '$month46interest' WHERE month = '46'");
	$m47 = mysqli_query($db, "UPDATE `loan-payment-calculator` SET balance = '$month47balance', scheduled_payment = '$payment', principal = '$month47principal', interest = '$month47interest' WHERE month = '47'");
	$m48 = mysqli_query($db, "UPDATE `loan-payment-calculator` SET balance = '$month48balance', scheduled_payment = '$payment', principal = '$month48principal', interest = '$month48interest' WHERE month = '48'");
	$m49 = mysqli_query($db, "UPDATE `loan-payment-calculator` SET balance = '$month49balance', scheduled_payment = '$payment', principal = '$month49principal', interest = '$month49interest' WHERE month = '49'");
	$m50 = mysqli_query($db, "UPDATE `loan-payment-calculator` SET balance = '$month50balance', scheduled_payment = '$payment', principal = '$month50principal', interest = '$month50interest' WHERE month = '50'");
	$m51 = mysqli_query($db, "UPDATE `loan-payment-calculator` SET balance = '$month51balance', scheduled_payment = '$payment', principal = '$month51principal', interest = '$month51interest' WHERE month = '51'");
	$m52 = mysqli_query($db, "UPDATE `loan-payment-calculator` SET balance = '$month52balance', scheduled_payment = '$payment', principal = '$month52principal', interest = '$month52interest' WHERE month = '52'");
	$m53 = mysqli_query($db, "UPDATE `loan-payment-calculator` SET balance = '$month53balance', scheduled_payment = '$payment', principal = '$month53principal', interest = '$month53interest' WHERE month = '53'");
	$m54 = mysqli_query($db, "UPDATE `loan-payment-calculator` SET balance = '$month54balance', scheduled_payment = '$payment', principal = '$month54principal', interest = '$month54interest' WHERE month = '54'");
	$m55 = mysqli_query($db, "UPDATE `loan-payment-calculator` SET balance = '$month55balance', scheduled_payment = '$payment', principal = '$month55principal', interest = '$month55interest' WHERE month = '55'");
	$m56 = mysqli_query($db, "UPDATE `loan-payment-calculator` SET balance = '$month56balance', scheduled_payment = '$payment', principal = '$month56principal', interest = '$month56interest' WHERE month = '56'");
	$m57 = mysqli_query($db, "UPDATE `loan-payment-calculator` SET balance = '$month57balance', scheduled_payment = '$payment', principal = '$month57principal', interest = '$month57interest' WHERE month = '57'");
	$m58 = mysqli_query($db, "UPDATE `loan-payment-calculator` SET balance = '$month58balance', scheduled_payment = '$payment', principal = '$month58principal', interest = '$month58interest' WHERE month = '58'");
	$m59 = mysqli_query($db, "UPDATE `loan-payment-calculator` SET balance = '$month59balance', scheduled_payment = '$payment', principal = '$month59principal', interest = '$month59interest' WHERE month = '59'");
	$m60 = mysqli_query($db, "UPDATE `loan-payment-calculator` SET balance = '$month60balance', scheduled_payment = '$payment', principal = '$month60principal', interest = '$month60interest' WHERE month = '60'");
	
	if($m1 && $m2 && $m3 == true){
		//year1
		$total = mysqli_query($db, "SELECT SUM(interest) AS total_sum FROM `loan-payment-calculator` WHERE id IN (1,2,3,4,5,6,7,8,9,10,11,12)");
		$totalrow = mysqli_fetch_assoc($total);
		$totalval = $totalrow['total_sum'];
		//year2
		$total2 = mysqli_query($db, "SELECT SUM(interest) AS total_sum FROM `loan-payment-calculator` WHERE id IN (13,14,15,16,17,18,19,20,21,22,23,24)");
		$totalrow2 = mysqli_fetch_assoc($total2);
		$totalval2 = $totalrow2['total_sum'];
		//year3
		$total3 = mysqli_query($db, "SELECT SUM(interest) AS total_sum FROM `loan-payment-calculator` WHERE id IN (25,26,27,28,29,30,31,32,33,34,35,36)");
		$totalrow3 = mysqli_fetch_assoc($total3);
		$totalval3 = $totalrow3['total_sum'];
		//year4
		$total4 = mysqli_query($db, "SELECT SUM(interest) AS total_sum FROM `loan-payment-calculator` WHERE id IN (37,38,39,40,41,42,43,44,45,46,47,48)");
		$totalrow4 = mysqli_fetch_assoc($total4);
		$totalval4 = $totalrow4['total_sum'];
		//year5
		$total5 = mysqli_query($db, "SELECT SUM(interest) AS total_sum FROM `loan-payment-calculator` WHERE id IN (49,50,51,52,53,54,55,56,57,58,59,60)");
		$totalrow5 = mysqli_fetch_assoc($total5);
		$totalval5 = $totalrow5['total_sum'];
		$totalquery = mysqli_query($db, "UPDATE operating_expenses SET year1 = '$totalval', year2 = '$totalval2', year3 = '$totalval3', year4 = '$totalval4', year5 = '$totalval5' WHERE id = '9'");
	?>
	
		<script>
			alert("Data Updated Successfully");
			//window.location = "../model-inputs.php";
		</script>
	<?php
	
	} else {
		?>
		<script>
			alert("Update Failed");
			//window.location = "../model-inputs.php";
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
