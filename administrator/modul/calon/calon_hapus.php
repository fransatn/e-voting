<?php
$data=mysqli_fetch_array(mysqli_query($koneksi,"select * from calon where id_calon='$_GET[id]'"));

if($data['gambar'] !="") unlink("../gambar/calon/$data[gambar]");
mysqli_query($koneksi,"delete from calon where id_calon='$_GET[id]'") or die (mysqli_error());

echo "Data telah dihapus";
echo "<meta http-equiv='refresh'
content='1; url=?page=calon'>";
?>