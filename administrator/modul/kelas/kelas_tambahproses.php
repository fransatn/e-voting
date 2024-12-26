<?php

	mysqli_query($koneksi,"INSERT INTO kelas set 
		nama_kelas = '$_POST[nama_kelas]',
		id_jurusan ='$_POST[nama_jurusan]'
		") or die (mysqli_error());

echo "Data telah tersimpan";
echo "<meta http-equiv='refresh'
content='1; url=?page=kelas'>";
?>