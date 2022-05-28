<?php
session_start();
?>
<!doctype html>
<html class="login_only">
<head>
<meta charset="utf-8">
<title>Login Form</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body class="body_login">
    <div class="login-form">
        <h1>Login Form</h1>
        <form action="Log_form.php" method="post">
            <p>User Name</p>
            <input type="text" name="nume" placeholder="User Name" required>
            <p>Password</p>
            <input type="password" name="parola" placeholder="Password" required>
            <div style="text-align: -webkit-center;"><button type="submit">Login</button></div>
            <?php
            //afisari erori
            $eroare = $_GET["er"];
            if ($eroare == 2){
                echo "Acest nume nu exista";
            }  
            elseif ($eroare == 1){
                echo "Parola e gresita";
            }
            ?>
            <div style="text-align-last: center;">
            <p>You don't have an account?</p><a style="color: orange" href="signup.php">Sign UP</a>
            
            </div>
</body>
</html>