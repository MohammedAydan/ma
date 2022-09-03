<?php
session_start();

$n = $_POST['n'];
$name = $_POST['name'];
$age = $_POST['age'];
$email = $_POST['email'];
$password = $_POST['password'];
// $img = $_POST['img'];
$id_user = rand(1,99999999);
include "./connect.php";

$qu = mysqli_query($conn,"INSERT INTO apps (n,name,age,email,password,id_user) VALUES ('$n','$name','$age','$email','$password','$id_user')");
   header("location: ../home/");


?>
