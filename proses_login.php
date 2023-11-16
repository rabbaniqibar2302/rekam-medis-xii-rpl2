<?php
include 'template/header.php';
include 'config.php';

$username = $_POST['username'];
$password = $_POST['password'];

// isi username terpanggil
// jika username terdapat di tabel user dengan rolenya pasien, maka arahkan ke halaman pasien
// jika username terdapat di tabel user dengan rolenya dokter, maka arahkan ke halaman dokter

// QUERY MULTI LOGIN PASIEN
$user_pasien = mysqli_query($host,"select * from user where role='pasien' AND username='$username' ");

// QUERY MUTLI LOGIN DOKTER
$user_dokter = mysqli_query($host,"select * from user where role='dokter' AND username='$username' ");

// QUERY MUTLI LOGIN ADMIN
$user_admin = mysqli_query($host,"select * from user where role='admin' AND username='$username' ");


// KELUARKAN DATA
foreach($user_pasien as $data){
    $user = $data['role'];
}
foreach($user_dokter as $data){
    $user = $data['role'];
}
foreach($user_admin as $data){
    $user = $data['role'];
}

//Desicion to where land for
if($user == "pasien"){
    echo"
    <script>
    window.location.href = 'pasien/index.php';
    </script>
    ";
}else if($user == "dokter"){
    echo"
    <script>
    window.location.href = 'dokter/index.php';
    </script>
    ";
}else if($user == "admin"){
    echo"
    <script>
    window.location.href = 'admin/index.php';
    </script>
    ";
}else{
    echo"
    
    <script>
    alert('USER TIDAK TERDAFTAR, SILAHKAN REGSITER');
    window.location.href = 'index.php';
    </script>
    ";
}

include 'template/footer.php';
