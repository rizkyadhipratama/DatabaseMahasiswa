<?php

include "config.php";
include "index.php";
$conn = new mysqli($server,$username,$password,$dbname);

//menerima posting dari formmhs.php
$nama=$_POST['nama'];
/*
$nim=$_POST['nim'];
$angkatan=$_POST['angkatan'];
$prodi=$_POST['prodi'];
$fakultas=$_POST['fakultas'];
$alamat=$_POST['alamat'];
$notelp=$_POST['notelp'];
*/


$sql="SELECT * FROM biodata WHERE nama LIKE '%$nama%'";

$hasil=$conn->query($sql);
if($hasil->num_rows>0){

echo"<h2>Tabel Mahasiswa Yang Dicari</h2>";
echo "<table border=1><tr><th>Nama</th><th>NIM</th><th>Prodi</th><th>Fakultas</th><th>Angkatan</th><th>Alamat</th><th>No Telepon</th><th>Proses</th></tr>";

//$data untuk menampung hasil
//hasil fetch_assoc() itu utk meminta array ditaroh di data
//while -> perulangan, utk ngecek masih ada tabel yg bisa ditambahin, ya ditambahin sm querynya
while($data=$hasil->fetch_assoc()){
 echo "<tr><td>".$data['nama']."</td><td>".$data['nim']."</td><td>".$data['angkatan']."</td><td>".$data['prodi']."</td><td>".$data['fakultas']."</td><td>".$data['alamat']."</td><td>".$data['notelp']."</td><td><a href=editmhs.php?id=".$data['id'].">Edit</a> / <a href=hapusmhs.php?id=".$data['id'].">Hapus</a></td></tr>";   
     }
}
echo "</table>";


?>
