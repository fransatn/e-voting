<?php
$sqljurusan=mysqli_query($koneksi,"SELECT * FROM jurusan where id_jurusan='$_GET[id]'") or die (mysqli_error());
$data = mysqli_fetch_array($sqljurusan);
?>

<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
<link rel="stylesheet" type="text/css" href="style.css">

<h2 class="sub-header">Edit jurusan</h2>
<form name="edit" method="post"
action="?page=jurusan_editproses" class="form-horizontal">
<input type="hidden" name="id"
value="<?php echo $data['id_jurusan']; ?>">

<form name="tambah" method="post" 
action="?page=jurusan_tambahproses" class="form-horizontal">
<div class="form-group">
<label class="label-control col-md-2"> Jurusan </label>
<div class="col-md-4">
<input type="text" class="form-control" name="nama_jurusan" size="50" value="<?php echo $data['nama_jurusan']; ?>">
</div>
</div>

<div class="form-group">
<label class="label-control col-md-2"></label>
<div class="col-md-4">
<input type="submit" name="tambah" value="Simpan" class="btn btn-primary">
</div>
</div>
</form>