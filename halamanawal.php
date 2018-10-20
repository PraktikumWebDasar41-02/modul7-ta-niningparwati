<center><h2>Data Mahasiswa</h2></center>
<form method="GET" action="search.php">
	<table>
		<tr>
			<td width="300px"><input type="submit" name="input" value="INPUT DATA"></td>
			<td width="300px"><input type="submit" name="edit" value="EDIT DATA"></td>
			<td>
				<input type="submit" name="cari" value="SEARCH">
				<input type="text" name="search" placeholder="Ketikan Nama atau NIM...">
			</td>
		</tr>
	</table>
</form>
<form action="delete.php">
 	<input type="submit" name="hapus" value="HAPUS">
 </form>
<?php 
session_start();
$conn = mysqli_connect('localhost','root','','ta_6701174151');
 ?>
<?php 
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

if (isset($_GET['input'])) {
		header("Location:form.php");
}
if (isset($_GET['cari']) AND ($_GET['search'])) {
	$search = $_GET['search'];
	$_SESSION['search'] = $search;
	if ($search !="") {
		$cari = mysqli_query($conn, "SELECT * FROM tamod7 WHERE nim LIKE '%search%'")or die (mysqli_error());
		header("Location:search.php");		
	}else{
		$cari = mysqli_query("SELECT * FROM tamod7") or die (mysqli_error());
		header("Location:search.php");
	}
}
if (isset($_GET['edit'])) {
		header("Location:edit.php");
}
 ?>