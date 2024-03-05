<?php
	session_start();
	require_once 'config/connect.php'; 
	if(!isset($_SESSION['email'])&&!isset($_SESSION['password'])){
		if(empty($_SESSION['email'])&& empty($_SESSION['password'])){
		header('location: login.php');
	}
}
?>
<html>
<head>
	<title>Change Password</title>
	
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
	.change{border-radius: 30px; height: 20px; width: 60px; color: white; font-weight: bold;}
	 .show img{max-height: 20px;}
	 .sec{max-height: 30px;}
	}
	@media all and (orientation: landscape){
			.inner img{width: auto; height: 35%;}
	.stu img{width: auto; height: 50%;}
	.logout img{width: auto; height: 90%;}
	.show img{width: auto; height: 15%;}
	.sec{max-height: 12%;}
	}
	@media all and (orientation: portrait){
			.inner img{width: 20%; height: auto;}
	.stu img{width: 10%; height: auto;}
	.logout img{width: 100%; height: auto;}
	.down{margin-bottom: 2%;}
	.show img{width: auto; height: 15%;}
	}
@media all and (min-width: 801px){
	.whitespace{display: none;}
	.exe img{display: none;}
	.xman{display: none;}
	.menu{float: left; height: auto; width: 15%; display: block;}
	.body{float: right; margin-right: 0px; width: 85%; }
	*{font-size: 102%;}
	.na{margin-left: 2%;}
	.stu2{ float: right; height: 75%; margin-right: 3%; margin-top: 3vh;  overflow: hidden; font-size: 60%; width: 55%;}
	.logout img{width: 80%; height: auto;}
	.list{font-size: 1.5vw;}
	body{min-height: 350px;}
	.stu{margin-top: 5vh; color: blue; font-weight: bolder; margin-left: 2.5%; float: left; width: 30%; }
	.change{font-size: 16px; font-family: none;}
	.change{border-radius: 30px; height: 30px; width: 80px; color: white; font-weight: bold;}
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
	.sec{height: 12%; background-color: #efefef; border-top: black 0.15vw solid; border-left: black 0.15vw solid;}
	.th{height:85.3%; background-color: white; border-left: black 0.15vw solid; overflow: auto;}
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
	table{font-size: 16px;}

	.manage{width: 497px; border-bottom: darkred 2px solid; margin-top: 50px; text-align: left; color: darkred; font-weight: bold;}
	table{background-color: #f9ecec; margin-top: 20px;}
	th{background-color: darkred; text-transform: capitalize; font-weight: bold; padding: 5px; color: white;}
	td{background-color: white; padding: 5px; position: relative;}
	input{border: 1px transparent solid; border-bottom: #cccccc 1px solid; outline: none;}
	.change{border-radius: 30px; background-color: darkred; height: 30px; width: 80px; color: white; font-weight: bold;}
	table input{font-size: 14px;}
	.th{font-size: 16px;}
	.show{position: absolute; right: 2%; top: 0; cursor: pointer; }
	#pass{display: none;}
	#pass1{display: none;}
	td input::placeholder{font-size: 10px;}
				@media all and (orientation: portrait) and (max-width: 800px){
		.search input{min-height: 12px;}
		.t{max-height: 20px;}
		.th{height: 87.5%;}
		.na{font-size: 2.5vw; margin-left: 25px;}
		.exe img{width: 4.5vw;}
		.imag{min-height: 70px; min-width: 70px;}
		.footer{font-size: 150%;}
	}
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
		.th{height: 92.1%;}
		.exe img{width: 4.5vw;}
		.sec{max-height: 8vw; overflow: hidden; width: 100%;}
	.t{max-height: 6vw;}
	}
	@media all and (orientation: portrait) and (min-height: 720px){
		.th{height: 93%;}
	}
	
	

</style>

</head>
<body>
	<?php 
	$email = $_SESSION['email'];
	$password = $_SESSION['password'];
	$sql = "SELECT*FROM user WHERE email = '$email' AND Password = '$password'";
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
<a href="home.php"><p class = "p"><font> My Questions</font></p></a>
<a href="question.php" ><p class = "p"> <font> Questions</font></p></a>
<a href="password.php"><p class = "active"><font> Change Password</font></p></a>
<a href="logout.php"><p class = "p"><font> Logout</font></p></a>

</div>


	</div><div class = "whitespace" id = "space" onclick = "document.getElementById('home').style.left = '-100%'; document.getElementById('space').style.display = 'none'"></div>

	<div class = "body">

<div class = "t">
<div class = "exe"><img src="Images/image 9a.png" onclick = "document.getElementById('home').style.left = '0%'; document.getElementById('space').style.display = 'block'"></div>
<div class = "na">Decision Management System</div>
<div class = "search"> 
	<form action = "search.php" method = "post">
		<input type = "search" name = "search" placeholder="Search..." class = "input">
		<input type ="submit" name = "search" value="Search" class = "submit">
	</form>
</div>
</div>


	<div class = "th">
<div align = "center">
<div class = "manage">password management</div>
<div class = "table">
	<form action = "change.php" method = "post">
<table align = "center">
<tr>
	<th>Email</th><td><?php echo $r['email']; ?></td>
</tr>
<tr>
	<th>old password</th><td><label><input type = "password" id = "word" required name = "old">
		<span class = "show"><img draggable = "false" id = "show" onmousedown = "this1()" src = "images/show.png" height = "30" width = "35">
		<img  draggable = "false" id = "pass" onmouseup = "that1()" src = "images/pass.png" height = "30" width = "35" onmouseout = "that1()"></span></label>
	</td>
</tr>
<tr>
	<th>new password</th><td><label><input type = "password" onkeyup = "late()" required placeholder = "Enter more than 8 characters" id = "old" name = "password">
		<span class = "show"><img draggable = "false" id = "show1" onmousedown = "this2()" src = "images/show.png" height = "30" width = "35">
		<img  draggable = "false" id = "pass1" onmouseup = "that2()" src = "images/pass.png" height = "30" width = "35" onmouseout = "that1()"></span></label>
	</td>
</tr>
<tr>
	<th>confirm password</th><td><input type = "password" id = "confirm" style = "color:red" name = "confirm"></td>
</tr>
<tr><input type = "hidden" value = "<?php echo $r['Admin_ID']; ?>" name = "id">
	<td colspan = "2" align = "center"><input type = "submit" value = "Change" class = "change"></td>
</tr>
</table>
</form>
</div>
</div>


	</div>
</div>
</div>
<script type="text/javascript">
	var old = document.getElementById('old');
	var confirm = document.getElementById('confirm');
		function late(){
		if(old.value.length > 8 || old.value.length <= 0){
			old.style.color = "black";
			old.style.borderBottomColor = "#ccc";
		}
		else{
			old.style.color = "red";
			old.style.borderBottomColor = "red";
		}
	}

	function match(){
		if(old.value == confirm.value || confirm.value.length <= 0){
			confirm.style.color = "black";
			confirm.style.borderBottomColor = "#ccc";
		}
		else{
			confirm.style.color = "red";
			confirm.style.borderBottomColor = "red";
		}
		

		//sulaimonkudirat09@gmail.com kudirat09
	}
	setInterval(match, 1);

	 var show = document.getElementById('show');
       var pass = document.getElementById('pass');
       var word = document.getElementById('word');
       function this1(){
       	show.style.display = "none";
       	pass.style.display = "block";
       	word.type = "text";
       }

       function that1(){
       	show.style.display = "block";
       	pass.style.display = "none";
       	word.type = "password";
       }

        var show1 = document.getElementById('show1');
       var pass1 = document.getElementById('pass1');
       function this2(){
       	show1.style.display = "none";
       	pass1.style.display = "block";
       	old.type = "text";
       }

       function that2(){
       	show1.style.display = "block";
       	pass1.style.display = "none";
       	old.type = "password";
       }
</script>
<div class = "footer">
<center>
&copy; Copyright <?php echo date('Y'); ?>. All right reserved | Developed by <strong>loladox</strong>        <sup> &trade;</sup></center>
</div>
</body>
</html>