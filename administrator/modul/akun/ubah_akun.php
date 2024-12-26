<?php
$sqladmin = mysqli_query($koneksi,"SELECT * FROM admin") or die (mysqli_error());
$data = mysqli_fetch_array($sqladmin);
?>
<h2 class="sub-header">Edit Akun</h2>

<form name="edit" method="post" 
action="?page=ubah_akun_proses"
 class="form-horizontal">
<input type="hidden" name="id" value="<?php echo $data['id_admin']; ?>">

<div class="form-group">
<label class="label-control col-md-2">Username</label>
<div class="col-md-4">
<input type="text" class="form-control" name="username"
value="<?php echo $data['username']; ?>">
</div>
</div>


<div class="form-group">
<label class="label-control col-md-2">Ganti Password</label>
<div class="col-md-4">
<input type="password" class="form-control" name="password" size="50">
</div>
</div>

<div class="form-group">
<label class="label-control col-md-2">Ulang Password</label>
<div class="col-md-4">
<input type="password" class="form-control" name="password_ulang" size="50">
</div>
</div>

<div class="form-group">
<label class="label-control col-md-2"></label>
<div class="col-md-4">
<input type="submit" name="edit"
value="Edit Proses" class="btn btn-primary">
</div>
</div>
</form>