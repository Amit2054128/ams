<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="css/sign.css">
    <title>Teacher Signup</title>
    <style>
        .container{
            margin-top:2%;
        }
        .header
        {
            padding-top:1px;
        }
        .main select{
            width: 300px;
    height: 40px;
    border-bottom: 1px solid black;
    border-top: none;
    border-left: none;
    border-right: none;
    outline: none;
    padding-left: 40px;
    box-sizing: border-box;
    font-size: 15px;
    background-color: rgba(253, 253, 253, 0.1);
    margin-bottom: 20px;

}
.main select:hover{
    box-shadow: 2px 2px 5px rgb(19, 7, 7);

}
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            
            <h1>Sign Up</h1>
        </div>
        <div class="main">
            <form method="post">
            <span>
                    <i class="fa fa-user-circle"></i>
                    <input type="text" name="name" placeholder="Enter full name">
                </span>
                <br>
                <span>
                    <i class="fa fa-user"></i>
                    <input type="text" name="user" placeholder="Enter a username">
                </span>
                <br>
               
                <span>
                    <i class="fa fa-location-arrow"></i>
                    <input type="text" name="address" placeholder="Please enter Address">
                </span>
                <br>
                <span>
                    <i class="fa fa-book"></i>
                    <select name="subject">
                        <option value="0">--Select Subject--</option>
                        <option value="Distributed System">Distributed System</option>
                        <option value="Applied ECO">Applied Economics</option>
                        <option value="Mobile Programming">Mobile Programming</option>
                        <option value="Network Programming">Network Programming</option>
                        <option value="Advanced Java">Advanced Java</option>
                    </select>
                </span>
                <br>
                <span>
                    <i class="fa fa-phone"></i>
                    <input type="text" name="phone" placeholder="Your phone no.">
                
                </span>
                <br>
                <span>
                    <i class="fa fa-lock"></i>
                    <input type="password" name="pass" placeholder="Enter a password">
                </span>
                <br>

                <span>
                    <i class="fa fa-check-circle-o"></i>
                    <input type="password" name="cpass" placeholder="Confirm password">
                </span><br>
               
                <button name="sub">Submit</button>
                <br>
            </form>
        </div>
    </div>
//teacher sign up
<?php
include 'db.php';
    if(isset($_POST['sub']))
   
   {
       $name=$_POST['name'];
       $user=$_POST['user'];
       $address=$_POST['address'];
       $phone=$_POST['phone'];
       $subject=$_POST['subject'];
       $password=$_POST['pass'];
       $password=md5($password);
       $cpassword=$_POST['cpass'];
       $cpassword=md5($cpassword);

       if(!empty($user)&& !empty($password) && !is_numeric($name) && ($password===$cpassword))
       {
           $query="INSERT INTO teachers (tname,tuser,taddress,subject,phone,tpass,tcpass) VALUES('{$name}','{$user}','{$address}','{$subject}','{$phone}','{$password}','{$cpassword}')";
           mysqli_query($con,$query);
           echo "<script>alert('Successfully Signed up');</script>";
           echo "<meta http-equiv=refresh content=\"0; url=TeacherLogin.php\">";
    
           }
       

           else
        {
            echo"<script>alert('Please Enter Some Valid Data');</script>";
            echo "<meta http-equiv=refresh content=\"0; url=tsign.php\">";
        }
        $con->close();
   }

?>
</body>
</html>