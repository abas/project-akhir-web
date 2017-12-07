<?php
$host = "localhost";
$user = "root";
$pass = "xavier";
$name = "tugas_webprog";
 
$koneksi = mysql_connect($host, $user, $pass) or die("koneksi gagal bro!");
mysql_select_db($name, $koneksi) or die("lah? db ne ora ono nda!");
?>