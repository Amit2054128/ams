<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/ams.ico">
    <title>Add student</title>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Lato&family=Roboto:wght@300&display=swap');

        @import url('https://fonts.googleapis.com/css2?family=Lato&family=Roboto:wght@300&display=swap');

        * {
            margin: 0;
            padding: 0;
            text-decoration: none;
            list-style: none;


        }

        body {
            font-family: 'Lato', sans-serif;
            font-family: 'Roboto', sans-serif;
            background-color: #F4FCD9;
            /* font-family: montserrat; */

        }

        nav {
            height: 80px;
            width: 100%;
            background-color: #34495e;

        }

        label.logo {
            font-size: 35px;
            /* font-weight: bold; */
            color: white;
            padding: 0 30px;
            line-height: 80px;
        }

        nav ul {
            float: right;
            margin-right: 40px;
        }

        nav li {
            display: inline-block;
            margin: 0 8px;
            line-height: 80px;
        }

        nav a {
            color: white;
            font-size: 18px;
            text-transform: uppercase;
            display: inline-block;
            position: relative;
            right: 80px;

        }

        a::after {
            bottom: 25px;
            content: "";
            display: block;
            height: 3px;
            left: 50%;
            position: absolute;
            background: white;
            transition: width 0.3s ease 0s, left 0.3s ease 0s;
            width: 0;
            margin-bottom: auto;
        }

        a:hover:after {
            width: 100%;
            left: 0;

        }

        nav #icon {
            color: white;
            font-size: 30px;
            line-height: 80px;
            float: right;
            margin-right: 40px;
            cursor: pointer;
            display: none;
        }

        ul li ul {
            background-color: #34495e;
            visibility: hidden;
            opacity: 0;

            position: absolute;
            transition: all 5.5s ease;
            margin-top: 1px;
            display: none;
        }

        ul li:hover>ul,
        ul li ul:hover {
            visibility: visible;
            opacity: 1;
            display: block;


        }

        ul li ul li {
            position: relative;
            left: 80px;
            clear: both;
            width: 100%;
        }

        @media (max-width: 1048px) {
            label.logo {
                font-size: 32px;
                padding-left: 60px;
            }

            nav ul {
                margin-right: 20px;
            }

            nav a {
                font-size: 17px;

            }


        }

        @media (max-width:909px) {
            nav #icon {
                display: block;


            }

            nav ul {
                position: fixed;
                width: 100%;
                height: 100vh;
                background-color: #2f3640;
                top: 80px;
                left: -100%;
                text-align: center;
                transition: all .5s;
            }

            nav li {
                display: block;
                margin: 50px 0;
                line-height: 30px;


            }

            nav a {
                font-size: 20px;
            }

            nav ul.show {
                left: 0;
            }

        }

        .wrapper {
            position: relative;
            left: 35%;
            top: 50px;
            width: 400px;
            background-color: #fff;
            border-radius: 5px;
        }

        .wrapper .title {
            line-height: 80px;
            background-color: #34495e;
            border-radius: 5px 5px 0 0;
            font-size: 25px;
            font-weight: bold;
            text-align: center;
            color: wheat;
        }

        .wrapper form {
            padding: 30px 20px 25px 20px;
        }

        .wrapper form .row {
            height: 45px;
            margin-bottom: 25px;
            position: relative;

        }

        .row small {
            position: relative;
            left: 10px;

        }

        .wrapper form .row input {
            height: 100%;
            width: 100%;
            outline: none;
            padding-left: 10px;
            border-radius: 5px;
            color: #34495e;
            /* background-color: red; */
            border: 1px solid lightgray;
        }

        .wrapper form .row select {
            height: 100%;
            color: #34495e;
            width: 100%;
            outline: none;
            padding-left: 10px;
            border-radius: 5px;
            border: 1px solid lightgray;
        }


        .wrapper form .button input {
            padding-left: 0;
            background-color: #34495e;
            font-size: 20px;
            color: #fff;
        }

        input[type="checkbox"] {
            position: relative;
            margin: 5px;
        }

        /* float label start */
        .float-input:focus {
            outline: none;
        }

        .float-label {
            position: absolute;
            left: 10px;
            color: #34495e;
            font-size: 15px;
            top: 10px;
            pointer-events: none;
            transition: 0.3s;
        }

        .float-input:focus~label,
        .float-input:not(:placeholder-shown)~label {
            top: -8px;
            background-color: white;
            padding: 0 5px;
            color: #34495e;
            font-size: 13px;
        }

        /* float label close */
    </style>
