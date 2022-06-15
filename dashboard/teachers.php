<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>teachers</title>
    <link rel="shortcut icon" href="../teachers/images/ams.ico" type="image/x-icon">
    <link rel="stylesheet" href="../dashboard/css/dashboard.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css" integrity="sha256-46r060N2LrChLLb5zowXQ72/iKKNiw/lAmygmHExk/o=" crossorigin="anonymous" />
    <style>
    table {
                font-family: arial, sans-serif;
                border-collapse: collapse;
                width: 60%;
                margin-top: 1%;
                margin-left: 20%;
                
                }
                th{
                background-color: #34495e;
                color: white;

                }

                td, th {
                border: 1px solid #dddddd;
                text-align: left;
                padding: 8px;
                }
      </style>

</head>
<body>
<div class="left">
     <h1 style="color:white;  font-family: Poppins , sans-serif; margin-left: 24%; margin-top:2%; font-size:17px; ">
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


    <div class="right">
        <a href="logout.php"><button><i class="fa fa-power-off">&nbsp; LOGOUT</i></button></a>
    </div>
    <br>
    <div class="middle">
        <form action="tsearch.php" method="post" style="margin-left:40%; margin-top:9%; color:white">
            <h3>Search by:</h3>
           
            <label for="id">Teacher id</label>&nbsp;
            <input type="text" name="tId" id="tId" style="border-radius:5px; height:25px; width:190px;">&nbsp;&nbsp;
            <button name="tSearch" style="height:39px; width:90px; color:white; background-color:#e6a12c; border-radius:12px;">Search</button>
        </form>
        <a href="tForm.php" style="text-decoration: none; color:azure; font-size:medium;"> <button style="margin-left:25%; margin-top:2%; height:50px; width:120px; background-color:#65858a; border-radius:12px">
                ADD MORE</a>
        </button>
        <table cellpadding="25" cellspacing="2" border="1" class="table" style="margin-left:25%; margin-top:3%; width:70%; color:aliceblue">
            <thead>
                <tr>
                    <th scope="col">Teacher ID</th>

                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Address</th>
                    <th scope="col">Username</th>
                    <th scope="col">Password</th>

                    <th scope="col" colspan="2">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include ('db.php');
                $selectquery = "select * from teacher";
                $query = mysqli_query($con, $selectquery);
                while ($res = mysqli_fetch_array($query)) {
                ?>
                    <tr style="text-align: center;">
                    <td><?php echo $res['teacher_id'] ?></td>
                        <td><?php echo $res['teacher_name'] ?></td>
                        <td><?php echo $res['teacher_email'] ?></td>
                        <td><?php echo $res['teacher_address'] ?></td>
                        <td><?php echo $res['teacher_username'] ?></td>
                        <td><?php echo $res['teacher_password'] ?></td>

                        <td><a class="text-decoration-none color-dark" style="color: white;  height:25px; width:120px;" href="tedit.php?tedit=<?php echo $res['teacher_id']; ?> "><i class="fa fa-edit"></i></a></td>
                        <td><a class="text-decoration-none color-dark" style="color: white;  height:25px; width:120px;" href="remove.php?tdelete=<?php echo $res['teacher_id']; ?> "><i class="fa fa-trash"></i></a></td>
                    </tr>
                <?php
                }

                ?>
            </tbody>
        </table>
    </div>

    <div class="container">
        <input type="checkbox" id="check">
        <!-- <label for="check" class="open"><i class="fas fa-bars"></i></label> -->
        <div class="sidebar-wrapper">
            <div class="sidebar">
                <div class="avatar-wrapper">
                    <!-- <label for="check" class="close"><i class="fas fa-times"></i></label> -->
                    <img class="avatar" src="../images/logo.png" alt="avatar">
                    <p class="userName">AMS</p>
                </div>
                <nav>
                    <ul class="menu">
                        <li><a href="dashboard.php"><i class="fa fa-home"></i> Dashboard</a></li>
                        <li><a href="students.php"><i class="fa fa-graduation-cap"></i> Students</a></li>
                        <li><a href="teachers.php"><i class="fa fa-users"></i> Teachers</a></li>
                        <li><a href="subject.php"><i class="fa fa-book"></i> Subjects</a></li>
                        <li><a href="treport.php"><i class="fa fa-file"></i> Todays Report</a></li>
                        <li><a href="dreport.php"><i class="fa fa-newspaper"></i> Daily Reports File</a></li>
                        <li><a href="admin.php"><i class="fa fa-cog"></i>admin</a></li>

                    </ul>
                </nav>
            </div>
        </div>
    </div>






</body>

</html>