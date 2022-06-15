<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "ams";

$con=new mysqli($dbhost,$dbuser,$dbpass,$dbname);


//admin sign up
    // if(isset($_POST['submit']))
   
    // {
    //     $username=$_POST['username'];
    //     $address=$_POST['address'];
    //     $password=$_POST['password'];
    //     $password=md5($password);
    //     $cpassword=$_POST['cpass'];
    //     $cpassword=md5($cpassword);

    //     if(!empty($username)&& !empty($password) &&($password===$cpassword))
    //     {
    //         $query="INSERT INTO users (uname,address,password,cpassword) VALUES('{$username}','{$address}','{$password}','{$cpassword}')";
    //         mysqli_query($con,$query);
    //         echo "<script>alert('Successfully Signed up');</script>";
    //         echo "<meta http-equiv=refresh content=\"0; url=login.php\">";
     
    //         }
        

    //         else
    //      {
    //          echo"<script>alert('Please Enter Some Valid Data');</script>";
    //          echo "<meta http-equiv=refresh content=\"0; url=sign.php\">";
    //      }
         
    // }

   
  
    
    

?>
