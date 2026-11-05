<?php    
require 'koneksi_db.php';

// Contoh Create (Insert data ke tabel users)
try {
    $sql = "INSERT INTO users (nama, email, address) VALUES (:nama, :email, :address)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        ':nama' => 'Example User',
        ':email' => 'example@example.com',
        ':address' => 'Jakarta'
    ]);
} catch (PDOException $e) {
    // Lewati jika duplikat
}

$users = [];
$sql = "SELECT * FROM users";
$stmt = $pdo->query($sql);
if ($stmt) {
    $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
</head>
<body>
    <h1>Users</h1>
    <ul>
        <?php foreach ($users as $user): ?>
            <li>
                <strong>ID:</strong> <?= htmlspecialchars($user['id'] ?? '') ?><br>
                <strong>Name:</strong> <?= htmlspecialchars($user['nama'] ?? '') ?><br>
                <strong>Email:</strong> <?= htmlspecialchars($user['email'] ?? '') ?><br>
                <strong>Address:</strong> <?= htmlspecialchars($user['address'] ?? '-') ?>
            </li>
            <br>
        <?php endforeach; ?>
    </ul>
</body>
</html>