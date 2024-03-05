<?php
require 'config/connect.php';

$comment = $_POST['comment'];
$replyid = $_POST['replyerID'];
$newsid = $_POST['news'];

$sql = "INSERT INTO comment (comment, replyee_ID, news_ID) VALUES('$comment', '$replyid', '$newsid')";
$result = mysqli_query($connection, $sql);
if($result){
	header('location: home.php');
}
else{
	header('location: home.php');
}
?>