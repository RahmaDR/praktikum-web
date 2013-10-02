<html>
<head> 
<title>Passing By Value </title>
</head>
<body>
<?php
	function judul (){
	echo "demo melewatkan parameter berdasarkan nilai (pass by value)</br>";
	}
	function KaliDua ($nilai){
	$nilai = $nilai << 1;
	return $nilai;
	}
	
	judul();
	$a = 13;
	echo "\$a sebelum memanggil fungsi = $a</br>";
	echo "Nilai yang dikembalikan oleh fungsi = " . KaliDua($a) . "</br>";
	echo "\$a setelah pemanggilan fungsi = $a";	
?>
</body>
</html>