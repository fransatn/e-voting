<?php
		mysqli_query($koneksi,"UPDATE kelas SET
			nama_kelas = '$_POST[nama_kelas]',
			id_jurusan ='$_POST[nama_jurusan]' 
			WHERE id_kelas='$_POST[id]'") or die(mysqli_error());
	
	echo"Data telah diedit";
	echo"<meta http-equiv='refresh' content='1; url=?page=kelas'>";
?>