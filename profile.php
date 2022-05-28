<?php
session_start();
include "db_con.php";
//verificam daca s-a logat(daca scrie direct linkul inseamna ca nu s-a logat)
if(!isset($_SESSION["User"])){
    header("Location: index.php");
}
?>
<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <link href="css/bootstrap-4.4.1.css" rel="stylesheet">
  
<meta charset="utf-8">
<title>User Profile</title>
    
<?php include_once("header.php"); ?>    
    
</head>

    <div class="dv"></div>
    
<body class="profile_bg">
    <div class="container_profile">
        <div class="user_left_info">
            <img src="Poze\Background\profile_picture.png" height="300px" width="300px" class="profile_pic">
                <div class="user_details">
                    <p>Nume Angajat: <?php echo $_SESSION["User"];?></p>
                    <p><?php
                        if($_SESSION["Admin"] == 1){
                            echo "Admin";
                        }
                        else{
                            echo "User";
                        }
                        //echo $_SESSION["Email"];
                        ?></p>
                    <p>Email: <?php echo $_SESSION["Email"]?></p>
<!--                    <p>Sediu Companie</h1>-->
                </div>
        </div>









    </div>
</body>
<?php include_once("footer.php")?>    
</html>