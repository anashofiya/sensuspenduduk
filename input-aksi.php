<?php 
include 'koneksisensuslanjut.php';
$nama = $_POST['nama'];
$asal daerah = $_POST['asal daerah'];
$gaji = $_POST['gaji'];
 
mysql_query("INSERT INTO user VALUES('','$nama','$asal daerah','$gaji')");
 
header("location:halamandepan.php?pesan=input");
?>