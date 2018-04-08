<?php
include '../../connection/dbConfig.php';
$expense = $_POST['expense'];
$y1 = $_POST['y1'];
$y2 = $_POST['y2'];
$y3 = $_POST['y3'];
$y4 = $_POST['y4'];
$y5 = $_POST['y5'];
$sql = mysqli_query($db, "INSERT INTO other_expenses(id, target, year1, year2, year3, year4, year5) VALUES(NULL, '$expense', '$y1', '$y2', '$y3', '$y4', '$y5')");
if($sql == true){
	//get unexpected expense
	$unexpected = mysqli_query($db, "SELECT * FROM recurring_expenses WHERE id = '1'");
	$fetchun = mysqli_fetch_assoc($unexpected);
	$year1 = $fetchun['year1'];
	$year2  = $fetchun['year2'];
	$year3  = $fetchun['year3'];
	$year4  = $fetchun['year4'];
	$year5  = $fetchun['year5'];
	//get other expenses
	$result = mysqli_query($db, "SELECT COUNT(*) as total_num_exp from other_expenses");
			$fetchresult = mysqli_fetch_assoc($result);
			$countotherexpenses = $fetchresult['total_num_exp'];
			if($countotherexpenses > 0){
			$otherexpensey1 = mysqli_query($db, "SELECT SUM(year1) as total_sum1 FROM other_expenses");
			$gety1 = mysqli_fetch_assoc($otherexpensey1);
			$oe1 = $gety1['total_sum1'];
			
			$otherexpensey2 = mysqli_query($db, "SELECT SUM(year2) as total_sum2 FROM other_expenses");
			$gety2 = mysqli_fetch_assoc($otherexpensey2);
			$oe2 = $gety2['total_sum2'];
			
			$otherexpensey3 = mysqli_query($db, "SELECT SUM(year3) as total_sum3 FROM other_expenses");
			$gety3 = mysqli_fetch_assoc($otherexpensey3);
			$oe3 = $gety3['total_sum3'];
			
			$otherexpensey24 = mysqli_query($db, "SELECT SUM(year4) as total_sum4 FROM other_expenses");
			$gety4 = mysqli_fetch_assoc($otherexpensey24);
			$oe4 = $gety4['total_sum4'];
			
			$otherexpensey5 = mysqli_query($db, "SELECT SUM(year5) as total_sum5 FROM other_expenses");
			$gety5 = mysqli_fetch_assoc($otherexpensey5);
			$oe5 = $gety5['total_sum5'];
			
			} else {
				$oe1 = '0';
				$oe2 = '0';
				$oe3 = '0';
				$oe4 = '0';
				$oe5 = '0';
			}
			$totalval1 = $oe1 + $year1;
			$totalval2 = $oe2 + $year2;
			$totalval3 = $oe3 + $year3;
			$totalval4 = $oe4 + $year4;
			$totalval5 = $oe5 + $year5;
			mysqli_query($db, "UPDATE total_non_rec_ex SET y1 = '$totalval1', y2 = '$totalval2', y3 = '$totalval3', y4 = '$totalval4', y5 = '$totalval5' WHERE id = '1'");
	?>
		<script>
			alert("Success");
			window.location = '../profits-and-loss.php';
		</script>
	<?php
} else {
	?>
		<script>
			alert("Failed");
			window.location = '../profits-and-loss.php';
		</script>
	<?php
}
?>