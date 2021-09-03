<?php
	session_start();
	include('header.html');
		$sno=$_POST['sno'];
		$nm=$_POST['nm'];
		$email=$_POST['email'];
		$mobile=$_POST['mobile'];
		$msg=$_POST['msg'];
		
		
			$con=mysqli_connect('localhost','rotaryva_vasudha','vasudha@123','rotaryva_vasudha');
			
				$s="insert into contactus values($sno,'$nm','$email',$mobile,'$msg')";
				$r=mysqli_query($con,$s);
				if($r)
				{
					echo "<h1>Thank you for your details, we will contact you shortly!</h1>";
					
				}
				else	
					echo "Not Inserted";
				
		

	include('footer.html');

?>