<?php
//  mengaktifkan session php
session_start();

// menghubungkan dengan koneksi
include 'koneksi.php';

// menangkap data yang di kirim dari form
$username = $_POST['username'];
$password = $_POST['password'];

// menyeleksi data admin dengan username dan password yang sesuai
$data = mysql_query($koneksi,"select * from admin where username='$username' and password='$password'");

// menghitung jumlah data yang di temukan
$cek = mysql_num_rows($data);

if ($cek > 0){
    $_SESSION ['username'] = $username;
    $_SESSION ['status'] = "login";
    header("location:admin/index.php");
}else{
    header("location;index.php?pesan=gagal");
}
?>