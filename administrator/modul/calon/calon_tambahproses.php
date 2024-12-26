<?php

$nama_gambar = $_FILES['gambar']['name'];
$lokasi_gambar = $_FILES ['gambar'] ['tmp_name'];
$tipe_gambar = $_FILES['gambar']['type'];

if($lokasi_gambar==""){
	mysqli_query($koneksi,"INSERT INTO calon set 
			nis_calon = '$_POST[nis_calon]',
			nama_calon = '$_POST[nama_calon]',
			id_kelas ='$_POST[nama_kelas]'  
		") or die (mysqli_error($koneksi));
} else {
	move_uploaded_file($lokasi_gambar, 
		"../gambar/calon/$nama_gambar");
	mysqli_query($koneksi,"INSERT INTO calon set 
			nis_calon = '$_POST[nis_calon]',
			nama_calon = '$_POST[nama_calon]',
			id_kelas ='$_POST[nama_kelas]',
			gambar = '$nama_gambar'
	 ") or die (mysqli_error($koneksi));
}

echo "Data telah tersimpan";
echo "<meta http-equiv='refresh'
content='1; url=?page=calon'>";
?>