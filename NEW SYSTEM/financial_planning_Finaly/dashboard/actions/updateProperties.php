<?php
include '../../connection/dbConfig.php';
$id = $_POST['id'];
if(isset($_POST['building'])){
	$value = $_POST['building'];
} else if(isset($_POST['land'])){
	$value = $_POST['land'];
} else if(isset($_POST['ci'])){
	$value = $_POST['ci'];
} else if(isset($_POST['me'])){
	$value = $_POST['me'];
} else {
	echo 'something went wrong';
}
$update = mysqli_query($db, "UPDATE properties_equipment SET year1 = '$value', year2 = '$value', year3 = '$value', year4='$value', year5='$value', initial_balance = '$value' WHERE id = '$id'");
 if($update == true){
	 //get data from properties and equipment
	 $getbdata = mysqli_query($db, "SELECT year1 FROM properties_equipment WHERE id = '1'");
	 $cgetbdata = mysqli_num_rows($getbdata);
	 $getcdata = mysqli_query($db, "SELECT year1 FROM properties_equipment WHERE id = '3'");
	 $cgetcdata = mysqli_num_rows($getcdata);
	 $getmdata = mysqli_query($db, "SELECT year1 FROM properties_equipment WHERE id = '4'");
	 $cgetmdata = mysqli_num_rows($getmdata);
		if($cgetbdata > 0 && $cgetcdata > 0 && $cgetmdata > 0){
			$getb = mysqli_fetch_assoc($getbdata);
			$getc = mysqli_fetch_assoc($getcdata);
			$getm = mysqli_fetch_assoc($getmdata);
			//get expense increase from database
			$retexpense = mysqli_query($db, "SELECT * FROM profits_loss_expense_increase WHERE id = '1'");
			$retrieveexp = mysqli_fetch_assoc($retexpense);
			$expy2 = 1 + ($retrieveexp['year2']/100);
			$expy3 = 1 + ($retrieveexp['year3']/100);
			$expy4 = 1 + ($retrieveexp['year4']/100);
			$expy5 = 1 + ($retrieveexp['year5']/100);
			$deprvalue = $getb['year1'] + $getc['year1'] + $getm['year1'];
			$depvalue1 = $deprvalue/5;//b49 //b24
			$depvalue2 = $depvalue1 * $expy2;//c49
			$depvalue3 = $depvalue1 * $expy3;//d49
			$depvalue4 = $depvalue1 * $expy4;//e49
			$depvalue5 = $depvalue1 * $expy5;//f49
			//Less Accumulated Depreciation Expense 
			$lessdep2 = $depvalue2 + $depvalue1;//12120
			$lessdep3 = $lessdep2 + $depvalue3;//12120 + 6000
			$lessdep4 = $lessdep3 + $depvalue4;
			$lessdep5 = $lessdep4 + $depvalue5;
			mysqli_query($db, "UPDATE properties_equipment SET year1 = '$depvalue1', year2 = '$lessdep2', year3 = '$lessdep3', year4 = '$lessdep4', year5 = '$lessdep5' WHERE id = '5'");
			//update id 6
			$updateid6 = mysqli_query($db, "SELECT * FROM anual_maintenance WHERE id = '1'");
			$id6 = mysqli_fetch_assoc($updateid6);
			$maintenancerate = $id6['factor_cap_equip']/100;
			$maintenance = mysqli_query($db, "SELECT * FROM properties_equipment WHERE id = '4'");
			$retrievemaintenance = mysqli_num_rows($maintenance);
			if($retrievemaintenance > 0){
				$equip = mysqli_fetch_assoc($maintenance);
				$eqyear1 = $equip['year1'] * $maintenancerate;//1500
				$eqyear2 = $eqyear1 * $expy2;//1530
				$eqyear3 = $eqyear1 * $expy3;
				$eqyear4 = $eqyear1 * $expy4;
				$eqyear5 = $eqyear1 * $expy5;
				mysqli_query($db, "UPDATE operating_expenses SET year1 = '$eqyear1', year2 = '$eqyear2', year3 = '$eqyear3', year4 = '$eqyear4', year5 = '$eqyear5' WHERE id = '6'");
			}
			
			
		}
	
	
	 $deprication = mysqli_query($db, "UPDATE operating_expenses SET year1 = '$depvalue1', year2 = '$depvalue2', year3 = '$depvalue3', year4 = '$depvalue4', year5 = '$depvalue5' WHERE id = '2'");
			 if($deprication == true){
			 ?>
			 <script>
				alert('Success');
				window.location = '../balance-sheet.php';
			 </script>
			 <?php
			 } else {
				 ?><script>alert("Failed");</script><?php
			 }
 } else {
	 ?>
	 <script>
		alert('Something went wrong');
		window.locatio = '../balance-sheet.php';
	 </script>
	 <?php
 }
?>