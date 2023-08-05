<?php
include "koneksi.php";
$nik = $_GET['n'];
$q = "select * from daftar where nik='$nik'";
$ex = mysql_query($q);
$r = mysql_fetch_array($ex);
?>
<form action=""#" method="post">
NIK		: <input type="text" name="tnik" value="<?php echo $r['nik'];?>"/><br/>
Nama	: <input type="text" name="tnama" value="<?php echo $r['nama'];?>"/><br/>
Tempat Lahir	: <input type="text" name="ttempatlhr" value="<?php echo $r['tempat_lhr'];?>"/><br/>	
Tanggal Lahir	: <input type="text" name="ttanggallhr" value="<?php echo $r['tanggal_lhr'];?>"/><br/>
Alamat Rumah	: <input type="text" name="talamat" value="<?php echo $r['alamat_rmh'];?>"/><br/>
Asal Sekolah	: <input type="text" name="tasalsklh" value="<?php echo $r['asal_sekolah'];?>"/><br/>
Tanggal Lulus	: <input type="text" name="ttgllulus" value="<?php echo $r['tggl_lulus'];?>"/><br/>
<input type="submit" name="ubah" value="Ubah Data"/>
</form>
<a href="tampilsiswa.php">Kembali ...</a>
<?php
if(isset($_POST['ubah'])){
	$nik = $_POST['tnik'];
	$nama = $_POST['tnama'];
	$tempat_lhr = $_POST['ttempatlhr'];
	$tanggal_lhr = $_POST['ttanggallhr'];
	$alamat = $_POST['talamat'];
	$asal_sklh = $_POST['tasalsklh'];
	$tggl_lulus = $_POST['ttgllulus'];
	$q = "update daftar set nama='$nama', tempat_lhr='$tempat_lhr', tanggal_lhr='$tanggal_lhr', alamat_rmh='$alamat', asal_sekolah='$asal_sklh', tggl_lulus='$tggl_lulus'";
	$q .= "where nik='$nik'";
	mysql_query($q);
	echo "Data berhasil diubah";
}
?>