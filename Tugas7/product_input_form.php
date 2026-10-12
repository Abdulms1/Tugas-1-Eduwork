<!DOCTYPE html>
<html lang="id">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Form Input Produk</title>
	<link rel="stylesheet" href="product_input.css">
</head>
<body>
	<main class="page-shell">
		<section class="form-panel">
			<header class="page-heading">
				<p class="eyebrow">Katalog produk</p>
				<h1>Form Input Produk</h1>
			</header>

			<form action="product_input_process.php" method="post" enctype="multipart/form-data">
				<div class="field-grid">
					<div class="field-group">
						<label for="nama_produk">Nama produk</label>
						<input type="text" id="nama_produk" name="nama_produk" required>
					</div>
					<div class="field-group">
						<label for="harga">Harga</label>
						<input type="number" id="harga" name="harga" min="0" step="1" required>
					</div>
					<div class="field-group field-full">
						<label for="deskripsi">Deskripsi</label>
						<textarea id="deskripsi" name="deskripsi" rows="4" required></textarea>
					</div>
					<div class="field-group">
						<label for="kategori">Kategori</label>
						<select id="kategori" name="kategori" required>
							<option value="" selected disabled>Pilih kategori</option>
							<option value="Elektronik">Elektronik</option>
							<option value="Pakaian">Pakaian</option>
							<option value="Makanan dan Minuman">Makanan dan Minuman</option>
							<option value="Lainnya">Lainnya</option>
						</select>
					</div>
					<div class="field-group">
						<label for="stok">Stok</label>
						<input type="number" id="stok" name="stok" min="0" step="1" required>
					</div>
					<div class="field-group field-full">
						<label for="gambar">Gambar produk</label>
						<input type="file" id="gambar" name="gambar" accept="image/*" required>
					</div>
				</div>
				<button class="submit-button" type="submit">Kirim produk</button>
			</form>
		</section>
	</main>
</body>
</html>
