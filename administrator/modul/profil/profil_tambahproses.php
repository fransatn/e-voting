<?php

$nama_gambar = $_FILES['gambar']['name'];
$lokasi_gambar = $_FILES ['gambar'] ['tmp_name'];
$tipe_gambar = $_FILES['gambar']['type'];

$deskripsi	= addslashes($_POST ['deskripsi']);

if($lokasi_gambar==""){
	mysqli_query($koneksi,"INSERT INTO profil set 
	judul = '$_POST[judul]',
	deskripsi = '$deskripsi',
	tanggal = '$tanggal'
		") or die (mysqli_error());
} else {
	move_uploaded_file($lokasi_gambar, 
		"../gambar/profil/$nama_gambar");
mysqli_query($koneksi,"INSERT INTO profil set 
	judul	= '$_POST[judul]',
	deskripsi = '$deskripsi',
	gambar = '$nama_gambar'
	 ") or die (mysqli_error());
}

echo "Data telah tersimpan";
echo "<meta http-equiv='refresh'
content='1; url=?page=profil'>";
?>