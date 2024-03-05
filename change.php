<?php 

	session_start();
	require_once 'config/connect.php'; 
	if(!isset($_SESSION['email'])&&!isset($_SESSION['password'])){
		if(empty($_SESSION['email'])&& empty($_SESSION['password'])){
		header('location: login.php');
	}
}

if(isset($_POST) & !empty($_POST)){
$id = $_SESSION['email'];
		$old = htmlentities($_POST['old']);
		$new = htmlentities($_POST['password']);
		$pass = htmlentities($_POST['confirm']);
	if($new == $pass){
	$sql = "UPDATE user SET Password ='$pass' WHERE email ='$id' AND Password = '$old'";
	$result = mysqli_query($connection, $sql);
	if($result){
		$_SESSION['email'] = $id;
		$_SESSION['password'] = $new;
		header('Location: home.php' );
	}
	else{
		echo '<script>alert("Operation failed"); window.location.assign("password.php");</script>';
	}
}
else {
	echo '<script>alert("password not match"); window.location.assign("password.php");</script>';
}
}
?>