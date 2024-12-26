<?php

	$cek=mysqli_query($koneksi,"select * from pemilih where status_pilih='Y' and id_pemilih='$_SESSION[id_pemilih]'");
	$row=mysqli_num_rows($cek);

if($row==1){

	echo '<script>sweetAlert({title:"Anda sudah memilih", type: "error"});</script>';
	echo"<meta http-equiv='refresh' content='2; url=?page=calon'>";

}else{

	$sqlpemilih = mysqli_query($koneksi,"update pemilih set status_pilih='Y' where id_pemilih='$_SESSION[id_pemilih]'");
	$sqlcalon = mysqli_query($koneksi,"update calon set suara=(suara+1) where id_calon='$_GET[id_calon]'");

	echo '<script>sweetAlert({title:"Selamat Anda Berhasil memilih", type: "success"});</script>';
	echo"<meta http-equiv='refresh' content='1; url=?page=calon'>";

}
?>