<?php

include '_dbconnect.php';
session_start();
$eM = $_SESSION['username'];

$sql_g = "SELECT * FROM userdata WHERE eMail='$eM'";
echo $eM . "<br>";
$result_g = mysqli_query($conn, $sql_g);
$num_g = mysqli_num_rows($result_g);
$rows_g = $result_g->fetch_assoc();
$uScore = $rows_g['score'] + 1;


$sql_s = "UPDATE userdata SET score = '$uScore' WHERE eMail = '$eM'";
$result_s = mysqli_query($conn, $sql_s);



$sql = "SELECT * FROM userdata WHERE eMail='$eM'";
$result = mysqli_query($conn, $sql);
$rows = $result->fetch_assoc();
echo $rows['score'];


?>
