<?php
	session_start();
	if(!isset($_SESSION['mid'])){
  header('location:adminlogin.php');
  }
	include('uheader.html');
?>

<html>
<head>
		<title>Insert New Scrapbooks</title>
		<link rel="stylesheet" href="style.css">
	<?php
			$con=mysqli_connect('localhost','rotaryva_vasudha','vasudha@123','rotaryva_vasudha');
			if(!$con)
			{
				die("Connection Failed");
			}
			$s="select max(Sno) from scrapbooks";
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
  <title>Add Scrapbooks</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
		
</head>


</head>
<body>
		<h1 align="center"><b> Insert New Scrapbooks</b><h1>
		<form action="u_addscrap1.php" method="post" enctype="multipart/form-data">
		
		
		
		
		<table  border=3 height= 75% width=40% align="center">
		<tr>
			<td align="center"><b>S No.</b></td>
			<td><?php echo $sno; ?><input type="hidden" name="sno" value="<?php echo $sno; ?>"></td>
		</tr>
		

		<tr>
			<td align="center"><b>Scrabook Name</b></td>
			<td><input type="text" name="snm">
			<?php	
					if(isset($_SESSION['snm']))
						echo $_SESSION['snm'];
			?>
			</td>
		</tr>
		<tr>
			<td align="center"><b>Link</b></td>
			<td><input type="text" name="link" >
			<?php	
					if(isset($_SESSION['link']))
						echo $_SESSION['link'];
			?>
			</td>
		</tr>
		<tr>
			<td colspan="2" align="center">
			<input type="submit" name="sb" value="Submit"></td>
		</tr>
		

		</table>
		</form>
</body>
<?php
	$_SESSION['sno']="";
	$_SESSION['snm']="";
	$_SESSION['link']="";
?>

<?php
	include('footer.html');
?>
	