<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Kalkulator</title>
<style>
body{
  background-color: #8a2a90;
}
.content{
  background-color: #c65dcd;
  margin: 100px auto;
  padding: 5px 20px 40px 20px;
  width: 650px;
  border: solid 3px #030303;
}
.min_content{
  margin: 0px auto;
  width: 600px;
}
.content h1{
  color: #030303;
  font-family: Bookman Old Style;
  font-size: 30px;
  
}

.content input{

  margin: 5px 0 0 0;
  padding: 5px;
  font-family: Bookman Old Style;
  font-size: 12px;
}
</style>

<script type="text/javascript">
  function validasi_input(form){
	  if (form.input1.value != ""){
		  var x = (form.input1.value);
		  var status = true;
		  var list = new Array("0", "1", "2", "3", "4", "5", "6", "7", "8", "9");
		  for (i=0; i<=x.length-1; i++)
		  {
			  if (x[i] in list) cek = true;
			  else cek = false;
			  status = status && cek;
		  }		  
			if (status == false)
			{
				alert("Inputan Harus Angka!");
				form.input1.focus();
				return false;
			}
				  if (form.input2.value != ""){
		  var x = (form.input2.value);
		  var status = true;
		  var list = new Array("0", "1", "2", "3", "4", "5", "6", "7", "8", "9");
		  for (i=0; i<=x.length-1; i++)
		  {
			  if (x[i] in list) cek = true;
			  else cek = false;
			  status = status && cek;
		  }		  
			if (status == false)
			{
				alert("Inputan Harus Angka!");
				form.input2.focus();
				return false;
			}

  	}


  	}
			return (true);
  } 
  
  </script>
  </head>

<body>

<form name="kalkulator" action="<?php $_SERVER['PHP_SELF']; ?>" method="post" onSubmit="return validasi_input(this)" >
<div class="content">
<div class="min_content">
<h1>Mini Kalkulator</h1>
</div>
<hr color="#030303" />
<div class="min_content">

  <input type="text" name="input1" id="input1" value= "<?php echo $_POST['input1'];?>" />

<select name="operasi">
  <option value="+" <?php
if ($_POST['operasi'] == "+") {
echo 'selected="selected"';
}
?>>+ </option>
  <option value="-" <?php
if ($_POST['operasi'] == "-") {
  echo 'selected="selected"';
}
?> >- </option>
  <option value="*" <?php
if ($_POST['operasi'] == "*") {
  echo 'selected="selected"';
}
?> >*</option>
  <option value="/" <?php
if ($_POST['operasi'] == "/") {
  echo 'selected="selected"';
}
?> >/</option>
</select>

  <input type="text" name="input2" id="input2" value= "<?php echo $_POST['input2'];?>"  />

<input type="submit" value="OK" />
<label>
<input name="hasil" type="text" value="<?php 
$a = $_POST['input1'];
$b = $_POST['input2'];
if (isset($_POST['operasi'])){
    if ($_POST['operasi'] == '+'){
      $c = $a + $b;
      echo $c;
      } else if ($_POST['operasi'] == '-'){
          $c = $a - $b;
          echo $c;
      } else if ($_POST['operasi'] == '/'){
          $c = $a / $b;
          echo $c;
      } else if ($_POST['operasi'] == '*'){
          $c = $a * $b;
          echo $c;
      }
      
  }
?>" readonly="readonly" />
</label>
</div>
</div>
</form>

</body>
</html>