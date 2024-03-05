<?php
session_start();
require_once 'config/connect.php';
	date_default_timezone_set("Africa/Lagos");
$name = $_FILES['name']['name'];
$size = $_FILES['name']['size'];
$type = $_FILES['name']['type'];
$tmp_name = $_FILES['name']['tmp_name'];

$extension = substr($name, strpos($name, '.') + 1);

			

	 $location = 'upload/';
		$date = date('Ymdhis');
		$name = md5(rand().$date).".".$extension;
		move_uploaded_file($tmp_name, $location.$name);

if(isset($_POST) & !empty($_POST)){
		$message = htmlentities(mysqli_real_escape_string($connection, $_POST['post']));
		$sender = mysqli_real_escape_string($connection, $_POST['id']);
		$time = date('h:i A');
		$day = mysqli_real_escape_string($connection, $_POST['day']);
		$date = mysqli_real_escape_string($connection, $_POST['date']);
		$year = mysqli_real_escape_string($connection, $_POST['year']);

	$sql = "INSERT INTO newsfeed ( Poster_ID, Data, Image, Time, Day, Month, Year) 
	VALUES ('$sender', '$message', '$name', '$time', '$day', '$date', '$year')";
	$result = mysqli_query($connection, $sql);
	if($result){
			header('location: home.php');
		}
		else{
			header('location: home.php');
		}

	}

?>