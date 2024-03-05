<?php
require_once 'config/connect.php';

$cmail = $_POST['cmail'];
$password = $_POST['password'];
$firstName = $_POST['firstName'];

$sql = "SELECT * FROM user WHERE email = '$cmail'";
$result = mysqli_query($connection, $sql) or die(mysqli_error($connection));
$count = mysqli_num_rows($result);
if($count == 1){
	echo '<script>alert("Account already exist"); window.location.assign("http:register.php")</script>';
}

$file = $_FILES['image']['name'];
$tmpName = $_FILES['image']['tmp_name'];
$location = "upload/";
move_uploaded_file($tmpName, $location.$file);
$sql = "INSERT INTO user (image, email, userName, password) 
				VALUES ('$file', '$cmail', '$firstName', '$password')";
$result = mysqli_query($connection, $sql);
if($result){
	header('location: login.php');
}
else{
	header('location: register.php');
}
?>