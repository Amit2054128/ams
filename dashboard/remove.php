<!-- delete students  -->
<?php
include ('db.php');
if (isset($_GET['id'])) {
    $std_id=$_GET['id'];
    mysqli_query($con,"DELETE FROM student WHERE std_id='$std_id' ");
   echo "<script>alert('Delete Success!')</script>";
      echo "<meta http-equiv=refresh content=\"0; url=students.php\">";
}
?>

<!-- delete teachers  -->
<?php
include ('db.php');
if (isset($_GET['tdelete'])) {
    $tId=$_GET['tdelete'];
    mysqli_query($con,"DELETE FROM teacher WHERE teacher_id='$tId' ");
   echo "<script>alert('Delete Success!')</script>";
      echo "<meta http-equiv=refresh content=\"0; url=teachers.php\">";
}
?>
<!-- subject teachers  -->
<?php
include ('db.php');
if (isset($_GET['delete'])) {
    $subId=$_GET['delete'];
    mysqli_query($con,"DELETE FROM subject WHERE subject_id='$subId' ");
   echo "<script>alert('Delete Success!')</script>";
      echo "<meta http-equiv=refresh content=\"0; url=subject.php\">";
}
?>

<!-- delete admin -->
<?php
include ('db.php');
if (isset($_GET['adelete'])) {
    $aId=$_GET['adelete'];
    mysqli_query($con,"DELETE FROM admin WHERE admin_id='$aId' ");
   echo "<script>alert('Delete Success!')</script>";
      echo "<meta http-equiv=refresh content=\"0; url=admin.php\">";
}
?>