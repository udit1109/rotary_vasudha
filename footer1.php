<?php
	session_start();
	include('header.html');
		$email=$_POST['email'];
		
		
		
			$con=mysqli_connect('localhost','rotaryva_vasudha','vasudha@123','rotaryva_vasudha');
			
			if(!$con)
			{
				die("Connection Failed");
			}
			$s="select max(Sno) from contactus";
			$rs=mysqli_query($con,$s);
			$c=0;
			while($row=mysqli_fetch_array($rs))
			{
				$c=count($row[0]);
				if($c>0)
				{
					$sno=$row[0];
					$sno=$sno+1;
				}
				else
				{
					$sno=1;
				}
			}
			
				$s="insert into contactus(Sno, Email) values($sno, '$email')";
				$r=mysqli_query($con,$s);
				if($r)
				{
					echo "<h1>Thank you for your details, we will contact you shortly!</h1>";
					
				}
				else	
					echo "Not Inserted";
				
		

	include('footer.html');

?>