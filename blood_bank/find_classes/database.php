<?php

class database{

public $connect;
    
public function connection()
        {
$this->connect=mysqli_connect("localhost","root","","bloodbank");        
        }    

public function checklogin()
{
if(!isset($_SESSION['uid']))  
    {
echo"<script>location.href='index.php';</script>";    
    }  
}

public function hospital_insert($email,$password,$hospital,$contact,$address,$city)
{
$this->connection();     
mysqli_query($this->connect,"insert into `hospital`(`email`,`password`,`hospital`,`contact`,
`address`,`city`) VALUES('$email','$password','$hospital','$contact','$address','$city') ");
echo" <script> alert('Submit Successfully');location.href='index.php'; </script>  "; 
          
}

public function patient_insert($email,$password,$Name,$contact,$purpose,$bloodgroup,$address,$city)
{
$this->connection();  
mysqli_query($this->connect,"insert into `patient`(`email`,`password`,`Name`,`contact`,`purpose`,`bloodgroup`,`address`,`city`) 
VALUES('$email','$password','$Name','$contact','$purpose','$bloodgroup','$address','$city')");
echo" <script> alert('Submit Successfully'); </script>  ";       
}


public function authentication($email,$pwd,$utype)
{
$this->connection();    
if($utype == "Hospital")    {
$res=mysqli_query($this->connect,"SELECT * FROM `hospital` WHERE `email`='$email' and `password`='$pwd'");
if(mysqli_num_rows($res) == 1)
        {
$_SESSION['uid']= $email;$_SESSION['utype']= $utype;                       
echo"<script>location.href='hospital_home.php';</script>";    
    
        }
 else
 {
echo"<script>alert('Your Login Id/Password does not exist');</script>";     
 }                                
                            }
else    {
$res1=mysqli_query($this->connect,"SELECT * FROM `patient` WHERE `email`='$email' and `password`='$pwd'");
if(mysqli_num_rows($res1) == 1)
        {
$_SESSION['uid']= $email; $_SESSION['utype']= $utype;              
echo"<script>location.href='patient_home.php';</script>";    
    
        }
 else
 {
echo"<script>alert('Your Login Id/Password does not exist');</script>";     
 }                                
     
        }        

    
}   
public function get_blood_samples()
                 {
$this->connection();                    
$sql=mysqli_query($this->connect,"SELECT  distinct(`city`) FROM `hospital` ");
while($fetch=mysqli_fetch_array($sql))
       {
?>        
<p style="text-align: left;" ><?php  print  $fetch[0];   ?></p>   
<?php      
        
       }
    
                   }                       
public function getname($uid,$usertype)
        {
if($usertype == "Hospital")    
{
$this->connection();  
$sql=mysqli_query($this->connect,"SELECT `hospital` FROM `hospital` WHERE `email`='$uid'"); 
$fetch=mysqli_fetch_array($sql); 
return $fetch[0];
} 
else
{
$this->connection();  
$sql=mysqli_query($this->connect,"SELECT `Name` FROM `patient` WHERE `email`='$uid'"); 
$fetch=mysqli_fetch_array($sql); 
return $fetch[0];    
    
}   
        }
    
                }

$database= new database();

?>