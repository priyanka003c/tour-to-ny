<?php
    $username = $_POST['username'];
    $password = $_POST['password'];
    $con = new mysqli("localhost", "root", "priya@2002", "user-registration");
    if($con->connect_error){
        die("failed to connect :".$con->connect_error);

    }
    else{
        $stmt = $con->prepare("Select * from userinfo where username = ?");
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $stmt_result = $stmt->get_result();
        if($stmt_result->num_rows >0){
            $data = $stmt_result->fetch_assoc();
            if($data['password']=== $password){
                header('location:home.php');
            }else{
                echo "invalid username or password";
            }
        }
    }
?>