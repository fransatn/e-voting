<?php
$data=mysqli_fetch_array(mysqli_query($koneksi,"select * from pemilih where id_pemilih='$_GET[id]'"));

if($data['gambar'] !="") unlink("../gambar/pemilih/$data[gambar]");
mysqli_query($koneksi,"delete from pemilih where id_pemilih='$_GET[id]'") or die (mysql_error());

echo "Data telah dihapus";
echo "<meta http-equiv='refresh'
content='1; url=?page=pemilih'>";
?>