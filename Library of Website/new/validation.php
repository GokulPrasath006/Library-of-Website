<?php

session_start();


$con = mysqli_connect(' localhost','root','','rio');

mysqli_select_db($con,'userregistration');

$name = $_POST['user'];
$pass = $_POST['password'];

$s = " select * from bujji where name = '$name'  && password = '$pass' ";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($snum == 1){
    $_SESSION['username'] = $name;
    header('location:home.php');
}
else{
    header('loction:login.php')
}


?>