<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
	<title>Metode GET</title>
</head>

<body>

<form action = "<?php $_SERVER['PHP_SELF'];?>" method = "get">
Nama
<input type = "text" name ="nama" /> <br/>
<input type = "submit" value = "OK"/>
</form>

<?php
if (isset ($_GET['nama'])) {
	echo 'Hallo , ' . $_GET['nama'];
}
?>
</body>
</html>