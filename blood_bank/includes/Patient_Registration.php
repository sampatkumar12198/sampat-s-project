<?php

if(  isset($_POST['submitpatient'])   ) {
$email=$_POST['email'];$password=$_POST['pwd'];
$Name=$_POST['Name'];$contact=$_POST['contact'];
$purpose=$_POST['Purpose'];$bloodgroup=$_POST['bgroup'];
$address=$_POST['address'];$city=$_POST['city'];$submit=$_POST['submitpatient'];
$database->patient_insert($email,$password,$Name,$contact,$purpose,$bloodgroup,$address,$city);
                                        }
?>
 <div id="myModal1" class="modal fade" role="dialog">
   <div class="modal-dialog">

    <!-- Modal content-->
     <div class="modal-content">
         <div class="modal-header">
             <button type="button" class="close" data-dismiss="modal">&times;</button>
             <h4 class="modal-title">Patient Registration</h4>
         </div>
      <div class="modal-body">
          <h5>Login Information </h5>
           <hr />
         <form method="POST">
          <div class="form-group">
             <label for="usr">Email:</label>
             <input type="email" name="email" onkeyup="f1(this.value,this.id)" class="form-control" id="usr" required="">
          </div>
          <div class="form-group">
              <label for="pwd">Password:</label>
              <input type="password" name="pwd" onkeyup="f1(this.value,this.id)" class="form-control" id="pwd" required="">
          </div>
       <h5>Contact Information </h5>
       <hr /> 
         <div class="form-group">
              <label for="pwd">Name:</label>
              <input type="text" name="Name" onkeyup="f1(this.value,this.id)" class="form-control" id="Name" required="">
         </div>
            <div class="form-group">
                <label for="pwd">Contact:</label>
                <input type="text" name="contact" placeholder="Do Not Use Country Code"  maxlength="10" class="form-control" id="contact" required="">
            </div>
         <div class="form-group">
                <label for="pwd">Purpose:</label>
                <input type="text" name="Purpose" onkeyup="f1(this.value,this.id)"  class="form-control" id="Purpose" required="">
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
               <label for="comment">Address:</label>
               <textarea class="form-control" name="address" rows="5" cols="" id="address" required=""></textarea>
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
               <button type="submit" name="submitpatient" class="btn btn-danger">Register Yourself</button>
           </div>
          </form>
       
       
       
       
       
       
       
        </div>
            <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
           </div>
           </div>

   </div>
 </div>