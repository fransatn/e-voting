<?php

	include 'koneksi/koneksi.php'; 

	$nama_gambar = $_FILES['gambar']['name'];
	$lokasi_gambar = $_FILES ['gambar'] ['tmp_name'];
	$tipe_gambar = $_FILES['gambar']['type'];

	$nama_pemilih	= $_POST['nama_pemilih'];
	$nis_pemilih	= $_POST['nis_pemilih'];
	$username	= $_POST['username']; 
	$password	= $_POST['password'];	
	
	if($lokasi_gambar==""){
	mysqli_query($koneksi,"insert into pemilih set nama_pemilih='$nama_pemilih', nis_pemilih='$nis_pemilih', username='$username', id_kelas ='$_POST[nama_kelas]', password='$password'") or die(mysqli_error());
	
	} else {
	move_uploaded_file($lokasi_gambar, 
		"gambar/pemilih/$nama_gambar");
	mysqli_query($koneksi,"insert into pemilih set nama_pemilih='$nama_pemilih', nis_pemilih='$nis_pemilih', username='$username', id_kelas ='$_POST[nama_kelas]', password='$password', gambar = '$nama_gambar'") or die(mysqli_error());

	}

	echo"Tunggu dikonfirmasi oleh admin";
	echo"<meta http-equiv='refresh' content='1; url=index.php'>";
?>