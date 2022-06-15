<?php


//login
if(isset($_POST['signin']))
{
    session_start();
    include 'db.php';

    $username=$_POST['username'];
    $password=$_POST['pass'];
    $password=md5($password);
    $iquery="SELECT * FROM teachers";
    $result= $con->query($iquery);
    while($row = $result->fetch_assoc())
    {
        if($row==TRUE)
        {
            if($row["tuser"]=="$username" && $row["tpass"]=="$password")
            {
                $_SESSION['uName']=$row["tname"];
                
                echo "<script>alert('You are logged in');</script>";
                header('Location: index.php' );
            } 
            
            
        }
}
echo "<script>alert('Invalid Data');</script>";
echo "<meta http-equiv=refresh content=\"0; url=tlogin.php\">";
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

    <title>Login </title>
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
            
            <h1>Teacher Login</h1>
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
                    <input type="password" name="pass" placeholder="Enter Password" >
                </span><br>
                <button name="signin">LOGIN</button>
                <br>
                <h4>Don't have an account?</h4><br><button class="sign"><a href="tsign.php">SIGN UP</a></button>
            </form>
        </div>
    </div>
</body>

</html>
