<!DOCTYPE html>
<html>
<head>
	<title>Giriş Uygulaması</title>

	<style type="text/css">
		.buton{
			background-color:gray;
			
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
		.textbox{
			border:2px solid;
			border-radius:4px;
			box-shadow: 1px 1px 1px #000;
		}
		fieldset{
			width:100px;
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
<form action="" method="POST">
	<fieldset>
	
		<b>Ad</b>  <br><br><input class="textbox" type="text" name="ad"><br><br>
		<b>Şifre</b> <br><br> <input class="textbox" type="password" name="sifre"><br><br>
		<input class="buton" type="submit" name="giris" value="Giriş Yap">
	

<br><br>
<?php 
session_start();
if (isset($_POST['giris'])) {
	
	$ad=$_POST['ad'];
	$sifre=$_POST['sifre'];
	if ($ad=="gdyazilim" && $sifre=="1234") {
		$_SESSION['kad']=$ad;
		header("Location:kontrol.php");
}
	else{
		echo "Kullanıcı adınız yada Şifreniz Hatalı";
	}
}

 ?>
</fieldset>
</form>
</body>
</html>