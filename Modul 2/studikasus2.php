<!DOCTYPE html 
     PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
     "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"> 
 
<head> 
  <title>Preselecting Checkbox</title> 
</head> 
 
<body> 
 
  <form action="<?php $_SERVER['PHP_SELF'];?>" method="post"> 
    Kategori Film 
    <input type="checkbox" name="film[]" value="Anda memilih kategori Film Horor" checked=" 
	<?php
	  if ($_post['film']=="Horor"){
		  echo 'selected="selected"';}
     ?>"
    />Horor
 
    <input type="checkbox" name="film[]" value="Anda memilih kategori Film Komedi" />Komedi
    <input type="checkbox" name="film[]" value="Anda memilih kategori Film Action" />Action 
	<input type="checkbox" name="film[]" value="Anda memilih kategori Film Adventure" />Adventure <br/> 
    
	<input type="submit" value="OK" /> 
  </form> 
 
<?php 
// Ekstraksi nilai 
if (isset($_POST['film'])) { 
  foreach ($_POST['film'] as $key => $val) { 
    echo $val . '<br />'; 
  } 
} 
?> 
 
</body> 
</html>
