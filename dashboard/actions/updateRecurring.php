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
	} else {
	$id = $_POST['id'];
	$year1 = $_POST['oey1'];
	$year2 = $_POST['oey2'];
	$year3 = $_POST['oey3'];
	$year4 = $_POST['oey4'];
	$year5 = $_POST['oey5'];
	$update = mysqli_query($db,"UPDATE recurring_expenses SET year1 = '$year1', year2 = '$year2', year3 = '$year3', year4 = '$year4', year5 = '$year5' WHERE id = '2'");
	}
	if($update == true){
		
			$y1 = mysqli_query($db, "SELECT SUM(year1) AS total_sum FROM recurring_expenses");
			$totalrow = mysqli_fetch_assoc($y1);
			$totalval1 = $totalrow['total_sum'];
			$y2 = mysqli_query($db, "SELECT SUM(year2) AS total_sum FROM recurring_expenses");
			$totalrow = mysqli_fetch_assoc($y2);
			$totalval2 = $totalrow['total_sum'];
			$y3 = mysqli_query($db, "SELECT SUM(year3) AS total_sum FROM recurring_expenses");
			$totalrow = mysqli_fetch_assoc($y3);
			$totalval3 = $totalrow['total_sum'];
			$y4 = mysqli_query($db, "SELECT SUM(year4) AS total_sum FROM recurring_expenses");
			$totalrow = mysqli_fetch_assoc($y4);
			$totalval4 = $totalrow['total_sum'];
			$y5 = mysqli_query($db, "SELECT SUM(year5) AS total_sum FROM recurring_expenses");
			$totalrow = mysqli_fetch_assoc($y5);
			$totalval5 = $totalrow['total_sum'];
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