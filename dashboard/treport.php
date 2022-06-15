<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>report</title>
    <link rel="shortcut icon" href="../teachers/images/ams.ico" type="image/x-icon">
    <link rel="stylesheet" href="../dashboard/css/dashboard.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css" integrity="sha256-46r060N2LrChLLb5zowXQ72/iKKNiw/lAmygmHExk/o=" crossorigin="anonymous" />
    <style>
      table {
                font-family: arial, sans-serif;
                border-collapse: collapse;
                width: 30%;
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
    <div style="text-align: center;" class="mainClass">
    <h3 style="color:white">Individual Report</h3><br>

<form method="post" action="">

<label style="color:white">Select Subject</label>
<select name="course">
<option  value="0">subjects</option>
     <option  value="np">Network Programming</option>
    <option  value="ds">Distributed System</option>
    <option  value="aj">Advance JAva</option>
    <option  value="mp">Mobile Programming</option>
    <option  value="ae">Applied Economics</option>
    
</select><br><br>
  <label style="color:white">Student Roll No.</label>
  <input type="text" name="sr_id"> 
  <input type="submit" style="width: 70px; height:25px; background-color:#34495e; color:white; border-radius:5px" name="sr_btn" value="search" >

</form>
    </div>
    <?php
    include_once('db.php');

        if (isset($_POST['sr_btn'])) {

          $sr_id = $_POST['sr_id'];
          $course = $_POST['course'];

          $single = "select student_id,count(*) as countP from attendances where attendances.student_id='$sr_id' and attendances.course = '$course' and attendances.status='present'";
          $single1 = mysqli_query($con,$single);
          $singleT = "select count(*) as countT from attendances where attendances.student_id='$sr_id' and attendances.course = '$course'";
          $singleT1 = mysqli_query($con,$singleT);
         
          //  $count_tot = mysql_num_rows($singleT);
        }
        ?>


 <form method="post" action="" class="form-horizontal col-md-6 col-md-offset-3">
            <table style="margin-left: 40%; margin-top:5%; color:white;" class="table table-striped">

              <?php


              if (isset($_POST['sr_btn'])) {

                $count_pre = 0;
                $i = 0;
                $count_tot;
                if ($row = mysqli_fetch_row($singleT1)) {
                  $count_tot = $row[0];
                }
                while ($data = mysqli_fetch_array($single1)) {
                  $i++;

                  if ($i <= 1) {
              ?>


                    <tbody>
                      <tr>
                        <td>Student Roll No: </td>
                        <td><?php echo $data['student_id']; ?></td>
                      </tr>

                      <?php
                      //}

                      // }

                      ?>

                      <tr>
                        <td>Total Class (Days): </td>
                        <td><?php echo $count_tot; ?> </td>
                      </tr>

                      <tr>
                        <td>Present (Days): </td>
                        <td><?php echo $data[1]; ?> </td>
                      </tr>

                      <tr>
                        <td>Absent (Days): </td>
                        <td><?php echo $count_tot -  $data[1]; ?> </td>
                      </tr>

                    </tbody>

              <?php

                  }
                }
              }
              ?>
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
                        <li><a href="admin.php"><i class="fa fa-cog"></i> admin</a></li>

                    </ul>
                </nav>
            </div>
        </div>
    </div>






</body>

</html>