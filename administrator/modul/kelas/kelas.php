<h2 class="sub-jurusan">Data kelas</h2>

<a href="?page=kelas_tambah" class="btn btn-primary"> Tambah kelas </a><br><br>

<table width="100%" cellspacing="0" class="data" border="1">
<table class="table table-striped">
<tr>
<th>No</th>
<th>Kelas</th>
<th>Jurusan</th>
<th>Aksi</th>
</tr>

<?php
$no=1;
$sqlkelas = mysqli_query($koneksi,"SELECT * FROM kelas") or die (mysqli_error());
while($data=mysqli_fetch_array($sqlkelas)){
	$sqljurusan= mysqli_query($koneksi,"SELECT * FROM jurusan where id_jurusan='$data[id_jurusan]'");
			$datajurusan= mysqli_fetch_array($sqljurusan);
	?>

	<tr>
	<td> <?php echo $no; ?> </td>
	<td> <?php echo $data['nama_kelas']; ?> </td>
	<td> <?php echo $datajurusan['nama_jurusan']; ?> </td>
		<td>
		<a href="?page=kelas_edit&id=
				<?php echo $data['id_kelas']; ?>" class="btn btn-primary btn-sm"> Edit </a> |
		<a href="?page=kelas_hapus&id=
				<?php echo $data['id_kelas']; ?>" class="btn btn-danger btn-sm"> Hapus </a>
		</td>
		</tr>

		<?php
		$no++;
}
?>
</table>