<?php

include('koneksimasyarakat.php');


$sql = "SELECT * FROM masyarakat";
$res = mysqli_query($kon,$sql);

   while ($row = mysqli_fetch_array($res) ) {
   	echo "nik: " . $row["nik"] . "nama" . $row["nama"] . "tanggallahir" . $row["tanggallahir"] . "pekerjaan" . $row["pekerjaan"] . "golongandarah" . $row["golongandarah"] . "alamat" . $row["alamat"] . "umur" . $row["umur"]."<br/>";
   };

   //echo "halo";

   ?>
   <a href="tambahmasyarakat.php">tambahmasyarakat</a>

   	

   