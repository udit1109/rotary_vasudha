<?php
	session_start();
	$sno=$_POST['sno'];
	$snm=$_POST['snm'];
	$link=$_POST['link'];
	
	
	
	if(empty($sno) || empty($snm))
	{
		if(empty($sno))
			$_SESSION['sno']="Enter Sno.";
		if(empty($snm))
			$_SESSION['snm']="Enter Scrapbook Name";
		if(empty($link))
			$_SESSION['link']="Enter Link";
		
		header('location:addscrap.php');
	}
	else
	{
		
		$con=mysqli_connect('localhost','rotaryva_vasudha','vasudha@123','rotaryva_vasudha');
		
			$s="insert into scrapbooks values($sno,'$snm','$link')";
			$r=mysqli_query($con,$s);
			if($r)
			{
				echo "Inserted";
				echo "<a href='addscrap.php'>Click here to add new member</a>";
			}
			else	
				echo "Not Inserted";
				
		
	
	}
?>