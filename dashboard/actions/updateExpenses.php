<?php
include '../../connection/dbConfig.php';
$id = $_POST['id'];
if(isset($_POST['sm'])){
	$value = $_POST['sm'];
} else if(isset($_POST['ins'])){
	$value = $_POST['ins'];
} else if(isset($_POST['pt'])){
	$value = $_POST['pt'];
} else if(isset($_POST['prop'])){
	$value = $_POST['prop'];
} else if(isset($_POST['ut'])){
	$value = $_POST['ut'];
} else if(isset($_POST['ad'])){
	$value = $_POST['ad'];
} else if(isset($_POST['oth'])){
	$value = $_POST['oth'];
}
$tools = mysqli_query($db, "SELECT * FROM profits_loss_expense_increase WHERE id = '1'");
$ctools = mysqli_num_rows($tools);
$row = mysqli_fetch_assoc($tools);
$year1 = 1 + ($row['year1']/100);
$year2 = 1 + ($row['year2']/100);
$year3 = 1 + ($row['year3']/100);
$year4 = 1 + ($row['year4']/100);
$year5 = 1 + ($row['year5']/100);
//above code is use for formula

//let's start
$value1 = $value;
$value2 = $value1 * $year2;
$value3 = $value2 * $year3;
$value4 = $value3 * $year4;
$value5 = $value4 * $year5;
$update = mysqli_query($db, "UPDATE operating_expenses SET year1 = '$value1', year2 = '$value2', year3 = '$value3', year4 = '$value4', year5 = '$value5' WHERE id = '$id'");
	if($update == true){
		?>
		<script>
			alert("Success");
			window.location = "../profits-and-loss.php";
		</script>
		<?php
	} else {
		?>
		<script>
			alert("Failed");
			window.location = "../profits-and-loss.php";
		</script>
		<?php
	}

?>