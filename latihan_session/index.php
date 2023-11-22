<html>
    <head>
        <title>Latihan Login Session Multi Account</title>
    </head>
    <body>
        <h1>Login</h1>
        <h4>Masukan Username dan Passwordnya !</h4>
        <?php
        if(isset($_GET['pesan'])){
            if($_GET['pesan'] == "gagal"){
                echo"
                <script>
                alert('Username Dan Password tidak sesuai!');
                </script>
                ";
            }
        }
        ?>

        <form action="proses_login.php" method="post">
            <div>
                <label>Username</label>
                <input type="text" name="username">
            </div>
            <div>
                <label>password</label>
                <input type="password" name="password">
            </div>
            <div>
                <input type="submit" value="Login">
            </div>
        </form>
    </body>
</html>