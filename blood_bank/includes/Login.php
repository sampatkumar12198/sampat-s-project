
<div id="myModal2" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Login</h4>
      </div>
      <div class="modal-body">
     
       <form method="POST">
        <div class="form-group">
          <label for="usr">Email:</label>
          <input type="email" name="email" class="form-control" id="usr" required="">
        </div>
        <div class="form-group">
          <label for="pwd">Password:</label>
          <input type="password" name="pwd" class="form-control" id="pwd" required="">
        </div>
        <div class="form-group">
          <label for="sel1">Select User:</label>
          <select class="form-control" name="utype" id="utype" required="">
            <option value="Hospital">Hospital</option>
            <option value="Patient">Patient</option>
            
          </select>
        </div>
        <div class="form-group">
        <button type="submit" name="submitlogin" class="btn btn-danger">Login</button>
        </div>
      </form>
       
<?php
if(isset($_POST['submitlogin']))
        {
$email=$_POST['email'];$pwd=$_POST['pwd'];  $utype=$_POST['utype'];
$database->authentication($email,$pwd,$utype);                       
        }

?> 
       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>