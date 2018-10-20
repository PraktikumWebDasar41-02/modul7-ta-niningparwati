<form>
	<input type="text" name="ed" value="">
	<input type="submit" name="edit">
</form>
<?php 
session_start();
$conn = mysqli_connect('localhost','root','','ta_6701174151');
//$_SESSION['nim']=$nim;
$query = mysqli_query($conn, "SELECT * FROM tamod7");
if (mysqli_num_rows($query)>0) {
	while ($baru = mysqli_fetch_assoc($query)) {
	?>

 <form method="GET" action="">
		<table>
			<tr>
				<td colspan="2" align="center">FORM EDIT DATA MAHASISWA</td>
			</tr>
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama" value="<?php echo $baru['nama']; ?>"></td>
			</tr>
			<tr>
				<td>NIM</td>
				<td><input type="text" name="nim" value="<?php echo $baru['nim']; ?>"></td>
			</tr>
			<tr>
				<td>Tanggal Lahir</td>
				<td><input type="date" name="tanggal" value="<?php echo $baru['tanggal'] ?>"></td>
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
					<input type="radio" name="fakultas" checked="">FIT
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
				<td><input type="text" name="asal" value="<?php echo $baru['asal'] ?>"></td>
			</tr>
			<tr>
				<td>Moto Hidup</td>
				<td>
					<textarea name="moto" value=""><?php echo $baru['moto'] ?></textarea>
				</td>
			</tr>
			<tr>
				<td><input type="submit" name="simpan" value="SIMPAN PERUBAHAN"></td>
				<td><input type="submit" name="kembali" value="KEMBALI"></td>
			</tr>
		</table>
	</form>

<?php 
}
	} 

	if (isset($_GET['simpan'])) {
		$nama = $_GET['nama'];
		$nim = $_GET['nim'];
		$tanggal = $_GET['tanggal'];
		$jk = $_GET['jk'];
		$prodi = $_GET['prodi'];
		$fakultas = $_GET['fakultas'];
		$asal = $_GET['asal'];
		$moto = $_GET['moto'];

		$sql = mysqli_query($conn, "UPDATE tamod7 SET nama='$nama', nim='$nim', tanggal='$tanggal', jk='$jk', prodi='$prodi', fakultas='$fakultas', asal='$asal', moto='$moto'");

		if ($sql) {
			echo "Perubahan Berhasil disimpan";
		}else{
			echo "Perubahan gagal disimpan".mysqli_error($conn);
		}
	}

	if (isset($_GET['kembali'])) {
		header("Location:view.php");
	}
?>