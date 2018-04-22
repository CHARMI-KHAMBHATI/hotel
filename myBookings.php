<!DOCTYPE html>
<html>
    <head>
    <title>SearchIt</title>
	<link rel="stylesheet" href="styles.css">
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/moment.js/2.5.1/moment.min.js"></script>        
<script src="http://cdnjs.cloudflare.com/ajax/libs/moment.js/2.4.0/lang/en-gb.js"></script>                
<script src="http://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/3.0.0/js/bootstrap-datetimepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<!-- Angular JS -->

	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.2/angular.min.js"></script>

	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.2/angular-route.min.js"></script>


	


  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 

	</head>
	
	
	
	
    <body>
	<!-- Main navigation bar -->
	 <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="">SearchIt</a>
    </div>
	
    <ul class="nav navbar-nav navbar-right">
	  <li class="active"><a href="mybookings.php">My Bookings</a></li>
      
      <li class="active"><a href="logout.php">LogOut</a></li>
	  
	  
	
    </ul>
	
      
    
	
    
  </div>
   
   
 
</nav> 

<div class="col-sm-10">

<?php
include("connection.php");

include_once 'gpConfig.php';

$uid=$_SESSION['id'];


$sql="SELECT * FROM `bookings` WHERE oauth_uid='$uid'";


	$result=mysqli_query($conn, $sql);

	$rowcount=mysqli_num_rows($result);
	if($rowcount==0){
		
		?>
	<h2>Sorry No Results found!</h2>
	<?php
	}
	
	while($row=mysqli_fetch_array($result))
	{
		
?>

	<div class="w3-hover-shadow"  >	
	 <div class="w3-container w3-light">
	 
	 <hr>
	
	 
	 <h2 >
	 Booking Name:
	 <?php
	echo $row['bname']."<br>";?>
	 Hotel Name:
	 <?php
	echo $row['hname']."<br>";?>
	</h2>
	<h5>
	Reference:
	<?php
	echo $row['hreference']."<br>";?>
	Start Date:
	<?php
	echo $row['bsdate']."<br>";?>
	End Date:
	<?php
	echo $row['bedate']."<br>";?>
	
	</h5>
	
	
	<h4>
	<br>
	<br>
	
	</h4>
		
</div>


	<hr>
	
	</div>
	
<?php
	
	echo "<br>";
	echo "<br>";?>
<?php
	
}?>
	
</div>
		
 


</body>

</html>