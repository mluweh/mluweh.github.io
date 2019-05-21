<?php
$connect=mysqli_connect("DB HOST", "DB USER", "PASSWORD DB", "NAMA DB");
date_default_timezone_set('Asia/Semarang');

$tanggal= date("Y-m-d H:i:s");
$jam= date("Y-m-d H:i:s");
$nama= $_POST["Nama"];
$alamat= $_POST["Alamat"];
$pekerjaan= $_POST["Pekerjaan"];
mysqli_query($connect,"INSERT INTO t_data(tanggal,jam,nama,alamat,pekerjaan) VALUES('$tanggal','$jam','$nama','$alamat','$pekerjaan')");
?>