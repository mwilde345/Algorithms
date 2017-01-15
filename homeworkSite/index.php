<?php
session_start();
$_SESSION['displayMessage'] = false;
  error_reporting(E_ALL);
  ini_set('display_errors', 1);
  if(!isset($_SESSION['logged_in'])){
    $_SESSION['logged_in'] = false;
  }
?>

<?php include("./php/header.php"); ?>
	<div class="alert alert-success">
		<h2>Welcome! View Weekly Homework using the links above. <i class="glyphicon glyphicon-arrow-up"></i></h2>
	</div>
	<div class="panel"></div>
<?php include("./php/footer.php"); ?>
