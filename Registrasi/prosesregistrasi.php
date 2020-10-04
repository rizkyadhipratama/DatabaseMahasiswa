<?php 
//include "index.php";
include "config.php";
//include "menu.php";

$nama=$_POST['nama'];
$uname=$_POST['username'];
$pass=md5($_POST['password']);
$level=$_POST['level'];


echo "$nama / $uname / $pass / $level";

//$server='localhost';
//$dbname='mahasiswa';
//$username='root';
//$password='';

//1. koneksi ke database server
$conn = new mysqli($server, $username, $password, $dbname);

//2. mengecek koneksi
if($conn)echo "<br>Koneksi Berhasil</br>";
else echo "<br> Koneksi Gagal</br>";

//3. membuat query
$sql="INSERT INTO user (username, password, nama, level) values ('$uname', '$pass', '$nama', '$level')";

//4. mysqli_($conn, $sql);
if($conn->query($sql)===TRUE){
	echo"<h3 font color=green><a href=login.php>Silakan Login Kembali</a></h3>";
	echo "<h2><font color=blue>Registrasi Berhasil</h2>";
	}
else {
	echo "<h2><font color=red>Registrasi Gagal</h2>";
	echo"<a href=formregister.php>Kembali</a>";
	}

	/*
	Febrio Rizky A.
	21060118120033
	*/
 ?>
