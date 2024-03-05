<html>
<head>
<style type="text/css">
.modal{ background-color: white; max-height: 94%; width: 45%; margin-top: 30px; margin:15px auto; overflow: auto; position: relative;
-webkit-animation-name: exampla; -webkit-animation-duration:1s;}
		@-webkit-keyframes exampla{ from{transform:scale(1);   opacity: 0;} to{transform:scale(1); opacity: 1; }}
.close{ margin:10px; cursor: pointer; font-weight: bolder; color: red;}
.head{border-bottom: 1px #cccccc solid; height: 30px; margin-top: 10px;}
.head1{float: left; margin-left: 30px;}
.head2{float: left; margin-left: 30px;}
.head3{float: right; margin-right: 30px;}
.head3 input{border: transparent; background-color: transparent; outline: none; cursor: pointer; color: #cccccc; font-weight: bolder;}
.class{ display: none; margin-top: 10px; border-radius: 3px; height: 25px; border: #cccccc 1px solid;}
.dept{display: none; margin-top: 10px; border-radius: 3px; height: 25px; border: #cccccc 1px solid;}
.namesec{ margin:  20px; margin-bottom: 50px;}
.model{float: left; border-radius: 100px; object-fit:cover; object-position:0% 0%;}
.namesec1{float: left; margin-left: 10px;}
.select{float: left; border-radius: 3px; height: 25px; border: #cccccc 1px solid; margin-left: 3px;}
select{outline: none; font-size: 14px;}
.modal input{font-size: 14px;}
table{margin:0px; float: left;}
.name1{font-weight: bold; margin-left: 3px; float: left; text-transform: capitalize; font-size: 25px; margin-top: 5px;}
.context{max-height: auto; min-height: 30px; margin-bottom: 5px;}
.mamali{background-color: transparent; resize:none; outline: none; float: left; width: 95%; margin-left: 10px; margin-bottom: 20px; font-family: arial; overflow: hidden; border: none;}
.contextimg{width: 100%; margin-bottom: 30px;}
.add{border-top: #cccccc 1px solid; border-bottom: #cccccc 1px solid; margin-top: 30px; margin-bottom: 30px; height: 40px; float: left; width: 100%;}
.to{float: left; margin:10px;}
.upload{float: right;  margin-right: 40px; margin-top: 5px;}
.upload img{border-radius: 10px;}
#modal{ display: none;}
.spana{cursor: pointer;}
.sas{background-color: darkred; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.5); position: fixed; z-index: 1; top: 0; left: 0;}
.modal{font-size: 16px;}
@media all and (max-width: 800px){
	.modal{height: 100%; max-height: 100%; width: 100%; margin: 0px; position: static;}
	}
	.fose{position: absolute; width: 100%; height: 100%; z-index: -1;}
</style>
</head>
<div class = "sas" id="modal" >
	<label for = "foseq"><div class = "fose" onclick = "that()"></div></label>
<div class = "modal" align = "center" >
	<form action = "newsphp.php" method = "post" name = "myform" enctype = "multipart/form-data">
<div class = "head">
		<input type = "hidden" name = "id" value = "<?php echo $r['user_ID']; ?>">
		<input type = "hidden" name = "day" value = "<?php echo date('D'); ?>">
		<input type = "hidden" name = "date" value = "<?php echo date('M  d'); ?>">
		<input type = "hidden" name = "year" value = "<?php echo date('Y'); ?>">
<div class = "head1"><label><input type = "reset" id = "foseq" style = "display:none"><span class = "spana" onclick = "that()"><img src="images/unnamed.png" height = "20" width = "20"></span></label></div><div class = "head2"> Create Post</div><div class = "head3"><input type="submit" value = "POST" ></div>
</div>
<div class = "namesec">
	<img src="upload/<?php echo $r['image']; ?>" height = "50" width = "50" class = "model">
<div class = "namesec1">
	<div class = "name1"><?php echo $r['userName']; ?></div>
</div>
</div><br>
<div class = "context" id = "area"><textarea rows = "1" cols = "75" id = "long" placeholder = "What's on your mind?" class = "mamali" onkeyup ="new do_resize(this);" name = "post" required></textarea>
		<script type="text/javascript"> 
	function do_resize(textbox) {

	 var maxrows=500; 
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
<img class = "contextimg" id = "myimage" style = "display:none">
<video controls class = "contextimg" id = "myvideo" style = "display:none"></video>

<div class = "add"><div class = "to" id = "my">Add to your post</div><div class = "upload" ><label><input type = "file" name = "name" accept = "image/*,video/*" capture onchange = "mark()" style = "display:none" ><img src="images/photo.png" style = "cursor:pointer" height:"30" width = "30"/></label>
</div></div></div>




<script type="text/javascript">
function man(){
			var modal = document.getElementById('modal');
			modal.style.display = "block";
		}
		function that(){
			var modal = document.getElementById('modal');
			modal.style.display = "none";
			var mid = document.getElementById('myimage');
			var mida = document.getElementById('myvideo');
			mida.data = "";
			mid.data = "";
			mida.style.display = "none";
			mid.style.display = "none";

		}
		function mark(){
			var mac = document.myform.name.value;
			var mane = mac.lastIndexOf(".");
			var ndc = mac.slice(mane+1);
			var tick = ndc.toLowerCase();
			var mid = document.getElementById('myimage');
			var mida = document.getElementById('myvideo');
			mid.alt = tick;

			if(tick == "jpg" || tick == "png" || tick == "jpg" || tick == "jpeg" || tick == "gif"){
			mid.src = URL.createObjectURL(event.target.files[0]);
			mida.style.display = "none";
			mid.style.display = "block";
			mida.src = "";
			}
			else{
			mida.src = URL.createObjectURL(event.target.files[0]);
			mida.style.display = "block";
			mid.style.display = "none";
			}
		document.getElementById('long').required = false;
		}
</script>
</form>
</div>
</div>
</html>