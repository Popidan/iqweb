<?php 
// incepem sesiunea
    session_start();
// includem conexiunea la db
    include "db_con.php";
// luam datele despre utilizator din db
    $Nume = $_SESSION["User"];
    $Email;
    $UId;
    $Admin;
    $sql = "SELECT * FROM users WHERE nume = '$Nume'";
    
    $res = mysqli_query($conn, $sql);
    if ($res->num_rows != 0){
        $row = $res->fetch_assoc();
        $Email = $row["email"];
        $UId = $row["id_user"];
        $Admin = $row["admin"];
    }
    echo $Email . " " . $UId . " " . $Admin;
?>