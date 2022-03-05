<?php 
// mengaktifkan session php
session_start();

// menghubungkan dengan koneksi
include 'koneksi.php';

// menangkap data yang dikirim dari form
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$no_hp = $_POST['no_hp'];
$user = $_POST['user'];
$pass = $_POST['pass'];
$sql = mysqli_query($koneksi,"insert into klien (nama,alamat,no_hp,user,pass) values ('$nama','$alamat','$no_hp','$user','$pass')");
$sqli = mysqli_query($koneksi,"insert into login (pengguna,user,pass,status) values ('$nama','$user','$pass','pasif')");

if($sql && $sqli > 0){
                        echo'    <script>alert("berhasil");window.location="index.php"</script>';
                }
            else
            {
                ?>
                <div style="color: red;font-size: 30px">
                <center>
                <b>Username dan Password Salah  !!</b>
                </center>
                </div>
                <?php
            }
?>