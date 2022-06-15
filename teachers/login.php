<?php


//login
if(isset($_POST['login']))
{
    session_start();
    include 'db.php';

    $username=$_POST['username'];
    $password=$_POST['password'];
    $password=md5($password);
    $iquery="SELECT * FROM users";
    $result= $con->query($iquery);
    while($row = $result->fetch_assoc())
    {
        if($row==TRUE)
        {
            if($row["uname"]=="$username" && $row["password"]=="$password")
            {
                $_SESSION['uName']=$row["uname"];
                
                echo "<script>alert('You are logged in');</script>";
                header('Location: dashboard.php' );
            } 
            
            
        }
}
echo "<script>alert('Invalid Data');</script>";
echo "<meta http-equiv=refresh content=\"0; url=login.php\">";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="css/login.css">

    <title>Login and Sign up form</title>
    <style>
        .main  a{
    text-decoration: none;
    color: antiquewhite;
}
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            
            <h1>Admin Portal Login</h1>
        </div>
        <div class="main">
            <form method="post">
                <span>
                    <i class="fa fa-user"></i>
                    <input type="text" name="username" placeholder="Username">
                </span>
                <br>
                <span>
                    <i class="fa fa-lock"></i>
                    <input type="password" name="password" placeholder="Enter Password">
                </span><br>
                <button name="login">LOGIN</button>
                <br>
                <h4>Don't have an account?</h4><br><button class="sign"><a href="sign.php">SIGN UP</a></button>
            </form>
        </div>
    </div>
</body>

</html>
