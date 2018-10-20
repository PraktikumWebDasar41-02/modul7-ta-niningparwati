<!DOCTYPE html>
<html>
<head>
	<title>Form</title>
</head>
<body>
	<form method="GET" action="">
		<table>
			<tr>
				<td colspan="2" align="center">FORM INPUT DATA MAHASISWA</td>
			</tr>
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama" value=""></td>
			</tr>
			<tr>
				<td>NIM</td>
				<td><input type="text" name="nim" value=""></td>
			</tr>
			<tr>
				<td>Tanggal Lahir</td>
				<td><input type="date" name="tanggal" value=""></td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td>
					<select name="jk">
						<option value="Laki-laki">Laki-Laki</option>
						<option value="Perempuan">Perempuan</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Program Studi</td>
				<td>
					<select name="prodi">
						<option value="D3 Manajemen Informatika" checked>D3 Manajemen Informatika</option>
						<option value="D3 Perhotelan">D3 Perhotelan</option>
						<option value="D3 Manajemen Pemasaran">D3 Manajemen Pemasaran</option>
						<option value="S1 MBTI">S1 MBTI</option>
						<option value="S1 Teknik Industri">S1 Teknik Industri</option>
						<option value="S1 Teknik Elektro">S1 Teknik Elektro</option>
						<option value="S1 DKV">S1 DKV</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Fakultas</td>
				<td>
					<input type="radio" name="fakultas">FIT
					<input type="radio" name="fakultas">FKB
					<input type="radio" name="fakultas">FEB
					<input type="radio" name="fakultas">FIK
					<input type="radio" name="fakultas">FIF
					<input type="radio" name="fakultas">FRI
					<input type="radio" name="fakultas">FTE
				</td>
			</tr>
			<tr>
				<td>Asal</td>
				<td><input type="text" name="asal" value=""></td>
			</tr>
			<tr>
				<td>Moto Hidup</td>
				<td>
					<textarea name="moto"></textarea>
				</td>
			</tr>
			<tr>
				<td><input type="submit" name="submit"></td>
			</tr>
		</table>
	</form>
</body>
</html>

<?php 
session_start();

$conn = mysqli_connect('localhost','root','','TA_6701174151');

if (isset($_GET['submit'])) {
	$nama = $_GET['nama'];
	$nim = $_GET['nim'];
	$tanggal = $_GET['tanggal'];
	$jk = $_GET['jk'];
	$prodi = $_GET['prodi'];
	$fakultas = $_GET['fakultas'];
	$asal = $_GET['asal'];
	$moto = $_GET['moto'];

	$_SESSION['nama'] = $nama;
	$_SESSION['nim'] = $nim;

	$sql = mysqli_query($conn, "INSERT INTO tamod7(nama,nim,tanggal,jk,prodi,fakultas,asal,moto) VALUES('$nama','$nim','$tanggal','$jk','$prodi','$fakultas','$asal','$moto')");
	if ($sql) {
		echo "berhasil input";
		header("Location:halamanawal.php");
	}else{
		echo "gagal input".mysqli_error($sql);
	}
}
 ?>