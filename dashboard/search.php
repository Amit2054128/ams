<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>students</title>
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
     <table style="margin-left: 28%; margin-top:5%;" class="table table-stripped">
             <thead>
               <tr>
                 <th scope="col">rollno</th>
                 <th scope="col">Fullname</th>
                 <th scope="col">Address</th>
                 <th scope="col">email</th>
                 <th scope="col">faculty</th>
               </tr>
            </thead>
            <?php
        include('db.php');
        if (isset($_POST['search'])) {
            $stdId = $_POST['stdId'];
            $sql = "SELECT * FROM students where std_id='$stdId'";
            $result = mysqli_query($con, $sql);

            while ($row = mysqli_fetch_array($result)) {
        ?>
                <tr style="color: white;">
                    <td><?php echo $row['std_id'] ?> </td>
                    
                    <td><?php echo $row['std_name'] ?></td>
                    <td><?php echo $row['std_address'] ?></td>
                    <td><?php echo $row['std_email'] ?></td>
                    <td><?php echo $row['std_faculty'] ?></td>



                </tr>



        <?php

            }
        }
            ?>
            </table>
     





  

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