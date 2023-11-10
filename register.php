<?php include 'template/header.php' ?>

<h1>Daftar Akun Rekam Medis</h1>
<h3>Daftar Sebagai Admin, Pasien atau Dokter</h3>
<form action="add_regis.php" method="post">
    <div>
        <label>Username</label>
        <input type="text" name="username">
    </div>
    <div>
        <label>Password</label>
        <input type="password" name="password">
    </div>
    <div>
        <label>Nama Lengkap</label>
        <input type="text" name="nama_lengkap">
    </div>
    <div>
        <label>Daftar Akun Sebagai :</label>
        <select name="role">
            <option value="admin">admin</option>
            <option value="pasien">pasien</option>
            <option value="dokter">dokter</option>
        </select>
    </div>
    <div>
        <input type="submit" value="Daftar Akun">
    </div>
</form>

<?php include 'template/footer.php' ?>