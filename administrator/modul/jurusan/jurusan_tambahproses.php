<?php

	mysqli_query($koneksi,"INSERT INTO jurusan set 
		nama_jurusan = '$_POST[nama_jurusan]'
		") or die (mysqli_error());

echo "Data telah tersimpan";
echo "<meta http-equiv='refresh'
content='1; url=?page=jurusan'>";
?>