<?php 
// isi nama host, username mysql, dan password mysql anda
$host = mysql_connect("localhost","root","hacked17.");

/*if($host){
	echo "koneksi host berhasil.<br/>";
}else{
	echo "koneksi gagal.<br/>";
}
*/
// isikan dengan nama database yang akan di hubungkan
$db = mysql_select_db("dbaset");

/*
if($db){
	echo "koneksi database berhasil.";
}else{
	echo "koneksi database gagal.";
}
*/
?>