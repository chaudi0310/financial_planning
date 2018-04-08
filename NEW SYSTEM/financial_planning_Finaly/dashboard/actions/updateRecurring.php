<?php
	include '../../connection/dbConfig.php';
	if($_POST['id'] == 1){
	$id = $_POST['id'];
	$year1 = $_POST['uey1'];
	$year2 = $_POST['uey2'];
	$year3 = $_POST['uey3'];
	$year4 = $_POST['uey4'];
	$year5 = $_POST['uey5'];
	$update = mysqli_query($db,"UPDATE recurring_expenses SET year1 = '$year1', year2 = '$year2', year3 = '$year3', year4 = '$year4', year5 = '$year5' WHERE id = '1'");
	}
	if($update == true){
		
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
			
			$otherexpensey3 = mysqli_query($db, "SELECT SUM(year2) as total_sum3 FROM other_expenses");
			$gety3 = mysqli_fetch_assoc($otherexpensey3);
			$oe3 = $gety3['total_sum3'];
			
			$otherexpensey24 = mysqli_query($db, "SELECT SUM(year2) as total_sum4 FROM other_expenses");
			$gety4 = mysqli_fetch_assoc($otherexpensey24);
			$oe4 = $gety4['total_sum4'];
			
			$otherexpensey5 = mysqli_query($db, "SELECT SUM(year2) as total_sum5 FROM other_expenses");
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
				window.location = "../profits-and-loss.php";
			</script>
		<?php
	} else {
		?>
			<script>
				alert("failed");
			</script>
		<?php
	}
?>