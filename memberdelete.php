<?php
	include('aheader.html');
		$con=mysqli_connect('localhost','rotaryva_vasudha','vasudha@123','rotaryva_vasudha');
		mysqli_select_db($con,'rotaryva_vasudha');
		$mid=$_GET['a'];
		$s="delete from memberreg where Membership_ID=$mid";
		$r=mysqli_query($con, $s);
		if($r)
			header('location:viewmember.php');
		else
			echo "not";
		
	include('footer.html');
	?>
	