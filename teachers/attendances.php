<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/ams.ico">
    <title>AMS</title>
</head>
<style>
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
        position: relative;
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
        width: 200%;
        visibility: hidden;
        opacity: 0;
        position: absolute;
        transition: all 5.5s ease;
        margin-top: 0.3px;
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

    @media (max-width: 1024px) {
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

    @media (max-width:768px) {
        nav #icon {
            display: block;


        }

        nav ul {
            position: fixed;
            width: 100%;
            height: 100vh;
            background-color: #2f3640;
            top: 80px;
            opacity: 1;
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

    table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 70%;
        margin-top: 1%;
        margin-left: 13%;

    }

    th {
        background-color: #34495e;
        color: white;

    }

    td,
    th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }
</style>

<body>
    <nav>
        <label style="font-weight: bold;" class="logo">AMS</label>
        <ul>
            <li><a class="" style="right: 20px;" href="main.php">Home</a></li>
            <li><a style="right: 20px;" href="#">student</a>

                <ul>
                    <li><a href="studentDetail.php">Student Detail</a></li>
                    <li><a href="addstudent.php">Add Student</a></li>
                </ul>
            </li>

            <li><a style="right: 20px;" href="attendances.php">attendence</a></li>
            <li><a style="right: 20px;" href="Report.php">report</a></li>
            <li><a style="right: 20px;" href="logout.php">Logout</a></li>


        </ul>
        <label for="" id="icon">
            <i class="fas fa-bars"></i>
        </label>
    </nav>

    <h2 style="text-align: center; margin-top: 10px;">attendance <?php echo date('Y-m-d') ?></h2>


    <label style="text-align: center; margin-left:42%; margin-top:10px;" for="">select subject</label>

    <select style="text-align: center; " name="course1" onchange="amit()" id="">
        <option value="">Subjects</option>
        <option value="np">Network programming</option>
        <option value="ds">Distributed system</option>
        <option value="aj">Advance Java</option>
        <option value="mp">Mobile programming</option>
        <option value="ae">Applied Economics</option>
    </select>
    <table>
        <table>
            <tr>
                <th>roll no</th>
                <th>Name</th>
                <th>email</th>
                <th>address</th>
                <th>action</th>

            </tr>
            <tbody>
                <?php
                include 'db.php';
                //  $selectquery = "select str.*, sr.sub_name, ar.status from attendance str , subject sr, attendances ar where  str.std_id=ar.status";
                $selectquery =  "select * from students";


                $query = mysqli_query($con, $selectquery);
                while ($res = mysqli_fetch_array($query)) {

                ?>
                    <tr>
                        <td><?php echo $res['std_id'] ?></td>
                        <td><?php echo $res['std_name'] ?></td>
                        <td><?php echo $res['std_email'] ?></td>
                        <td><?php echo $res['std_address'] ?></td>
                        <td>
                            <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" name="attendance">
                                <label for="">present</label>
                                <input type="radio" name="status" value="present" require>
                                <label for="">absent</label>
                                <input type="radio" name="status" value="absent" require>
                                <input type="hidden" name="std_id" value="<?php echo $res['std_id'] ?>">
                                <input type="hidden" name="course">
                                <input style=" width:100px; height:30px; background-color:#34495e;color:white; border-radius:5px;" type="submit" name="atn" value="save">




                            </form>
                            <!-- <script>
                                function amit() {
                                    var subPost = document.getElementsByName("course1")[0].value;
                                    var subject = document.getElementsByName('course');
                                    subject.forEach(function(e, index) {
                                        subject[index].value = subPost;

                                    });
                                }
                            </script> -->

                        </td>





                    <?php
                }

                    ?>
            </tbody>
        </table>

        </div>
        </div>
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

    

        <!-- include('db.php');


        if (isset($_POST['atn'])) {
            $subject = @$_POST['course'];
            $date = date('Y-m-d');
            $status = @$_POST['status'];
            $stdId = $_POST['std_id'];
            if (!empty($subject) && !empty($status)) {
                $q = "INSERT INTO attendances(course,status,date,student_id) VALUES('$subject','$status','$date','$stdId')";
                mysqli_query($con, $q);
                echo "<script>alert('recorded');</script>";
                echo "<meta http-equiv=refresh content=\"0; url=attendances.php\">";
            } else {
                echo "<script>alert('please select status');</script>";
                echo "<meta http-equiv=refresh content=\"0; url=attendances.php\">";
            }
        } -->

     
</body>

</html>
<!-- <button style="background-color: #DA1212 ; width:85px; height: 30px; border-radius:5px; border:1px solid"><a style="color: white" href="deletestudent.php?std_id=<?php echo $res['std_id']; ?> ">delete</a></button> -->