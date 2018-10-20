<?php 
$conn = mysqli_connect('localhost','root','','ta_6701174151');

$delete = mysqli_query($conn, "SELECT FROM tamod7");
if (mysqli_affected_rows($delete)>0) {
	echo "Data telah terhapus";
	header("Location:halamanawal.php");
}
 ?>