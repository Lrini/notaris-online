<?php 
// mengaktifkan session php
session_start();

// menghubungkan dengan koneksi
include 'koneksi.php';

// menangkap data yang dikirim dari form
$username = $_POST['username'];
$password = $_POST['password'];

// menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($koneksi,"select * from klien where user='$username' and pass='$password'");

// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);
//cek object yang ditemukan
$data2 = mysqli_fetch_array($data);

if($cek > 0){
	if($data2['status'] == 'aktif') {
			session_start ();
			$_SESSION['id'] = $data2 ['id'];
			$_SESSION['name'] = $data2['nama'];
        header("location:../notaris/klien/index.php");
    } else {
       echo '<div class="alert alert-warning">Login gagal, akun Anda sedang tidak aktif</div>';
    }
	
}else{
	header("location:index.php?pesan=gagal");
}
?>