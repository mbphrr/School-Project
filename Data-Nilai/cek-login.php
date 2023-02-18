<?php 

session_start();

include 'connect-login.php';

$username = $_POST['username'];
$password = $_POST['password'];

$login = mysqli_query($koneksi,"SELECT * FROM user WHERE username='$username' AND password='$password'");
$cek = mysqli_num_rows($login);

if($cek > 0){

	$data = mysqli_fetch_assoc($login);

	if($data['level']=="admin"){

		$_SESSION['username'] = $username;
		$_SESSION['level'] = "admin";
		header("location:admin/admin-index.php");

	}else if($data['level']=="guru"){
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "guru";
		header("location:guru/guru-index.php");

	}else if($data['level']=="siswa"){
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "siswa";
		header("location:siswa/siswa-index.php");

	}else{

		header("location:index.php?pesan=gagal");
	}

	
}else{
	header("location:index.php?pesan=gagal");
}



?>