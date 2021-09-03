<?php
	session_start();
  if(!isset($_SESSION['udit'])){
  header('location:adminlogin.php');
  }

	include('aheader.html');
	$con=mysqli_connect('localhost','rotaryva_vasudha','vasudha@123','rotaryva_vasudha');
	mysqli_select_db($con,'rotaryva_vasudha');
	$s="select * from scrapbooks";
	$r=mysqli_query($con, $s);
	echo "<h1 align='center'> E-Scrapbooks (2019-20)</h1><table border='1' align='center'>
	<tr>
		<td><b>Sno.</b></td>
		<td><b>Scrapbook Name</b></td>
		<td><b>Link</b></td>
		<td colspan='3' align='center'><b>Buttons</b></td>
	</tr>";
	while($row=mysqli_fetch_array($r))
	{
		$sno=$row[0];
		$snm=$row[1];
		$link=$row[2];
		
		
		echo "<tr>
					<td>".$sno."</td>
					<td>".$snm."</td>
					<td>".$link."</td>
					<td><a href='scrapbooks.php?a=$sno'>View Scrapbook</a></td>
					<td><a href='scrapupdate.php?a=$sno'>Update</a></td>
					<td><a href='scrapdelete.php?a=$sno'>Delete</a></td>
				</tr>";
	}
	echo "</table>";
	
	include('footer.html');
?>