	
<h2 class="sub-header">Tambah Calon</h2>

<form name="tambah" method="post" 
action="?page=calon_tambahproses" enctype="multipart/form-data" class="form-horizontal">

<div class="form-group">
<label class="label-control col-md-2"> NIS Calon </label>

<div class="col-md-3">
<input type="text" class="form-control" name="nis_calon" size="50">
</div>
</div>

<div class="form-group">
<label class="label-control col-md-2"> Nama Calon </label>

<div class="col-md-4">
<input type="text" class="form-control" name="nama_calon" size="50">
</div>
</div>

<div class="form-group">
<label class="label-control col-md-2">kelas</label>
<div class="col-md-4">
			<select name="nama_kelas" class="form-control">
				<option>-Pilih-</option>
			<?php
				$sqlkelas = mysqli_query($koneksi,"SELECT distinct(id_kelas), kelas.nama_kelas, jurusan.nama_jurusan from kelas JOIN jurusan ON jurusan.id_jurusan=kelas.id_jurusan");
				while($datakelas = mysqli_fetch_array($sqlkelas)){

				echo"<option value='$datakelas[id_kelas]'> $datakelas[nama_kelas] $datakelas[nama_jurusan]</option>";
				
				}
			?>
			</select>
			</div>
			</div>

<div class="form-group">
<label class="label-control col-md-2">Foto</label>
<div class="col-md-3">
<input type="file" class="form-control" name="gambar">
</div>
</div>

<div class="form-group">
<label class="label-control col-md-2"></label>
<div class="col-md-4">
<input type="submit" name="tambah" value="Simpan" class="btn btn-primary">
</div>
</div>
</form>