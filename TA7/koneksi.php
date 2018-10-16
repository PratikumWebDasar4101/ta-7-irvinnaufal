<?php 
$hostmysql = "localhost";
$username = "root";
$password = "";
$database = "PWD";
$conn = mysqli_connect($hostmysql,$username,$password,$database);
if (!$conn){
die ("Gagal Melakukan Koneksi");	
}
 ?>