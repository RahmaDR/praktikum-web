<!DOCTYPE html 
PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html> 
<head> 
	<title>Data Checkbox Preselecting</title> 
</head> 
<body> 
	<form action="<?php $_SERVER['PHP_SELF'];?>" method="post"> 
		Jenis Kelamin 
		<input type="checkbox" name="hobby[]" value="Membaca" checked
		<?php
		if(@$_POST['hobby[]']=='Membaca'){
			echo 'checked="checked"';}
		?>/>Membaca

		<input type="checkbox" name="hobby[]" value="Olahraga" checked 
		<?php
		if(@$_POST['hobby[]']=='Olahraga'){
			echo 'checked="checked"';}
		?>/>Olahraga

		<input type="checkbox" name="hobby[]" value="Menyanyi" checked
		<?php
		if(@$_POST['hobby[]']=='Menyanyi'){
			echo 'checked="checked"';}
		?>/>Menyanyi <br /> 

		<input type="submit" value="OK" /> 
	</form> 

<?php 
if (isset($_POST['hobby'])) { 
	foreach ($_POST['hobby'] as $key => $val) { 
		echo $key . ' -> ' .$val . '<br />'; 
	} 
} 
?> 

</body> 
</html>