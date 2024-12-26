<?php
$sqlcalon=mysqli_query($koneksi,"SELECT * FROM calon where id_calon='$_GET[id]'") or die (mysqli_error());
$data = mysqli_fetch_array($sqlcalon);
?>

<h2 class="sub-header">Edit calon</h2>
<form name="edit" method="post"
action="?page=calon_editproses"  enctype="multipart/form-data" class="form-horizontal">
<input type="hidden" name="id"
value="<?php echo $data['id_calon']; ?>">

<div class="form-group">
<label class="label-control col-md-2"> NIS Calon </label>
<div class="col-md-3">
<input type="text" class="form-control" name="nis_calon" size="50" value="<?php echo $data['nis_calon']; ?>">
</div>
</div>

<div class="form-group">
<label class="label-control col-md-2"> Nama Calon </label>
<div class="col-md-4">
<input type="text" class="form-control" name="nama_calon" size="50" value="<?php echo $data['nama_calon']; ?>">
</div>
</div>

<div class="form-group">
<label class="label-control col-md-2">kelas</label>
<div class="col-md-4">
			<select name="nama_kelas" class="form-control">
				<option>-Pilih-</option>
			<?php
				$sqlkelas = mysqli_query($koneksi,"SELECT distinct(id_kelas), kelas.nama_kelas, jurusan.nama_jurusan from 
                          kelas JOIN jurusan ON jurusan.id_jurusan=kelas.id_jurusan");
				while($datakelas = mysqli_fetch_array($sqlkelas)){
					if($datakelas['id_kelas'] == $data['id_kelas']) echo"<option value='$datakelas[id_kelas]' selected> $datakelas[nama_kelas] $datakelas[nama_jurusan] </option>";
				echo"<option value='$datakelas[id_kelas]'> $datakelas[nama_kelas] $datakelas[nama_jurusan]</option>";
				
				}
			?>
			</select>
			</div>
			</div>

<div class="form-group">
<label class="label-control col-md-2">Foto</label>
<div class="col-md-3">
<img src="../gambar/calon/<?php echo $data['gambar']; ?>" width="200" class="thumbnail"> 
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
