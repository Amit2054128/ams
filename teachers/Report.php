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
    <title>Report</title>
</head>
<style>
                    @import url('https://fonts.googleapis.com/css2?family=Lato&family=Roboto:wght@300&display=swap');
                *{
                    margin: 0;
                    padding: 0;
                    text-decoration: none;
                    list-style: none;
                
                    
                }
                body{
                    font-family: 'Lato', sans-serif;
                    font-family: 'Roboto', sans-serif;
                    background-color: #F4FCD9;
                    /* font-family: montserrat; */
                    
                }
                nav{
                    height: 80px;
                    width: 100%;
                    background-color: #34495e;

                }
                label.logo{
                    font-size: 35px;
                    /* font-weight: bold; */
                    color: white;
                    padding: 0 30px;
                    line-height: 80px;
                }
                nav ul{
                    float: right;
                    margin-right: 40px ;
                }
                nav li{
                    display: inline-block;
                    position: relative;
                    margin: 0 8px;
                    line-height: 80px;
                }

                nav a{
                    color: white;
                    font-size: 18px;
                    text-transform: uppercase;
                    display: inline-block;
                    position: relative; 
                    right: 80px;
                    
                }
                a::after{
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
                a:hover:after{
                    width: 100%;
                    left: 0;

                }
                nav #icon{
                    color: white;
                    font-size: 30px;
                    line-height: 80px;
                    float: right;
                    margin-right: 40px;
                    cursor: pointer;
                    display: none;
                }

                ul li ul {
                    background-color:#34495e ;
                    visibility: hidden;
                    opacity: 0;
                    width:200% ;
                    margin-top: 0.3px;
                    position: absolute;
                    transition: all 5.5s ease;
                    margin-top:1px;
                    display: none;
                }
                ul li:hover > ul,
                ul li ul:hover{
                    visibility: visible;
                    opacity: 1;
                    display: block;

                
                }
                ul li ul li{
                position: relative;
                left: 80px; 
                    clear: both;
                    width: 100%;
                }
               
                .print button{
                    font-family: 'Lato', sans-serif;
                    font-family: 'Roboto', sans-serif;
                   border-radius: 5px;
                   color: white;
                    background-color: #34495e;
                    margin-left: 71%;
                    width: 9%;
                    height: 35px;
                    cursor: pointer;
                   
                }
                /* printing css */
                @media print{
                    .print{
                        display: none;
                    }
                    h3{
                        display: none;
                    }
                    .mainClass{
                        display: none;
                    }
                    .mreport{
                        display: none;
                    }
                    nav #icon{
                        display: none;
                    }
                }
                @page{
                    size: A4;
                    margin: 0;
                }
                /* printing css close */



                @media (max-width: 1048px) {
                    label.logo{
                        font-size: 32px;
                        padding-left: 60px ;
                    }
                    nav ul{
                        margin-right: 20px;
                    }
                    nav a{
                        font-size: 17px;

                    }

                    
                }
                @media (max-width:909px) {
                    nav #icon{
                        display: block;
                        

                    }
                    nav ul{
                        position: fixed;
                        width: 100%;
                        height: 100vh;
                        background-color: #2f3640;
                        top: 80px;
                        left: -100%;
                        text-align: center;
                        transition: all .5s ;
                    }
                    nav li{
                        display: block;
                        margin: 50px 0;
                        line-height: 30px;
                    

                    }
                    nav a{
                        font-size: 20px ;
                    }
                    nav ul.show{
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
        <label style="font-weight: bold;" class="logo">AMS</label>
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
    <div style="text-align: center;" class="mainClass">
                    <h3>Individual Report</h3><br>

                <form method="post" action="">

                        <label>Select Subject</label>
                        <select name="course">
                        <option  value="0">subjects</option>
                            <option  value="np">Network Programming</option>
                            <option  value="ds">Distributed System</option>
                            <option  value="aj">Advance JAva</option>
                            <option  value="mp">Mobile Programming</option>
                            <option  value="ae">Applied Economics</option>
                            
                        </select><br><br>
                        <label>Student Roll No.</label>
                        <input type="text" name="sr_id">
                        <input type="submit" name="sr_btn" value="search" >

                </form>
                  </div>
              <div class="mreport" style="text-align: center; margin-top:2%">
                    <h3>Mass Report</h3>

                    <form method="post" action="">

                    <label>Select Subject</label>
                    <select name="course">
                    <option  value="0">subjects</option>
                    <option  value="np">Network Programming</option>
                    <option  value="ds">Distributed System</option>
                    <option  value="aj">Advance JAva</option>
                    <option  value="mp">Mobile Programming</option>
                    <option  value="ae">Applied Economics</option>
                  </select><br><br>
                  <label for="">Student Rollno.</label>
                    <input type="text" name="rollno">
                    <input type="submit" name="sr_date" value="search" >
                    </form>
            </div>
    </div>
    <?php
    include('db.php');

        if (isset($_POST['sr_btn'])) {

          $sr_id = $_POST['sr_id'];
          $course = $_POST['course'];

          $single = "select student_id,count(*) as countP from attendances where attendances.student_id='$sr_id' and attendances.course = '$course' and attendances.status='present'";
          $single1 = mysqli_query($con,$single);
          $singleT = "select count(*) as countT from attendances where attendances.student_id='$sr_id' and attendances.course = '$course'";
          $singleT1 = mysqli_query($con,$singleT);
         
          //  $count_tot = mysql_num_rows($singleT);
        }
        if(isset($_POST['sr_date'])){

            $srollno = $_POST['rollno'];
            $course = $_POST['course'];
            $all_query ="select a.*, s.std_name from attendances a, students s where std_id= student_id and student_id ='$srollno' and course = '$course' ";
            $massreport = mysqli_query($con,$all_query);
       
           }
           if(isset($_POST['sr_date'])){
       
             ?>
       
           <table class="table table-stripped">
             <thead>
               <tr>
                 <th scope="col">rollno</th>
                 <th scope="col">name</th>
                 <th scope="col">status</th>
                 <th scope="col">course</th>
                 <th scope="col">date</th>
                 
               </tr>
            </thead>
       
       
           <?php
       
            while ($data = mysqli_fetch_assoc($massreport)) {
       
            ?>
               <tbody ">
                  <tr>
                    <td><?php echo $data['student_id']; ?></td>
                    <td><?php echo $data['std_name']; ?></td>
                    <td><?php echo $data['status']; ?></td>
                    <td><?php echo $data['course']; ?></td>
                    <td><?php echo $data['date']; ?></td>
                  
                  </tr>
               </tbody>
            <?php 
          }
          ?>
          <div class="print">
               <button onclick="window.print()">print/Download</button>
           </div>
           <?php
         }
         ?>
         
         
            
           </table>
           
       




 <form method="post" action="" class="form-horizontal col-md-6 col-md-offset-3">
            <table style="margin-left: 25%; margin-top:2%;" class="table table-striped">

              <?php


              if (isset($_POST['sr_btn'])) {

                $count_pre = 0;
                $i = 0;
                $count_tot;
                if ($row = mysqli_fetch_row($singleT1)) {
                  $count_tot = $row[0];
                }
                while ($data = mysqli_fetch_array($single1)) {
                  $i++;

                  if ($i <= 1) {
              ?>


                    <tbody>
                      <tr>
                        <td>Student Roll No: </td>
                        <td><?php echo $data['student_id']; ?></td>
                      </tr>

                      <?php
                      //}

                      // }

                      ?>

                      <tr>
                        <td>Total Class (Days): </td>
                        <td><?php echo $count_tot; ?> </td>
                      </tr>

                      <tr>
                        <td>Present (Days): </td>
                        <td><?php echo $data[1]; ?> </td>
                      </tr>

                      <tr>
                        <td>Absent (Days): </td>
                        <td><?php echo $count_tot -  $data[1]; ?> </td>
                      </tr>

                    </tbody>

              <?php

                  }
                }
              }
              ?>
            </table>
          <!-- </form> -->
    




    <script src="https://kit.fontawesome.com/30e2cd6711.js" crossorigin="anonymous"></script>
    <script  src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script >
        $(document).ready(function(){
            $('#icon').click(function(){
                $('ul').toggleClass('show')
            })
        })
    </script>
 
    
</body>

</html>