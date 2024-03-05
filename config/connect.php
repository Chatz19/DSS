<?php
$connection = mysqli_connect('localhost', 'root', '', 'jemilah');
if(!$connection){
	echo "Fail to connect to database";
	die();
}
?>