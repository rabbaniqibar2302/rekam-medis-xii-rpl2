<?php include '../template/header.php' ?>
<?php include '../config.php' ?>

<div class="container">
    <div class="row mb-5">
        <div class="col">
            <h5 class="display-5">Halaman Admin</h5>
        </div>
        <div class="col"></div>
    </div>
</div>

<center>
    <div class="container">
        <table class="table table-striped">
            <tr>
                <th>No</th>
                <th>Username</th>
                <th>Password</th>
                <th>Nama Lengkap</th>
                <th>Role</th>
                <th>Action</th>
            </tr>
            <?php
            $no = 1;
            $data = mysqli_query($host, "SELECT * FROM user");
            foreach ($data as $user) {
                echo "<tr>";
                echo "<td>" . $no++ . "</td>";
                echo "<td>$user[username]</td>";
                echo "<td>$user[password]</td>";
                echo "<td>$user[nama]</td>";
                echo "<td>$user[role]</td>";
                echo "<td>
                <a class='btn btn-primary' href='update.php?id_user=$user[id_user]' role='button'> Update </a>
                <a class='btn btn-danger' href='#' role='button'> Delete </a>
                </td>";
                echo "</tr>";
            }
            ?>
        </table>
    </div>
</center>
<?php include '../template/footer.php' ?>