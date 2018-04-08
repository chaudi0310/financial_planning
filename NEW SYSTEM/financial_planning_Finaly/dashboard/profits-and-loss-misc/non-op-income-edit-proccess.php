<?php
include '../../connection/dbConfig.php';

$rental1 = $_POST['rental1'];
$rental2 = $_POST['rental2'];
$rental3 = $_POST['rental3'];
$rental4 = $_POST['rental4'];
$rental5 = $_POST['rental5'];

$ii1 = $_POST['ii1'];
$ii2 = $_POST['ii2'];
$ii3 = $_POST['ii3'];
$ii4 = $_POST['ii4'];
$ii5 = $_POST['ii5'];

$sos1 = $_POST['sos1'];
$sos2 = $_POST['sos2'];
$sos3 = $_POST['sos3'];
$sos4 = $_POST['sos4'];
$sos5 = $_POST['sos5'];

$oi1 = $_POST['oi1'];
$oi2 = $_POST['oi2'];
$oi3 = $_POST['oi3'];
$oi4 = $_POST['oi4'];
$oi5 = $_POST['oi5'];

$updaterental = mysqli_query($db, "UPDATE rental SET year1 = '$rental1', year2 = '$rental2', year3 = '$rental3', year4 = '$rental4', year5 = '$rental5' WHERE id = '1'");
$updateii = mysqli_query($db, "UPDATE interest_income SET year1 = '$ii1', year2 = '$ii2', year3 = '$ii3', year4 = '$ii4', year5 = '$ii5' WHERE id = '1'");
$updatesos = mysqli_query($db, "UPDATE loss_on_sales_assets SET year1 = '$sos1', year2 = '$sos2', year3 = '$sos3', year4 = '$sos4', year5 = '$sos5' WHERE id = '1'");
$updateoi = mysqli_query($db, "UPDATE other_income SET year1 = '$oi1', year2 = '$oi2', year3 = '$oi3', year4 = '$oi4', year5 = '$oi5' WHERE id = '1'");
if($updaterental == true && $updateii == true && $updatesos == true && $updateoi == true){
	?>
		<script>
			alert("Updated");
			window.location = '../profits-and-loss.php';
		</script>
	<?php
} else {
		?>
		<script>
			alert("Failed");
			//window.location = '../profits-and-loss.php';
		</script>
		<?php
}

?>