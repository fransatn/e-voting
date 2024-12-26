<?php

	$nama_gambar 	= $_FILES['gambar']['name'];
	$lokasi_gambar 	= $_FILES['gambar']['tmp_name'];
	$tipe_gambar	= $_FILES['gambar']['type'];
	
	$deskripsi 		= addslashes($_POST['deskripsi']);
	
	if($lokasi_gambar==""){
		mysqli_query($koneksi,"UPDATE profil SET
				judul	 	='$_POST[judul]',
				deskripsi	='$deskripsi'
			WHERE id_profil='$_POST[id]'") or die(mysqli_error());
	}else{
		$data=mysqli_fetch_array(mysqli_query($koneksi,"select * from profil where id_profil='$_POST[id]'"));
		if($data['gambar'] != "") unlink("../gambar/profil/$data[gambar]");
		
		move_uploaded_file($lokasi_gambar,"../gambar/profil/$nama_gambar");
		mysqli_query($koneksi,"UPDATE profil SET
				judul	 	='$_POST[judul]',
				deskripsi	='$deskripsi',
				gambar='$nama_gambar'
			WHERE id_profil='$_POST[id]'") or die(mysqli_error());
	}
	
	echo"Data telah diedit";
	echo"<meta http-equiv='refresh' content='1; url=?page=profil'>";
?>