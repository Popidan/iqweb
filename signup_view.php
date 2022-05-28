<!doctype html>
<html class="login_only">
<head>
<meta charset="utf-8">
<title>Login Form</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body class="body_login">
    <div class="login-form">
        <h1>Sign Up Form</h1>
        <form action="signup.php" method="post" autocomplete="off">
            <p>Full Name</p>
            <input autocomplete="off" type="text" name="nume" placeholder="Full Name" required >
            <p>Email</p>
            <input autocomplete="off" type="email" name="email" placeholder="Email" required >
            <p>Password</p>
            <input autocomplete="off" type="password" name="parola" placeholder="Password" required >
            <p>Admin Code</p>
            <input autocomplete="off" type="number" name="cod" placeholder="Code given by the company" >
            <div style="text-align: -webkit-center;"><button type="submit">Sign Up</button></div>
            <div style="text-align-last: center;">
            
            
            </div>
            <?php
            $eroare = $_GET['er'];
            if($eroare == 1){
                echo "<div style='text-align: center;'>Numele este deja inregistrat</div>";
            }
            elseif($eroare == 2){
                echo "<div style='text-align: center;'>Codul este gresit</div>";
            }
        ?>
</body>
</html>