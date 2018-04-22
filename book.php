<?php

include("connection.php");
include_once 'gpConfig.php';

$uid=$_SESSION['id'];

$bname=$_POST['name'];
$hname=$_POST['hname'];
$href=$_POST['href'];
$stime=$_POST["stm"];
       $etime=$_POST["etm"];
	   $stime= date("Y-m-d", strtotime($stime));
	   $etime= date("Y-m-d", strtotime($etime));

			$sql="INSERT INTO bookings(oauth_uid,bname,hname,hreference,bsdate,bedate) VALUES('$uid','$bname','$hname','$href','$stime','$etime')";
			$result=mysqli_query($conn, $sql);
			if($result)
			{

				header("location:myBookings.php");
			
			}
			else echo "error with booking".mysqli_error($conn);
		
		?>