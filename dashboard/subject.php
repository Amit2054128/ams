


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>subjects</title>
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
  <div class="container">
    <div class="row" style="margin-left:35%; margin-top:10%;">
      <div class="col-md-12">
        <form method="post" action="subject.php">
        <input type="hidden" name="sub_id" value="<?php echo $data['subject_id']?>" />
          <label for="name" style="color:white;">
            Subject Name
          </label> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;

          <input type="text" name="subName" id="subName" style="width:50%; height:28px;"  >&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;


  <button name="addSubject" style="height:39px; width:90px; color:white; background-color:#e6a12c; border-radius:12px;">ADD</button>
  
         

        </form>
      </div>
    </div>
    <div class="row" style="border:1px dotted white; padding:3%; margin-right:5%; margin-top:4%; margin-left:30%;">
      <div class="col-md-12">
        <table cellpadding="2" cellspacing="7" border="1" class="table" style="margin-left:20%; margin-top:3%; width:60%; color:aliceblue">
          <thead>
            <h1 style=" color:white; margin-left:40%; margin-top:2%;">Subjects</h1>
            <tr>
              <th scope="col">Subject ID</th>
              <th scope="col">Subject Name</th>
              <th scope="col" colspan="2">Action</th>
            </tr>
          </thead>
          <tbody>
            <?php
            include ('db.php');
            $selectquery = "select * from subject";
            $query = mysqli_query($con, $selectquery);
            while ($res = mysqli_fetch_array($query)) {
            ?>
              <tr style="text-align: center;">
                <td><?php echo $res['subject_id'] ?></td>
                <td><?php echo $res['subject_name'] ?></td>
                <td><a class="text-decoration-none color-dark" style="color: white;  height:25px; width:120px;" href="subEdit.php?edit=<?php echo $res['subject_id']; ?> "><i class="fa fa-edit" name="editSubject"></i></a></td>
                <td><a class="text-decoration-none color-dark" style="color: white;  height:25px; width:120px;" href="remove.php?delete=<?php echo $res['subject_id']; ?> "><i class="fa fa-trash"></i></a></td>
              </tr>
            <?php
            }

            ?>
          </tbody>
        </table>
      </div>
    </div>
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

  <?php
  include ('db.php');
  if (isset($_POST['addSubject'])) {
    $subName =    $_POST['subName'];
if (!empty($subName)) {
      $query = "INSERT INTO subject(subject_name) VALUES('{$subName}')";
      mysqli_query($con, $query);
      echo "<script>alert('Successfully added');</script>";
      echo "<meta http-equiv=refresh content=\"0; url=subject.php\">";
    } else {
      echo "<script>alert('opps somthing wrong');</script>";
    }
    // $con->close();
  }

  

 
  
  ?>





</body>

</html>
?>
