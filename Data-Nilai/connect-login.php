<?php 
$servername ="madebyabyy.my.id";
$username ="rplsmk4padalaran_madeby";
$password ="2rQXYy6M";
$database ="rplsmk4padalaran_madebyabyy";
$koneksi = mysqli_connect("$servername","$username","$password","$database");
 
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
 
?>