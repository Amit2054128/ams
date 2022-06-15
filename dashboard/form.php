<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sidebar Menu</title>
    <link rel="stylesheet" href="../css/dashboard.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css" integrity="sha256-46r060N2LrChLLb5zowXQ72/iKKNiw/lAmygmHExk/o=" crossorigin="anonymous" />

</head>

<body>


    <div class="right">
        <a href="logout.php"><button><i class="fa fa-power-off">&nbsp; LOGOUT</i></button></a>
    </div>

    <form method="post" action="form.php" style="margin-left: 35%; margin-top:10%;margin-right:12%; color:beige; border: 1px dotted white;">

        <table cellpadding="12" width="50%" align="center" cellspacing="20" style="padding-left: 35px;">

            <tr>
                <td colspan=2>
                    <center>
                        <font size=6><b>Student Form</b></font>
                    </center>
                </td>
            </tr>
            <tr>
                <td>Roll no</td>
                <td><input type=text name="stdRoll" id="roll" size="60"></td>
            </tr>
            <tr>
                <td>Name</td>
                <td><input type=text name="stdName" id="textname" size="60"></td>
            </tr>
            <tr>
                <td>Address</td>
                <td><input type="text" name="stdAddress" id="address" size="60"></td>
            </tr>
            <tr>
                <td>Subject</td>
                <td>
                <select name="subId" class="form-select" style="width:100%;;">
                    <option>--Select Subject--</option>
                    <option value="100">Distributed System</option>
                    <option value="101">Network Programming</option>
                    <option value="102">Mobile Programming</option>
                    <option value="103">Advanced Java</option>
                    <option value="104">Applied Economics</option>
                </select>
                </td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="text" name="stdEmail" id="emailid" size="60"></td>
            </tr>


            <tr>
                <td colspan="2"><input type="submit" value="Submit " name="add" style="background-color:green; color:azure; height:50px; width:100px; border-radius:12px; font-size:18px;" /></td>
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
    include '..\website\db.php';
    if (isset($_POST['add'])) {
        $stdRoll =     $_POST['stdRoll'];
        $stdName =  $_POST['stdName'];
        $stdAddress =  $_POST['stdAddress'];
        $stdEmail =  $_POST['stdEmail'];
        $subId =  $_POST['subId'];
        $qry=("SELECT * FROM subject WHERE subject_id=$subId");
        $result = mysqli_query($con,$qry);
        $num_rows = mysqli_num_rows($result);
        if($num_rows > 0){
            if (!empty($stdName) && !empty($stdAddress) && !empty($stdEmail)) {
            $query=  "INSERT INTO student( std_roll,std_name,std_address,std_email,subject_id) VALUES('{$stdRoll}','{$stdName}','{$stdAddress}','{$stdEmail}','{$subId}')";
         mysqli_query($con, $query);
            echo "<script>alert('Successfully added');</script>";
            echo "<meta http-equiv=refresh content=\"0; url=students.php\">";
        } else {
            echo "<script>alert('opps somthing wrong');</script>";
        }
    
        // $con->close();
    }
}




    ?>


</body>

</html>