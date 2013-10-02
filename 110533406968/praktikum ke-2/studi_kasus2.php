<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
	<title>Studi Kasus 2</title>
</head>

<body>
<p> Mengenerate Table <br/> <br/></p>
<table border = 1>
<?php
$b= 3;
$k = 4;
$l = 1;

for ($i = 1; $i <= $b ; $i++ ){
?>
<tr>
	<?php 
	for ($j = 1; $j <= $k ; $j++ ){
	?>
	<td width = "50px" height = "50px" align = "center">
		<?php 
		echo $l++; 
		?>
	</td>
	<?php
	}
	?>
</tr>
<?php
}
?>
</table>
</body>
</html>