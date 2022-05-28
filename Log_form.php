<?php
//incepem sesiunea
session_start();
$_SESSION["er"] = 0;
//includem conexiunea la db
include "db_con.php";
//obtinem datele din formular
$nume = $_POST["nume"];
$parola = $_POST["parola"];
//verificam daca e gol formularul
if(!empty($nume) && !empty($parola)){
    //verificam daca parola introdusa este identica cu cea din db
    $sql = "SELECT Parola FROM users WHERE Nume = '$nume'";
    $res = mysqli_query($conn, $sql);
    if ($res->num_rows > 0) {
        $row = $res->fetch_assoc();
        if($parola == $row["Parola"]){
            //daca parola este buna userul este redirectionat pe homepage si numele ii este trimis mai departe
            $_SESSION["User"] = $nume;
            header("Location: content.php?User='$nume'");
            
        }
        else{
            $_SESSION["er"] = 1;
            header("Location: login.php?er=1");
            
        }

    } 
    else {
        $_SESSION["er"] = 2;
        header("Location: login.php?er=2");
    }
    mysqli_close($conn);

}
else{
        echo "<script>alert('Nu ai completat toate campurile')</script>";
        $_SESSION["er"] = 3;
        header("Location: login.php?er=3");
        exit();
}

?>