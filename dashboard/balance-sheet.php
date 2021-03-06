<?php
session_start();
if(isset($_SESSION['username'])){

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
  <title>Balance Sheet - Financial Planning System</title>
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
          <a href="#">Index</a>
        </li>
        <li class="breadcrumb-item active">Balance Sheet</li>
      </ol>
	  <h1 id="assets">ASSETS</h1>
	  <?php include_once 'balance-sheet-misc/current_assets.php'; ?>
      <?php include_once 'balance-sheet-misc/properties-and-equipment.php'; ?>
	  <?php include_once 'balance-sheet-misc/other_assets.php'; ?>
	  <br>
	  <h1 id="liabilities">LIABILITIES</h1>
	  <?php include_once 'balance-sheet-misc/current_liabilities.php'; ?>
	  <?php include_once 'balance-sheet-misc/other_liabilities.php'; ?>
	  <br>
	  <h1>EQUITY</h1>
	  <?php include_once 'balance-sheet-misc/equity.php'; ?>






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
            <a class="btn btn-primary" href="login.php">Logout</a>
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
    <script src="../js/sb-admin-charts.min.js"></script>
  </div>
</body>
<script>
	$(document).on("click", ".update-building", function(){
			var building = $(this).data('building');
			var id = $(this).data('id');

			$(".modal-body #building").val(building);
			$(".modal-body #id").val(id);
});
	</script>
	<script>
	$(document).on("click", ".update-land", function(){
			var land = $(this).data('land');
			var id = $(this).data('id');

			$(".modal-body #land").val(land);
			$(".modal-body #id").val(id);
});
	</script>
	<script>
	$(document).on("click", ".update-ci", function(){
			var ci = $(this).data('ci');
			var id = $(this).data('id');

			$(".modal-body #ci").val(ci);
			$(".modal-body #id").val(id);
});
	</script>
	<script>
	$(document).on("click", ".update-me", function(){
			var me = $(this).data('me');
			var id = $(this).data('id');

			$(".modal-body #me").val(me);
			$(".modal-body #id").val(id);
});
	</script>
</html>
