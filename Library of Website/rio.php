<html>
<head>
<title> Contact Page</title>
</head>
<body>
<center>
<?php
$server = "localhost";
$user = "root";
$pass = "";
$database = "rio";

$conn = mysqli_connect($server, $user, $pass, $database);
if($conn===false){
die("Error: Could not Connect.".mysqli_connect_error());
}
$name=$_REQUEST['name'];
$email=$_REQUEST['email'];
$subject=$_REQUEST['subject'];
$message=$_REQUEST['message'];

$sql="INSERT INTO contact VALUES('$name','$email','$subject','$message')";
if(mysqli_query($conn,$sql)){
echo"<h3> Message Sent successfully</h3>";
}
else{
echo "ERROR, Something went wrong".mysqli_error($conn);
}
mysqli_close($conn);
?>
</center>
</body>
</html>