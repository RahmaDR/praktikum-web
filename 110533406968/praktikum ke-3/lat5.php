<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
	<title>Data Checkbox</title>
</head>

<body>

<form action = "<?php $_SERVER['PHP_SELF'];?>" method = "post">
Hoby 
<input type = "checkbox" name ="hobby[]" value = "Membaca"/> Membaca
<input type = "checkbox" name ="hobby[]" value = "Olahraga"/> Olahraga
<input type = "checkbox" name ="hobby[]" value = "Menyanyi"/> Menyanyi
<br/>
<input type = "submit" value = "OK"/>
</form>

<?php
if (isset ($_POST['hobby'])) {
	foreach ($_POST ['hobby'] as $key => $val){
		echo $key . '->' . $val . '<br />';
	}
}
?>
</body>
</html>