<?php
	session_start();
	
	include("koneksi/koneksi.php");
	
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	$cek = mysqli_query($koneksi,"select * from pemilih where username='$username' and password='$password' and 		status_login='Y' order by id_pemilih");
	$data	= mysqli_fetch_array($cek);
	$jumlah = mysqli_num_rows($cek);
	
	if($jumlah>0){
		$_SESSION['username'] = $data['username'];
		$_SESSION['id_pemilih'] = $data['id_pemilih'];
		$_SESSION['password'] = $data['password'];
		
		echo"Login berhasil!";
		echo"<meta http-equiv='refresh' content='1; url=utama.php'>";
	}else{
		echo"<center>Gagal, username atau password salah! <br><b><a href='?page=login'>ULANGI username dan password</a></b><br><br><b><a href='?page=daftar'>Jika belum melakukan pendaftaran akun silahkan daftar terlebih dahulu</a></b></center>";
	}
?>