<?php
	session_start();
	require_once 'config/connect.php'; 
	if(!isset($_SESSION['email'])&&!isset($_SESSION['password'])){
		if(empty($_SESSION['email'])&& empty($_SESSION['password'])){
		header('location: login.php');
	}
}
	$email = $_SESSION['email'];
	$password = $_SESSION['password'];
?>
<html>
<head>
	<title>News Feed</title>
	
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=0.5, maximum-scale=2.0, user-scalable=yes" />
<style type="text/css">

@media all and (max-width: 800px){
	.menu{ display: block; transition:0.5s; z-index: 2; height: auto; overflow: auto; font-size: 16px; float: left; left: -100%; width: 200px; position: absolute; top: 0; height: 100%; background-color: rgb(0,0,0,0.7);}
	.menu::-webkit-scrollbar{width: 0px;}
	.menu::-webkit-scrollbar-track{background-color: #ccc;}
	.menu::-webkit-scrollbar-thumb{background-color: rgb(0,0,0,0.5); border-radius: 100px;}
	.menu::-webkit-scrollbar-thumb:hover{background-color: red;}
	.whitespace{background-color: transparent; position: absolute; float: right; right: 0; display: none; width: 59.91%; height: 100%; display: none; z-index: 1;}
	.body{float: right; margin-right: 0px; width: 100%;}
	.exe img{width: 3vw; height: auto;}
	body{font-size: 2vw;}
	.exe{position: absolute; float: left; margin-left: 0.5%; margin-top: 0.5%;}
	.xman{background-color: red; cursor: pointer; padding: 2px 4px; font-weight: bold; font-family: calibri; color: white; position: absolute; top: 0; right: 0;}
	*{font-size: 100%;}
	.na{margin-left: 4%;}
	.stu2{ float: right; height: 100%; margin-right: 3%;  width: 60%;}
	.stu2{ float: right; height: 100%; margin-right: 3%;  width: 60%; font-size: 100%;}
	.stu{margin-top: 1vh; color: blue; font-weight: bolder; margin-left: 2.5%; float: left; width: 30%; }
	.logout img{max-height: 40px;}
	body{min-height: 400px;}
	.news{width: 100%;}
	.mainrenew{display: none;}
	.feed{display: none;}
	.sec{max-height: 30px;}
	}
	@media all and (orientation: landscape){
			.inner img{width: auto; height: 35%;}
	.stu img{width: auto; height: 50%;}
	.logout img{width: auto; height: 90%;}
	.sec{max-height: 12%;}
	}
	@media all and (orientation: portrait){
			.inner img{width: 20%; height: auto;}
	.stu img{width: 10%; height: auto;}
	.logout img{width: 100%; height: auto;}
	.down{margin-bottom: 2%;}
	}
@media all and (min-width: 801px){
	.whitespace{display: none;}
	.exe img{display: none;}
	.xman{display: none;}
	.menu{float: left; height: auto; width: 15%; display: block;}
	.body{float: right; margin-right: 0px; width: 85%; }
	.news{width: 40%;  margin-left: 1.5%;}
	*{font-size: 100%;}
	.na{margin-left: 2%;}
	.stu2{ float: right; height: 75%; margin-right: 3%; margin-top: 3vh;  overflow: hidden; font-size: 60%; width: 55%;}
	.logout img{width: 80%; height: auto;}
	.list{font-size: 1.5vw;}
	body{min-height: 350px;}
	.stu{margin-top: 5vh; color: blue; font-weight: bolder; margin-left: 2.5%; float: left; width: 30%; }
}
@media all and (min-width: 1000px){
	.list{font-size: 1.3vw;}
	.stu2{ float: right; height: 75%; margin-right: 3%; margin-top: 3vh; font-size: 90%; width: 55%;}
}
	body{margin:0px; background-color: darkred; margin: 0 auto; width: 100%; height: 100%; overflow: auto; font-family: calibri;}
		body::-webkit-scrollbar{width: 0px;}
		body::-webkit-scrollbar-track{background-color: #ccc;}
		body::-webkit-scrollbar-thumb{background-color: rgb(0,0,0,0.5); border-radius: 100px;}
		body::-webkit-scrollbar-thumb:hover{background-color: red;}
	.t{height: 9%; clear: both; position: relative;}
	select{background-color: white;}
	.th{height: 90.7%; background-color: #cccccc; border-left: black 0.15vw solid; border-top: black 0.15vw solid; overflow: auto;}
	.image{margin-top: 5%; margin-left: 25%;}
	.imag{ border-radius: 100px; margin-top: 10%; object-fit:cover; object-position:0% 0%; height: 8vw; width: 8vw;}
	.na{color: white; text-decoration: none; position: absolute; bottom: 0%; font-weight: bold; font-size: 1.5vw; width: 50%; height: auto; float: left; margin-top: 4vh;}
	.active {border: black 0.15vw solid;  background-color: black; padding: 5% 0px; margin:0px; margin-top: 3px; }
	 a font { font-weight: bolder; color: white; margin-left: 10%; padding: 5% 0px; }
	 a{text-decoration: none;}
	p.p:hover{background-color: black;}
	p.p{padding: 5% 0px; margin:0px; margin-top: 1.5%;}

	
	.search{float: right; margin-top: 0.5%; margin-right: 2%; width: 32%; font-size: 1.2vw;}
	input.input{width:68%; height: 50%; border: 0.1vw solid #efefef; border-radius: 3px; background-color: transparent; color: white;}
	input.input::placeholder{color: white;}
input.submit {width:30%; height:50%; background: orange; color:white;  border:0.2vw solid transparent; border-radius:5px; padding: 0px 1px;}
{color: white;}
.inner{float: right; text-align: center; margin: 2% 0% 2% 0%; height: 100%; width:18%;}
	.inner:hover{background-color: white;}
	.inner1{background-color: white; float: right; text-align: center; margin: 2% 0% 2% 0%; height: 100%; width:18%;}
	.logout{float: right; margin-left: 15%;  width: 10%;}
	
	.footer{margin: 0 auto; background-color: black; color: white; bottom: 0;  width: 100%; height: 5%; padding-top: 0.35%; font-size: 1.2vw;}
	.baba{margin:0 auto; width: auto; height: auto; overflow: hidden;}
	strong{font-weight:bold; color:white; text-transform:uppercase;}
	.inner a{color: blue; font-weight: bolder;}
	.now1{vertical-align: middle;}
	.now{vertical-align: middle; height: auto; width: 10%;}
	

	.news{ height: auto; float: left; margin-bottom: 2%;}
	.feed{ height: 78.5%; width: 19%; float: right; position: absolute; right: 17px; border-left: #b3b3b3 1px solid; background-color: #cccccc; overflow: auto;}
	.simage{ height: 3vw; object-fit:cover; object-position: 0% 0%; width:3vw; border-radius: 100px; margin:0px 2% 10px 2%; float: left;}
	.feedimage{ max-height: 350px;  width: 100%; margin-top: 10px; object-fit:cover; object-position:0% 50%; margin-bottom: 10px;}
	.feedvideo{width: 100%; max-height: 350px; outline: none; object-fit:cover; object-position:0% 50%; margin-bottom: 10px; margin-top: 10px;}
	.mainfeed{width: 100%; max-height: auto; overflow: hidden; padding-bottom: 5px; padding-top: 5px; background-color: white; position: relative;}
	.renew{width: 100%;  height: 500px; border-radius: 3px; background-color: white; }
	.mainrenew{float: left; width: 31%; margin:0px 0px 0px 2%;}
	.subrenew{margin: 20px; color: #404040; font-size: 91%;}
	.pics{width: 100%; overflow: hidden; max-height: 80%; margin-bottom: 10px; position: relative;}
	.text{ max-height: auto; max-width: 500px; margin: 15px 2% 10px 2%; word-wrap:break-word; white-space: pre-wrap; font-family: none; font-size: 16px;}
	

	.demo{height: 3vw; width: 3vw; border-radius: 100px; margin-top: 4px; margin-left: 4%; margin-right: 4%; float: left; object-fit:cover; word-break:keep-all;}
		.name{margin-top: 2vh; vertical-align: middle; margin-bottom: 3px; font-weight: bold; text-transform: capitalize; overflow: hidden; width: 60%; white-space: pre; text-overflow: ellipsis; float: left;}	
		.span{ width: 100%; height: auto; float: left; padding-bottom: 1.5%; margin-top: 0px; cursor:pointer; font-size: 100%; font-family: none;}
		.span:hover{background-color: white;}
		.adiv{color:black;}
		.online{padding: 0.3vw;  border-radius: 100vw; background-color: green; float: right; margin-top: 8%; margin-right: 4%;}
		.offline{padding: 0.3vw;  border-radius: 100vw; background-color: red; float: right; margin-top: 8%; margin-right: 4%;}
		.space{height: 20px;}
		.textarea{height: 40px; background-color: white; font-size: 14px; width: auto; margin-top: 20px; margin-bottom: 15px; border-radius: 30px; padding-right: 5px; padding-left: 5px;}
		textarea{margin-top: 10px; width: 95%; outline: none; resize:none; border: transparent 1px solid;}
		.nano{margin-top: 10px; text-transform: capitalize; font-family: calibri; font-size: 16px; font-weight: bold;}
		.time{margin-top: 2px; margin-bottom: 29px;  font-size: 12px; font-family: arial; opacity: 0.4; font-weight: bold; margin-left: 10px;}
		input{outline: none;}
				@media all and (max-width: 800px){
	.search input{min-height: 12px;}
	.imag{min-height: 70px; min-width: 70px;}
	.na{font-size: 2.5vw; margin-left: 6vw;}
	.exe img{width: 4vw;}
	.th{border-left: none;}
	.sec{border-left: none;}
	}
	@media all and (orientation: portrait) and (max-width: 800px){
		.footer{font-size: 150%;}
		.th{height: 96.6%;}
		.exe img{width: 4.5vw;}
		.sec{max-height: 8vw; overflow: hidden; width: 100%;}
	.t{max-height: 6vw;}
	}
	@media all and (orientation: portrait) and (min-height: 720px){
		.th{height: 98%;}
	}


	.simage{min-height: 30px; min-width: 30px;}
	.caga{background-color: rgba(0,0,0, 0.5); position: absolute; border-radius: 100%; padding: 10px 8px 10px 12px; top: 43%;left: 43%;}
	.float{user-select:none; width: 50px; height: 20px; position: absolute; right: 2px; top: 5px; cursor: pointer;}
	.float span{background-color: black; border: 1px black solid; padding: 3px; float: left; margin: 3px; margin-top: 10px; border-radius: 100px;}
	.float a{color: black; display: none; position: absolute; z-index: 2; top: 24px; right: 18px; padding: 2px 4px; background-color: white; font-size: 18px; font-weight: bold; box-shadow: 1px 2px 4px black;}
	.floate{background-color: transparent; width: 100%; height: 100%; position: absolute; z-index: 1; display: none; top: 0; left: 0;}
	.float div{width: 100%; height: 100%;}
	.reply{width: 100%; height: auto; margin-bottom: 20px; padding-top: 10px; background-color: rgba(0, 0, 0, 0.1);}
	.textreply{height: auto; display: inline-block; width: 100%; padding-top: 10px;}
	.textreply textarea{all:unset; background-color: white; width: 80%; word-wrap:break-word; padding: 5px; border-radius: 10px; float: left; margin-left: 5px;}
	.send{padding: 5px 8px; background-color: red; color: white; border-radius: 10px; outline: none; border: none; margin-left: 15px; font-weight: bold;}
	.comment{max-width: 90%; display: inline-block; height: auto; padding: 4px 8px; box-sizing: border-box; border-radius: 10px; background-color: rgba(0, 0, 0, 0.2); margin-left: 10px; color: white;  font-size: 14px;}
	.rimage{height: 20px; width: 20px; border-radius: 100%; object-fit:cover; float: left; margin-left: 4px;}
	.rnano{margin-left: 6px; float: left; margin-top: 2px; font-weight: bold;  font-size: 14px;}
	.noclass{width: 100%; height: auto; float: left; margin-bottom:15px;}
	
</style>

</head>
<body>
	<?php 
	$sql = "SELECT*FROM user WHERE Email = '$email' AND Password = '$password'";
	$result = mysqli_query($connection, $sql); 
	if ($r = mysqli_fetch_assoc($result)) {
		$userID = $r['user_ID'];
	?>
	<div class = "baba">
	<div class = "menu" id = "home">
	<div class = "xman" onclick = "document.getElementById('home').style.left = '-100%'; document.getElementById('space').style.display = 'none'">X</div> 
<a class ="image"><img src="upload/<?php echo $r['image']; ?>" alt = "profile picture" height = "100px" width="100px" class="imag" title="Profile Picture"></a>
<?php } ?>
<br>
<br>

<div class = "list">
<a href="home.php"><p class = "active"><font> My Questions</font></p></a>
<a href="question.php" ><p class = "p"> <font> Questions</font></p></a>
<a href="password.php"><p class = "p"><font> Change Password</font></p></a>
<a href="logout.php"><p class = "p"><font> Logout</font></p></a>

</div>


	</div><div class = "whitespace" id = "space" onclick = "document.getElementById('home').style.left = '-100%'; document.getElementById('space').style.display = 'none'"></div>

	<div class = "body">

<div class = "t">
<div class = "exe"><img src="Images/image 9a.png" onclick = "document.getElementById('home').style.left = '0%'; document.getElementById('space').style.display = 'block'"></div>
<div class = "na">Decision Management System</div>
<div class = "search"> 
	<form action = "search.php" method = "get">
		<input type = "text" name = "search" placeholder="Search..." class = "input" required>
		<input type ="submit" value="Search" class = "submit">
	</form>
</div>
</div>

	<div class = "th">

<div class = "news">
	<div class = "textarea" align = "center"><textarea rows = "1" cols = "58" placeholder = "What's on your mind?" onfocus = "man();" readonly>What's on your mind?</textarea></div>
	<?php require 'modal.php'; ?>
	<?php 
	$sqle = "SELECT * FROM newsfeed WHERE Poster_ID = '$userID' ORDER BY Date DESC";
	$request = mysqli_query($connection, $sqle);
	while($r = mysqli_fetch_assoc($request)){
		$yaya = $r['Poster_ID'];
		$newid = $r['News_ID'];
	?>
	<div class = "floate" id = "delet<?php echo $newid; ?>" onclick = "document.getElementById('deleter<?php echo $newid;?>').style.display = 'none'; document.getElementById('delet<?php echo $newid; ?>').style.display = 'none';"></div>
	<div class = "mainfeed">
		<div class = "sname">
		<?php

						$sqle = "SELECT * FROM user WHERE user_ID = '$yaya'";

				$hey = mysqli_query($connection, $sqle);
				if($k = mysqli_fetch_assoc($hey))

				{?><img class = "simage" src="upload/<?php echo $k['image'];?>"><div class = "nano">
			<?php echo $k['userName'];?></div><?php } ?>
			<div class = "time"><?php $newa = $r['News_ID']; include 'new.php';?></div>

		
		</div>
		<div class = "text"><?php echo $r['Data']; ?></div>
		<center><?php $imaga = $r['Image']; if(empty($imaga)){} else{ ?><?php $data = $r['Image']; $extension = strtolower(substr($data, strpos($data, '.') + 1));
if($extension == "jpg" || $extension == "jpeg" || $extension == "png" || $extension == "gif"){ ?>
			<div class = "pics" ><object class = "feedimage" data="upload/<?php echo $data;?>" id = "myimg"></object></div><?php require 'imaga.php'; ?><?php } else if($extension == "mp4" || $extension == "avi"){ ?>
			<div class = "pics" ><video src = "upload/<?php echo $r['Image'];?>" class = "feedvideo" name = "video"></video>
			<div class = "caga" id = "upload/<?php echo $r['Image'];?>" name = "camo"><img src ="images/play1.png" height = "30" width = "30"></div>
		</div><?php require 'vidmate.php'; ?><?php } else{} ?><?php } ?></center>
	
</div>
<div class = "reply">
	<?php
	$sql = "SELECT * FROM comment WHERE news_ID = '$newid' ORDER BY currentDate";
	$result = mysqli_query($connection, $sql);
	while($c = mysqli_fetch_assoc($result)){
		$alt = $c['replyee_id'];
		$sqle = "SELECT * FROM user WHERE user_ID = '$alt'";

				$hey = mysqli_query($connection, $sqle);
				if($k = mysqli_fetch_assoc($hey))

				{?><img class = "rimage" src="upload/<?php echo $k['image'];?>">
			<div class = "rnano"><?php echo $k['userName'];?></div>
			<?php } ?>
	<div class = "noclass"><div class = "comment"><?php echo $c['comment']; ?></div><br></div>
	<?php } ?>
	<div class = "textreply">
	<form action = "comment.php" method = "post">
	<textarea rows = "1" onkeyup ="resize(this);" name = "comment" cols = "35" required></textarea><input type = "submit" value = "Send" class = "send">
	<input type = "hidden" value = "<?php echo $newid; ?>" name = "news">
	<input type = "hidden" name = "replyerID" value = "<?php echo $userID; ?>">
	<script type="text/javascript"> 
	function resize(textbox) {

	 var maxrows=6; 
	  var txt=textbox.value;
	  var cols=textbox.cols;

	 var arraytxt=txt.split('\n');
	  var rows=arraytxt.length; 

	 for (i=0;i<arraytxt.length;i++) 
	  rows+=parseInt(arraytxt[i].length/cols);

	 if (rows>maxrows) textbox.rows=maxrows;
	  else textbox.rows=rows;
	 }

	 </script>
	 </form>
	</div>
</div>

<?php } ?>
</div>
</div></div></div>

</body>
</html>