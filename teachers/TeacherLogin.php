<?php


//login
if(isset($_POST['signin']))
{
    session_start();
    include 'db.php';

    $username=$_POST['username'];
    $password=$_POST['pass'];
    $iquery="SELECT * FROM teacher";
    $result= $con->query($iquery);
    while($row = $result->fetch_assoc())
    {
        if($row==TRUE)
        {
            if($row["teacher_username"]=="$username" && $row["teacher_password"]=="$password")
            {
                $_SESSION['uName']=$row["teacher_username"];
                
                echo "<script>alert('You are logged in');</script>";
                header('Location: main.php' );
            } 
            
            
        }
}
echo "<script>alert('username and password doesnot match');</script>";
echo "<meta http-equiv=refresh content=\"0; url=TeacherLogin.php\">";
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login1.css">
    <title>login</title>
</head>
<body>
    <div class="wrapper">
        <div class="title">
            <span>Teacher Login</span>
        </div>
        <form action="#" method="post">
            <div class="row">
                <i class="fas fa-user"></i>
                <input type="text" placeholder="username" name="username">
            </div><div class="row">
                <i class="fas fa-lock"></i>
                <input type="password" placeholder="password" name="pass" id="psw">
            </div>
            <div><input type="checkbox" onclick="hideshow()" name="">show password</div>
            <div class="row button">
                <input type="submit" value="login" name="signin" >
                
               
            </div>
            
            
        </form>
    </div>
    
    <script src="https://kit.fontawesome.com/30e2cd6711.js" crossorigin="anonymous"></script>
    <script>
        function hideshow(){
            var password =  document.getElementById('psw')
            if(password.type == "password"){
                password.type = "text";
            }else{
                password.type = "password"
            }

        }

    </script>

</body>
</html>