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
 
  <style>
.checked {
    color: orange;
}
</style>

<script>
var app = angular.module('myApp', []);
app.controller('customersCtrl', function($scope, $http) {
    $http.get("cities.php")
    .then(function (response) {$scope.cities = response.data.result;});
});
</script>
	</head>
	
	
	
	
    <body>
	<!-- Main navigation bar -->
	 <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php">SearchIt</a>
    </div>
	
    <ul class="nav navbar-nav navbar-right">
	 
      
      <li class="active"><a href="login.php">LogIn with Google</a></li>
	  
	  
	
    </ul>
	
      
    
	
    
  </div>
   
   <div class="container-fluid">
  <ul class="nav navbar-nav navbar-right">
	<li class="active">
          <a href="" >Select city</a></li>
   
       
		 <li>  
	   <form class="navbar-form pull-left" action="" method="POST">
	   <div class="form-group" ng-app="myApp" ng-controller="customersCtrl">
	   <select ng-model="selectedCar" name="city" id="city">
<option ng-repeat="x in cities" value="{{x.hcity}}">{{x.hcity}}</option>
</select>
      </div>
		<button type="submit" class="btn btn-dark btn-sm" id="citysrc" name ="citysrc" style="background-color: #333333; color: white;" >apply</button>
		</form></li> 
		
	
		
		
		</ul>
        
		
  </div>
  <div class="container-fluid">
  <ul class="nav navbar-nav navbar-right">
            <a href="login.php" class="navbar-brand" >You need to login to book!</a>
			</ul>
  </div>
</nav> 


<div class='container'>
    <div class='row'>
        <form role="form" class="form-horizontal"  action="" method="post"  style="padding:50px;">
        <div class='span3 input-append' style=" margin-left:20%" >
            <input class="span2" style="height:26px;width:600px;" ng-model="srctxt" ng-change="change(text)" name="src" id="src" type="text" placeholder="Search by Hotel or City..." >
            <input class="btn btn-large btn-primary"  type="submit" value="search" name="findbtn" id="findbtn">
        </div>

        </form>
    </div>
</div>
<div class="col-sm-10">

<?php
if(!isset($_POST['findbtn'])&&!isset($_POST['citysrc'])){
	?>
	
	<div class="container">
  
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="https://www.adelaidehoteltoronto.com/wp-content/uploads/sites/13/2017/07/adelaide-hotel-toronto-king-bed-suite-1280x700.jpg" alt="" style="width:100%;">
      </div>

      <div class="item">
        <img src="https://www.corinthia.com/application/files/6315/0460/7084/corinthia-hotel-tripoli-lobby.jpg" alt="" style="width:100%;">
      </div>
    
      <div class="item">
        <img src="http://www.komooksivalai.com/images/800x600/photogallery.dataphoto.106.jpg" alt="" style="width:100%;">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

	
	<?php
}

else{
	
include("connection.php");

if(isset($_POST['citysrc'])){
	$key=$_POST['city'];
	$x="%".$key."%";
	$sql="select * from hotels where hcity like '$x' order by hprice";
}
else if(isset($_POST['findbtn'])){
$key=$_POST['src'];
$x="%".$key."%";
$sql="select * from hotels where hname like '$x' order by hprice";
}

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

	<div class="w3-hover-shadow " >	
	 <div class="w3-container w3-light">
	 
	 <hr>
	 
	 <h2>
	 Hotel Name:
	 <?php
	echo $row['hname']."<br>";?>
	</h2>
	<h5> City:
	<?php echo $row['hcity']."<br>";?>
	Address:
	<?php echo $row['haddr']."<br>";?>
	Reference:
	<?php
	echo $row['hreference']."<br>";?>
	
	</h5>
	<div class="w3-container " >
	
	<h4>Offer: Rs.
	<?php
	echo $row['hprice']."<br>"; ?>
	
	Rating:
	<?php $t=$row['hstars'];
	for($i=0;$i<5;$i++){
		if($t>0){ $txt="checked";}
		else $txt="";
		
		?>
		
		<span class="fa fa-star <?php echo $txt;?>"></span>
		<?php
		$t--;
	}?>
	</h4>
	
	</div>
	
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
	}
}?>
	
</div>
		
 


</body>
</html>