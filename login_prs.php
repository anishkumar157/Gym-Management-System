<?php
session_start();
include 'config.php';
$usr = $_POST['usr'];
$pass = $_POST['pass'];
$sql = "SELECT `id`, `usr_name`, `pass` FROM `login` WHERE usr_name='$usr' and pass='$pass'";
$result = $connection->query($sql);
$row = $result->fetch_assoc();
if ($result->num_rows > 0) {

    $_SESSION["usr_name"] = $row['usr_name'];
    $_SESSION["pass"] = $row['pass'];

    echo "<script>
alert('Welcome');
window.location.href='member.php';
</script>";
} else {
    echo "<script>
alert('Invalid Username and Password');
window.location.href='index.php';
</script>";
}
