<!DOCTYPE html>
<html>
<head>
	<title>CRUD</title>
</head>
<body style="background-image: url('univ-brawijaya.jpg')">
	<center>
		<h2><font color="RED">DATA MAHASISWA Univesitas Brawijaya</font></h2>
	</br>
	<h3>EDIT DATA</h3>

	<?php
	include 'koneksi.php';
	$id = $_GET['id'];
	$data = mysqli_query($koneksi,"select * from mahasiswa where id='$id'");
	while($d = mysqli_fetch_array($data)){
		?>
		<form method="post" action="update.php">
			<table>
				<tr>
					<td>nama</td>
					<td>
						<input type="hidden" name="id" value="<?php echo $d['id']; ?>">
						<input type="text" name="Nama" value="<?php echo $d['nama']; ?>">
					</td>
				</tr>
				<tr>
					<td>nim</td>
					<td>
						<input type="number" name="Nim" value="<?php echo $d['nim']; ?>">
					</td>
				</tr>
				<tr>
					<td>alamat</td>
					<td>
						<input type="text" name="Alamat" value="<?php echo $d['alamat']; ?>">
					</td>
				</tr>
				<tr>
					<td>fakultas</td>
					<td>
						<input type="text" name="Fakultas" value="<?php echo $d['fakultas']; ?>">
					</td>
				</tr>
				<tr>
					<td>prodi</td>
					<td>
						<input type="text" name="Prodi" value="<?php echo $d['prodi']; ?>">
					</td>
				</tr>

				<tr>
					<td></td>
					<td><input type="submit" value="SIMPAN">
						<input type="button" value="KEMBALI" onClick="window.location='index.php'"></td>
				</tr>
			</table>
		</form>
		<?php	
	}
	?>

</body>
</html>