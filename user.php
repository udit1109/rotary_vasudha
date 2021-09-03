<?php
  session_start();
  if(!isset($_SESSION['mid'])){
  header('location:adminlogin.php');
  }
  include('uheader.html');
?>

	<h1 align="center">Welcome</h1>

<?php
	include('footer.html');
?>
	