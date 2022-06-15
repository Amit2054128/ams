

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="css/index.css"> -->
    <title>update</title>
</head>


<style>
        @import url('https://fonts.googleapis.com/css2?family=Lato&family=Roboto:wght@300&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;

        }

        html,
        body {
            font-family: 'Lato', sans-serif;
            font-family: 'Roboto', sans-serif;
            display: grid;
            height: 100%;
            place-items: center;
            background-color: #F4FCD9;
        }

        .wrapper {
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

        /* .wrapper form .row i {
    position: absolute;
    width: 47px;
    height: 100%;
    font-size: 18px;
    background: #34495e;
    color: #fff;
    border: 1px solid #16a085;
    border-radius: 5px 0 0 5px;
    display: flex;
    align-items: center;
    justify-content: center;
} */
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

        small {
            color: red;
            font-weight: bold;
            transition: 1s;
        }

        /* float label close */
        /* password eye icon start */
        .row span #peye,
        #cpeye {
            position: absolute;
            top: 15px;
            right: 10px;
            color: #34495e;
            cursor: pointer;
        }

        /* password eye icon end */
    </style>
</head>

<body>
    <div class="wrapper">

 
        <div class="title">
            <span>update</span>
        </div>
        <form action="#" method="POST" >
            <div class="register">
            <?php

include 'db.php';
$ids = $_GET['id'];
    $showquery = "select * from students where std_id = {$ids}";
    $amit = mysqli_query($con,$showquery);
    $datas = mysqli_fetch_array($amit);

    if(isset($_POST['update'])){
        $idupdate = $_GET['id'];
        $stdName = $_POST['name'];
        $stdEmail =  $_POST['email'];
        $stdaddress =  $_POST['address'];
        $faculty = $_POST['faculty'];
        
        
        if(!empty($stdName) && !empty($stdEmail) && !empty($stdaddress)){
          $query = " update students set std_id = $idupdate, std_name= '$stdName', std_faculty='$faculty', std_email = '$stdEmail', std_address = '$stdaddress' where std_id = $idupdate ";
        $sql = mysqli_query($con, $query);
        
                echo "<script>alert('updated sucessfully');</script>"; 
                echo "<meta http-equiv=refresh content=\"0; url=studentDetail.php\">";
              } 
              else{
                echo "<script>alert('opps somthing wrong');</script>";
              }
            }
        
?>

            
            
                
            </div>
            <div class="row" id="username">
                <input class="float-input" type="text" placeholder=" " value="<?php echo $datas['std_name']; ?>" name="name" id="user_name">
                <label class="float-label">Name</label>
                <small class="formerror"></small>

            </div>
            <div class="row" id="email">
                <input class="float-input" type="email" placeholder=" " value="<?php echo $datas['std_email']; ?>" name="email" id="email">
                <label class="float-label">email</label>
              

            </div>
            <div class="row" id="phone_number">
                <input class="float-input" type="text" placeholder=" " value="<?php echo $datas['std_address']; ?>" name="address" id="fphone"></input>
                <label class="float-label">address</label>
            </div>
            <div class="row" id="faculty">
                <input class="float-input" type="text" placeholder=" " value="<?php echo $datas['std_faculty']; ?>" name="faculty" id="faculty"></input>
                <label class="float-label">faculty</label>
            </div>
        

            <div class="row button">
                <input type="submit" value="update" name="update" >
            </div>
            </div>
        </form>
    </div>
    <script src="https://kit.fontawesome.com/30e2cd6711.js" crossorigin="anonymous"></script>
    

    
    
</body>
</html>
