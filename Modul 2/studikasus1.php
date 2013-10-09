<!DOCTYPE html 
     PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
     "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"> 
 
<head> 
  <title>Preselecting Seleksi</title> 
</head> 
 
<body> 
 
  <form action="<?php $_SERVER['PHP_SELF'];?>" method="post"> 
    Kategori Film : 
    <select name="film"> 
      <option value="Horor">Horor 
      <option value="Action">Action
      <option value="Romance">Romance
      <option value="Komedi" selected="
      <?PHP
	  if ($_post['kota']=="Komedi"){
		  echo 'selected="selected"';}
      ?>">Komedi
      <option value="Family">Family
	  <option value="Adventure">Adventure
    </select> <br/>
 
    <input type="submit" value="OK" /> 
  </form> 
 
<?php 
if (isset($_POST['film'])) { 
  echo $_POST['film']; 
} 
?> 
</body>
</html>
