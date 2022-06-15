<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <title>Document</title>
</head>
<body>
<nav>
        <label class="logo">AMS</label>
        <ul>
            <li><a class="" style="right: 20px;" href="">Home</a></li>
            <li><a style="right: 20px;" href="student.php">student</a>
            
        </li>
        
            <li><a style="right: 20px;" href="">teacher</a></li>
            <li><a style="right: 20px;" href="attendance.php">attendence</a></li>
            <li><a style="right: 20px;" href="Report.php">report</a></li>
            <li><a style="right: 20px;" href="logout.php">Logout</a></li>
         
            
            
        </ul>
        <label for="" id="icon">
            <i class="fas fa-bars"></i>
        </label>
    </nav>
    <div class="maindiv">
        <h2>add student</h2>
        <div class="form">

        </div>
    </div>





    
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