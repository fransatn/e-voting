<?php
$sqlkelas=mysqli_query($koneksi,"SELECT * FROM kelas where id_kelas='$_GET[id]'") or die (mysqli_error());
$data = mysqli_fetch_array($sqlkelas);
?>

<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
<link rel="stylesheet" type="text/css" href="style.css">

<h2 class="sub-header">Edit kelas</h2>
<form name="edit" method="post"
action="?page=kelas_editproses" class="form-horizontal">
<input type="hidden" name="id"
value="<?php echo $data['id_kelas']; ?>">

<form name="tambah" method="post" 
action="?page=kelas_tambahproses" class="form-horizontal">
<div class="form-group">
<label class="label-control col-md-2"> Nama Kelas </label>
<div class="col-md-4">
<input type="text" class="form-control" name="nama_kelas" size="50" value="<?php echo $data['nama_kelas']; ?>">
</div>
</div>

<div class="form-group">
<label class="label-control col-md-2">Jurusan</label>
<div class="col-md-4">
			<select name="nama_jurusan" class="form-control">
				<option>-Pilih-</option>
			<?php
				$sqljurusan = mysqli_query($koneksi,"select * from jurusan");
				while($datajurusan = mysqli_fetch_array($sqljurusan)){

					if($datajurusan['id_jurusan'] == $data['id_jurusan']) echo"<option value='$datajurusan[id_jurusan]' selected> $datajurusan[nama_jurusan] </option>";

				echo"<option value='$datajurusan[id_jurusan]'> $datajurusan[nama_jurusan] </option>";
				}
			?>
			</select>
			</div>
			</div>

<div class="form-group">
<label class="label-control col-md-2"></label>
<div class="col-md-4">
<input type="submit" name="tambah" value="Simpan" class="btn btn-primary">
</div>
</div>
</form>