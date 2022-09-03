<?php
session_start();
$email = $_POST['email'];
$password = $_POST['password'];
include "./connect.php";
$qu = mysqli_query($conn,"SELECT * FROM apps WHERE email = '$email' and password = '$password'");
$rows = mysqli_num_rows($qu);
$row = mysqli_fetch_assoc($qu);
$id = $row['id'];
$date = $row['date'];
$id_user = $row['id_user'];
$img = $row['img'];
$la = $row['la'];
$color = $row['color'];
$au = $row['au'];

if(!$rows==0){
    $_SESSION["email"] = "$email";
    $_SESSION["id"] = $id;
    $_SESSION["id_user"] = $id_user;
    $_SESSION["img"] = $img;
    $_SESSION["date"] = $date;
    $_SESSION["color"] = $color;
    $_SESSION["la"] = $la;
    $_SESSION["au"] = $au;

    header("location: ../home/");
}else{
    header("location: ../sign in/?error=There is an error in the data entered");
}
?>
