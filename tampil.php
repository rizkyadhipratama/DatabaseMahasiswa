<?php

include "config.php";
include "index.php";
$conn = new mysqli($server,$username,$password,$dbname);

$sql="SELECT * FROM biodata";

$hasil=$conn->query($sql);
if($hasil->num_rows>0){
 
echo"<h2>Tabel Mahasiswa</h2>";
echo "<table border=1><tr><th>Nama</th><th>NIM</th><th>Prodi</th><th>Fakultas</th><th>Angkatan</th><th>Alamat</th><th>No Telepon</th></tr>";
while($data=$hasil->fetch_assoc()){
 echo "<tr><td>".$data['nama']."</td><td>".$data['nim']."</td><td>".$data['angkatan']."</td><td>".$data['prodi']."</td><td>".$data['fakultas']."</td><td>".$data['alamat']."</td><td>".$data['notelp']."</td></tr>";   
     }
}
echo "</table>";


?>
