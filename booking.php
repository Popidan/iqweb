<?php
    session_start();
    include "db_con.php";
    //echo $_COOKIE["nume"] . " " . $_POST["camera"] . " " . $_POST["data"];
    //luam toate variabilele de care avem nevoie din cookieuri si din form
    $nume_seat = $_COOKIE["nume"];
    $etaj = $_POST["camera"];
    $data = $_POST["data"];
    $start_time = $_POST["start_time"];
    $finish_time = $_POST["finish_time"];
    $st;
    $ft;
    //verificam sa fie datele in ordine
    if($start_time >= $finish_time){
        header("Location: maps.php?er=1");
    }
    else{
    $sql = "SELECT * FROM birouri WHERE nume_birou = '$nume_seat' AND etaj = '$etaj'";
    $res = mysqli_query($conn,$sql);
    $row = $res->fetch_assoc();
    $id_birou = $row["id_birou"];
    $id_user = $_SESSION["IdUser"];
    //verificam intercalarea cu alt booking
    $sql3 = "SELECT * FROM bookings WHERE id_birou = '$id_birou' AND data = '$data'";
    $ab;
    $res3 = mysqli_query($conn,$sql3);
    $row3 = $res3->fetch_assoc();
    if ($res3->num_rows >0){
        $st = $row3["ora_inceput"];
        $ft = $row3["ora_sfarsit"];
        $ab = $st>$finish_time || $ft<$start_time;
    
        if ($ab){    
            $sql2 = "INSERT INTO bookings (id_user, id_birou, data, ora_inceput, ora_sfarsit) VALUES ('$id_user', '$id_birou', '$data', '$start_time','$finish_time')";
            $conn->query($sql2);
            header("Location: content.php");
        }
        else {
            header("Location: maps.php?er=2&st=$st&ft=$ft");
        }
    }
    
   
    echo $id_birou;
    }
?>