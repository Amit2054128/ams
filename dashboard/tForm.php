<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sidebar Menu</title>
    <link rel="stylesheet" href="../dashboard/css/dashboard.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css" integrity="sha256-46r060N2LrChLLb5zowXQ72/iKKNiw/lAmygmHExk/o=" crossorigin="anonymous" />

</head>

<body>


    <div class="right">
        <a href="logout.php"><button><i class="fa fa-power-off">&nbsp; LOGOUT</i></button></a>
    </div>

        <form method="post" action="tForm.php" style="margin-left: 25%; margin-top:10%;margin-right:10%; color:beige; border: 1px dotted white;">

            <table cellpadding="13" width="5%" align="center" cellspacing="30" style="padding-left: 10%;">

                <tr>
                    <td colspan=2>
                        <center>
                            <font size=6><b>Teacher Registration</b></font>
                        </center>
                    </td>
                </tr>
                <tr>
                    <td>Full Name</td>
                    <td><input type=text name="tName" id="tName" size="60"></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type=email name="tEmail" id="TEmail" size="60"></td>
                </tr>
               

                <tr>
                    <td> Address</td>
                    <td><input type="text" name="tAddress" id="tAddress" size="60"></td>
                </tr>
                <tr>
                    <td> Username</td>
                    <td><input type="text" name="tUname" id="tUname" size="60"></td>
                </tr>
                <tr>
                    <td> Password</td>
                    <td><input type="password" name="tPass" id="emailid" size="60"></td>
                </tr>

           <tr>
           <td><button name="addTeacher" style="height:39px; width:90px; color:white; background-color:#e6a12c; border-radius:12px;">Add</button></td>

                </tr>
           
            </table>
        </form>




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
 
    <?php
include ('db.php');
    if(isset($_POST['addTeacher'])){
      $tName =     $_POST['tName'];
      $tEmail =  $_POST['tEmail'];
      $tAddress =  $_POST['tAddress'];
      $tUname =  $_POST['tUname'];
      $tPass=  $_POST['tPass'];
      
      
      if(!empty($tName) && !empty($tAddress) && !empty($tEmail) && !empty($tUname) && !empty($tPass)){
        $query = "INSERT INTO teacher( teacher_name,teacher_email,teacher_address,teacher_username,teacher_password) VALUES('{$tName}','{$tEmail}','{$tAddress}','{$tUname}','{$tPass}')";
        mysqli_query($con,$query);
          echo "<script>alert('Successfully added');</script>"; 
          echo "<meta http-equiv=refresh content=\"0; url=teachers.php\">";
      }
        else{
          echo "<script>alert('opps somthing wrong');</script>";
        }
        $con->close();
      }
    
    
    
    
    ?>


</body>

</html>

