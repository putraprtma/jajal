<?php
$kon = mysqli_connect("localhost","root","",
	"pendataanmasyarakat");
if (!$kon) {
	die("koneksi gagal");
	echo "koneksi gagal";
}
//echo "koneksi berhasil";
?>