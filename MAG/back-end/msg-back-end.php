<?php
session_start();

$email = $_POST['email'];
$id_user = $_SESSION['id'];
$msg = $_POST['msg'];

// echo $email.'<br>';
// echo $id_user.'<br>';
// echo $msg.'<br>';

include "./connect.php";

$qu = mysqli_query($conn,"INSERT INTO msg (email,id_db,msg) VALUES ('$email','$id_user','$msg')");

   header("location: ../home/");


?>
