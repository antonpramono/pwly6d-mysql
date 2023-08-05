<?php
include "koneksi.php";
$nik = $_GET['n'];
$q = "delete from daftar where nik='$nik'";
mysql_query($q);
echo "Data terhapus\n";
echo "<a href='tampilsiswa'>Kembali ...</a>";
?>