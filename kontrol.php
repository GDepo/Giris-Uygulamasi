<!DOCTYPE html>
<html>
<head>
	<title>Kontrol Sayfası</title>
</head>
<body>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Kontrol Sayfası</title>
	<style type="text/css">
		.buton{
			background-color:lightgray;
			
			border:0px solid ;
			border-radius:150px;
			height:30px;
			box-shadow: 3px 3px 4px #000;
		}
		.buton:hover{
			background-color:darkcyan;
			font-family: sans-serif;
			font-weight: bold;
			font-style: italic;
		}
		fieldset{
			width:200px;
		height: 100px;
			margin-left: 35%;
			margin-top: 10%;
			bottom: 20%;
			padding:20px;
			border: 1px solid;
			border-radius: 10px;
			box-shadow: 3px 3px 4px #000;
		}
	</style>
</head>
<body>
	<fieldset>
<?php 
session_start();
if (isset($_SESSION['kad'])) {
	echo "Hoşgeldin"." ".$_SESSION['kad'];
}else{
header("Location:index.php");	
}
 ?>
<br><br>

<form action="" method="POST"><br>
<input type="submit" class="buton" name="cikis" value="Çıkış Yap">
</form>

<?php 

if (isset($_POST['cikis'])) {
	session_destroy();
	header("Location:index.php");
}

 ?>
 </fieldset>
</body>
</html>
</body>
</html>