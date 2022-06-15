<?php
include 'db.php';
$selectquery = "select * from student";
$query = mysqli_query($con,$selectquery);
$result = mysqli_num_rows($query);
$res = mysqli_fetch_array($query);
echo $result;
echo $res[1]

?>