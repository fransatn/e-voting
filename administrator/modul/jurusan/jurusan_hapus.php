<?php
mysqli_query($koneksi,"DELETE FROM jurusan where id_jurusan='$_GET[id]'") or die (mysqli_error());

echo "Data telah dihapus";
echo "<meta http-equiv='refresh'
content='1; url=?page=jurusan'>";
?>