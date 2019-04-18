<?php
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
        <li><a href="#" data-toggle="modal" data-target="#myModal2">
        <span class="glyphicon glyphicon-log-in"></span> Request Status </a></li>
      </ul>
    </div>
  </div>
</nav>
  
<div class="container text-center">    
<br />
<div class="jumbotron">
    <h2>Change Password</h2> 
   <form method="POST">  
   <div class="form-group">
          <label for="sel1">Select Blood Group:</label>
          <input type="text" name="password" /> 
     </div> 

<div class="form-group">
        <button type="submit" name="searchblood" class="btn btn-danger">Search Blood</button>
</div>   
    
    </form>
    
</div>  
<div class="jumbotron">
    <h2>Search Your Required Blood</h2> 
   <form method="POST">  
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
          <label for="sel1">Select City:</label>
          <select class="form-control" name="city" id="city" required="">
            <option value="Meerut">Meerut</option>
            <option value="Delhi">Delhi</option>
            <option value="Gaziabad">Gaziabad</option>
            <option value="Noida">Noida</option>
          </select>
</div> 
<div class="form-group">
        <button type="submit" name="searchblood" class="btn btn-danger">Search Blood</button>
</div>   
    
    </form>
    
</div>  

<div class="jumbotron">
    <h2>Available Blood Unit</h2> 
 <table class="table table-striped">
    <thead>
      <tr>
        <th>Srno.</th>
        <th>Hospital Name</th>
        <th>Address</th>
        <th>Contact Number</th>
        <th>Unit Available</th>
        <th>Request Unit</th>
        <th>&nbsp;</th>
      </tr>
    </thead>
    <tbody style="text-align: left;">
      <tr>
        <td>John</td>
        <td>Doe</td>
        <td>john@example.com</td>
        <td>john@example.com</td>
        <td>john@example.com</td>
        <td> <input type="number" name="bloodsample" min="0" class="form-control" required=""></td>
        <td><button type="submit" name="requestblood" class="btn btn-danger">Request</button>
        </td>
      </tr>
    </tbody>
  </table>    
  </div>
  
</div><br/>

<footer class="container-fluid text-center">
  <p>Footer Text</p>
</footer>

</body>
</html>
