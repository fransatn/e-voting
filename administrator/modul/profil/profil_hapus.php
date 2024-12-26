<?php
	$data=mysqli_fetch_array(mysqli_query($koneksi,"select * from profil where id_profil='$_GET[id]'"));

	if($data['gambar'] !="") unlink("gambar/profil/$data[gambar]");
	mysqli_query($koneksi,"delete from profil where id_profil='$_GET[id]'") or die (mysqli_error());

	echo "Data telah dihapus";
	echo "<meta http-equiv='refresh'
	content='1; url=?tampil=profil'>";
?>