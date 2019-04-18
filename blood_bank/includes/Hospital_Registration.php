<?php

if(  isset($_POST['submit'])   ) {
$email=$_POST['email'];$password=$_POST['pwd'];
$hospital=$_POST['hospital'];$contact=$_POST['contact'];
$address=$_POST['address'];$city=$_POST['city'];
$database->hospital_insert($email,$password,$hospital,$contact,$address,$city);                           
                             }
?>
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Hospital Registration</h4>
      </div>
      <div class="modal-body">
       <h5>Login Information </h5>
       <hr />
       <form method="POST">
        <div class="form-group">
          <label for="usr">Email:</label>
          <input type="email" name="email" onkeyup="f1(this.value,this.id)" class="form-control" id="email" required="">
        </div>
        <div class="form-group">
          <label for="pwd">Password:</label>
          <input type="password" name="pwd" onkeyup="f1(this.value,this.id)" class="form-control" id="pwd" required="">
        </div>
       <h5>Contact Information </h5>
       <hr /> 
        <div class="form-group">
          <label for="pwd">Hospital:</label>
          <input type="text" name="hospital" onkeyup="f1(this.value,this.id)" class="form-control" id="hospital" required="">
        </div>
        <div class="form-group">
          <label for="pwd">Contact:</label>
          <input type="text" name="contact" onkeyup="f2(this.value,this.id)" placeholder="Do Not Use Country Code"  maxlength="10" class="form-control" id="contact" required="">
        </div>
        <div class="form-group">
          <label for="comment">Address:</label>
          <textarea class="form-control" name="address" onkeyup="f1(this.value,this.id)" rows="5" cols="" id="address" required=""></textarea>
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
        <button type="submit" name="submit" class="btn btn-danger">Register Yourself</button>
        </div>
      </form>
       
       
       
       
       
       
       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
