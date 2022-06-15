<?php
include 'db.php';
$id = $_GET['std_id'];
$q = "DELETE FROM `students` WHERE std_id= $id ";
mysqli_query($con, $q);
header('Location:studentDetail.php');
?>