<?php 
include("halamanawal.php");
echo "SEARCH";
if (isset($_GET['cari']) AND ($_GET['search'])) {
	$search = $_GET['search'];
	$_SESSION['search'] = $_GET['search'];
	$_SESSION['search'] = $search;
	if ($search !="") {
$conn = mysqli_connect('localhost','root','','ta_6701174151');
$cari = mysqli_query($conn, "SELECT FROM tamod7 WHERE nama LIKE '%$search%' or die mysqli_error()");

	//$cek = mysqli_num_rows($cari);

//if (isset($_GET['cari'])) {
//	$search = $_GET['search'];
//	$_SESSION['nama'] = $nama;
//	$_SESSION['nim'] = $nim;

	echo "data tidak ditemukan";
}else{
echo("cari orang");
}
			$query = mysqli_query($conn, "SELECT * FROM tamod7");
$i=1;
	while ($baru = mysqli_fetch_assoc($query)) {
?>
<table border="0">
	<tr>
		<td colspan="2" align="center"><h4>Data Mahasiswa Ke-<?php echo $i ?></h4></td>
	</tr>
	<tr>
		<td>Nama </td>
		<td><?php echo $baru['nama']."<br>" ?></td>
	</tr>
	<tr>
		<td>NIM</td>
		<td><?php echo $baru['nim']."<br>" ?></td>
	</tr>
	<tr>
		<td>Tanggal Lahir</td>
		<td><?php echo $baru['tanggal']."<br>" ?></td>
	</tr>
	<tr>
		<td>Jenis Kelamin</td>
		<td><?php echo $baru['jk']."<br>" ?></td>
	</tr>
	<tr>
		<td>Program Studi</td>
		<td><?php echo $baru['prodi']."<br>" ?></td>
	</tr>
	<tr>
		<td>Fakultas</td>
		<td><?php echo $baru['fakultas']."<br>" ?></td>
	</tr>
	<tr>
		<td>Asal</td>
		<td><?php echo $baru['asal']."<br>" ?></td>
	</tr>
	<tr>
		<td>Moto Hidup</td>
		<td><?php echo $baru['moto']."<br>" ?></td>
	</tr>
	<tr></tr>
	<tr></tr>
	<tr></tr>
</table>

	<?php 
$i++;
}
}
 ?>
<table>
		<thead>
			<tr>
			<th>Nama</th>
			<th>NIM</th>
			<th>Tanggal Lahir</th>
			<th>Jenis Kelamin</th>
			<th>Program Studi</th>
			<th>Fakultas</th>
			<th>Asal</th>
			<th>Moto Hidup</th>
			</tr>'
		</thead>
	</table>