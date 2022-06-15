<?php
include ('db.php');

if (isset($_GET['tedit'])) {
    $tId = $_GET['tedit'];

    $sql = "SELECT * FROM teacher WHERE teacher_id={$tId}";
    $result = $con->query($sql);

    $row = $result->fetch_assoc();

    $con->close();
}
?>

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


   
    <div class="container">
    
        <br>
        <div class="row" style="margin-left:15%; margin-top:8%;  margin-right:5%; border:1px dotted white; padding:25px;">
            <div class="col-md-12">
                <form method="post"  style=" color:beige; margin-left:15%">

                    <table cellpadding="12" width="50%" align="center" cellspacing="20" style="padding-left: 35px;">

                        <tr>
                            <td colspan=2>
                                <center>
                                    <font size=6><b>Update Teachers Details</b></font>
                                </center>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <input type="text" name="tId" value="<?php echo $row['teacher_id'] ?>">
                        </tr>
                        <tr>
                            <td>Name</td>
                            <td><input type=text name="tName" id="tName" size="60" value="<?php echo $row['teacher_name'] ?>"></td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td><input type=email name="tEmail" id="tEmail" size="60" value="<?php echo $row['teacher_email'] ?>"></td>
                        </tr>
                        <tr>
                            <td>Address</td>
                            <td><input type="text" name="tAddress" id="tAddress" size="60" value="<?php echo $row['teacher_address'] ?>"></td>
                        </tr>

                        <tr>
                            <td>Username</td>
                            <td><input type="text" name="tUname" id="tUname" size="60" value="<?php echo $row['teacher_username'] ?>"></td>
                        </tr>
                        <tr>
                            <td>Password</td>
                            <td><input type="password" name="tPass" id="tPass" size="60" value="<?php echo $row['teacher_password'] ?>"></td>
                        </tr>


                        <tr>
                            <td><button name="updateTeacher" style="height:39px; width:90px; color:white; background-color:#e6a12c; border-radius:12px;">Update</button></td>
                            
                        </tr>

                    </table>
                </form>
            </div>
        </div>

       

       

<?php
        include ('db.php');


        if (isset($_POST['updateTeacher'])) {

            $tName =     $_POST['tName'];
            $tEmail =  $_POST['tEmail'];
            $tAddress =  $_POST['tAddress'];
            $tUname =  $_POST['tUname'];
            $tPass =  $_POST['tPass'];
            $tId =  $_POST['tId'];


            $sql = "UPDATE teacher SET teacher_id='$tId', teacher_name = '$tName',teacher_email='$tEmail',teacher_address='$tAddress',teacher_username='$tUname',teacher_password='$tPass'  WHERE teacher_id =' $tId'";
            if ($con->query($sql) === TRUE) {
                echo "<script>alert('Update Success!')</script>";
                echo "<meta http-equiv=refresh content=\"0; url=teachers.php\">";
            } else {
                echo "Erorr while updating record : " . $con->error;
            }
        }

        ?>





</body>

</html>