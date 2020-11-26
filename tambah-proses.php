<?php
// koneksi databese
include 'koneksi.php';

// menangkap data yang di kirim dari form
$nama = $_POST['Nama'];
$nim = $_POST['Nim'];
$alamat = $_POST['Alamat'];
$fakultas = $_POST['Fakultas'];
$prodi = $_POST['Prodi'];

//var_dump($_POST);
//menginput data ke databese
mysqli_query($koneksi, "insert into mahasiswa (id, nama, nim, alamat, fakultas, prodi) values('','$nama','$nim','$alamat','$fakultas','$prodi')");

header("location:index.php")

?>