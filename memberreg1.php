<?php
	session_start();
	$sno=$_POST['sno'];
	$mid=$_POST['mid'];
	$fnm=$_POST['fnm'];
	$lnm=$_POST['lnm'];
	$r1=$_POST['r1'];
	$spn=$_POST['spn'];
	$eid=$_POST['eid'];
	$mobile=$_POST['mobile'];
	if(move_uploaded_file($_FILES['up']['tmp_name'],"upload/".$_FILES['up']['name']))
	{
		$up=$_FILES['up']['name'];
	}
	
	
	if(empty($fnm) || empty($mid))
	{
		if(empty($sno))
			$_SESSION['sno']="Enter Sno.";
		if(empty($mid))
			$_SESSION['mid']="Enter Membership id";
		if(empty($fnm))
			$_SESSION['fnm']="Enter First Name";
		if(empty($lnm))
			$_SESSION['lnm']="Enter Last Name";
		if(empty($r1))
			$_SESSION['r1']="Enter Gender";
		if(empty($spn))
			$_SESSION['spn']="Enter Sponsor by";
		if(empty($eid))
			$_SESSION['eid']="Enter Email id";
		if(empty($mobile))
			$_SESSION['mobile']="Enter Mobile Number";
		if(empty($up))
			$_SESSION['up']="Enter Valid Image";
		header('location:memberreg.php');
	}
	else
	{
		
		$con=mysqli_connect('localhost','rotaryva_vasudha','vasudha@123','rotaryva_vasudha');
		
			$s="insert into memberreg values($sno,$mid,'$fnm','$lnm','$r1','$spn','$eid',$mobile,'$up')";
			$r=mysqli_query($con,$s);
			if($r)
			{
				echo "Inserted";
				echo "<a href='memberreg.php'>Click here to add new member</a>";
			}
			else	
				echo "Not Inserted";
				
		
	
	}
?>