<?php 
session_start();
?>
<html>
    <header><title>Login</title></header>
    <body>
        <form action="Log_form.php" method="post">
            Nume: <input type = "text" name="nume" required><br>
            Parola: <input type = "password" name="parola" required><br>
            <!--Email: <input type = "text" name="email"><br> -->
            <input type="submit">
        </form>
        <?php
            $eroare = $_GET["er"];
            if ($eroare == 2){
                echo "Acest nume nu exista";
            }  
            elseif ($eroare == 1){
                echo "Parola e gresita";
            }
            
        
        
        ?>
        <a href = "http://localhost/test_login/signup_view.php?er=0">Daca nu ai un cont te poti inscrie aici</a>
    </body>

</html>


