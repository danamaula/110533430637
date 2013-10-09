<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
	<head>
		<title>Tugas Praktikum</title>
		
<!-- tag style di bawah ini untuk mengatur tampilan halaman -->
		<style>
			body{
				background-color: #8a2a90;
			}
			.content{
				background-color: #c65dcd;
				margin: 100px auto;
				padding: 5px 20px 40px 20px;
				width: 350px;
				border: solid 3px #030303;
				font-family: Bookman Old Style;
				font-size: 16px;
			}
			.min_content{
				margin: 0px auto;
				width: 250px;
			}
			.content h1{
				color: #030303;
				font-family: Bookman Old Style;
				font-size: 30px;
			}
			.content label{
				display:block;
			}
			.content input{
				display:block;
				margin: 5px 0 0 0;
				padding: 5px;
				font-family: Bookman Old Style;
				font-size: 12px;
			}
		</style>
	</head>
	<body>
    	<?php 
			if(isset($_POST['username'])&&isset($_POST['password'])){
				if($_POST['username']=='dana'&&$_POST['password']=='dana'){
					echo "
					<script>
						alert('SELAMAT DATANG , Dana');
					</script>
					";
				}else{
					echo "
					<script>
						alert('Username atau Password yang Anda Masukkan Salah');
					</script>
					";
				}
			}
		?>
		<form name="formlogin" action="<?php $_SERVER['PHP_SELF'];?>" method="post" onsubmit="return validateForm()">
			<div class="content">
				<div class="min_content">
					<h1>Login</h1>
				</div>
				<hr color="#030303" />
				<div class="min_content">
					<label>Username</label>
					<input type="text" name="username" id="username" autofocus />
					<label>Password</label>
					<input type="password" name="password" />
					<div font-family="Bookman Old Style"; font-size="24px"; align="left">
					<input type="submit" value="L O G I N" />
					</div>
					
				</div>
			</div>
		</form>
		
  <!-- tag script dibawah ini untuk membuat validasi inputan -->
		<script>
			function validateForm(){
				var b=document.forms["formlogin"]["password"].value;
				if (b==null || b==""){
					alert("Masukkan Password Terlebih Dahulu");
					document.getElementById("username").focus();
				  	return false;
				}			
				
				var a=document.forms["formlogin"]["username"].value;
				if (a==null || a==""){
					alert("Masukkan Username Terlebih Dahulu");
					document.getElementById("username").focus();
				  	return false;
				}
				var alphaExp = /^[a-zA-Z]+$/;
				if(a.match(alphaExp)){
					if(b.match(alphaExp)){
						return true;
					}else{
						alert("Password yang Anda Masukkan Harus Berupa Huruf, Silahkan Mencoba Kembali....");
						document.getElementById("username").focus();
						return false;
					}
				}else{
					alert("Username Anda Masukkan Harus Berupa Huruf, Silahkan Mencoba Kembali....");
					document.getElementById("username").focus();
					return false;
				}
			}
		</script>
	</body>
</html>