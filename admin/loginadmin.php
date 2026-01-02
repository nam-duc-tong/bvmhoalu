<?php
session_start();
if (isset($_SESSION['user'])) {
    header("Location: dashboard.php");
    exit;
}
require('config/database.php');
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Đăng nhập</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="login-box">
    <h2>Đăng nhập</h2>

    <?php if (isset($_SESSION['error'])): ?>
        <p class="error"><?= $_SESSION['error']; ?></p>
        <?php unset($_SESSION['error']); ?>
    <?php endif; ?>

    <form method="POST" action="process_login.php">
        <input type="text" name="username" placeholder="Tên đăng nhập">
        <input type="password" name="password" placeholder="Mật khẩu">
        <button type="submit">Đăng nhập</button>
    </form>
</div>

</body>
</html>
