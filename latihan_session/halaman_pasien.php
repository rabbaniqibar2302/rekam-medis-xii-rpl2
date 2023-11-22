<html>

<head>
    <title>Halaman Pasien</title>
</head>

<body>
    <?php
    // tiket masuk ke halaman pasien
    session_start();

    // apakah anda mempunyai role?
    if ($_SESSION['role'] == "") {
        header("Location:index.php?pesan=gagal");
    }
    ?>
    <h1>ini halaman pasien</h1>

    <p>
        Halo <b><?php echo $_SESSION['username']; ?></b>
    </p>
    
    <a href="logout.php">Keluar Halaman</a>
</body>

</html>