<?php
mysqli_query($koneksi,"DELETE FROM kelas where id_kelas='$_GET[id]'") or die (mysqli_error());

echo "Data telah dihapus";
echo "<meta http-equiv='refresh'
content='1; url=?page=kelas'>";
?>