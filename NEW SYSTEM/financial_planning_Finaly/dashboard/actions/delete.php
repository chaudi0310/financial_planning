<?php
include '../../connection/dbConfig.php';
$name = $_GET['name'];
$deleteproducts = mysqli_query($db,"DELETE FROM product WHERE name = '$name'");
if($deleteproducts == true){
	//totalcost
	$totalcost = mysqli_query($db, "SELECT SUM(anual_cost) AS total_cost FROM product");
	$totalrow = mysqli_fetch_assoc($totalcost);
	$totalcostcost = $totalrow['total_cost'];
	//total rev
	$total = mysqli_query($db, "SELECT SUM(anual_rev) AS total_sum FROM product");
	$totalrow = mysqli_fetch_assoc($total);
	$totalval = $totalrow['total_sum'];
	$totalquery = mysqli_query($db, "UPDATE model_inputs_totals SET total_fr = '$totalval', total_cog = '$totalcostcost'");
	$selectincomerev = mysqli_num_rows(mysqli_query($db, "SELECT * FROM `income-revenue` WHERE product = '$name'"));
	if($selectincomerev > 0){
	session_start();
	$_SESSION['action'] = 'update';
		$deleteincomerev = mysqli_query($db, "DELETE FROM `income-revenue` WHERE product = '$name'");
		$deleteincomecof = mysqli_query($db, "DELETE FROM `income-cost-of-sales` WHERE product = '$name'");
		if($deleteincomerev == true && $deleteincomecof == true){
			?>
			<script>
				alert("DELETED");
				window.location = "../profits-and-loss.php";
			</script>
			<?php
		}
	} else {
		?> 
		<script>
			alert("DELETED");
			window.location = "../profits-and-loss.index.php";
		</script>
		<?php
	}
} else {
	?>
		<script>
			alert("Failed");
			window.location = "../model-inputs.php";
		</script>
	<?php
}
?>