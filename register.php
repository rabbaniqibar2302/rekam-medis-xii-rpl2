<?php include 'template/header.php' ?>
<div class="container">
    <h1>Daftar Akun Rekam Medis</h1>
    <h3>Daftar Sebagai Admin, Pasien atau Dokter</h3>
    <form action="add_regis.php" method="post">
        <div class="mb-3">
            <label class="form-label">Username</label>
            <input type="text" class="form-control" name="username" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Password</label>
            <input type="password" class="form-control" name="password" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Nama Lengkap</label>
            <input type="text" class="form-control" name="nama_lengkap" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Daftar Akun Sebagai</label>
            <select class="form-select" name="role" required>
                <option selected>....</option>
                <option value="admin">admin</option>
                <option value="pasien">pasien</option>
                <option value="dokter">dokter</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Daftar Akun</button>
    </form>
</div>
<?php include 'template/footer.php' ?>