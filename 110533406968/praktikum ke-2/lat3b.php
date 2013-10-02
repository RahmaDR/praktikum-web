<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
	<title>Casting Type</title>
</head>

<body>
<?php

$str = '123abc';

//casting nilai variable $str ke integer
$bil = (int) $str; // $bil = 123

echo gettype($str);
//ouput : string

echo'<br/>';

echo gettype($bil);
//output integer
?>
</body>
</html>