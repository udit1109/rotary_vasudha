<?php
	session_start();
	$nm=$_POST['user'];
	$pass=$_POST['pass'];
	$con=mysqli_connect('localhost','rotaryva_vasudha','vasudha@123','rotaryva_vasudha');
	
	if(empty($nm) || empty($pass))
	{
		if(empty($nm))
			$_SESSION['user']="Enter Username";
		if(empty($pass))
			$_SESSION['pass']="Enter Password";
		header('location:adminlogin.php');
	}
	else if($nm=="udit" && $pass=="123")
	{
		$_SESSION['udit']=$nm;
	
	  header('location:admin.php');
	 }
	else
	{
		echo $s="select * from memberreg where Email='$nm' and Mobile='$pass'";
		$rs=mysqli_query($con,$s);
		$mid="";
		
		while($row=mysqli_fetch_array($rs))
		{
			$mid=$row[1];
			$_SESSION['mid']=$mid;
			$_SESSION['nm']=$row[6];
			
			header('location:user.php');
		}
		if($mid=="")
		{
			$_SESSION['err']="Invalid Username and Password";
			header('location:adminlogin.php');
		}
	}
				if(isset($_SESSION['user']))
						echo $_SESSION['user'];
			
?>
