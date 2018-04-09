<?php
session_start();
if(isset($_SESSION['username'])){
	require_once('../connection/dbConfig.php');
	$funding = mysqli_fetch_array(mysqli_query($db, "SELECT * FROM funding WHERE id = 1"));
	$products = mysqli_fetch_all(mysqli_query($db, 'SELECT * FROM product'));
	$ending_cash_balance = mysqli_fetch_assoc(mysqli_query($db, "SELECT year1, year2, year3, year4, year5 FROM ending_cash_balance WHERE id = 1"));
	$current_assets = mysqli_fetch_assoc(mysqli_query($db, "SELECT SUM(balance) AS total FROM current_assets"));
	$current_liabilities = mysqli_fetch_assoc(mysqli_query($db, "SELECT SUM(initial_balance) AS total FROM current_liabilities"));
	$netprofit = mysqli_fetch_assoc(mysqli_query($db, "SELECT year1, year2, year3, year4, year5 FROM retained_earnings WHERE id = 1"));
	$netprofit = array_sum($netprofit);
} else {
	?>
	<script>
		window.location = "../index.php";
	</script>
	<?php
}


?>
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
  <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="../vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="../css/sb-admin.css" rel="stylesheet">
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
	<?php include_once 'navigation.php'; ?>
	<?php include_once 'modal/restoreDB.php'; ?>
  <?php include_once 'modal/password.php'; ?>
  <?php include_once 'modal/username.php'; ?>
  <?php include_once 'modal/historyModal.php'; ?>
  <?php
  if(!isset($_SESSION['readonly'])){
	include_once 'modal/readModal.php';
  } else {
	include_once 'modal/unreadModal.php';
  }
  ?>

  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">My Dashboard</li>
      </ol>
      <!-- Icon Cards-->
      <div class="row">
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-primary o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-comments"></i>
              </div>
              <div class="mr-5">₱ <?= number_format(round($netprofit, 2), 2) ?> Net Profit</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="profits-and-loss.php?#net-profit">
              <span class="float-left">View Details</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-warning o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-list"></i>
              </div>
              <div class="mr-5">₱ <?= number_format(round(array_sum($ending_cash_balance), 2), 2)?> Ending Cash Balance</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="balance-sheet.php?#assets">
              <span class="float-left">View Details</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-success o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-shopping-cart"></i>
              </div>
              <div class="mr-5">₱ <?= number_format(round($current_assets['total'], 2), 2) ?> Current Total Assets</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="balance-sheet.php?#assets">
              <span class="float-left">View Details</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-danger o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-support"></i>
              </div>
              <div class="mr-5">₱ <?= number_format(round($current_liabilities['total'], 2), 2) ?> Current Total Liabilities</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="balance-sheet.php?#liabilities">
              <span class="float-left">View Details</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
      </div>
      <!-- Area Chart Example-->
	  <div class="row">
        <div class="col-lg-12">
          <!-- Example Bar Chart Card-->
         <div class="card mb-3">
            <div class="card-header">
              <i class="fa fa-bar-chart"></i>Cash Flow Bar Chart</div>
            <div class="card-body">
              <canvas id="myBarChart" width="100" height="30"></canvas>
            </div>
            <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
          </div>
          <!-- Card Columns Example Social Feed-->


          <!-- /Card Columns-->
        </div>

      </div>
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
            <a class="btn btn-primary" href="login.html">Logout</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="../vendor/chart.js/Chart.min.js"></script>
    <script src="../vendor/datatables/jquery.dataTables.js"></script>
    <script src="../vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="../js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="../js/sb-admin-datatables.min.js"></script>
		<script src="../vendor/popper.js/popper.min.js"></script>
		<script>
		$(function(){
			$('[data-toggle="tooltip"]').tooltip();
		})

		// -- Bar Chart Example
		var ctx = document.getElementById("myBarChart");
		var myBarChart = new Chart(ctx, {
			type: 'bar',
			data: {
				labels: ["Year 1", "Year 2", "Year 3", "Year 4", "Year 5"],
				datasets: [{
					label: "Revenue",
					backgroundColor: "rgba(2,117,216,1)",
					borderColor: "rgba(2,117,216,1)",
					data: [<?= $ending_cash_balance['year1'] ?>,
					<?= $ending_cash_balance['year2'] ?>,
					<?= $ending_cash_balance['year3'] ?>,
					<?= $ending_cash_balance['year4'] ?>,
					<?= $ending_cash_balance['year5'] ?>],
				}],
			},
			options: {
				scales: {
					xAxes: [{
						time: {
							unit: 'month'
						},
						gridLines: {
							display: false
						},
						ticks: {
							maxTicksLimit: 6
						}
					}],
					yAxes: [{
						ticks: {
							min: 0,
							max: <?= round(max($ending_cash_balance) * 1.25, -1 * (strlen(floor(max($ending_cash_balance) * 1.25)) - 2)) ?>,
							maxTicksLimit: 5
						},
						gridLines: {
							display: true
						}
					}],
				},
				legend: {
					display: false
				}
			}
		});
		</script>
  </div>
</body>

</html>
