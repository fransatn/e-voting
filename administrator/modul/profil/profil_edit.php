<?php
$sqlprofil = mysqli_query($koneksi,"SELECT * FROM profil where id_profil='$_GET[id]'") or die(mysqli_error());
$data = mysqli_fetch_array($sqlprofil);
?>
<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
<link rel="stylesheet" type="text/css" href="style.css">

<h2 class="sub-header">Edit Profil</h2>

<form name="edit" method="post" action="?page=profil_editproses"
 enctype="multipart/form-data" class="form-horizontal">
<input type="hidden" name="id"
value="<?php echo $data['id_profil']; ?>">

<div class="form-group">
<label class="label-control col-md-2">Nama</label>
<div class="col-md-4">
<input type="text" class="form-control" name="judul" size="50" value="<?php echo $data['judul']; ?>">
</div></div>

<div class="form-group">
<label class="label-control col-md-2">Gambar</label>
<div class="col-md-4">
<img src="../gambar/profil/
<?php echo $data['gambar']; ?>" width="100"> <br>
<input type="file" class="form-control" name="gambar">
</div>
</div>

<div class="form-group">
<label class="label-control col-md-2">Isi</label>
<div class="col-md-8">
<textarea class="ckeditor" name="deskripsi" id="ckedtor">
<?php echo $data['deskripsi']; ?></textarea>
</div>
</div>

<div class="form-group">
<label class="label-control col-md-2"></label>
<div class="col-md-2">
<input type="submit" name="edit" value="Simpan" class="btn btn-primary">
</div>
</div>

</form>