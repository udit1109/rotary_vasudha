<?php
	session_start();
	  if(!isset($_SESSION['udit'])){
	  header('location:adminlogin.php');
	  }
	include('aheader.html');
	$con=mysqli_connect('localhost','rotaryva_vasudha','vasudha@123','rotaryva_vasudha');
	mysqli_select_db($con,'rotaryva_vasudha');
	$s="select * from memberreg";
	$r=mysqli_query($con, $s);
	echo "<h1 align='center'> Membership Details (2019-20)</h1><table border='1' align='center'>
	<tr>
		<td><b>Sno.</b></td>
		<td><b>Membership ID</b></td>
		<td><b>First Name</b></td>
		<td><b>Last Name</b></td>
		<td><b>Gender</b></td>
		<td><b>Sponsored By</b></td>
		<td><b>Email ID</b></td>
		<td><b>Mobile No.</b></td>
		<td><b>Image</b></td>
		<td colspan='2'><b>Button</b></td>
	</tr>";
	while($row=mysqli_fetch_array($r))
	{
		$sno=$row[0];
		$mid=$row[1];
		$fnm=$row[2];
		$lnm=$row[3];
		$r1=$row[4];
		$spn=$row[5];
		$eid=$row[6];
		$mobile=$row[7];
		$up=$row[8];
		echo "<tr>
					<td>".$sno."</td>
					<td>".$mid."</td>
					<td>".$fnm."</td>
					<td>".$lnm."</td>
					<td>".$r1."</td>
					<td>".$spn."</td>
					<td>".$eid."</td>
					<td>".$mobile."</td>
					<td><img height=100 width=100 src='upload/".$up."'></td>
					<td><a href='memberdelete.php?a=$mid'>Terminate</a></td>
					<td><a href='memberupdate.php?a=$mid'>Update</a></td>
				</tr>";
	}
	echo "</table>";
	
	include('footer.html');
?>