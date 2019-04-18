<?php
require("config.php");
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
        <li><a href="#" >
        <span class="glyphicon glyphicon-home"></span> Home</a></li>
      </ul>
    </div>
  </div>
</nav> 
<div class="container text-center">    
<br/>
<div class="jumbotron">
    <h2>Add Blood Unit</h2> 
    <form method="POST">
    <div class="form-group">
          <label for="pwd">Unit:</label>
          <input type="number" min="0" name="unit"  class="form-control"  required="">
        </div>
    <div class="form-group">
          <label for="sel1">Select Blood Group:</label>
          <select class="form-control" name="bgroup" id="bgroup" required="">
            <option value="A+">A+</option>
            <option value="B+">B+</option>
            <option value="AB+">AB+</option>
            <option value="A-">A-</option>
            <option value="O+">O+</option>
            <option value="O-">O-</option>
          </select>
    </div>
     <div class="form-group">
        <button type="submit" name="submitblood" class="btn btn-danger">
        Add Blood</button>
        </div>   
    </form>    
  </div>
<div class="jumbotron">
    <h2>Blood Unit Available</h2> 
 <table class="table table-bordered">
    <thead>
      <tr>
        <th>Srno.</th>
        <th>Blood Group</th>
        <th>Unit</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody style="text-align: left;">
      <tr>
        <td>1</td>
        <td>A-</td>
        <td>122</td>
        <td><a href="">Click Here</a></td>
      </tr>

    </tbody>   
    
    
    
  </div>
</div>  

</body>
</html>
