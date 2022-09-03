<?php
$host="localhost";
$user="root";
$pass="";
$dbname="app";

$conn = mysqli_connect($host,$user,$pass,$dbname);
if(!$conn){
    echo "خطأ في الاتصال";
}else{
    // echo "تم الاتصال بنجاح";
}
