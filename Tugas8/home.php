<?php

function escapeHtml($value)
{
    return htmlspecialchars((string) $value, ENT_QUOTES, 'UTF-8');
}

$products = [];
$loadError = null;

try {
    require_once __DIR__ . '/koneksi_data.php';
    $columns = $pdo->query('SHOW COLUMNS FROM products')->fetchAll(PDO::FETCH_COLUMN);
    $selectColumns = ['id', 'name', 'description', 'price', 'image'];
    if (in_array('category', $columns, true)) {
        $selectColumns[] = 'category';
    }

    $products = $pdo->query(
        'SELECT ' . implode(', ', $selectColumns) . ' FROM products ORDER BY id DESC'
    )->fetchAll();
} catch (PDOException $exception) {
    error_log('Gagal memuat etalase produk: ' . $exception->getMessage());
    $loadError = 'Produk belum dapat dimuat. Silakan coba kembali nanti.';
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Etalase Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background: #f6f7fb; }
        .hero { background: linear-gradient(120deg, #123b70, #2675c7); }
        .product-card { transition: transform .18s ease, box-shadow .18s ease; }
        .product-card:hover { transform: translateY(-4px); box-shadow: 0 1rem 2rem rgba(20, 45, 80, .12); }
        .product-image { height: 220px; object-fit: cover; background: #e9eef5; }
        .product-description { min-height: 3rem; }
    </style>
</head>
<body>
    <header class="hero text-white py-5">
        <div class="container py-3">
            <p class="text-uppercase small fw-semibold mb-2">Pilihan untuk Anda</p>
            <h1 class="display-5 fw-bold mb-2">Etalase Produk</h1>
            <p class="lead mb-0">Temukan produk favorit Anda dengan mudah.</p>
        </div>
    </header>

    <main class="container py-5">
        <div class="d-flex flex-wrap justify-content-between align-items-end gap-2 mb-4">
            <div>
                <h2 class="h3 fw-bold mb-1">Semua Produk</h2>
                <p class="text-secondary mb-0">Jelajahi koleksi produk kami.</p>
            </div>
            <?php if (!$loadError): ?>
                <span class="badge rounded-pill text-bg-light"><?= count($products) ?> produk</span>
            <?php endif; ?>
        </div>

        <?php if ($loadError): ?>
            <div class="alert alert-danger" role="alert"><?= escapeHtml($loadError) ?></div>
        <?php elseif (!$products): ?>
            <div class="alert alert-info" role="status">Belum ada produk yang tersedia.</div>
        <?php else: ?>
            <div class="row g-4">
                <?php foreach ($products as $product): ?>
                    <?php
                    $image = trim((string) ($product['image'] ?? ''));
                    $category = trim((string) ($product['category'] ?? ''));
                    $description = trim((string) ($product['description'] ?? ''));
                    ?>
                    <div class="col-12 col-sm-6 col-lg-4 col-xl-3">
                        <article class="card product-card h-100 border-0 shadow-sm overflow-hidden">
                            <?php if ($image !== ''): ?>
                                <img class="card-img-top product-image"
                                     src="<?= escapeHtml($image) ?>"
                                     alt="<?= escapeHtml($product['name'] ?? 'Produk') ?>"
                                     loading="lazy">
                            <?php else: ?>
                                <div class="product-image d-flex align-items-center justify-content-center text-secondary">
                                    Gambar tidak tersedia
                                </div>
                            <?php endif; ?>
                            <div class="card-body d-flex flex-column p-4">
                                <span class="badge text-bg-light align-self-start mb-3">
                                    <?= escapeHtml($category !== '' ? $category : 'Tanpa kategori') ?>
                                </span>
                                <h3 class="h5 fw-bold"><?= escapeHtml($product['name'] ?? '') ?></h3>
                                <p class="product-description text-secondary">
                                    <?= escapeHtml(mb_strimwidth($description, 0, 110, '…', 'UTF-8')) ?>
                                </p>
                                <div class="mt-auto">
                                    <p class="fs-5 fw-bold text-primary mb-3">
                                        Rp<?= number_format((float) ($product['price'] ?? 0), 0, ',', '.') ?>
                                    </p>
                                    <a class="btn btn-primary w-100"
                                       href="detail.php?id=<?= urlencode((string) ($product['id'] ?? '')) ?>">
                                        Beli
                                    </a>
                                </div>
                            </div>
                        </article>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </main>
</body>
</html>