<?php
require_once 'config/connect.php';
session_start();
$email = $_POST['email'];
$password = $_POST['password'];
$sql = "SELECT * FROM user WHERE email = '$email' AND password = '$password'";
$result = mysqli_query($connection, $sql) or die(mysqli_error($connection));
$count = mysqli_num_rows($result);
if($count == 1){

	$_SESSION['email'] = $email;
	$_SESSION['password'] = $password;

	header('location: home.php');
}
else{
	echo '<script>alert("Invalid login parameter"); window.location.assign("http:login.php")</script>';
}
?>