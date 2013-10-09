<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
	<title>Sukses Log-in</title>
	<style type = "text/css">
	<!--
	body{
	background-color : #FF6347;
	} 
	.login{
	margin : 150px 450px 150px 450px;
	background-color : #FFF5EE;
	width : 500px;
	height : 350px;
	padding : 10px 10px 10px 10px;
	border : 3px solid #A52A2A;
	}
	-->
	</style>

</head>

<div class = "login">
<body align = "center">
<h1>SELAMAT DATANG</h1>
<h3>Anda Telah Berhasil melakukan Log-In halaman tugas praktikum pemrograman WEB</h3>
<p>Tugas ini dipersembahkan oleh : </p>
<p>Anjar Dwi Rahmawati</p>
<p>110533406968</p>
<p>S1 PTI Off A 2011</p>

<form action = "<?php $_SERVER['PHP_SELF'];?>" method = "post">
<input type ="submit" name = "logout" value = "LOGOUT">
</form>

<?php
if (isset($_POST["logout"])){
?><script language = "JavaScript">
alert("Terimakasih telah berkunjung")
document.location='tugas_praktikum.php'</script><?php
}?>
</div>
</body>
</html>