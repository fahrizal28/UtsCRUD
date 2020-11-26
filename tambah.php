<!DOCTYPE html>
<html>
<head>
	<title>CRUD</title>
</head>
<body style="background-image: url('univ-brawijaya.jpg')">
	<center>
		<h2><font color="RED">DATA MAHASISWA UNIVERSITAS BRAWIJAYA</font></h2>
		<br/>
		<h2 style="color: Red">TAMBAH DATA</h2>
		<form method="post" action="tambah-proses.php">
			<table>
				<tr style="color: Red">
					<td>nama</td>
					<td><input type="text" name="Nama"></td>
				</tr>
				<tr style="color: Red">
					<td>nim</td>
					<td><input type="number" name="Nim"></td>
				</tr>
				<tr style="color: Red">
					<td>alamat</td>
					<td><input type="text" name="Alamat"></td>
				</tr>
				<tr style="color: Red">
					<td>fakultas</td>
					<td><input type="text" name="Fakultas"></td>
				</tr>
				<tr style="color: Red">
					<td>prodi</td>
					<td><input type="text" name="Prodi"></td>
				</tr>

				<tr>
					<td></td>
					<td><input type="submit" name="simpan"></td>
					</tr>
			</table>
		</form>	
</body>
</html>