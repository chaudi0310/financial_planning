<?php
	include '../../connection/dbConfig.php'; 
	$pname = $_POST['pname'];
	$pprice = $_POST['pprice'];
	$pannualsold = $_POST['pannualsold'];
	$pgrossmargin = $_POST['pgrossmargin'];
	$converted_gross = $pgrossmargin/100;
	$pannual_rev = $pprice * $pannualsold;
	$annual_cost = $pannual_rev * $converted_gross;
	$checkproduct = mysqli_num_rows(mysqli_query($db, "SELECT * FROM product WHERE name = '$pname'"));
	if ($checkproduct > 0){
		?>
		<script>
			alert("Product name exists");
			
			window.location = "../index.php";
		</script>
		<?php
	} else {
		$addproduct = mysqli_query($db, "INSERT INTO product(id, name, price, sold_anual, gross_margin, anual_rev, anual_cost) VALUES(NULL, '$pname', '$pprice', '$pannualsold', '$pgrossmargin', '$pannual_rev', '$annual_cost')");
		if($addproduct == true){
			//totalcost
			$totalcost = mysqli_query($db, "SELECT SUM(anual_cost) AS total_cost FROM product");
			$totalrow = mysqli_fetch_assoc($totalcost);
			$totalcostcost = $totalrow['total_cost'];
			//total rev
			$total = mysqli_query($db, "SELECT SUM(anual_rev) AS total_sum FROM product");
			$totalrow = mysqli_fetch_assoc($total);
			$totalval = $totalrow['total_sum'];
			$totalquery = mysqli_query($db, "UPDATE model_inputs_totals SET total_fr = '$totalval', total_cog = '$totalcostcost'");
			if($totalquery == true){
				//get price rate increase
				$getpricerateincrease = mysqli_query($db, "SELECT * FROM profits_loss_revenue_increase WHERE id= '1'");
				$countpricerate = mysqli_num_rows($getpricerateincrease);
				if($countpricerate > 0){
					$fetchpricerate = mysqli_fetch_assoc($getpricerateincrease);
					$price1 = $fetchpricerate['year1']/100;
					$price2 = $fetchpricerate['year2']/100;
					$price3 = $fetchpricerate['year3']/100;
					$price4 = $fetchpricerate['year4']/100;
					$price5 = $fetchpricerate['year5']/100;
					//code for income rev
					$year1rev = $pannual_rev;
					$year2rev = $year1rev * (1 + $price2);
					$year3rev = $year2rev * (1 + $price3);
					$year4rev = $year3rev * (1 + $price4);
					$year5rev = $year4rev * (1 + $price5);
					$income_rev = mysqli_query ($db, "INSERT INTO `income-revenue`(id, product, year1, year2, year3, year4, year5)VALUES(NULL, '$pname', '$year1rev', '$year2rev', '$year3rev', '$year4rev', '$year5rev')");
				}
				
				//get inflation rate
				$getinflationrate = mysqli_query($db, "SELECT * FROM profits_loss_expense_increase WHERE id= '1'");
				$countexpenserate = mysqli_num_rows($getinflationrate);
				if($countexpenserate > 0){
					$fetchexpenserate = mysqli_fetch_assoc($getinflationrate);
					$price11 = $fetchexpenserate['year1']/100;
					$price22 = $fetchexpenserate['year2']/100;
					$price33 = $fetchexpenserate['year3']/100;
					$price44 = $fetchexpenserate['year4']/100;
					$price55 = $fetchexpenserate['year5']/100;
					//code for income cost of goods
					$year1exp = $annual_cost;
					$year2exp = $year1exp * (1 + $price22);
					$year3exp = $year2exp * (1 + $price33);
					$year4exp = $year3exp * (1 + $price44);
					$year5exp = $year4exp * (1 + $price55);
					$income_exp = mysqli_query ($db, "INSERT INTO `income-cost-of-sales`(id, product, year1, year2, year3, year4, year5)VALUES(NULL, '$pname', '$year1exp', '$year2exp', '$year3exp', '$year4exp', '$year5exp')");
				}
				
				
				if ($income_rev == true && $income_exp == true){
				session_start();
				$_SESSION['action'] = 'update';
					
				?>
					<script>
						alert("Success1");
						window.location = "../profits-and-loss.php";
					</script>
				<?php
				} else {
					?>
					<script>
						alert("Failed updating income revenue");
					</script>
					<?php
				}
				} else {
					?>
					<script>
						alert("Error updating table of totals");
						window.location = "../model-inputs.php";
					</script>
					<?php
				}
		} else {
			?>
			<script>
				alert("Something went wrong");
				window.location = "../model-inputs.php";
			</script>
			<?php
		}
	}
?>