<?php
$koneksi = mysqli_connect("localhost","root","","database_mahasiswa");
	

if (mysqli_connect_error()) {
	echo "Koneksi Database Gagal:" . mysqli_connect_error();
	
}

?>