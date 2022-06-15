<?php
session_start()
?>
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
        position: relative;
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
        visibility: hidden;
        opacity: 0;

        position: absolute;
        transition: all 5.5s ease;
        width:200% ;
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
        
            #slider {
                margin-top: 5px;
                width: 99%;
                margin-left: 7px;
            overflow: hidden;
        }
        #slider figure {
            position: relative;
            width: 500%;
            margin: 0;
            left: 0;
            animation: 20s slider infinite;
        }
        #slider figure img {
            
            height: 600px;
            width: 20%;
            float: left;
        }

        @keyframes slider {
            0% {
                left: 0;
            }
            20% {
                left: 0;
            }
            25% {
                left: -100%;
            }
            45% {
                left: -100%;
            }
            50% {
                left: -200%;
            }
            70% {
                left: -200%;
            }
            75% {
                left: -300%;
            }
            95% {
                left: -300%;
            }
            100% {
                left: -400%;
            }
        }
        .image img{
            width: 20%;
            margin-left: 43%;
            margin-top: 6%;
    
    
 }

</style>

<body>  
    <nav>
        <label class="logo" style="font-weight: bold;">AMS</label>
        <ul>
            <li><a class="" style="right: 20px;" href="">Home</a></li>
                <li><a style="right: 20px;" href="#">student</a>
                    <ul>
                        <li><a href="studentDetail.php">Student Detail</a></li>
                        <li><a href="addstudent.php">Add Student</a></li>
                    </ul>
                </li>
            <li><a style="right: 20px;" href="attendances.php">attendence</a></li>
            <li><a style="right: 20px;" href="Report.php">report</a></li>
            <li><a style="right: 20px;" href="logout.php">Logout</a></li>
            <li>
            <?php
            if($_SESSION['uName']){
             ?>
             <p style="color: white;">Welcome &nbsp;<?php echo"".$_SESSION['uName'];?></p>
             <?php
            }
            ?>
            </li>
            


        </ul>
        <label for="" id="icon">
            <i class="fas fa-bars"></i>
        </label>
    </nav>
    <div class="image">
        <img src="../teachers/images/att.png" alt="">
        <h2 style="margin-left: 42%; font-weight: bold ; ">Attendance Management</h2>
        <h2 style="margin-left: 48%; font-weight: bold; ">system</h2>
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


</body>

</html>