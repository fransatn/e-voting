<h2 class="sub-header">Data Jurusan</h2>

<a href="?page=jurusan_tambah" class="btn btn-primary"> Tambah Jurusan</a><br><br>

<table width="100%" cellspacing="0" class="data" border="1">
<table class="table table-striped">
<tr>
<th>No</th>
<th>Jurusan</th>
<th>Aksi</th>
</tr>

<?php
$no=1;
$sqljurusan = mysqli_query($koneksi,"SELECT * FROM jurusan") or die (mysqli_error());
while($data=mysqli_fetch_array($sqljurusan)){
	?>

	<tr>
	<td> <?php echo $no; ?> </td>
	<td> <?php echo $data['nama_jurusan']; ?> </td>
		<td>
		<a href="?page=jurusan_edit&id=
				<?php echo $data['id_jurusan']; ?>" class="btn btn-primary btn-sm"> Edit </a> |
		<a href="?page=jurusan_hapus&id=
				<?php echo $data['id_jurusan']; ?>" class="btn btn-danger btn-sm"> Hapus </a>
		</td>
		</tr>

		<?php
		$no++;
}
?>
</table>