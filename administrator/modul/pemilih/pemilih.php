<h2 class="sub-header">Data Pemilih</h2>

<table width="100%" cellspacing="0" class="data" border="1">
<table class="table table-striped">
<tr>
<th>No</th>
<th>Foto</th>
<th>Nama</th>
<th>NIS</th>
<th>Kelas</th>
<th>Username</th>
<th>Password</th>
<th>Aktif</th>
<th>Aksi</th>
</tr>

<?php
$no=1;
$sqlpemilih = mysqli_query($koneksi,"SELECT distinct (id_pemilih), pemilih.nama_pemilih, pemilih.nis_pemilih, pemilih.gambar, kelas.nama_kelas, pemilih.username, pemilih.password, pemilih.status_login, jurusan.nama_jurusan FROM pemilih JOIN kelas ON kelas.id_kelas=pemilih.id_kelas JOIN jurusan ON jurusan.id_jurusan=kelas.id_jurusan") or die (mysqli_error());
	while($data=mysqli_fetch_array($sqlpemilih)){

?>

	<tr>
	<td> <?php echo $no; ?> </td>
	<td> <img src="../gambar/pemilih/<?php echo $data['gambar']; ?>" width="100"> </td>
	<td> <?php echo $data['nama_pemilih']; ?> </td>
	<td> <?php echo $data['nis_pemilih']; ?> </td>
	<td> <?php echo $data['nama_kelas']; ?>-<?php echo $data['nama_jurusan']; ?> </td>
	<td> <?php echo $data['username']; ?> </td>
	<td> <?php echo $data['password']; ?> </td>
	<td> <?php echo $data['status_login']; ?> </td>
		<td>
		 <a href="?page=pemilih_hapus&id=
     	 <?php echo $data['id_pemilih']; ?>" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Hapus </a>

          <?php if ($data['status_login']=='Y'){ ?>
            <a href="?page=status_pemilih&id=<?= $data ['id_pemilih'] ?>" class="btn btn-info btn-xs"><i class="fa fa-eyes">Aktif</button></a>
          <?php } else if ($data['status_login']=='T'){ ?>
            <a href="?page=status_pemilih&id=<?= $data ['id_pemilih'] ?>"class="btn btn-warning btn-xs"><i class="fa fa-eyes">Tidak</button></a>
         <?php } ?>
    
    </td>
  </tr>

  <?php 
      $no++;
    } 
  ?>
  
</table>