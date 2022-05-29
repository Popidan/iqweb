<?php
session_start();
include "db_con.php";
$id_book = $_SESSION["id_book"];
$sql = "DELETE FROM bookings WHERE id_booking = '$id_book'";
$conn->query($sql);
//header("Location: profile.php");
?>