<?php

session_start();

if(isset($_SESSION['uName']))
{
	unset($_SESSION['uName']);

}

header("Location: TeacherLogin.php");
die;
?>