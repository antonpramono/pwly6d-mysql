<?php
include "koneksi.php";

$q = "select * from daftar";
$ex = mysql_query($q);
echo "<a href='addsiswa.php'>Tambah Calon Siswa</a>";
echo "<table border=1>";
echo "<tr>
<th>NIK</th><th>Nama</th><th>Tempat Lahir</th><th>Tanggal Lahir</th>
<th>Alamat Rumah</th><th>Asal Sekolah</th><th>Tanggal Lulus</th></tr>";
while($r = mysql_fetch_array($ex)){
	echo "<tr><td>".$r['nik']."</td>";
	echo "<td>".$r['nama']."</td>";
	echo "<td>".$r['tempat_lhr']."</td>";
	echo "<td>".$r['tanggal_lhr']."</td>";
	echo "<td>".$r['alamat_rmh']."</td>";
	echo "<td>".$r['asal_sekolah']."</td>";
	echo "<td>".$r['tggl_lulus']."</td>";
	echo "<td><a href='editsiswa.php?n=".$r['nik']."'>Ubah</a>";
	echo "<a href='deletesiswa.php?n=".$r['nik']."'>Hapus</a>";
	echo "</td></tr>";
}
echo "</table>";
?>
	