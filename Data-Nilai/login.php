<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="assets/css/logstyle.css">
</head>
<body>
 
 
<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan']=="gagal"){
			echo "<script>
						alert('Login Failed');
				    </script>";
		}
	}
	?>
 
	<div class="kotak_login">
		<p class="tulisan_login">LOGIN</p>
 
		<form action="cek-login.php"  method="post">
			<label>Username</label>
			<input type="text" name="username" class="form_login" placeholder="Username .." required="required">
 
			<label>Password</label>
			<input type="password" name="password" class="form_login" placeholder="Password .." required="required">
 
			<input type="submit" class="login" value="Login">
 
			<br/>
			<br/>
			<center>
				<a class="link" href="index.php">kembali</a>
			</center>
		</form>
		
	</div>
 
 
</body>
</html>