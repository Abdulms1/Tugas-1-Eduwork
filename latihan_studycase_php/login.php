<?php
session_start();
require_once 'koneksi.php';
$message = '';

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    if(!empty($username) && !empty($password)) {
        $sql = "SELECT * FROM users WHERE username = :username";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(['username' => $username]);
        $user = $stmt->fetch();

        if ($user && password_verify($password, $user['password'])) {
            $_SESSION['user_logged_in'] = true;
            $_SESSION['username'] = $user['username'];
            $_SESSION['email'] = $user['email'];
            header("Location: home.php");
            exit();

    } else {
        $message = "<p style='color: red;'>Username atau password salah.</p>";
    }
}
}

?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="card">
    <h2>Form Login</h2>
    <?= $message ?>
    <form action="" method="POST">
        <label>Username:</label><br>
        <input type="text" name="username" required><br><br>
        
        <label>Password:</label><br>
        <input type="password" name="password" required><br><br>
        
        <button type="submit">Login</button>
    </form>
    <p>Belum punya akun? <a href="register.php">Register</a></p>

    </div>
</body>
</html>