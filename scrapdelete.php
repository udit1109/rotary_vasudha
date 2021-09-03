<?php
	include('aheader.html');
		$con=mysqli_connect('localhost','rotaryva_vasudha','vasudha@123','rotaryva_vasudha');
		mysqli_select_db($con,'rotaryva_vasudha');
		$sno=$_GET['a'];
		$s="delete from scrapbooks where Sno=$sno";
		$r=mysqli_query($con, $s);
		if($r)
			header('location:viewscrap.php');
		else
			echo "not";
		
	include('footer.html');
	?>
	