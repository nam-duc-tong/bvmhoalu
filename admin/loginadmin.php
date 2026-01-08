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
    <style>
        * {
    box-sizing: border-box;
    font-family: "Segoe UI", Tahoma, sans-serif;
}

body {
    margin: 0;
    height: 100vh;
    background: linear-gradient(135deg, #4facfe, #00f2fe);
    display: flex;
    align-items: center;
    justify-content: center;
}

.login-box {
    width: 360px;
    background: #fff;
    padding: 30px 25px;
    border-radius: 10px;
    box-shadow: 0 15px 30px rgba(0,0,0,0.2);
    animation: fadeIn 0.6s ease;
}

.login-box h2 {
    text-align: center;
    margin-bottom: 25px;
    color: #333;
}

.login-box input {
    width: 100%;
    padding: 12px;
    margin-bottom: 15px;
    border: 1px solid #ddd;
    border-radius: 6px;
    outline: none;
    font-size: 14px;
    transition: 0.3s;
}

.login-box input:focus {
    border-color: #4facfe;
    box-shadow: 0 0 5px rgba(79,172,254,0.5);
}

.login-box button {
    width: 100%;
    padding: 12px;
    background: #4facfe;
    border: none;
    border-radius: 6px;
    color: white;
    font-size: 15px;
    cursor: pointer;
    transition: 0.3s;
}

.login-box button:hover {
    background: #00c6ff;
}

.error {
    background: #ffe6e6;
    color: #d63031;
    padding: 10px;
    border-radius: 6px;
    margin-bottom: 15px;
    text-align: center;
    font-size: 14px;
}

/* Animation */
@keyframes fadeIn {
    from {
        opacity: 0;
        transform: translateY(15px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

    </style>
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
<script>
document.querySelector("form").addEventListener("submit", function (e) {
    let username = document.querySelector("input[name='username']");
    let password = document.querySelector("input[name='password']");

    if (username.value.trim() === "" || password.value.trim() === "") {
        e.preventDefault();
        alert("Vui lòng nhập đầy đủ tài khoản và mật khẩu!");
        return;
    }

    if (password.value.length < 6) {
        e.preventDefault();
        alert("Mật khẩu phải ít nhất 6 ký tự!");
    }
});
</script>

</body>
</html>
