



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user-login&registration</title>
    <link rel="stylesheet" href="style-login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Kanit:wght@300&family=Oswald&family=Tilt+Neon&display=swap" rel="stylesheet">
</head>
<body>
<div class="container">
    <div class="login-form">
        <h1>login here</h1>
        <form action="login-php.php" method="post">
            <div class="input-group">
                <div class="input-field">
                    <i class="fa-solid fa-user"></i>
                    <input type="text" name="username">
                </div>
                
                <div class="input-field">
                    <i class="fa-solid fa-lock"></i>
                    <input type="password" name ="password">
                </div>
            </div>
            <div class = btn-sec>
                <button class="signin-btn">login</button>
                <a href="register.php">register here</a>
            </div>

        </form>
    </div>
   </div> 
</body>
</html>