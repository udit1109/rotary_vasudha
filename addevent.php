<?php
	session_start();
	if(!isset($_SESSION['udit'])){
  header('location:adminlogin.php');
  }
	include('aheader.html');
?>

<html>
<head>
		<title>Insert New Events</title>
		<link rel="stylesheet" href="style.css">
	<?php
			$con=mysqli_connect('localhost','rotaryva_vasudha','vasudha@123','rotaryva_vasudha');
			if(!$con)
			{
				die("Connection Failed");
			}
			$s="select max(Sno) from addevent";
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
	
<head>
<link rel="stylesheet" type="text/css" href="form.css">
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Add Issue</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
		<script>

			$(function () {
						$("#datepicker").datepicker({ dateFormat: "yy-mm-dd", changeMonth: true, changeYear: true });
					});
		</script>
</head>


</head>
<body>
		<h1 align="center"><b> Insert New Event</b><h1>
		<form action="addevent1.php" method="post" enctype="multipart/form-data">
		
		
		
		
		<table  border=3 height= 75% width=40% align="center">
		<tr>
			<td align="center"><b>S No.</b></td>
			<td><?php echo $sno; ?><input type="hidden" name="sno" value="<?php echo $sno; ?>"></td>
		</tr>
		

		<tr>
			<td align="center"><b>Event Name</b></td>
			<td><input type="text" name="enm">
			<?php	
					if(isset($_SESSION['enm']))
						echo $_SESSION['enm'];
			?>
			</td>
		</tr>
		<tr>
			<td align="center"><b>Date</b></td>
			<td><input type="text" name="datepicker" id="datepicker">
			<?php	
					if(isset($_SESSION['datepicker']))
						echo $_SESSION['datepicker'];
			?>
			</td>
		</tr>
		<tr>
			<td align="center"><b>Category</b></td>
			<td><select name="category">
				<option value="">Select</option>
				<option value="Community">Community</option>
				<option value="Disease Prevention & Treatment">Disease Prevention & Treatment</option>
				<option value="Vocational">Vocational</option>
				<option value="Basic Education & Literacy">Basic Education & Literacy</option>
				<option value="Environment">Environment</option>
				<option value="Peacebuilding & Conflict Management">Peacebuilding & Conflict Management</option>
				<option value="Maternal & Child Health">Maternal & Child Health</option>
			<?php	
					if(isset($_SESSION['category']))
						echo $_SESSION['category'];
			?>
			</td>
		</tr>
		<tr>
			<td align="center"><b>Event Summary</b></td>
			<td><textarea col="50" rows="5" name="summary"></textarea>
			<?php
				if(isset($_SESSION['summary']))
						echo $_SESSION['summary'];
			?></td>
		</tr>
		<tr>
			<td align="center"><b>Rotarian Menhours</b></td>
			<td><input type="number" name="rhour">
			<?php
				if(isset($_SESSION['rhour']))
						echo $_SESSION['rhour'];
			?></td>
		</tr>
		<tr>
			<td align="center"><b>Volunteer Menhours</b></td>
			<td><input type="number" name="vhour">
			<?php
				if(isset($_SESSION['vhour']))
						echo $_SESSION['vhour'];
			?></td>
		</tr>
		<tr>
			<td align="center"><b>Beneficiaries</b></td>
			<td><input type="number" name="bene">
			<?php
				if(isset($_SESSION['bene']))
						echo $_SESSION['bene'];
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
		<tr >
			<td align="center"><b>Upload Image</b></td>
			<td><input type="file" name="up2">
			</td>
		</tr>
		<tr >
			<td align="center"><b>Upload Image</b></td>
			<td><input type="file" name="up3">
			</td>
		</tr>
		<tr >
			<td align="center"><b>Upload Image</b></td>
			<td><input type="file" name="up4">
			</td>
		</tr>
		<tr >
			<td align="center"><b>Upload Image</b></td>
			<td><input type="file" name="up5">
			</td>
		</tr>
		<tr>
			<td colspan="2" align="center">
				<input type="submit" name="sb" value="Submit">
				<input type="reset" name="sb" value="Reset"></td>
		</tr>
		

		</table>
		</form>
</body>
<?php
	$_SESSION['sno']="";
	$_SESSION['enm']="";
	$_SESSION['datepicker']="";
	$_SESSION['category']="";
	$_SESSION['summary']="";
	$_SESSION['rhour']="";
	$_SESSION['vhour']="";
	$_SESSION['bene']="";
	$_SESSION['up']="";
	$_SESSION['up2']="";
	$_SESSION['up3']="";
	$_SESSION['up4']="";
	$_SESSION['up5']="";
?>

<?php
	include('footer.html');
?>
	