<?php
$nama = $_GET['nama'];
$alamat = $_GET['alamat'];
$provinsi = $_GET['provinsi'];
$id = $_GET['id'];
$npwp = $_GET['npwp'];
$hp = $_GET['hp'];
$nama_kapal = $_GET['nama_kapal'];
$jenis_kapal = $_GET['jenis_kapal'];
$jenis_motor = $_GET['jenis_motor'];
$ijin = $_GET['ijin'];
$ja = $_GET['ja'];
$tombol = $_GET['tombol'];

echo "<h1>identitas mahasiswa</h1>";
echo "Nama              : ".$nama."<br>";
echo "Alamat            : ".$alamat."<br>";
echo "Provinsi          : ".$provinsi."<br>";
echo "ID Pemilik        : ".$id."<br>";
echo "Nomor NPWP        : ".$npwp."<br>";
echo "Nomor Telepon/HP  : ".$hp."<br>";
echo "Nama Kapal        : ".$nama_kapal."<br>";
echo "Jenis Kapal       : ".$jenis_kapal."<br>";
echo "Jenis Motor       : ".$jenis_motor."<br>";
echo "Nomor Ijin Kapal  : ".$ijin."<br>";
echo "Jenis Alat Tangkap : ".$ja."<br>";


?>