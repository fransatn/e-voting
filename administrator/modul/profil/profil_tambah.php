<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
<link rel="stylesheet" type="text/css" href="style.css">

<h2 class="sub-header"> Tambah profil</h2>
<form name="tambah" method="post" action="?page=profil_tambahproses" enctype="multipart/form-data" class="form-horizontal">
<div class="form-group">

<label class="label-control col-md-2"> Judul </label>
<div class="col-md-4">
<input type="text" class="form-control" name="judul" size="50">
</div>
</div>

<div class="form-group">
<label class="label-control col-md-2">Gambar</label>
<div class="col-md-4">
<input type="file" class="form-control" name="gambar"></div>
</div>

<div class="form-group">
<label class="label-control col-md-2">Deskripsi</label>
<div class="col-md-8">
<textarea class="ckeditor" name="deskripsi" id="ckedtor"></textarea>
</div>
</div>

<div class="form-group">
<label class="label-control col-md-2"></label>
<div class="col-md-4">
<input type="submit" name="tambah" value="Simpan" class="btn btn-primary">
</div>
</div>
</form>