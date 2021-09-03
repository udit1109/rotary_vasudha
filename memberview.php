<?php
	include('header.html');
?>

<body class="single-page causes-page">
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1>Membership Details</h1>
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container -->
    </div><!-- .page-header -->

<?php
	

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
		<td><b>Image</b></td>
		
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
		$up=$row[8];
		echo "<tr>
					<td>".$sno."</td>
					<td>".$mid."</td>
					<td>".$fnm."</td>
					<td>".$lnm."</td>
					<td>".$r1."</td>
					<td>".$spn."</td>
					<td>".$eid."</td>
					<td><img height=100 width=100 src='upload/".$up."'></td>
					
				</tr>";
	}
	echo "</table>";
	
	include('footer.html');
?>
</body>