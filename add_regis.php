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

    // cek id terakhir di user 
    if ($insert_dokter) {
        $last = mysqli_insert_id($host);
    }
    // cek id terakhir di user 

    $insert_dokter_2 = mysqli_query($host, "insert into detail_dokter values(
        null,'$last','$nama','spesialis'
    )");

    if ($insert_dokter and $insert_dokter_2) {
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

    // cek id terakhir di user 
    if ($insert_pasien) {
        $last = mysqli_insert_id($host);
    }
    // cek id terakhir di user 

    $insert_pasien_2 = mysqli_query($host, "insert into detail_pasien values(
        null,'$last','$nama','alamat','gender','00'
    )");

    if ($insert_pasien and $insert_pasien_2) {
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
