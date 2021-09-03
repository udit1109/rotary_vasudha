<?php
	session_start();
	$sno=$_POST['sno'];
	$enm=$_POST['enm'];
	$datepicker=$_POST['datepicker'];
	$category=$_POST['category'];
	$summary=$_POST['summary'];
	$rhour=$_POST['rhour'];
	$vhour=$_POST['vhour'];
	$bene=$_POST['bene'];
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
	
	
	if(empty($enm) || empty($sno))
	{
		if(empty($sno))
			$_SESSION['sno']="Enter Staff id";
		if(empty($enm))
			$_SESSION['enm']="Enter Name";
		if(empty($datepicker))
			$_SESSION['datepicker']="Enter Gender";
		if(empty($category))
			$_SESSION['category']="Enter Designation";
		if(empty($summary))
			$_SESSION['summary']="Enter Father's Name";
		if(empty($rhour))
			$_SESSION['rhour']="Enter Annual Income";
		if(empty($occupation))
			$_SESSION['vhour']="Enter Occupation";
		if(empty($vhour))
			$_SESSION['bene']="Enter Qualification";
		if(empty($bene))
			$_SESSION['eid']="Enter Email id";
		if(empty($up))
			$_SESSION['up']="Enter Valid Image";
		header('location:u_addevent.php');
	}
	else
	{
		
		$con=mysqli_connect('localhost','rotaryva_vasudha','vasudha@123','rotaryva_vasudha');
		
			$s="insert into addevent values($sno,'$enm','$datepicker','$category','$summary',$rhour,$vhour,$bene,'$up','$up2','$up3','$up4','$up5')";
			$r=mysqli_query($con,$s);
			if($r)
			{
				echo "Inserted";
				echo "<a href='addevent.php'>Click here to insert new event</a>";
			}
			else	
				echo "Not Inserted";
				
		
	
	}
?>