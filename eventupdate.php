<?php
	session_start();
	if(!isset($_SESSION['udit'])){
  header('location:adminlogin.php');
  }
	include('aheader.html');
		$con=mysqli_connect('localhost','rotaryva_vasudha','vasudha@123','rotaryva_vasudha');
		mysqli_select_db($con,'rotaryva_vasudha');
		$sno=$_GET['a'];
		$s="select * from addevent where Sno=$sno";
		$r=mysqli_query($con, $s);
		while($row=mysqli_fetch_array($r))
		{
			$sno=$row[0];
			$ename=$row[1];
			$date=$row[2];
			$cat=$row[3];
			$sum=$row[4];
			$rh=$row[5];
			$vh=$row[6];
			$ben=$row[7];
			$p1=$row[8];
			$p2=$row[9];
			$p3=$row[10];
			$p4=$row[11];
			$p5=$row[12];
			
			
			
		}
		
		
	?>
	<h1 align="center"><b> Update Event</b><h1>
	<form action="eventupdate1.php" method="post" enctype="multipart/form-data">
		
		
		
		
	<table align="center" border="1">
		<tr>
			<td align="center"><b>S No.</b></td>
			<td><?php echo $sno; ?><input type="hidden" name="sno" value="<?php echo $sno; ?>"></td>
		</tr>
		

		<tr>
			<td align="center"><b>Event Name</b></td>
			<td><input type="text" name="ename" value="<?php echo $ename;?>"> </td>
		</tr>
		<tr>
			<td align="center"><b>Date</b></td>
			<td><input type="text" name="datepicker" id="datepicker" value="<?php echo $date;?>">
			</td>
		</tr>
		<tr>
			<td align="center"><b>Category</b></td>
			<td><select name="category">
				<option value="0">Select</option>
				<option value="Community" <?php if($cat=="Community") echo 'selected="selected"'; ?>>Community</option>
				<option value="Disease Prevention & Treatment" <?php if($cat=="Disease Prevention & Treatment") echo 'selected="selected"'; ?>>Disease Prevention & Treatment</option>
				<option value="Vocational" <?php if($cat=="Vocational") echo 'selected="selected"'; ?>>Vocational</option>
				<option value="Basic Education & Literacy" <?php if($cat=="Basic Education & Literacy") echo 'selected="selected"'; ?>>Basic Education & Literacy</option>
				<option value="Environment" <?php if($cat=="Environment") echo 'selected="selected"'; ?>>Environment</option>
				<option value="Peacebuilding & Conflict Management" <?php if($cat=="Peacebuilding & Conflict Management") echo 'selected="selected"'; ?>>Peacebuilding & Conflict Management</option>
				<option value="Maternal & Child Health" <?php if($cat=="Maternal & Child Health") echo 'selected="selected"'; ?>>Maternal & Child Health</option>
			
			</td>
		</tr>
		<tr>
			<td align="center"><b>Event Summary</b></td>
			<td><textarea col="50" rows="5" name="summary"> <?php echo $sum;?></textarea>
			</td>
		</tr>
		<tr>
			<td align="center"><b>Rotarian Menhours</b></td>
			<td><input type="number" name="rhour" value="<?php echo $rh;?>">
			</td>
		</tr>
		<tr>
			<td align="center"><b>Volunteer Menhours</b></td>
			<td><input type="number" name="vhour" value="<?php echo $vh;?>">
			</td>
		</tr>
		<tr>
			<td align="center"><b>Beneficiaries</b></td>
			<td><input type="number" name="bene" value="<?php echo $ben;?>">
			</td>
		</tr>
		<tr >
			<td align="center"><b>Upload Image</b></td>
			<td><input type="file" name="up"><?php echo $p1;?><input type="hidden" name="p1" value="<?php echo $p1; ?>">
			</td>
		</tr>
		<tr >
			<td align="center"><b>Upload Image</b></td>
			<td><input type="file" name="up2"><?php echo $p2;?><input type="hidden" name="p2" value="<?php echo $p2; ?>">
			</td>
		</tr>
		<tr >
			<td align="center"><b>Upload Image</b></td>
			<td><input type="file" name="up3"><?php echo $p3;?><input type="hidden" name="p3" value="<?php echo $p3; ?>">
			</td>
		</tr>
		<tr >
			<td align="center"><b>Upload Image</b></td>
			<td><input type="file" name="up4"><?php echo $p4;?><input type="hidden" name="p4" value="<?php echo $p4; ?>">
			</td>
		</tr>
		<tr >
			<td align="center"><b>Upload Image</b></td>
			<td><input type="file" name="up5"><?php echo $p5;?><input type="hidden" name="p5" value="<?php echo $p5; ?>">
			</td>
		</tr>
		
		<tr>
			<td colspan="2" align="center">
				<input type="submit" name="sb" value="Submit">
				<input type="reset" name="sb" value="Reset"></td>
		</tr>
	</table>
	</form>
	
	