<?php
include 'template/header.php';
include 'register.php';

$username = $_POST['username'];
$password = $_POST['password'];

echo "$username";
echo "<br>";
echo "$password";
echo "<br>";

mysqli_query($host,"select ");

include 'template/footer.php';
?>