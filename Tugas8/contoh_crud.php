<?php    
require 'koneksi_db.php';

// Contoh Create (Insert data ke tabel users)
$sql = "INSERT INTO users (nama, email) VALUES (:nama, :email)";
$stmt = $pdo->prepare($sql);
$stmt->execute([
    ':nama' => 'Example User',
    ':email' => 'example@example.com'
]);

// Contoh Read (Mengambil data dari tabel users)
$sql = "SELECT * FROM users";
$stmt = $pdo->query($sql);
$users = $stmt->fetchAll(PDO::FETCH_ASSOC); // Simpan ke variabel $users

?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Example</title>
</head>
<body>
    <h1>Daftar Users</h1>
    <ul>
        <?php foreach ($users as $user): ?>
            <li><?= htmlspecialchars($user['nama']) ?> - <?= htmlspecialchars($user['email']) ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>