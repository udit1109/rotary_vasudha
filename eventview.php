<?php
	

	include('header.html');
	$con=mysqli_connect('localhost','rotaryva_vasudha','vasudha@123','rotaryva_vasudha');
	mysqli_select_db($con,'rotaryva_vasudha');
	$s="select * from addevent";
	$r=mysqli_query($con, $s);
?>


<body class="single-page causes-page">






    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1>Events (2019-20)</h1>
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container -->
    </div><!-- .page-header -->


<?php
	echo "<h1 align='center'> Event Details (2019-20)</h1><table border='1' align='center'>
	<tr>
		<td><b>Sno.</b></td>
		<td><b>Event Name</b></td>
		<td><b>Date</b></td>
		<td><b>Category</b></td>
		<td><b>Rotarian Hours</b></td>
		<td><b>Volunteer Hours</b></td>
		<td><b>Beneficiaries</b></td>
		<td><b>Detaills</b></td>
		
	</tr>";
	while($row=mysqli_fetch_array($r))
	{
		$sno=$row[0];
		$enm=$row[1];
		$datepicker=$row[2];
		$category=$row[3];
		$summary=$row[4];
		$rhour=$row[5];
		$vhour=$row[6];
		$bene=$row[7];
		
		echo "<tr>
					<td>".$sno."</td>
					<td>".$enm."</td>
					<td>".$datepicker."</td>
					<td>".$category."</td>
					<td>".$rhour."</td>
					<td>".$vhour."</td>
					<td>".$bene."</td>
					<td><a href='detailevent2.php?a=$sno'>View Details</a></td>
					
				</tr>";
	}
	echo "</table>";
	
	include('footer.html');
?>