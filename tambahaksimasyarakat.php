<?php
include('koneksimasyarakat.php');


$nik = $_POST['fnik'];
$nama = $_POST['fnama'];
$tanggallahir = $_POST['ftanggallahir'];
$pekerjan = $_POST['fpekerjaan'];
$golongandarah = $_POST['fgolongandarah'];
$alamat = $_POST['falamat'];
$umur = $_POST['fumur'];


echo $nik." ".$nama." ".$tanggallahir." ".$pekerjan." ".$golongandarah." ".$alamat." ".$umur; 
$sql="INSERT INTO masyarakat VALUES ('','$nik','$nama','$tanggallahir','$pekerjan','$golongandarah','$alamat','$umur')";
$res=mysqli_query($kon,$sql);
//header("location:koneksimasyarakat.php");
?>