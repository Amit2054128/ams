<?php
include ('db.php');

if (isset($_GET['id'])) {
    $stdId = $_GET['id'];

    $sql = "SELECT * FROM students WHERE std_id={$stdId}";
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
                                    <font size=6><b>Update Student Details</b></font>
                                </center>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <input type="text" name="stdId" value="<?php echo $row['std_id'] ?>">
                        </tr>
                        <tr>
                            <td>Roll no</td>
                            <td><input type=text name="stdRoll" id="roll" size="60" value="<?php echo $row['std_id'] ?>"></td>
                        </tr>
                        <tr>
                            <td>Name</td>
                            <td><input type=text name="stdName" id="textname" size="60" value="<?php echo $row['std_name'] ?>"></td>
                        </tr>
                        <tr>
                            <td>Address</td>
                            <td><input type="text" name="stdAddress" id="address" size="60" value="<?php echo $row['std_address'] ?>"></td>
                        </tr>

                        <tr>
                            <td>Email</td>
                            <td><input type="text" name="stdEmail" id="emailid" size="60" value="<?php echo $row['std_email'] ?>"></td>
                        </tr>


                        <tr>
                            <td><button name="updateStudent" style="height:39px; width:90px; color:white; background-color:#e6a12c; border-radius:12px;">Update</button></td>
                            
                        </tr>

                    </table>
                </form>
            </div>
        </div>

       

       

<?php
        include ('db.php');


        if (isset($_POST['updateStudent'])) {

            $stdRoll =     $_POST['std_id'];
            $stdName =  $_POST['stdName'];
            $stdAddress =  $_POST['stdAddress'];
            $stdEmail =  $_POST['stdEmail'];
            $stdId =  $_POST['stdId'];


            $sql = "UPDATE students SET std_id='$stdId',std_name='$stdName',std_address='$stdAddress',std_email='$stdEmail'  WHERE std_id =' $stdId'";
            if ($con->query($sql) === TRUE) {
                echo "<script>alert('Update Success!')</script>";
                echo "<meta http-equiv=refresh content=\"0; url=students.php\">";
            } else {
                echo "Erorr while updating record : " . $con->error;
            }
        }

        ?>





</body>

</html>