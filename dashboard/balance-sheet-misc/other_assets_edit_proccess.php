<?php
include '../../connection/dbConfig.php';
$goodwill = $_POST['goodwill'];
$longterm_investments = $_POST['longterm_investments'];
$deposits = $_POST['deposits'];
$longterm_assets = $_POST['longterm_assets'];
$updategoodwill = mysqli_query($db, "UPDATE other_assets SET year1 = '$goodwill', year2 = '$goodwill', year3 = '$goodwill', year4 = '$goodwill', year5 = '$goodwill' WHERE id = '1'");
$updatelongtermi = mysqli_query($db, "UPDATE other_assets SET year1 = '$longterm_investments', year2 = '$longterm_investments', year3 = '$longterm_investments', year4 = '$longterm_investments', year5 = '$longterm_investments' WHERE id = '2'");
$updatedeposits = mysqli_query($db, "UPDATE other_assets SET year1 = '$deposits', year2 = '$deposits', year3 = '$deposits', year4 = '$deposits', year5 = '$deposits' WHERE id = '3'");
$updatelongterma = mysqli_query($db, "UPDATE other_assets SET year1 = '$longterm_assets', year2 = '$longterm_assets', year3 = '$longterm_assets', year4 = '$longterm_assets', year5 = '$longterm_assets' WHERE id = '4'");
if($updategoodwill == true && $updatelongtermi == true && $updatedeposits == true && $updatelongterma == true){
	?>
		<script>
			alert("Success");
			window.location = '../balance-sheet.php';
		</script>
	<?php
} else {
	?>
		<script>
			alert("Failed");
			window.location = '../balance-sheet.php';
		</script>
	<?php
}
?>