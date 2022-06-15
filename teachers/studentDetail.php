<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/ams.ico">
    <title>Student Detail</title>
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

    table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 60%;
  margin-top: 1%;
  margin-left: 20%;
 
}
th{
background-color: #34495e;
color: white;

}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}
</style>

<body>
<nav>
        <label class="logo" style="font-weight: bold;">AMS</label>
        <ul>
            <li><a class="" style="right: 20px;" href="main.php">Home</a></li>
            <li><a style="right: 20px;" href="#">student</a>
            
            <ul >
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

    
    <div class="maindiv">
        <h2 style="text-align: center; margin-top: 10px;">Students detail</h2>
        <table>
        <tr>
    <th>roll no</th>
    <th>Name</th>
    <th>email</th> 
    <th>address</th>
    <th>Faculty</th>
    <th>action</th>

  </tr>
            <tbody>
            <?php
     include 'db.php';
     $selectquery = "select * from students";
   
     $query = mysqli_query($con,$selectquery);
     while($res = mysqli_fetch_array($query)){
       ?>
       <tr>
    <td><?php echo $res['std_id'] ?></td>
    <td><?php echo $res['std_name'] ?></td>
    <td><?php echo $res['std_email'] ?></td>   
    <td><?php echo $res['std_address'] ?></td>
    <td><?php echo $res['std_faculty'] ?></td>
    <td><button style="background-color: #0E3EDA ; width:85px; height: 30px; border-radius:5px; border:1px solid"><a style="color: white" href="updatestudent.php?id=<?php echo $res['std_id']; ?> ">update</a></button>
         <button style="background-color: #DA1212 ; width:85px; height: 30px; border-radius:5px; border:1px solid"><a style="color: white" href="deletestudent.php?std_id=<?php echo $res['std_id']; ?> ">delete</a></button>
        </td>
   
       <?php
     }

    ?>
            </tbody>
        </table>
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
</body>

</html>


<!-- <tr>
                    <td data-column="Roll No ">1</td>
                    <td data-column="Name">Amit Shah</td>
                    <td data-column="email">BCA</td>
                    <td data-column="Adress">Inaurwa</td>

                    <td data-column="action"><button style="background-color: #FF1818 ; width:85px; height: 30px; border-radius:5px; border:1px solid"><a style="color: wheat;" href="">Delete</a></button>
                        <button style="background-color: #0E3EDA ; width:85px; height: 30px; border-radius:5px; border:1px solid"><a style="color: wheat;" href="">Update</a></button>
                    </td>


                </tr> -->
                <!-- $selectquery = "SELECT * FROM students"; -->
                <!-- select str.*,sr.sub_name from students str, subject sr where str.std_id=sr.stu_id -->