<?php
session_start();
$_SESSION['readonly'] = 'on';
if(isset($_SESSION['readonly'])){
	?>
	<script>
		alert("Success");
		window.location = '../index.php';
	</script>
	<?php
} else {
	?>
	<script>
		alert('Something Went Wrong');
		window.location = '../index.php';
	</script>
	<?php
}
?>