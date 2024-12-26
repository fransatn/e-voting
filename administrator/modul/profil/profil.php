<h2 class="sub-header">Data Profil</h2>
<a href="?page=profil_tambah" class="btn btn-primary"> Tambah Profil</a><br><br>

<table width="100%" cellspacing="0" class="data" border="1">
<table class="table table-striped">
<tr>
<th>No</th>
<th>Gambar</th>
<th>Nama</th>
<th>Aksi</th>
</tr>

<?php
$no=1;
$sqlprofil = mysqli_query($koneksi,"SELECT * FROM profil order by id_profil desc") or die (mysqli_error());
while ($data=mysqli_fetch_array($sqlprofil)){
	?>

	<tr>
	<td> <?php echo $no; ?> </td>
	<td> <img src="../gambar/profil/<?php echo 
	$data['gambar']; ?>" width="100"> </td>
	<td> <?php echo $data['deskripsi']; ?> </td>
	<td>
	<a href="?page=profil_edit&id=
		<?php echo $data['id_profil']; ?>" class="btn btn-primary btn-sm"> Edit </a> |
	<a href="?page=profil_hapus&id=
		<?php echo $data['id_profil']; ?>" class="btn btn-danger btn-sm"> Hapus </a> 
		</td>
		</tr>
		<?php
		$no++;
}
?>
</table>