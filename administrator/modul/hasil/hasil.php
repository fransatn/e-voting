<h2 class="sub-kelas">Data Hasil Pemilihan</h2>

<a href="?page=hasil_grafik" class="btn btn-primary"> Hasil Grafik </a><br><br>

<table width="100%" cellspacing="0" class="data" border="1">
<table class="table table-striped">
<tr>
<th>No</th>
<th>Gambar</th>
<th>NIS calon</th>
<th>Nama calon</th>
<th>Hasil Suara</th>
</tr>

<?php
$no=1;
$sqlcalon = mysqli_query($koneksi,"select * from calon") or die (mysqli_error());
	while($data=mysqli_fetch_array($sqlcalon)){

	?>

	<tr>
	<td> <?php echo $no; ?> </td>
	<td> <img src="../gambar/calon/<?php echo $data['gambar']; ?>" width="100"> </td>
	<td> <?php echo $data['nis_calon']; ?> </td>
	<td> <?php echo $data['nama_calon']; ?> </td>
	<td> <a class="btn btn-primary btn-sm"> <?php echo $data['suara']; ?></a></td>

		</tr>

		<?php
		$no++;
}
?>
</table>