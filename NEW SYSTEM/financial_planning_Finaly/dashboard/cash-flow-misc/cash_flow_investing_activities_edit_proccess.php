<?php
include '../../connection/dbConfig.php';
$acqyear1 = $_POST['acqyear1'];
$acqyear2 = $_POST['acqyear2'];
$acqyear3 = $_POST['acqyear3'];
$acqyear4 = $_POST['acqyear4'];
$acqyear5 = $_POST['acqyear5'];

$otherinvestyear1 = $_POST['otherinvestyear1'];
$otherinvestyear2 = $_POST['otherinvestyear2'];
$otherinvestyear3 = $_POST['otherinvestyear3'];
$otherinvestyear4 = $_POST['otherinvestyear4'];
$otherinvestyear5 = $_POST['otherinvestyear5'];

$sql1 = mysqli_query($db, "UPDATE cash_flow_investing_activities SET year1 = '$acqyear1', year2 = '$acqyear2', year3 = '$acqyear3', year4 = '$acqyear4', year5 = '$acqyear5' WHERE id = '1'");
$sql2 = mysqli_query($db, "UPDATE cash_flow_investing_activities SET year1 = '$otherinvestyear1', year2 = '$otherinvestyear2', year3 = '$otherinvestyear3', year4 = '$otherinvestyear4', year5 = '$otherinvestyear5' WHERE id = '3'");
if($sql1 == true && $sql2 == true){
	?>
		<script>
			alert("Success");
			window.location = '../cash-flow.php';
		</script>
	<?php
} else {
	?>
		<script>
			alert("Failed");
			window.location = '../cash-flow.php';
		</script>
	<?php
}
?>