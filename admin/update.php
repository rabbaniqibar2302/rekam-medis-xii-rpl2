<?php include '../template/header.php' ?>
<?php include '../config.php' ?>
<?php $data = mysqli_fetch_array(mysqli_query($host, "SELECT * FROM user WHERE username='$_GET[username]'")); ?>
<?php $data_pasien = mysqli_fetch_array(mysqli_query($host, "SELECT * FROM user INNER JOIN detail_pasien ON user.id_user = detail_pasien.id_pasien")); ?>

<div class="container">
    <!-- Bagian Atas -->
    <div class="row mb-5">
        <div class="col">
            <h5 class="display-5">Halaman Admin / Update</h5>
        </div>
        <div class="col"></div>
    </div>
    <!-- Bagian Atas -->

    <!-- Bagian Content -->
    <div class="row mb-5">
        <form action="" method="post" class="row">

            <div class="col">
                <!-- Data dari table user -->
                <div class="mb-2">
                    <label class="form-label">Username</label>
                    <input type="text" class="form-control" name="username" value="<?= $data['username'] ?>">
                </div>
                <div class="mb-2">
                    <label class="form-label">Password</label>
                    <input type="text" class="form-control" name="password" value="<?= $data['password'] ?>">
                </div>
                <div class="mb-2">
                    <label class="form-label">Nama Lengkap</label>
                    <input type="text" class="form-control" name="nama_lengkap" value="<?= $data['nama'] ?>">
                </div>
                <div class="mb-2">
                    <label class="form-label">Role</label>
                    <select name="role" class="form-select">
                        <option selected disabled>...</option>
                        <option value="dokter" <?= $data['role'] == 'dokter' ? '' : 'selected' ?>>Dokter</option>
                        <option value="pasien" <?= $data['role'] == 'pasien' ? '' : 'selected' ?>>Pasien</option>
                    </select>
                </div>
            </div>

            <div class="col">
                <!-- Data dari table detail -->
                <div class="row mb-2">
                    <label class="form-label">Alamat</label>
                    <input type="text" class="form-control" value="">
                </div>
                <div class="row mb-2">
                    <label class="form-label">Usia</label>
                    <input type="text" class="form-control" value="">
                </div>
                <div class="row mb-2">
                    <label class="form-label">Gender</label>
                    <select name="gender" class="form-select">
                        <option value="pria">Pria</option>
                        <option value="wanita">Wanita</option>
                    </select>
                </div>
            </div>
        </form>
    </div>
    <!-- Bagian Content -->
</div>

<?php include '../template/footer.php' ?>