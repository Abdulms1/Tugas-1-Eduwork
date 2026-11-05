<?php

function escapeHtml($value)
{
    return htmlspecialchars((string) $value, ENT_QUOTES, 'UTF-8');
}

$product = null;
$loadError = null;
$productId = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

if ($productId === false || $productId === null || $productId < 1) {
    http_response_code(400);
} else {
    try {
        require_once __DIR__ . '/koneksi_data.php';
        $columns = $pdo->query('SHOW COLUMNS FROM products')->fetchAll(PDO::FETCH_COLUMN);
        $selectColumns = ['id', 'name', 'description', 'price', 'image'];
        if (in_array('category', $columns, true)) {
            $selectColumns[] = 'category';
        }

        $statement = $pdo->prepare(
            'SELECT ' . implode(', ', $selectColumns) . ' FROM products WHERE id = :id LIMIT 1'
        );
        $statement->execute(['id' => $productId]);
        $product = $statement->fetch();
        if (!$product) {
            http_response_code(404);
        }
    } catch (PDOException $exception) {
        error_log('Gagal memuat detail produk: ' . $exception->getMessage());
        $loadError = 'Detail produk belum dapat dimuat. Silakan coba kembali nanti.';
        http_response_code(500);
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $product ? escapeHtml($product['name']) . ' - Detail Produk' : 'Detail Produk' ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background: #f6f7fb; }
        .detail-image { width: 100%; max-height: 520px; object-fit: cover; background: #e9eef5; }
    </style>
</head>
<body>
    <main class="container py-5">
        <a href="home.php" class="btn btn-outline-secondary mb-4">&larr; Kembali ke etalase</a>

        <?php if ($loadError): ?>
            <div class="alert alert-danger" role="alert"><?= escapeHtml($loadError) ?></div>
        <?php elseif (!$product): ?>
            <div class="alert alert-warning" role="status">
                <?= $productId ? 'Produk tidak ditemukan.' : 'ID produk tidak valid.' ?>
            </div>
        <?php else: ?>
            <article class="card border-0 shadow-sm overflow-hidden">
                <div class="row g-0">
                    <div class="col-12 col-lg-6">
                        <?php if (!empty($product['image'])): ?>
                            <img class="detail-image h-100"
                                 src="<?= escapeHtml($product['image']) ?>"
                                 alt="<?= escapeHtml($product['name']) ?>">
                        <?php else: ?>
                            <div class="detail-image h-100 d-flex align-items-center justify-content-center text-secondary">
                                Gambar tidak tersedia
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="card-body p-4 p-lg-5">
                            <span class="badge text-bg-light mb-3">
                                <?= escapeHtml(trim((string) ($product['category'] ?? '')) ?: 'Tanpa kategori') ?>
                            </span>
                            <h1 class="display-6 fw-bold"><?= escapeHtml($product['name']) ?></h1>
                            <p class="fs-3 fw-bold text-primary my-4">
                                Rp<?= number_format((float) $product['price'], 0, ',', '.') ?>
                            </p>
                            <h2 class="h5 fw-bold">Deskripsi</h2>
                            <p class="text-secondary"><?= nl2br(escapeHtml($product['description'] ?? '')) ?></p>
                            <a href="home.php" class="btn btn-primary mt-3">Lanjut belanja</a>
                        </div>
                    </div>
                </div>
            </article>
        <?php endif; ?>
    </main>
</body>
</html>
