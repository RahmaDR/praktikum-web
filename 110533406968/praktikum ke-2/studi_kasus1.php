<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
	<title>Studi Kasus 1</title>
</head>

<body>
<?php
$jam = 20;

if ($jam >=1 and $jam<=12)
{
	echo "Sekarang Pukul " . $jam . " WIB";
	echo "<br/>";
	echo "Greeting : ";
	echo "Selamat Pagi ..... ";
}
elseif ($jam >12 and $jam<=16)
{
	echo "Sekarang Pukul " . $jam . " WIB";
	echo "<br/>";
	echo "Greeting : ";
	echo "Selamat Siang ..... ";
}
elseif ($jam >16 and $jam<=24)
{
	echo "Sekarang Pukul " . $jam . " WIB";
	echo "<br/>";
	echo "Greeting : ";
	echo "Selamat Malam..... ";
}
else {
	echo "Waktu yang anda masukan salah ";
}

?>
</body>
</html>