<?php
include ('db.php');

if (isset($_GET['aedit'])) {
    $Id = $_GET['aedit']; 

    $sql = "SELECT * FROM admin WHERE admin_id={$Id}";
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
                                    <font size=6><b>Update Admin Details</b></font>
                                </center>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <input type="text" name="Id" value="<?php echo $row['admin_id'] ?>">
                        </tr>
                        <tr>
                            <td>Name</td>
                            <td><input type=text name="Name" id="aName" size="60" value="<?php echo $row['admin_name'] ?>"></td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td><input type=email name="Email" id="aEmail" size="60" value="<?php echo $row['admin_email'] ?>"></td>
                        </tr>
                        <tr>
                            <td>Address</td>
                            <td><input type="text" name="Address" id="tAddress" size="60" value="<?php echo $row['admin_address'] ?>"></td>
                        </tr>
                        <tr>
                            <td>Address</td>
                            <td><input type="text" name="phone" id="aAddress" size="60" value="<?php echo $row['admin_phone'] ?>"></td>
                        </tr>

                        <tr>
                            <td>Username</td>
                            <td><input type="text" name="Uname" id="aUname" size="60" value="<?php echo $row['admin_username'] ?>"></td>
                        </tr>
                        <tr>
                            <td>Password</td>
                            <td><input type="password" name="Pass" id="aPass" size="60" value="<?php echo $row['admin_password'] ?>"></td>
                        </tr>


                        <tr>
                            <td><button name="updateAdmin" style="height:39px; width:90px; color:white; background-color:#e6a12c; border-radius:12px;">Update</button></td>
                            
                        </tr>

                    </table>
                </form>
            </div>
        </div>

       

       

<?php
        include ('db.php');


        if (isset($_POST['updateAdmin'])) {

            $Name =     $_POST['Name'];
            $Email =  $_POST['Email'];
            $Address =  $_POST['Address'];
            $phone =  $_POST['phone'];
            $Uname =  $_POST['Uname'];
            $Pass =  $_POST['Pass'];
            $Id =  $_POST['Id'];


            $sql = "UPDATE admin SET admin_id='$Id', admin_name = '$Name',admin_email='$Email', admin_phone = '$phone',  admin_address='$Address',admin_username='$Uname',admin_password='$Pass'  WHERE admin_id =' $Id'";
            if ($con->query($sql) === TRUE) {
                echo "<script>alert('Update Success!')</script>";
                echo "<meta http-equiv=refresh content=\"0; url=admin.php\">";
            } else {
                echo "Erorr while updating record : " . $con->error;
            }
        }

        ?>





</body>

</html>