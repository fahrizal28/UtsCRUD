<?php
// koneksi databese
include 'koneksi.php';

//menangkap data yang di kirim dari form
$id = $_GET['id'];

//update data ke databese
$hasil = mysqli_query($koneksi,"delete from Mahasiswa where id='$id'");

//mengalihkan halaman kembali ke index.php
header("location:index.php");
?>