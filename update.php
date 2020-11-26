<?php
// koneksi databese
include 'koneksi.php';

//menangkap data yang di kirim dari form
$id = $_POST['id'];
$nama = $_POST['Nama'];
$nim = $_POST['Nim'];
$alamat = $_POST['Alamat'];
$fakultas = $_POST['Fakultas'];
$prodi = $_POST['Prodi'];


//update data ke databese
$hasil = mysqli_query($koneksi,"update mahasiswa set nama='$nama', nim='$nim', alamat='$alamat', fakultas='$fakultas', prodi='$prodi' where id='$id'");

//mengalihkan halaman kembali ke index.php
header("location:index.php");
?>