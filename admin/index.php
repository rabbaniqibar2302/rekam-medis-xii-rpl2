<?php include '../template/header.php' ?>
<?php include '../config.php' ?>
<center>
    <h2>INI HALAMAN ADMIN</h2>
    <div class="container">
        <table class="table table-striped">
            <tr>
                <th>No</th>
                <th>Username</th>
                <th>Password</th>
                <th>Nama Lengkap</th>
                <th>Role</th>
            </tr>
            <?php
            $no = 1;
            $data = mysqli_query($host,"SELECT * FROM user");
            foreach($data as $user){    
                echo "<tr>";
                echo "<td>".$no++."</td>";
                echo "<td>$user[username]</td>";
                echo "<td>$user[password]</td>";
                echo "<td>$user[nama]</td>";
                echo "<td>$user[role]</td>";
                echo "</tr>";
            }
            ?>
        </table>
    </div>
</center>
<?php include '../template/footer.php' ?>