<h2 class="sub-kelas">Data calon</h2>

<a href="?page=calon_tambah" class="btn btn-primary"> Tambah calon </a><br><br>

<table width="100%" cellspacing="0" class="data" border="1">
<table class="table table-striped">
<tr>
<th>No</th>
<th>NIS calon</th>
<th>Nama calon</th>
<th>kelas</th>
<th>Gambar</th>
<th>Aksi</th>
</tr>

<?php
$no=1;
$sqlcalon = mysqli_query($koneksi,"SELECT distinct (id_calon), calon.nis_calon, calon.nama_calon, calon.gambar, kelas.nama_kelas, jurusan.nama_jurusan FROM calon JOIN kelas ON kelas.id_kelas=calon.id_kelas JOIN jurusan ON jurusan.id_jurusan=kelas.id_jurusan") or die (mysqli_error());
	while($data=mysqli_fetch_array($sqlcalon)){

	?>

	<tr>
	<td> <?php echo $no; ?> </td>
	<td> <?php echo $data['nis_calon']; ?> </td>
	<td> <?php echo $data['nama_calon']; ?> </td>
	<td> <?php echo $data['nama_kelas']; ?>-<?php echo $data['nama_jurusan']; ?> </td>
	<td> <img src="../gambar/calon/<?php echo 
	$data['gambar']; ?>" width="100"> </td>

		<td>
		<a href="?page=calon_edit&id=
				<?php echo $data['id_calon']; ?>" class="btn btn-primary btn-sm"> Edit </a> |
		<a href="?page=calon_hapus&id=
				<?php echo $data['id_calon']; ?>" class="btn btn-danger btn-sm"> Hapus </a>
		</td>
		</tr>

		<?php
		$no++;
}
?>
</table>