<?php


include("connection.php");


$mysql_qry="select distinct hcity from hotels";

$result = mysqli_query($conn, $mysql_qry);


$r = mysqli_query($conn, $mysql_qry);

$result=array();

while($row=mysqli_fetch_array($r))
{
	array_push($result,array(
	
	'hcity'=>$row['hcity'],
	
	));
}
echo json_encode(array('result'=>$result));
?>
