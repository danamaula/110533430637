<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 4.0 Transitional//EN"> 
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title>Data Radio Button</title> 
</head>

<body>

<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
Jenis Kelamin
	<input type="radio" name="sex" value="Male" /> Male
	<input type="radio" name="sex" value="Female" /> Female <br/>
	<input type="submit" value="OK" />
</form>

<?php
if (isset($_POST['sex'])) {
	echo $_POST['sex'];
}
?>

</body>
</html>