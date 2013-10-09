<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
	<title>Data Seleksi Preselecting</title>
</head>

<body>

<form action = "<?php $_SERVER['PHP_SELF'];?>" method = "post">
Pekerjaan 
<select name = "job">
	<option value = "Mahasiswa"  
	<?php 
	if (@$_POST['job'] == 'Mahasiswa') {
	echo 'selected = "selected"';
	}
	?> > Mahasiswa 
	
	<option value = "ABRI" 
	<?php 
	if (@$_POST['job'] == 'ABRI') {
	echo 'selected = "selected"';
	}
	?>	> ABRI 
	<option value = "PNS" 
	<?php 
	if (@$_POST['job'] == 'PNS') {
	echo 'selected = "selected"';
	}
	?>
	> PNS 
	<option value = "Swasta" 
		<?php 
	if (@$_POST['job'] == 'Swasta') {
	echo 'selected = "selected"';
	}
	?>
	> Swasta 
</select> <br/>
<input type = "submit" value = "OK"/>
</form>

<?php
if (isset ($_POST['job'])) {
	echo $_POST['job'];
}
?>
</body>
</html>