ḍ<?php
	session_start();
	if(!isset($_SESSION['udit'])){
  header('location:adminlogin.php');
  }
	$con=mysqli_connect('localhost','rotaryva_vasudha','vasudha@123','rotaryva_vasudha');
		mysqli_select_db($con,'rotaryva_vasudha');
	$sno=$_POST['sno'];
	$snm=$_POST['snm'];
	$link=$_POST['link'];
	
	

	
	
	echo $s="update scrapbooks set Name='$snm',Link='$link' where Sno=$sno";
	$r=mysqli_query($con,$s);
	if($r)
	{
		header('location:viewscrap.php');
		
	
	}
		
	else
		echo "not";
		
?>

