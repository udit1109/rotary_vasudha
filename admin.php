<?php
  session_start();
  if(!isset($_SESSION['udit'])){
  header('location:adminlogin.php');
  }
  include('aheader.html');
?>

	<h1 align="center">Welcome</h1>

<?php
	include('footer.html');
?>
	