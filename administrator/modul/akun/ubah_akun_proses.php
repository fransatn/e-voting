<?php

if($_POST['password'] == ""){
	mysql_query("UPDATE admin SET 
	username = '$_POST[username]'") or die (mysql_error());
	echo "Akun telah di edit";

}else{
	if($_POST['password'] != $_POST['password_ulang']) {

	echo"<p style='color:red'> password, dan ulang password tidak sama </p>";
}else{
	
	$password = md5($_POST['password']);
	mysql_query("UPDATE admin SET username = '$_POST[username]', password = '$password' ") or die (mysql_error());
	echo "Akun telah di edit";
	}
}
	echo "<meta http-equiv='refresh'
	content='1; url=?page=ubah_akun'>";
?>