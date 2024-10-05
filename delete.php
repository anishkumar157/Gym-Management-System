<?php
include 'config.php';
$id = $_GET['id'];
$query = "DELETE FROM MEMBER WHERE id = '$id' ";

$data = mysqli_query($connection, $query);

echo "<script>alert('deleted');window.location='view.php';</script>";
