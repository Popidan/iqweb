<?php
session_start();
include "db_con.php";
?>
<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <link href="css/bootstrap-4.4.1.css" rel="stylesheet">
     <link rel="stylesheet" href="font-awesome/css/all.min.css">
  
<meta charset="utf-8">
<title>User Profile</title>
    
<?php include_once("header.php"); ?>    
<style>
        .header a {color: #ffffff !important;}
    </style>    
</head>

    <div class="dv"></div>
    
<body class="profile_bg">
    <div class="container_profile">
        <div class="user_left_info">
            <img src="Poze\Background\profile_picture.png" height="300px" width="300px" class="profile_pic">
                <div class="user_details">
                    <p><?php echo $_SESSION["User"]?></p>
                    <p><?php if($_SESSION["Admin"] == 1){
                        echo "Admin";
                    }
                     else{
                        echo "User";
                        }    
                    ?>
                   </p>
                    <p><?php echo $_SESSION["Email"]?></p>
                    
                </div>
                
        </div>
        <div class="status_check">
            <p>No Reservation Found</p>
        </div>






    </div>
</body>
<?php include_once("footer.php")?>    
</html>