<?php
$host = "127.0.0.1";
$user = "root";
$pass = "";
$koneksi = mysql_connect($host, $user, $pass);
mysql_select_db("db_ppdbsmux", $koneksi) or die(mysql_error());
?>