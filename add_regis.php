<?php
include 'config.php';

// ambil nilai dari form into variabel
$user = $_POST['username'];
$pass = $_POST['password'];
$nama = $_POST['nama_lengkap'];
$role = $_POST['role'];

// Eliminasi Role
// jika rolenya itu admin = insert into user
// jika rolenya pasien = insert into user + insert into detail_pasien
// jika rolenya dokter = insert into user + insert into detail_dokter

// untuk admin
if ($role == "admin") {
    $insert = mysqli_query($host, "insert into user values(
        null,'$user','$pass','$nama','$role'
    )");
    if ($insert) {
        echo "
        <script>
        alert('Data Admin Berhasil Di Tambah');
        window.location.href = 'index.php';
        </script>
        ";
    } else {
        echo "
        <script>
        alert('Data Tidak Berhasil Di Tambah');
        window.location.href = 'register.php';
        </script>
        ";
    }

    // untuk dokter
} else if ($role == "dokter") {
    $insert_dokter = mysqli_query($host, "insert into user values(
        null,'$user','$pass','$nama','$role'
    )");
    $insert_dokter .= mysqli_query($host, "insert into detail_dokter values(
        null,'1','$nama','spesialis'
    )");

    if ($insert_dokter) {
        echo "
        <script>
        alert('Data Dokter Berhasil Di Tambah');
        window.location.href = 'index.php';
        </script>
        ";
    } else {
        echo "
        <script>
        alert('Data Tidak Berhasil Di Tambah');
        window.location.href = 'register.php';
        </script>
        ";
    }

    // untuk pasien
} else if ($role == "pasien") {
    $insert_pasien = mysqli_query($host, "insert into user values(
        null,'$user','$pass','$nama','$role'
    )");
    $insert_pasien .= mysqli_query($host, "insert into detail_pasien values(
        null,'1','$nama','alamat','gender','00'
    )");

    if ($insert_pasien) {
        echo "
        <script>
        alert('Data Pasien Berhasil Di Tambah');
        window.location.href = 'index.php';
        </script>
        ";
    } else {
        echo "
        <script>
        alert('Data Tidak Berhasil Di Tambah');
        window.location.href = 'register.php';
        </script>
        ";
    }
} else {
    echo "
    <script>
    alert('Data Tidak Berhasil Di Tambah');
    window.location.href = 'register.php';
    </script>
    ";
}
