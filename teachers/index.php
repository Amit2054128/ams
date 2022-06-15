<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Welcome</title>
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
    <div class="home" id="home">
        <header class="header">
            <div class="left"><img src="images/logo.png" alt=""><b>AMS</b>

            </div>
            <div class="mid">
                <ul class="navbar">
                    <li><a href="#home"><i class="fa fa-home">&nbsp;<b>Home</b></i></a></li>
                    <li><a href="student.php"><i class="fa fa-users">&nbsp; <b>Students</b></i></a></li>
                    <li><a href="teacher.php"><i class="fa fa-user-secret">&nbsp; <b>Teachers</b></i></a></li>
                    <li><a href="attendance.php"><i class="fa fa-table">&nbsp;<b>Attendance</b></i></a></li>
                    <li><a href="report.php"><i class="fa fa-file-excel-o">&nbsp; <b>Report</b></i></a></li>

                </ul>
            </div>
            <div class="right">
                <a href="logout.php"><button><i class="fa fa-power-off">&nbsp; LOGOUT</i></button></a>
            </div>
        </header>
        <br>
        <div class="container">
            <?php
            if ($_SESSION["uName"]) {
            ?>
                <h1 style="font-size:20px">Welcome!!&nbsp; <?php echo "" . $_SESSION["uName"]; ?></h1>
            <?php
            }
            ?>
        </div>

        <br>
        <div class="class">
            <h2>BCA 6<sup>th</sup> Semester</h2>
        </div>
        <br>

        <div class="title">
            <img src="images/tc.png" alt="bg1">
            <h1 >Attendance</h1>
            <h2>Management</h2>
            <h3>System</h3>
        </div>

        <h1 style="color:white;  font-family: Courier New;">
            <?php
            // Set the new timezone
            date_default_timezone_set('Asia/Kathmandu');
            $date = date('d-m-y');
            $time = date('h:i:s');
            echo "Date :&nbsp;" . $date . "<br>";
            echo "Time :&nbsp;" . $time;
            ?>
        </h1>
    </div>


</body>

</html>