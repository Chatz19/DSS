<?php

date_default_timezone_set("Africa/Lagos");
require_once 'config/connect.php';
$age = "SELECT * FROM newsfeed WHERE News_ID = $newa";
			$message = mysqli_query($connection, $age);
			if($m = mysqli_fetch_assoc($message))
			{
				$month = $m['Month'];
				$time = $m['Time'];
				$ram = $m['Date'];
				$yea = $m['Month'].", ".$m['Year'];
				$da = $m['Day'];
			}

	   $timestamp = strtotime($ram);	
	   $strTime = array("just now", $time, $time, $da, $month, $yea);
	   $length = array("60","60","24","30","12","10");

	   $currentTime = time();
	   if($currentTime >= $timestamp) {
			$diff     = time()- $timestamp;
			for($i = 0; $diff >= $length[$i] && $i < count($length)-1; $i++) {
			$diff = $diff / $length[$i];
			}

			$diff = round($diff);
			$timeago = $strTime[$i];

			if($timeago == $strTime[3] && $diff == 1){
				echo "Yesterday";
			}
			else{
				echo $timeago;
			}
	   }
?>
