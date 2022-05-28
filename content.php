<?php
    //incepe sesiunea
    session_start();
    //include conexiunea la db
    include "db_con.php";
    //verificam daca s-a logat(daca scrie direct linkul inseamna ca nu s-a logat)
    if(!isset($_SESSION["User"])){
        header("Location: index.php");
    }
    //ia numele din sesiune
    $Nume = $_SESSION["User"];
    //declaram restul de variabile
    $Email;
    $UId;
    $Admin;
    //facem un query pe db si selectam toate coloanele unde numele este  acelasi cu numele utilizatorului
    $sql = "SELECT * FROM users WHERE nume = '$Nume'";
    
    $res = mysqli_query($conn, $sql);
    //dam valori variabilelor(stocam emailul, idul si daca userul este admin sau nu)
    if ($res->num_rows != 0){
        $row = $res->fetch_assoc();
        $Email = $row["email"];
        $UId = $row["id_user"];
        $Admin = $row["admin"];
    }
    //am creat variabile care raman in sesiune
    $_SESSION["Email"] = $Email;
    $_SESSION["IdUser"] = $UId;
    $_SESSION["Admin"] = $Admin;
    //echo $Email;

    
?>

<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <link href="css/bootstrap-4.4.1.css" rel="stylesheet">
  
<meta charset="utf-8">
<title>Desk Booking</title>
    
<?php include_once("header.php"); ?>    
    
</head>

    <div class="dv"></div>
    
<body class="background_img">
    <div class="home_info">
        <h1>Want to choose your <span>seat at work</span> from home ?</h1>
        <h4>There are a few steps you need to follow</h4>
        <p>1.Click on <a href="maps.php"> maps</a></p>
        <p>2.Select your workplace,the floor you want to work in and the green desk<p>
        <p style="margin-bottom: 150px;">3.Click confirm and wait for confirmation<p>
       
    
        
    </div>
</body>
<?php include_once("footer.php")?>    
</html>