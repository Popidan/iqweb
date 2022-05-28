<?php
session_start();
// includem conexiunea la baza de date
    include "db_con.php";
// obtinem datele din formular
    $Nume = $_POST["nume"];
    $Email = $_POST["email"];
    $Parola = $_POST["parola"];
    $Cod = $_POST["cod"];
    $Adm = 0;
    $Valabil = false;
// verificam daca campurile sunt completate
    $Completat = !empty($Nume) && !empty($Email) && !empty($Parola);
// verificam daca codul pentru admin sign up 
    $Admin = !empty($Cod);
    if ($Completat){
        $sql2 = "SELECT * FROM users WHERE nume = '$Nume'";
        
        $res2 = mysqli_query($conn, $sql2);
        if ($res2->num_rows == 0){
            $Valabil = true;
        }
        if($Valabil){
            if($Admin){
                //in acest caz verificam daca codul este corect
                if($Cod == 123){
                    //in acest caz introducem utilizatorul ca un admin
                    $Adm = 1;
                    // declaram o variabila user care va exista pe timpul sesiunii
                    $_SESSION["User"] = $Nume;
                    $sql = "INSERT INTO users (nume, email, parola, confirm, admin) VALUES ('$Nume', '$Email', '$Parola', 0, '$Adm')";
                    $conn->query($sql);
                    header("Location: content.php?User='$Nume'");

                }

                else{
                    // in acest caz anuntam faptul ca codul nu este corect
                    echo "<script>alert('Nu e bun codu')</script>";
                    header("Location: signup_view.php?er=2");
                    //exit();

                }
            }
            else{
                //in acest caz introducem utilizatorul ca un user default
                // declaram o variabila user care va exista pe timpul sesiunii
                $_SESSION["User"] = $Nume;
                $sql = "INSERT INTO users (nume, email, parola, confirm, admin) VALUES ('$Nume', '$Email', '$Parola', 0, '$Adm')";
                $conn->query($sql);
                header("Location: content.php");
            }
        }
        else{
            header("Location: signup_view.php?er=1");
            //exit();
        }
    }
    else {
        //in acest caz anuntam faptul ca un field nu este completat
        header("Location: signup_view.php?er=3");
    }


    

?>