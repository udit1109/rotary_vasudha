<?php
	session_start();
	if(!isset($_SESSION['mid'])){
  header('location:adminlogin.php');
}
	include('uheader.html');
		$con=mysqli_connect('localhost','rotaryva_vasudha','vasudha@123','rotaryva_vasudha');
		mysqli_select_db($con,'rotaryva_vasudha');
		$mid=$_SESSION['mid'];
		$s="select * from memberreg where Membership_ID=$mid";
		$r=mysqli_query($con, $s);
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
			
		}
		
		
	?>
	<h1 align="center"><b> Update Member Details</b><h1>
		<form action="updateprofile1.php" method="post" enctype="multipart/form-data">
		<table  border=3 height= 75% width=40% align="center">
	<tr>
		<td align="center"><b>Sno.</b></td>
		<!--// <td><?php echo $sno; ?><input type="hidden" name="sno" value="<?php echo $sno; ?>">-->
		<td><input type="number" name="sno" value="<?php echo $sno;?>"></td>
	</tr>
	<tr>
		<td align="center"><b>Membership ID</b></td>
		<td><?php echo $mid;?><input type="hidden" name="mid" value="<?php echo$mid;?>"></td>
	</tr>
	<tr>
		<td align="center"><b>First Name</b></td>
		<td><input type="text" name="fnm" value="<?php echo $fnm;?>"></td>
	</tr>

	<tr>
		<td align="center"><b>Last Name</b></td>
		<td><input type="text" name="lnm" value="<?php echo $lnm;?>"></td>
	</tr>
	<tr>
	
			<td align="center"><b>Gender</b></td>
				<td><input type="radio" name="r1" value="Male" <?php if($r1=="Male") echo"checked";?>>Male
					<input type="radio" name="r1" value="Female" <?php if($r1=="Female") echo"checked";?>>Female
				</td>
			</td>
	
	</tr>
	<tr>
		<td align="center"><b>Sponsored By</b></td>
		<td><input type="text" name="spn" value="<?php echo $spn;?>"></td>
	</tr>
	<tr>
		<td align="center"><b>Email ID</b></td>
		<td><input type="text" name="eid" value="<?php echo $eid;?>"></td>
	</tr>
	<tr>
		<td align="center"><b>Mobile</b></td>
		<td><input type="number" name="mobile" value="<?php echo $mobile;?>"></td>
	</tr>
	
	<tr >
			<td align="center"><b>Upload Image</b></td>
            <td><input type="file" name="up"><?php echo $up;?><input type="hidden" name="up" value="<?php echo$up;?>"></td>
           
					
	<tr>
		<td colspan="2" align="center">
		<input type="submit" name="sb" value="Update"></td>
	</tr>
	</table>
	</form>
	
	