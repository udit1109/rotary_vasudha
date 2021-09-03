<?php
	session_start();
  
	include('header.html');
	$con=mysqli_connect('localhost','rotaryva_vasudha','vasudha@123','rotaryva_vasudha');
	mysqli_select_db($con,'rotaryva_vasudha');
	$s="select * from scrapbooks";
	$r=mysqli_query($con, $s);
	echo "<h1 align='center'> E-Scrapbooks (2019-20)</h1><table border='1' align='center'>
	<tr>
		<td><b>Sno.</b></td>
		<td><b>Scrapbook Name</b></td>
		<td align='center'><b>View</b></td>
	</tr>";
	while($row=mysqli_fetch_array($r))
	{
		$sno=$row[0];
		$snm=$row[1];
		$link=$row[2];
		
		
		echo "<tr>
					<td>".$sno."</td>
					<td>".$snm."</td>
					<td><a href='scrapbook.php?a=$sno'>Click here</a></td>
				</tr>";
	}
	echo "</table>";
	
	include('footer.html');
?>