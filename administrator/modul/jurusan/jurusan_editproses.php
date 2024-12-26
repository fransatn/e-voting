<?php

	mysqli_query($koneksi,"UPDATE jurusan SET 
		nama_jurusan = '$_POST[nama_jurusan]' 
		WHERE id_jurusan='$_POST[id]'") or die (mysqli_error());

echo "Data telah tersimpan";
echo "<meta http-equiv='refresh'
content='1; url=?page=jurusan'>";
?>