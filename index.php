<!DOCTYPE html>
<html>
<head>
	<title>CRUD</title>
</head>
<body style="background-image: url('univ-brawijaya.jpg')">
	<center>
	<h2><font color="RED">DATA MAHASISWA UNIVERSITAS BRAWIJAYA</font></h2>
	</br>
	<h2 style="color: Red">EDIT DATA</h2>
	<table border="1" style="widhh:100%;text-align: left;background-color: gold;">
		<tr style="widhh:100%;text-align: left;background-color: red;">
			<td>NO</td>
			<td>Id</td>
			<td>NIM</td>
			<td>Nama</td>
			<td>Alamat</td>
			<td>Fakultas</td>
			<td>Prodi</td>
			<td>Aksi</td>
		</tr>
		<?php
			include"koneksi.php";

			$no =1;
			$Data= mysqli_query($koneksi,"SELECT * FROM Mahasiswa");
		

			while ($hasil= mysqli_fetch_array($Data)) {
				?>
			<tr>
				<td><?php echo $no++?></td>
				<td><?php echo $hasil['id']; ?></td>
				<td><?php echo $hasil['nim']; ?></td>
				<td><?php echo $hasil['nama']; ?></td>
				<td><?php echo $hasil['alamat']; ?></td>
				<td><?php echo $hasil['fakultas']; ?></td>
				<td><?php echo $hasil['prodi']; ?></td>
				<td>
					<a href="edit.php?id=<?php echo $hasil['id']; ?>"> Ubah </a>
					<a href="hapus.php?id=<?php echo $hasil['id']; ?>"> Hapus </a>
				</td>
			</tr>
			<?php
			}
		?>
	</table>

	<a href="tambah.php">Tambah Mahasiswa</a>
	
</body>
</html>