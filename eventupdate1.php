ḍ<?php
	session_start();
	if(!isset($_SESSION['udit'])){
  header('location:adminlogin.php');
  }
	$con=mysqli_connect('localhost','rotaryva_vasudha','vasudha@123','rotaryva_vasudha');
		mysqli_select_db($con,'rotaryva_vasudha');
	$sno=$_POST['sno'];
	$ename=$_POST['ename'];
	$datepicker=$_POST['datepicker'];
	$category=$_POST['category'];
	$summary=$_POST['summary'];
	$rhour=$_POST['rhour'];
	$vhour=$_POST['vhour'];
	$bene=$_POST['bene'];
	$up=$_POST['p1'];
	$up2=$_POST['p2'];
	$up3=$_POST['p3'];
	$up4=$_POST['p4'];
	$up5=$_POST['p5'];
	
	if(move_uploaded_file($_FILES['up']['tmp_name'],"event/".$_FILES['up']['name']))
	{
		$up=$_FILES['up']['name'];
	}
	if(move_uploaded_file($_FILES['up2']['tmp_name'],"event/".$_FILES['up2']['name']))
	{
		$up2=$_FILES['up2']['name'];
	}
	if(move_uploaded_file($_FILES['up3']['tmp_name'],"event/".$_FILES['up3']['name']))
	{
		$up3=$_FILES['up3']['name'];
	}
	if(move_uploaded_file($_FILES['up4']['tmp_name'],"event/".$_FILES['up4']['name']))
	{
		$up4=$_FILES['up4']['name'];
	}
	if(move_uploaded_file($_FILES['up5']['tmp_name'],"event/".$_FILES['up5']['name']))
	{
		$up5=$_FILES['up5']['name'];
	}
	

	
	$s="update addevent set Sno=$sno,Event_Name='$ename',Date='$datepicker',Category='$category',Summary='$summary',Rotarian_Hour=$rhour, Volunteer_Hour=$vhour,Beneficiaries=$bene,Photo1='$up',Photo2='$up2',Photo3='$up3',Photo4='$up4',Photo5='$up5' where Sno=$sno";
	$r=mysqli_query($con,$s);
	if($r)
	{
		header('location:viewevent.php');
		
	
	}
		
	else
		echo "not";
		
?>

