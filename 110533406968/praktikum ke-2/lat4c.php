<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
	<title>Seleksi If-Elseif</title>
</head>

<body>
<?php
$a = 10;
$b = 5;

if ($a > $b){
	echo 'a lebih besar dari b';
} elseif ($a == $b) {
	echo 'a sama dengan b';
} else {
	echo 'a kurang dari b';
}
?>
</body>
</html>