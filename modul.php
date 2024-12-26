<?php

if(isset($_GET['page'])) $page =  $_GET['page'];
else $page = "home";
?>

<div class='box'>
<?php
if($page=="home") include ("modul/home.php");

elseif($page=="calon_osis") 
	include ("modul/calon_osis.php");
elseif($page=="profil") 
	include ("modul/profil.php");
elseif($page=="grafik") 
	include ("modul/grafik.php");
elseif($page=="calon") 
	include ("modul/calon.php");
elseif($page=="calonproses") 
	include ("modul/calonproses.php");
elseif($page=="daftar") 
	include ("modul/daftar.php");
elseif($page=="daftarproses") 
	include ("modul/daftarproses.php");
elseif($page=="login") 
	include ("modul/login.php");
elseif($page=="loginproses") 
	include ("modul/loginproses.php");

else echo"empty";
?>
</div>