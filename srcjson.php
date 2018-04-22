<?php

include("connection.php");

$key=$_GET['q'];
$x="%".$key."%";
$mysql_qry="select * from hotels where hname like '$x'";

$result = mysqli_query($conn, $mysql_qry);


$r = mysqli_query($conn, $mysql_qry);

$result=array();

while($row=mysqli_fetch_array($r))
{
	array_push($result,array(
	'hname'=>$row['hname'],
	'hcity'=>$row['hcity'],
	
	));
}
echo json_encode(array('result'=>$result));
?>