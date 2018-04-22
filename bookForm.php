<!DOCTYPE html>
<html>
    <head>
    <title>searchIt</title>
	<link rel="stylesheet" href="styles.css">
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/moment.js/2.5.1/moment.min.js"></script>        
<script src="http://cdnjs.cloudflare.com/ajax/libs/moment.js/2.4.0/lang/en-gb.js"></script>                
<script src="http://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/3.0.0/js/bootstrap-datetimepicker.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script> 
  
	</head>
	
	
	
	
    <body >
	
	
	
	 <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="home.php">SearchIt</a>
    </div>
    <ul class="nav navbar-nav navbar-right">
     <li class="active"><a href="mybookings.php">My Bookings</a></li>
      <li class="active" ><a href="logout.php">logout</a></li>
	  
	  
	  
    </ul>
    
  </div>
</nav> 
<?php
	include_once 'gpConfig.php';
	
	include("connection.php");
	
	$uid=$_SESSION['id'];
	
	$hname=$_POST['hname'];
	$href=$_POST['hreference'];
	
	?>
	
<div class="container">
	
	<form role="form" class="form-horizontal" id="myForm" action="book.php" method="post"  style="padding:50px;">
	   <div class="form-group">
		<label for="title" class="control-label col-md-3">Booking in the name of:</label>
		<div class="col-md-6">
		<input type="text" name="name" id="name" class="form-control " required>
		
		</div>
		</div>
  
	 
	  <div class="form-group">
	  <label for="description" class="control-label col-md-3">Hotel Name</label>
	  <div class="col-md-6">
	  <input type="text" name="hname" id="hname" class="form-control " value="<?php echo $hname; ?>" required>
	  </div>
	  </div>
	  
	  <div class="form-group">
	  <label for="description" class="control-label col-md-3">Reference of</label>
	  <div class="col-md-6">
	  <input type="text" name="href" id="href" class="form-control " value="<?php echo $href; ?>" required>
	  </div>
	  </div>

	    <div class="form-group">
	  <label for="description" class="control-label col-md-3">Start Date</label>
	  <div class="col-md-6">
	   <div class='input-group date' id='datetimepicker6'>
                <input type='text' class="form-control btn-sm" name="stm" id="stm" required/>
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-calendar"></span>
                </span>
            </div>
			</div>
	  </div>
       
    <div class="form-group">
	  <label for="description" class="control-label col-md-3">End Date</label>
	  <div class="col-md-6">
    
            <div class='input-group date' id='datetimepicker7'>
                <input type='text' class="form-control btn-sm" name="etm" id="etm" required/>
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-calendar"></span>
                </span>
            
    </div>
	</div>
	  </div>
	  <div class="form-group">
	  <label for="description" class="control-label col-md-3"></label>
	  <div class="col-md-6">
	  
	 
	  <input type="submit" name="submit" id="submit" class="btn btn-success" style="background-color: #333333; color: white;">
	
	  </div>
	  </div>
	
	</form>
	
</div>

    
</body>

<script type="text/javascript">
    $(function () {
		
        $('#datetimepicker6').datetimepicker();
		
		
        $('#datetimepicker7').datetimepicker({
            useCurrent: false //Important! See issue #1075
        });
        $("#datetimepicker6").on("dp.change", function (e) {
            $('#datetimepicker7').data("DateTimePicker").setMinDate(e.date);
        });
        $("#datetimepicker7").on("dp.change", function (e) {
            $('#datetimepicker6').data("DateTimePicker").setMaxDate(e.date);
        });
    });
</script>
</html>