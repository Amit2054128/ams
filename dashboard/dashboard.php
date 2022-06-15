<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../teachers/images/ams.ico" type="image/x-icon">
    <link rel="stylesheet" href="../dashboard/css/dashboard.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css" integrity="sha256-46r060N2LrChLLb5zowXQ72/iKKNiw/lAmygmHExk/o=" crossorigin="anonymous" />
    <title>Dashboard</title>
    <style>
        .grid-container {
  display: grid;
  grid-template-columns:auto auto ;
  padding: 10px ;
  margin:15% 10% 10% 30%;
  column-gap: 50px;
  row-gap: 50px;

}
.grid-item {
  background-color: rgba(255, 255, 255, 0.8);
  border: 1px solid rgba(0, 0, 0, 0.8);
  border-radius:12px;
  padding: 20px ;
  font-size:26px;
  text-align: center;
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
      
      <div class="grid-container">
 
  <div class="grid-item" style="background-color:#3273a8; color:#fcfafb">Total Students
  <?php
                include ('db.php');
			$q=$con->query("SELECT std_id FROM students order by std_id");
		     $row=mysqli_num_rows($q);
             echo "<p style='color: beige; text-align: center;'>$row</p>"
			?>


</div>
  <div class="grid-item" style="background-color:#3273a8; color:#fcfafb">Total Subjects
  <?php
                include ('db.php');
			$q=$con->query("SELECT subject_id FROM subject order by subject_id");
		     $row=mysqli_num_rows($q);
             echo "<p style='color: beige; text-align: center;'>$row</p>"
			?>


</div>  
  
  <div class="grid-item" style="background-color:#5b8754; color:#fcfafb"> Total Presents 
  <?php
  $q=$con->query("SELECT status FROM attendances where status = 'present' ");
  $row=mysqli_num_rows($q);
             echo "<p style='color: beige; text-align: center;'>$row</p>"
      
  ?>
  </div>
 
  <div class="grid-item" style="background-color:#a83250; color:#fcfafb">Total Absent
  <?php
  $q=$con->query("SELECT status FROM attendances where status = 'absent' ");
  $row=mysqli_num_rows($q);
             echo "<p style='color: beige; text-align: center;'>$row</p>"
      
  ?>
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
                        <li><a href="admin.php"><i class="fa fa-cog"></i> Admin</a></li>
                    
                    </ul>
                </nav>
            </div>
        </div>
    </div>


</body>
</html>