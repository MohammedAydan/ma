<?php
session_start();

$n = $_POST['n'];
$name = $_POST['name'];
$age = $_POST['age'];
$email = $_POST['email'];
$password = $_POST['password'];
// $img = $_POST['img'];
$id_user = rand(1,99999999);

$img = $_FILES['img'];
$erorr = array();
$img_name = $img['name'];
$img_tmp = $img['tmp_name'];
$img_size = $img['size'];
$img_s = array("png","jpg","gif","jpeg");
$img_t = strtolower(end(explode('.', $img_name)));
if($img_size > 1000000){   
    $erorr[] = 'size erorr';
}elseif(in_array($img_t, $img_s)){
    move_uploaded_file($img_tmp, '../img/' .$img_name);
}else{
    $erorr[] = "type erorr";
}
foreach ($erorr as $erorr) {
    echo $erorr;
}

include "./connect.php";



$t = mysqli_query($conn,"SELECT * FROM apps WHERE email = '$email'");
$rows = mysqli_num_rows($t);
$row = mysqli_fetch_assoc($t);
if(!$rows==0){
    header("location: ../sign up/?erroremail=This email already exists");
}else{
$qu = mysqli_query($conn,"INSERT INTO apps (n,name,age,email,password,id_user,img) VALUES ('$n','$name','$age','$email','$password','$id_user','$img_name')");
   header("location: ../home/");
}

?>
