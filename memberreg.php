<?php
	session_start();
	if(!isset($_SESSION['udit'])){
  header('location:adminlogin.php');
  }
  
	include('aheader.html');
	$con=mysqli_connect('localhost','rotaryva_vasudha','vasudha@123','rotaryva_vasudha');
			if(!$con)
			{
				die("Connection Failed");
			}
			$s="select max(Sno) from memberreg";
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
?>

<html>
<head>
		<title>Member Registration</title>
		<link rel="stylesheet" href="style.css">
</head>
<body>
		<h1 align="center"><b> Member Registration Form</b><h1>
		<form action="memberreg1.php" method="post" enctype="multipart/form-data">
		<table  border=3 height= 75% width=40% align="center">
		<tr>
			<td colspan="2" align="center" style="color:red;">
				<?php	
					if(isset($_SESSION['err']))
						echo $_SESSION['err'];
				?>
			</td>
		</tr>
		<tr>
			<td align="center"><b>S No.</b></td>
			<td><?php echo $sno; ?><input type="hidden" name="sno" value="<?php echo $sno; ?>">
			<?php	
					if(isset($_SESSION['sno']))
						echo $_SESSION['sno'];
			?>
			</td>
		</tr>
		<tr>
			<td align="center"><b>Membership ID</b></td>
			<td><input type="number" name="mid">
			<?php	
					if(isset($_SESSION['mid']))
						echo $_SESSION['mid'];
			?>
			</td>
		</tr>
		<tr>
			<td align="center"><b>First Name</b></td>
			<td><input type="text" name="fnm" minlength="3" requied>
			<?php	
					if(isset($_SESSION['fnm']))
						echo $_SESSION['fnm'];
			?>
			</td>
		</tr>
		<tr>
			<td align="center"><b>Last Name</b></td>
			<td><input type="text" name="lnm"  minlength="3" requied>
			<?php	
					if(isset($_SESSION['lnm']))
						echo $_SESSION['lnm'];
			?>
			</td>
		</tr>
		<tr>
			<td align="center"><b>Gender</b></td>
			<td><input type="radio" name="r1" value="Male">Male
				<input type="radio" name="r1" value="Female">Female
			<?php
				if(isset($_SESSION['r1']))
						echo $_SESSION['r1'];
			?></td>
		</tr>
		<tr>
			<td align="center"><b>Sponsored by</b></td>
			<td><input type="text" name="spn">
			<?php
				if(isset($_SESSION['spn']))
						echo $_SESSION['spn'];
			?></td>
		</tr>
		
		<tr>
			<td align="center"><b>Email id</b></td>
			<td><input type="email" name="eid" required>
			<?php
				if(isset($_SESSION['eid']))
						echo $_SESSION['eid'];
			?></td>
		</tr>
		<tr>
			<td align="center"><b>Mobile no.</b></td>
			<td><input type="tel" name="mobile"  required>
			<?php
				if(isset($_SESSION['mobile']))
						echo $_SESSION['mobile'];
			?></td>
		</tr>
		<tr >
			<td align="center"><b>Upload Image</b></td>
			<td><input type="file" name="up">
			<?php
				if(isset($_SESSION['up']))
						echo $_SESSION['up'];
			?></td>
		</tr>
		<tr>
			<td colspan="2" align="center">
				<input type="submit" name="sb" value="Insert">
				<input type="reset" name="sb" value="Reset"></td>
		</tr>
		

		</table>
		</form>
</body>
<?php
	$_SESSION['mid']="";
	$_SESSION['fnm']="";
	$_SESSION['lnm']="";
	$_SESSION['r1']="";
	$_SESSION['spn']="";
	$_SESSION['eid']="";
	$_SESSION['mobile']="";
	$_SESSION['up']="";
?>

<?php
	include('footer.html');
?>
	