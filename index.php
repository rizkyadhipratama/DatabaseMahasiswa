<?php
    
session_start();
	include 'config.php';
   $conn = new mysqli($server, $username, $password, $dbname);

    //echo "$_SESSION[uname] $_SESSION[pass]";
    if(isset($_SESSION['username']) AND isset($_SESSION['password'])){
        $sql = "SELECT * FROM user WHERE username='$_SESSION[username]'";
        $hasil=$conn->query($sql);
        if($hasil->num_rows>0){
            while($data=$hasil->fetch_assoc()){
                if($data['password']==$_SESSION['password']){
                    include 'menu.php';
					//echo"Akun yang aktif :" .$_SESSION['username']; //menampilkan username yg aktif
					echo"<br>Akun yang aktif: ".$data['nama'];
					
                }else{
                    echo "password salah";
                }
            }
        }
        else { 
            echo "username tidak ditemukan";
        }

    } else {
    //cari username dalam tabel
	if (isset($_POST['username'])) {
    $username=$_POST['username'];
    $password=$_POST['password'];
    $md5_pass=md5($password);
    $sql = "SELECT * FROM user WHERE username='$username'";
    $hasil=$conn->query($sql);
    if($hasil->num_rows>0){
        while($data=$hasil->fetch_assoc()){
            if($data['password']==$md5_pass){
                include 'menu.php';
                echo "login berhasil";
                $_SESSION['username']=$username;
                $_SESSION['password']=$md5_pass;
				//echo"Akun yang aktif: $username ";
				echo"<br>Akun yang aktif: ".$data['nama'];
            } else{
                echo "password salah";
            }
        }
    }
	else {
		echo"username tidak ditemukan";
		include "login.php";
    }
	}
    else { 
        echo "<a href='login.php'>silakan login</a>";
    }
}
  /*
	Febrio Rizky A.
	21060118120033
	*/  
?>
