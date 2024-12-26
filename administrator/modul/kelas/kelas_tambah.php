<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
<link rel="stylesheet" type="text/css" href="style.css">
	
<h2 class="sub-header">Tambah kelas</h2>

<form name="tambah" method="post" 
action="?page=kelas_tambahproses" class="form-horizontal">
<div class="form-group">
<label class="label-control col-md-2"> Nam Kelas </label>
<div class="col-md-4">
<input type="text" class="form-control" name="nama_kelas" size="50">
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