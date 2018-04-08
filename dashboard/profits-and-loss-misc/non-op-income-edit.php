<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Dashboard -Financial Planning System</title>
  <!-- Bootstrap core CSS-->
  <link href="../../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="../../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="../../vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="../../css/sb-admin.css" rel="stylesheet">
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="index.php">Financial Planning System</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
	  <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Model Inputs">
          <a class="nav-link" href="index.php">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Dashboard</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Model Inputs">
          <a class="nav-link" href="model-inputs.php">
            <i class="fa fa-fw fa-bar-chart"></i>
            <span class="nav-link-text">Model Inputs</span>
          </a>
        </li>
		<li class="nav-item active" data-toggle="tooltip" data-placement="right" title="Profits and Loss">
          <a class="nav-link" href="profits-and-loss.php">
            <i class="fa fa-fw fa-area-chart"></i>
            <span class="nav-link-text">Profits and Loss</span>
          </a>
        </li>
		<!-- balance sheet -->
		<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Balance Sheet">
          <a class="nav-link" href="balance-sheet.php">
            <i class="fa fa-fw fa-list-alt"></i>
            <span class="nav-link-text">Balance Sheet</span>
          </a>
        </li>
		<!--cash flow -->
		<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Cash Flow">
          <a class="nav-link" href="cash-flow.php">
            <i class="fa fa-fw fa-stack-overflow"></i>
            <span class="nav-link-text">Cash Flow</span>
          </a>
        </li>
		<!--loan payment calculator-->
		<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Loan Payment Calculator">
          <a class="nav-link" href="loan-payment.php">
            <i class="fa fa-fw fa-calculator"></i>
            <span class="nav-link-text">Loan Payment Calculator</span>
          </a>
        </li>
       
      </ul>
      
      <ul class="navbar-nav ml-auto">
         <li class="nav-item">
          <a class="nav-link" href="logout.php">
            <i class="fa fa-fw fa-sign-out"></i>Logout</a>
        </li>
      </ul>
    </div>
  </nav>
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item">Profits and Loss</li>
		 <li class="breadcrumb-item">Edit Non-Operational Income</li>
      </ol>
	  <!-- get the value of non operational income -->
	  <?php 
	include '../../connection/dbConfig.php';
	//rental
	$rental = mysqli_query($db, "SELECT * FROM rental WHERE id = '1'");
	$countrental = mysqli_num_rows($rental);
	if($countrental > 0){
		$fetchrental = mysqli_fetch_assoc($rental);
		$rental1 = $fetchrental['year1'];
		$rental2 = $fetchrental['year2'];
		$rental3 = $fetchrental['year3'];
		$rental4 = $fetchrental['year4'];
		$rental5 = $fetchrental['year5'];
	}
	//interest income ii= Interest Income
	$ii = mysqli_query($db, "SELECT * FROM interest_income WHERE id = '1'");
	$countii = mysqli_num_rows($ii);
	if($countii > 0){
		$fetchii = mysqli_fetch_assoc($ii);
		$ii1 = $fetchii['year1'];
		$ii2 = $fetchii['year2'];
		$ii3 = $fetchii['year3'];
		$ii4 = $fetchii['year4'];
		$ii5 = $fetchii['year5'];
	}
	//sales of assets
	$sos = mysqli_query($db, "SELECT * FROM loss_on_sales_assets WHERE id = '1'");
	$countsos = mysqli_num_rows($sos);
	if($countsos > 0){
		$fetchsos = mysqli_fetch_assoc($sos);
		$sos1 = $fetchsos['year1'];
		$sos2 = $fetchsos['year2'];
		$sos3 = $fetchsos['year3'];
		$sos4 = $fetchsos['year4'];
		$sos5 = $fetchsos['year5'];
	}
	//other income
	$oi = mysqli_query($db, "SELECT * FROM other_income WHERE id = '1'");
	$countoi = mysqli_num_rows($oi);
	if($countoi > 0){
		$fetchoi = mysqli_fetch_assoc($oi);
		$oi1 = $fetchoi['year1'];
		$oi2 = $fetchoi['year2'];
		$oi3 = $fetchoi['year3'];
		$oi4 = $fetchoi['year4'];
		$oi5 = $fetchoi['year5'];
	}
	
	?>
    <!-- end -->
	<!--display value here -->
	<table class="table table-condensed">
	<thead>
		<tr style="color:white; background-color: gray; border-bottom: 10px black;">
			<th>Non-Operational Income</th>
			<th>Year 1</th>
			<th>Year 2</th>
			<th>Year 3</th>
			<th>Year 4</th>
			<th>Year 5</th>
		</tr>
	</thead>
	<tbody>
	<form action="non-op-income-edit-proccess.php" method="post">
		<tr>
			<td>Rental</td>
			<td><input class="form-control" type="text" name="rental1" value="<?php echo $rental1 ?>"></td>
			<td><input class="form-control" type="text" name="rental2" value="<?php echo $rental2 ?>"></td>
			<td><input class="form-control" type="text" name="rental3" value="<?php echo $rental3 ?>"></td>
			<td><input class="form-control" type="text" name="rental4" value="<?php echo $rental4 ?>"></td>
			<td><input class="form-control" type="text" name="rental5" value="<?php echo $rental5 ?>"></td>
		</tr>
		<tr>
			<td>Interest Income</td>
			<td><input class="form-control" type="text" name="ii1" value="<?php echo $ii1 ?>"></td>
			<td><input class="form-control" type="text" name="ii2" value="<?php echo $ii2 ?>"></td>
			<td><input class="form-control" type="text" name="ii3" value="<?php echo $ii3 ?>"></td>
			<td><input class="form-control" type="text" name="ii4" value="<?php echo $ii4 ?>"></td>
			<td><input class="form-control" type="text" name="ii5" value="<?php echo $ii5 ?>"></td>
		</tr>
		<tr>
			<td>Loss(gain) on sale of assets</td>
			<td><input class="form-control" type="text" name="sos1" value="<?php echo $sos1 ?>"></td>
			<td><input class="form-control" type="text" name="sos2" value="<?php echo $sos2 ?>"></td>
			<td><input class="form-control" type="text" name="sos3" value="<?php echo $sos3 ?>"></td>
			<td><input class="form-control" type="text" name="sos4" value="<?php echo $sos4 ?>"></td>
			<td><input class="form-control" type="text" name="sos5" value="<?php echo $sos5 ?>"></td>
		</tr>
		<tr>
			<td>Other Income</td>
			<td><input class="form-control" type="text" name="oi1" value="<?php echo $oi1 ?>"></td>
			<td><input class="form-control" type="text" name="oi2" value="<?php echo $oi2 ?>"></td>
			<td><input class="form-control" type="text" name="oi3" value="<?php echo $oi3 ?>"></td>
			<td><input class="form-control" type="text" name="oi4" value="<?php echo $oi4 ?>"></td>
			<td><input class="form-control" type="text" name="oi5" value="<?php echo $oi5 ?>"></td>
		</tr>
		
		
	</tbody>
	
</table>
<div class="col-md-12" align="center">
	<a href="../profits-and-loss.php" class="btn btn-danger">Back</a>
	<input type="submit" class="btn btn-success" value="Save">
</div>
</form>

	<!-- end display -->
     
      
		
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © UNO Olongapo 2018</small>
        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="logout.php">Logout</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="../../vendor/jquery/jquery.min.js"></script>
    <script src="../../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="../../vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="../../vendor/chart.js/Chart.min.js"></script>
    <script src="../../vendor/datatables/jquery.dataTables.js"></script>
    <script src="../../vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="../../js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="../../js/sb-admin-datatables.min.js"></script>
    <script src="../../js/sb-admin-charts.min.js"></script>
  </div>
</body>

</html>
