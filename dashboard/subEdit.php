<?php
include ('db.php');

if (isset($_GET['edit'])) {
    $subId = $_GET['edit'];

    $sql = "SELECT * FROM subject WHERE subject_id={$subId}";
    $result = $con->query($sql);

    $data = $result->fetch_assoc();

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
         <div class="row" style="margin-left:15%; margin-top:15%; margin-right:15%; border:1px dotted white; padding:25px;">
            <div class="col-md-12">
                <form method="post" style="margin-left:9%">

                    <input type="hidden" name="subject_id" value="<?php echo $data['subject_id'] ?>">
                    <label for="name" style="color:white;">
                        Subject ID
                    </label> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                    <input type="text" name="subject_id" id="subId" style="width:50%; height:28px;" value="<?php echo $data['subject_id'] ?>" /><br>

                    <label for="name" style="color:white;">
                        Subject Name
                    </label> &nbsp;
                    <input type="text" name="subject_name" id="subName" style="width:50%; height:28px;" value="<?php echo $data['subject_name'] ?>" />&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;

                    <button name="update" style="height:39px; width:90px; color:white; background-color:#e6a12c; border-radius:12px;">Update</button>



                </form>
            </div>
        </div> 

        <?php
         include ('db.php');


        if (isset($_POST['update'])) {

            $subject_name = $_POST['subject_name'];


             $subject_id = $_POST['subject_id'];

             $sql = "UPDATE subject SET subject_name = '$subject_name', subject_id='$subject_id' WHERE subject_id = $subject_id";
             if ($con->query($sql) === TRUE) {
                 echo "<script>alert('Update Success!')</script>";
                 echo "<meta http-equiv=refresh content=\"0; url=subject.php\">";
             } else {
                echo "Erorr while updating record : " . $con->error;
            }
     } 
     ?>