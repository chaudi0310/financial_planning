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
if(isset($_SESSION['action'])){
	if($_SESSION['action'] == 'update'){
		unset($_SESSION['action']);
			?>
				<script>
					window.location = "index.php";
				</script>
			<?php
		}
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
  <title>Profits and Loss - Financial Planning System</title>
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
        <li class="breadcrumb-item active">Profits and Loss</li>
      </ol>
      <div class="container">
      <?php include_once 'profits-and-loss-misc/profits-and-loss-assumption.php'; ?>
	  <?php include_once 'profits-and-loss-misc/income-revenue.php'; ?>
	  <?php include_once 'profits-and-loss-misc/income-cos.php'; ?>
	  <?php include_once 'profits-and-loss-misc/non-op-income.php'; ?>
	  <br>
	  <?php include_once 'profits-and-loss-misc/expense.php'; ?>
	  <?php include_once 'profits-and-loss-misc/recurring.php'; ?>
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
	$(document).on("click", ".update-sm", function(){
			var sm = $(this).data('sm');
			var id = $(this).data('id');

			$(".modal-body #sm").val(sm);
			$(".modal-body #id").val(id);
});
	</script>
	<script>
	$(document).on("click", ".update-ins", function(){
			var ins = $(this).data('ins');
			var id = $(this).data('id');

			$(".modal-body #ins").val(ins);
			$(".modal-body #id").val(id);
});
	</script>
	<script>
	$(document).on("click", ".update-pt", function(){
			var pt = $(this).data('pt');
			var id = $(this).data('id');

			$(".modal-body #pt").val(pt);
			$(".modal-body #id").val(id);
});
	</script>
	<script>
	$(document).on("click", ".update-prop", function(){
			var prop = $(this).data('prop');
			var id = $(this).data('id');

			$(".modal-body #prop").val(prop);
			$(".modal-body #id").val(id);
});
	</script>
	<script>
	$(document).on("click", ".update-ut", function(){
			var ut = $(this).data('ut');
			var id = $(this).data('id');

			$(".modal-body #ut").val(ut);
			$(".modal-body #id").val(id);
});
	</script>
	<script>
	$(document).on("click", ".update-ad", function(){
			var ad = $(this).data('ad');
			var id = $(this).data('id');

			$(".modal-body #ad").val(ad);
			$(".modal-body #id").val(id);
});
	</script>
	<script>
	$(document).on("click", ".update-oth", function(){
			var oth = $(this).data('oth');
			var id = $(this).data('id');

			$(".modal-body #oth").val(oth);
			$(".modal-body #id").val(id);
});
	</script>
	<script>
	$(document).on("click", ".open-unex", function(){
			var y1 = $(this).data('y1');
			var y2 = $(this).data('y2');
			var y3 = $(this).data('y3');
			var y4 = $(this).data('y4');
			var y5 = $(this).data('y5');
			var id = $(this).data('id');

			$(".modal-body #uey1").val(y1);
			$(".modal-body #uey2").val(y2);
			$(".modal-body #uey3").val(y3);
			$(".modal-body #uey4").val(y4);
			$(".modal-body #uey5").val(y5);
			$(".modal-body #id").val(id);
});
	</script>
	<script>
	$(document).on("click", ".open-other", function(){
			var yy1 = $(this).data('yy1');
			var yy2 = $(this).data('yy2');
			var yy3 = $(this).data('yy3');
			var yy4 = $(this).data('yy4');
			var yy5 = $(this).data('yy5');
			var id = $(this).data('id');

			$(".modal-body #oey1").val(yy1);
			$(".modal-body #oey2").val(yy2);
			$(".modal-body #oey3").val(yy3);
			$(".modal-body #oey4").val(yy4);
			$(".modal-body #oey5").val(yy5);
			$(".modal-body #id").val(id);
});
	</script>

</html>
