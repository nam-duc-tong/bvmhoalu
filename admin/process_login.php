<?php
session_start();
require 'login.php';

$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';

if ($username == '' || $password == '') {
    $_SESSION['error'] = "Vui lòng nhập đầy đủ thông tin!";
    header("Location: login.php");
    exit;
}

$password = md5($password);

$sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) == 1) {
    $_SESSION['user'] = $username;
    header("Location: admin_interface.php");
    exit;
} else {
    $_SESSION['error'] = "Sai tài khoản hoặc mật khẩu!";
    header("Location: login.php");
    exit;
}
