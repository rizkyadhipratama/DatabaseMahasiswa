<?php
include "index.php";



//membuat form
echo "<h2>Mencari Data Mahasiswa</h2>"; 
echo "<form method=post action=carimhs.php><table border=0>";
echo "<tr><td>Nama </td><td>: <input type=text name=nama> </td></tr>";
// echo "<tr><td>NIM </td><td>: <input type=text name=nim> </td></tr>";
// echo "<tr><td>Angkatan </td><td>: <input type=text name=angkatan> </td></tr>";
// echo "<tr><td>Jurusan </td><td>: <input type=text name=prodi> </td></tr>";
// echo "<tr><td>Fakultas </td><td>: <input type=text name=fakultas> </td></tr>";
// echo "<tr><td>Alamat </td><td>: <input type=text name=alamat> </td></tr>";
// echo "<tr><td>No.Telp </td><td>: <input type=text name=notelp> </td></tr>";
echo "<tr><td><input type=submit value=Input></td></tr>"; //tombol login
echo "</table></form>";
?>
