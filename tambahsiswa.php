<?php include "koneksi.php"; ?>
<form action="#" method="post">
NIK		: <input type="text" name="tnik"/><br/>
Nama	: <input type="text" name="tnama"/><br/>
Tempat Lahir	: <input type="text" name="ttempatlhr"/><br/>	
Tanggal Lahir	: <input type="text" name="ttanggallhr"/><br/>
Alamat Rumah	: <input type="text" name="talamat"/><br/>
Asal Sekolah	: <input type="text" name="tasalsklh"/><br/>
Tanggal Lulus	: <input type="text" name="ttgllulus"/><br/>
<input type="submit" name="kirim" value="Simpan"/>
</form>
<a href="tampilsiswa.php">Kembali ...</a>
<?php
if(isset($_POST['kirim'])){
	$nik = $_POST['tnik'];
	$nama = $_POST['tnama'];
	$tempat_lhr = $_POST['ttempatlhr'];
	$tanggal_lhr = $_POST['ttanggallhr'];
	$alamat = $_POST['talamat'];
	$asal_sklh = $_POST['tasalsklh'];
	$tggl_lulus = $_POST['ttgllulus'];
	$q = "insert into daftar(nik,nama,tempat_lhr,tanggal_lhr,alamat,asal_sklh,tggl_lulus)";
	$q .= "values('$nik','$nama','$tempat_lhr','$tanggal_lhr', '$alamat', '$asal_sklh', '$tggl_lulus');
	mysql_query($q)";
	echo "Data tersimpan";
}
?>	
