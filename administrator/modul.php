<?php
if(!defined("INDEX")) die("---");

if(isset ($_GET['page'])) $page = $_GET ['page'];
else $page = "home";

if($page == "home")	include ("home.php");
elseif($page == "keluar")	include ("keluar.php");

elseif($page == "profil")				
	include ("modul/profil/profil.php");
elseif($page == "profil_tambah")		
	include ("modul/profil/profil_tambah.php");
elseif($page == "profil_tambahproses")	
	include ("modul/profil/profil_tambahproses.php");
elseif($page == "profil_edit")			
	include ("modul/profil/profil_edit.php");
elseif($page == "profil_editproses")	
	include ("modul/profil/profil_editproses.php");
elseif($page == "profil_hapus")			
	include ("modul/profil/profil_hapus.php");

elseif($page == "jurusan")				
	include ("modul/jurusan/jurusan.php");
elseif($page == "jurusan_tambah")		
	include ("modul/jurusan/jurusan_tambah.php");
elseif($page == "jurusan_tambahproses")	
	include ("modul/jurusan/jurusan_tambahproses.php");
elseif($page == "jurusan_edit")			
	include ("modul/jurusan/jurusan_edit.php");
elseif($page == "jurusan_editproses")	
	include ("modul/jurusan/jurusan_editproses.php");
elseif($page == "jurusan_hapus")		
	include ("modul/jurusan/jurusan_hapus.php");

elseif($page == "kelas")				
	include ("modul/kelas/kelas.php");
elseif($page == "kelas_tambah")			
	include ("modul/kelas/kelas_tambah.php");
elseif($page == "kelas_tambahproses")	
	include ("modul/kelas/kelas_tambahproses.php");
elseif($page == "kelas_edit")			
	include ("modul/kelas/kelas_edit.php");
elseif($page == "kelas_editproses")		
	include ("modul/kelas/kelas_editproses.php");
elseif($page == "kelas_hapus")			
	include ("modul/kelas/kelas_hapus.php");

elseif($page == "calon")				
	include ("modul/calon/calon.php");
elseif($page == "calon_tambah")			
	include ("modul/calon/calon_tambah.php");
elseif($page == "calon_tambahproses")	
	include ("modul/calon/calon_tambahproses.php");
elseif($page == "calon_edit")			
	include ("modul/calon/calon_edit.php");
elseif($page == "calon_editproses")		
	include ("modul/calon/calon_editproses.php");
elseif($page == "calon_hapus")			
	include ("modul/calon/calon_hapus.php");

elseif( $page == "pemilih" )			
	include("modul/pemilih/pemilih.php");
elseif( $page == "status_pemilih" )		
	include("modul/pemilih/status_pemilih.php");
elseif( $page == "pemilih_hapus" )		
	include("modul/pemilih/pemilih_hapus.php");

elseif( $page == "hasil" )				
	include("modul/hasil/hasil.php");
elseif( $page == "hasil_grafik" )		
	include("modul/hasil/hasil_grafik.php");

elseif($page == "ubah_akun")			
	include ("modul/akun/ubah_akun.php");
elseif($page == "ubah_akun_proses")		
	include ("modul/akun/ubah_akun_proses.php");


else echo"empty";
?>
