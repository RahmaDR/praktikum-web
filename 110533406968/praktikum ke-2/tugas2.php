<?php
function table ($cel, $kol){ ?>
	<table border =1>
<?php
$i = 1;
	while ($i <= $cel) 
{ ?>
	<tr>
<?php
		$j = 0;
		while ($j < $kol) {
		if ($i <= $cel) {
?>
			<td width = "50px" height = "50px"> <?php echo $i; ?></td> 
<?php
		$i++;}
		$j++;}
?>
	</tr>
<?php
}
?>
	</table>
<?php
}
?>

<html>
<head>
	<title>TUGAS PRAKTIKUM 2</title>
</head>

<body>
<?php
echo 'Mengenerate Sel Tabel Secara Flexible';
echo '<br/> <br/>';
echo table(15,7);
?>
</body>
</html>

