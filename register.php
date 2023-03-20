<?php 

    $conn = new mysqli("localhost", "root", "priya@2002", "user-registration");
    if($conn){
        echo"coneection ok";
    }else{
        echo"not ok";
    }
   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>
    <link rel="stylesheet" href="style-reg.css">
</head>
<body>
<div class="container">
    <div class="login-form">
        <h1>register here</h1>
        <form action="register.php" method="post">
            <div class="input-group">
                <div class="input-field">
                    <i class="fa-solid fa-user"></i>
                    <input type="text"  name = "username" placeholder="username">
                </div>
               
                <div class="input-field">
                    <i class="fa-solid fa-lock"></i>
                    <input type="password"  name = "password" placeholder="password">
                </div>
                
            </div>
            <input type = "submit" value = "register" class="signin-btn" name = "register">
           
            <a href="login.php" class ="login-link">login here</a>
        </form>
    </div>
   </div> 
</body>
</html>
<?php
     
     if(isset($_POST['register'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $result = mysqli_query($conn , "insert into userinfo values( '$username', '$password')");
        if($result){
            echo "registration successful";
        }else{
            echo "failed";
        }
        
    }
?>





 