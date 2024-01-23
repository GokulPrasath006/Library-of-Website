<?php

session_start();
header('location:login.php');

$con = mysqli_connect(' localhost','root',' ','rio');

mysqli_select_db($con,'rio');

$name = $_POST['user'];
$pass = $_POST['password'];

$s = " select * from bujji where name = '$name' ";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
    echo" Username Already Taken";
}
else{
    $reg= " insert into bujji(name, password) values ('$name' , '$pass')";
    mysqli_query($con, $reg);
    echo" Registration Successful";
}


?>