</head>

<body>
    <nav>
        <label class="logo">AMS</label>
        <ul>
            <li><a class="" style="right: 20px;" href="main.php">Home</a></li>-
            <li><a style="right: 20px;" href="student1.php">student</a>

                <ul>
                    <li><a href="studentDetail.php">Student Detail</a></li>
                    <li><a href="addstudent.php">Add Student</a></li>
                </ul>


            </li>
            <li><a style="right: 20px;" href="">teacher</a></li>
            <li><a style="right: 20px;" href="attendances.php">attendence</a></li>
            <li><a style="right: 20px;" href="">report</a></li>
            <li><a style="right: 20px;" href="logout.php">Logout</a></li>


        </ul>
        <label for="" id="icon">
            <i class="fas fa-bars"></i>
        </label>
    </nav>

    <div class="wrapper">
        <div class="title">
            <span>Add Student</span>
        </div>
        <form action="#" method="post">
        <div class="row" id="name">
                <input class="float-input" type="text" placeholder=" " name="rollNo" id="f_name">
                <label class="float-label">Roll No</label>

            </div>
            <div class="row" id="name">
                <input class="float-input" type="text" placeholder=" " name="name" id="f_name">
                <label class="float-label">Name</label>

            </div>
            <div class="row" id="username">
                <input class="float-input" type="text" placeholder=" " name="email" id="user_name">
                <label class="float-label">email</label>


            </div>

            <div class="row" id="phone_number">
                <input class="float-input" type="text" placeholder=" " name="address" id="fphone">
                <label class="float-label">Address</label>
            </div>
            <div class="row" id="faculty">
                <input class="float-input" type="text" placeholder=" " name="faculty" id="faculty">
                <label class="float-label">faculty</label>
            </div>
           

            <div class="row button">
                <input type="submit" value="Add" name="add" >
            </div>
        </form>
    </div>


    <script src="https://kit.fontawesome.com/30e2cd6711.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script>
        $(document).ready(function() {
            $('#icon').click(function() {
                $('ul').toggleClass('show')
            })
        })
    </script>

<?php 
include 'db.php';
    if(isset($_POST['add'])){
      $stdroll =     $_POST['rollNo'];
      $stdName =  $_POST['name'];
      $stdEmail =  $_POST['email'];
      $stdAddress =  $_POST['address'];
      $faculty = $_POST['faculty'];
      $sql = "INSERT INTO students (std_id, std_name, std_email, std_address, std_faculty ) VALUES('$stdroll', '$stdName','$stdEmail','$stdAddress','$faculty')";
      $query = mysqli_query($con, $sql);
      if($query){
          
          echo "<script>alert('added');</script>";
          echo "<meta http-equiv=refresh content=\"0; url=addstudent.php\">";
         
      }else{
        echo "<script>alert('opps somthing wrong');</script>";

      }
    }
    
    ?>


</body>

</html>

<!-- if($result){
              $subjectid = mysqli_insert_id($con);
               $sql3 = "INSERT INTO attendances (student_id,subject_id) VALUES ('$studentId', '$subjectid')";
              $result1= mysqli_query($con,$sql3); 
               
          } -->
          <!-- $studentId = mysqli_insert_id($con);
          $sql2 = "INSERT INTO subject(sub_name,stu_id) VALUES('$subject','$studentId')";
          $result = mysqli_query($con,$sql2); -->

