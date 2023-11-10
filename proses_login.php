<?php
include 'template/header.php';
include 'config.php';

$username = $_POST['username'];
$password = $_POST['password'];

// isi username terpanggil
// jika username terdapat di tabel user dengan rolenya pasien, maka arahkan ke halaman pasien
// jika username terdapat di tabel user dengan rolenya dokter, maka arahkan ke halaman dokter

$data = mysqli_query($host,"select username from user where role='pasien' AND username='$username' ");


include 'template/footer.php';
