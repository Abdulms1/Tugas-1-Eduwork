<?php
$errors = [];
$allowedCategories = ['Elektronik', 'Pakaian', 'Makanan dan Minuman', 'Lainnya'];
$namaProduk = '';
$harga = '';
$deskripsi = '';
$kategori = '';
$stok = '';
$gambar = null;
$imageInfo = false;

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
	http_response_code(405);
	$errors[] = 'Halaman ini hanya menerima data dari form produk.';
} else {
	$namaProduk = trim($_POST['nama_produk'] ?? '');
	$harga = trim($_POST['harga'] ?? '');
	$deskripsi = trim($_POST['deskripsi'] ?? '');
	$kategori = trim($_POST['kategori'] ?? '');
	$stok = trim($_POST['stok'] ?? '');

	if ($namaProduk === '') {
		$errors[] = 'Nama produk wajib diisi.';
	}
	if ($harga === '' || !ctype_digit($harga)) {
		$errors[] = 'Harga wajib diisi dengan angka nol atau lebih.';
	}
	if ($deskripsi === '') {
		$errors[] = 'Deskripsi wajib diisi.';
	}
	if (!in_array($kategori, $allowedCategories, true)) {
		$errors[] = 'Kategori wajib dipilih.';
	}
	if ($stok === '' || !ctype_digit($stok)) {
		$errors[] = 'Stok wajib diisi dengan angka nol atau lebih.';
	}

	$gambar = $_FILES['gambar'] ?? null;
	if ($gambar === null || $gambar['error'] !== UPLOAD_ERR_OK) {
		$errors[] = 'Gambar produk wajib diunggah.';
	} else {
		$imageInfo = getimagesize($gambar['tmp_name']);
		if ($imageInfo === false) {
			$errors[] = 'File yang diunggah harus berupa gambar yang valid.';
		}
	}
}

function escapeOutput(string $value): string
{
	return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Hasil Input Produk</title>
	<link rel="stylesheet" href="product_input.css">
</head>
<body>
	<main class="page-shell">
		<section class="form-panel result-panel">
			<?php if ($errors !== []): ?>
				<header class="page-heading">
					<p class="eyebrow">Periksa kembali</p>
					<h1>Data belum valid</h1>
				</header>
				<ul class="error-list">
					<?php foreach ($errors as $error): ?>
						<li><?= escapeOutput($error) ?></li>
					<?php endforeach; ?>
				</ul>
				<a class="text-link" href="product_input_form.php">Kembali ke form</a>
			<?php else: ?>
				<header class="page-heading">
					<p class="eyebrow">Katalog produk</p>
					<h1>Produk berhasil diproses</h1>
				</header>
				<dl class="product-details">
					<div><dt>Nama produk</dt><dd><?= escapeOutput($namaProduk) ?></dd></div>
					<div><dt>Harga</dt><dd>Rp<?= escapeOutput($harga) ?></dd></div>
					<div><dt>Deskripsi</dt><dd><?= nl2br(escapeOutput($deskripsi)) ?></dd></div>
					<div><dt>Kategori</dt><dd><?= escapeOutput($kategori) ?></dd></div>
					<div><dt>Stok</dt><dd><?= escapeOutput($stok) ?></dd></div>
					<div><dt>Gambar</dt><dd><?= escapeOutput(basename($gambar['name'])) ?></dd></div>
				</dl>
				<img class="product-preview" src="data:<?= escapeOutput($imageInfo['mime']) ?>;base64,<?= base64_encode(file_get_contents($gambar['tmp_name'])) ?>" alt="Gambar <?= escapeOutput($namaProduk) ?>">
				<p class="storage-note">Data hanya ditampilkan dan tidak disimpan ke database atau file.</p>
				<a class="text-link" href="product_input_form.php">Input produk lain</a>
			<?php endif; ?>
		</section>
	</main>
</body>
</html>
