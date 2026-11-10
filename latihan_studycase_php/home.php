<?php
session_start();

if (!isset($_SESSION['user_logged_in']) || $_SESSION['user_logged_in'] !== true) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Halaman Home</title>
</head>
<body>
    <div class="card">
    <h1>Selamat Datang, <?= htmlspecialchars($_SESSION['username']) ?>! 🎉</h1>
    <p>Email Anda yang terdaftar adalah: <b><?= htmlspecialchars($_SESSION['email']) ?></b></p>
    
    <br>
    <a href="logout.php">Logout (Keluar)</a>
    </div>
</body>
</html>