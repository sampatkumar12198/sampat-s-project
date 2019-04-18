<?php
session_start();

require("find_classes/database.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Blood Bank </title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
    
  .carousel-inner img {
      width: 100%; /* Set width to 100% */
      margin: auto;
      min-height:200px;
  }

  /* Hide the carousel text when the screen is less than 600 pixels wide */
  @media (max-width: 600px) {
    .carousel-caption {
      display: none; 
    }
  }
  </style>
  
 <script>
 function f1(str,id)
 {   
  var data=str.toUpperCase();
  document.getElementById(id).value=data;
 }
 
 function f2(str,id)
 {   
  var data=document.getElementById(id).value;
  var value=isNaN(data);  
  if(value== true)
    {
   alert('Please Enter Numeric Value Only'); 
    }
        
 }
 </script>  
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#" style="color: white;font-family: fantasy; "> 
      
      Blood Bank Management System  
      
      </a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#" data-toggle="modal" data-target="#myModal2"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
         <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="img/c1.gif" alt="Image" />
        <div class="carousel-caption">
          <h3>Register For Hospitals</h3>
          <p></p>
        </div>      
      </div>

      <div class="item">
        <img src="img/c2.jpg" alt="Image" />
        <div class="carousel-caption">
          <h3>Register For Blood</h3>
          <p></p>
        </div>      
      </div>
      
      <div class="item">
        <img src="img/c3.jpg" alt="Image" />
        <div class="carousel-caption">
          <h3>Search For Blood Sample</h3>
          <p></p>
        </div>      
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>
<div class="container text-center">    
<br />
  
  <div class="row">
    <div class="col-sm-4">
      <a href="" data-toggle="modal" data-target="#myModal" >
      <span class="glyphicon glyphicon-user" style="font-size:230px;"></span>
    
      
      </span>
      
      </a>
      <p>Hospital Registration</p>
    </div>
    <div class="col-sm-4"> 
     <a href="" data-toggle="modal" data-target="#myModal1"><span class="glyphicon glyphicon-user" style="font-size:230px;"></span></a>
      <p>Patient Registration</p>    
    </div>
    <div class="col-sm-4">
      <div class="well">
       <p><h4>Services Available In</h4></p>
       <?php
       
      $database->get_blood_samples();
       ?>
      
      </div>
      
    </div>
  </div>
  
</div><br>

<footer class="container-fluid text-center">
  <p>Footer Text</p>
</footer>

</body>
</html>

<?php
require("includes/Hospital_Registration.php");
include("includes/Patient_Registration.php");
include("includes/Login.php");
?>

