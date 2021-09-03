<?php
	session_start();
	if(!isset($_SESSION['udit'])){
  header('location:adminlogin.php');
  }
	include('aheader.html');
		$con=mysqli_connect('localhost','rotaryva_vasudha','vasudha@123','rotaryva_vasudha');
		mysqli_select_db($con,'rotaryva_vasudha');
		$sno=$_GET['a'];
		$s="select * from scrapbooks where Sno=$sno";
		$r=mysqli_query($con, $s);
		while($row=mysqli_fetch_array($r))
		{
			$sno=$row[0];
			$snm=$row[1];
			$link=$row[2];			
			
		}
		
		
	?>
	<h1 align="center"><b> Update Event</b><h1>
	<form action="scrapupdate1.php" method="post" enctype="multipart/form-data">
		
		
		
		
	<table align="center" border="1">
		<tr>
			<td align="center"><b>S No.</b></td>
			<td><?php echo $sno; ?><input type="hidden" name="sno" value="<?php echo $sno; ?>"></td>
		</tr>
		

		<tr>
			<td align="center"><b>Scrapbook Name</b></td>
			<td><input type="text" name="snm" value="<?php echo $snm;?>"> </td>
		</tr>
		<tr>
			<td align="center"><b>Link</b></td>
			<td><input type="text" name="link" value="<?php echo $link;?>">
			</td>
		</tr>
		
		
		<tr>
			<td colspan="2" align="center">
				<input type="submit" name="sb" value="Submit">
				<input type="reset" name="sb" value="Reset"></td>
		</tr>
	</table>
	</form>
	
	