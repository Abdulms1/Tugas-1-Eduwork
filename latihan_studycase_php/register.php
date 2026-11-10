<?php
require_once 'koneksi.php';
$message = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    if (empty($username) || empty($email) || empty($password)) {
        $message = "<p style='color: red;'>Semua field harus diisi.</p>";
    } else {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $message = "<p style='color: red;'>Email tidak valid.</p>";
        } else {
            $passwordHash = password_hash($password, PASSWORD_DEFAULT);
            try {
                $sql = "INSERT INTO users (username, email, password) VALUES (:username, :email, :password)";
                $stmt = $pdo->prepare($sql);
                $stmt->execute([
                    'username' => $username,
                    'email' => $email,
                    'password' => $passwordHash
                ]);
                $message = "<p style='color: green;'>Registrasi berhasil. Silakan <a href='login.php'>login</a>.</p>";
            } catch (PDOException $e) {
                $message = "<p style='color: red;'>Error: " . $e->getMessage() . "</p>";
            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="card">
    <h2>Form Register</h2>
    <?= $message ?>
    <form action="" method="POST">
        <label>Username:</label><br>
        <input type="text" name="username" required><br><br>

        <!-- Tambahan Input Email -->
        <label>Email:</label><br>
        <input type="email" name="email" required><br><br>
        
        <label>Password:</label><br>
        <input type="password" name="password" required><br><br>
        
        <button type="submit">Daftar</button>
    </form>
    <p>Sudah punya akun? <a href="login.php">Login</a></p>
    </div>
</body>
</html>