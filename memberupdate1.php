<?php
	session_start();
	if(!isset($_SESSION['udit'])){
  header('location:adminlogin.php');
  
  }
	$con=mysqli_connect('localhost','rotaryva_vasudha','vasudha@123','rotaryva_vasudha');
		mysqli_select_db($con,'rotaryva_vasudha');
	$sno=$_POST['sno'];
	$mid=$_POST['mid'];
	$fnm=$_POST['fnm'];
	$lnm=$_POST['lnm'];
	$r1=$_POST['r1'];
	$spn=$_POST['spn'];
	$eid=$_POST['eid'];
	$mobile=$_POST['mobile'];
	$up=$_POST['up'];
	

	
	
	echo $s="update memberreg set Sno=$sno,First_Name='$fnm',Last_Name='$lnm',Gender='$r1',Sponsor='$spn', Email='$eid',Mobile=$mobile,Upload='$up' where Membership_ID=$mid";
	$r=mysqli_query($con,$s);
	if($r)
		header('location:viewmember.php');
	else
		echo "not";
		
?>

