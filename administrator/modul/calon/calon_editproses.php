<?php

$nama_gambar = $_FILES['gambar']['name'];
$lokasi_gambar = $_FILES ['gambar'] ['tmp_name'];
$tipe_gambar = $_FILES['gambar']['type'];

if($lokasi_gambar==""){
	mysqli_query($koneksi,"UPDATE calon SET 
			nis_calon = '$_POST[nis_calon]',
			nama_calon = '$_POST[nama_calon]',
			id_kelas ='$_POST[nama_kelas]'  
			where id_calon='$_POST[id]'") or die (mysqli_error());
} else {

	$data=mysqli_fetch_array(mysqli_query($koneksi,"select * from calon where id_calon='$_POST[id]'"));
		if($data['gambar'] != "") unlink("../gambar/calon/$data[gambar]");


	move_uploaded_file($lokasi_gambar, 
		"../gambar/calon/$nama_gambar");
mysqli_query($koneksi,"UPDATE calon SET 
			nis_calon = '$_POST[nis_calon]',
			nama_calon = '$_POST[nama_calon]',
			id_kelas ='$_POST[nama_kelas]',
			gambar = '$nama_gambar'
	 		where id_calon='$_POST[id]'") or die (mysqli_error());
}

echo "Data telah tersimpan";
echo "<meta http-equiv='refresh'
content='1; url=?page=calon'>";
?>