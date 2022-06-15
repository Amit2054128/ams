<?php
include 'db.php';
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="css/sign.css">
    <title>Admin Sign up</title>
    
</head>
<body>
    <div class="container">
        <div class="header">
            
            <h1>Sign Up</h1>
        </div>
        <div class="main">
            <form action="db.php" method="post">
                <span>
                    <i class="fa fa-user"></i>
                    <input type="text" name="username" placeholder="Enter a username">
                </span>
                <br>
                <span>
                    <i class="fa fa-location-arrow"></i>
                    <input type="text" name="address" placeholder="Please enter Address">
                </span>
                <br>
                <span>
                    <i class="fa fa-lock"></i>
                    <input type="password" name="password" placeholder="Enter a password">
                
                </span>
                <br>
                <span>
                    <i class="fa fa-check-circle-o"></i>
                    <input type="password" name="cpass" placeholder="Confirm password">
                </span><br>
                <button name="submit">Submit</button>
                <br>
            </form>
        </div>
    </div>

    
</body>
</html>