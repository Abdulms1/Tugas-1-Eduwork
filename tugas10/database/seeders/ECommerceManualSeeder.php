<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ECommerceManualSeeder extends Seeder
{
    public function run(): void
    {
        // Data array statis untuk kategori beserta 10 produk di dalamnya
        $ecommerceData = [
            [
                'category' => 'Elektronik',
                'products' => [
                    ['name' => 'Smartphone Android 5G', 'price' => 3500000, 'stock' => 15, 'description' => 'Smartphone dengan layar AMOLED dan RAM 8GB.'],
                    ['name' => 'Laptop Core i5 Gen 12', 'price' => 8500000, 'stock' => 8, 'description' => 'Laptop kencang untuk kerja dan gaming ringan.'],
                    ['name' => 'Wireless Earbuds Bluetooth', 'price' => 250000, 'stock' => 30, 'description' => 'Earbuds nirkabel dengan suara bass jernih.'],
                    ['name' => 'Smartwatch Fitness Tracker', 'price' => 450000, 'stock' => 20, 'description' => 'Jam tangan pintar pemantau detak jantung dan olahraga.'],
                    ['name' => 'Power Bank 10000mAh', 'price' => 180000, 'stock' => 25, 'description' => 'Pengisi daya portabel cepat dan aman.'],
                    ['name' => 'Mechanical Keyboard RGB', 'price' => 550000, 'stock' => 12, 'description' => 'Keyboard gaming mekanikal dengan lampu latar RGB.'],
                    ['name' => 'Gaming Mouse Wireless', 'price' => 300000, 'stock' => 18, 'description' => 'Mouse gaming ergonomis tanpa kabel berkecepatan tinggi.'],
                    ['name' => 'External Hardisk 1TB', 'price' => 900000, 'stock' => 10, 'description' => 'Penyimpanan eksternal portabel berkapasitas besar.'],
                    ['name' => 'Speaker Bluetooth Portable', 'price' => 350000, 'stock' => 14, 'description' => 'Speaker mini tahan air untuk luar ruangan.'],
                    ['name' => 'Kabel Data Type-C Fast Charging', 'price' => 50000, 'stock' => 50, 'description' => 'Kabel pengisian daya cepat dilapisi nilon kuat.'],
                ],
            ],
            [
                'category' => 'Pakaian Pria',
                'products' => [
                    ['name' => 'Kemeja Flanel Casual', 'price' => 150000, 'stock' => 25, 'description' => 'Kemeja flanel bahan katun adem dan nyaman.'],
                    ['name' => 'Kaos Polos Cotton Combed 30s', 'price' => 65000, 'stock' => 40, 'description' => 'Kaos polos harian adem menyerap keringat.'],
                    ['name' => 'Celana Jeans Slim Fit', 'price' => 220000, 'stock' => 20, 'description' => 'Celana denim model slim fit modis.'],
                    ['name' => 'Jaket Hoodie Zipper', 'price' => 180000, 'stock' => 15, 'description' => 'Hoodie fleece tebal hangat dipakai malam hari.'],
                    ['name' => 'Celana Chino Panjang', 'price' => 190000, 'stock' => 18, 'description' => 'Celana panjang bahan chino formal dan casual.'],
                    ['name' => 'Blazer Pria Formal', 'price' => 450000, 'stock' => 7, 'description' => 'Jas blazer modern untuk acara resmi atau kerja.'],
                    ['name' => 'Kaos Polo Shirt', 'price' => 95000, 'stock' => 22, 'description' => 'Kaos kerah keren bahan Lacoste premium.'],
                    ['name' => 'Celana Pendek Santai', 'price' => 75000, 'stock' => 30, 'description' => 'Celana pendek nyaman untuk santai di rumah.'],
                    ['name' => 'Jaket Bomber', 'price' => 275000, 'stock' => 10, 'description' => 'Jaket bomber trendi anti angin.'],
                    ['name' => 'Sweater Rajut Pria', 'price' => 160000, 'stock' => 12, 'description' => 'Sweater hangat rajutan halus.'],
                ],
            ],
            [
                'category' => 'Pakaian Wanita',
                'products' => [
                    ['name' => 'Gamis Syari Modern', 'price' => 250000, 'stock' => 20, 'description' => 'Gamis elegan bahan wollyverse premium.'],
                    ['name' => 'Blouse Kerja Wanita', 'price' => 130000, 'stock' => 25, 'description' => 'Atasan kantor rapi bahan sifon halus.'],
                    ['name' => 'Rok Pleated Midi', 'price' => 145000, 'stock' => 15, 'description' => 'Rok lipit model payung anggun.'],
                    ['name' => 'Cardigan Rajut Oversize', 'price' => 120000, 'stock' => 18, 'description' => 'Outer rajut tebal model kekinian.'],
                    ['name' => 'Celana Culotte Panjang', 'price' => 135000, 'stock' => 22, 'description' => 'Celana kulot longgar nyaman dipakai.'],
                    ['name' => 'Dress Pesta Malam', 'price' => 350000, 'stock' => 8, 'description' => 'Gaun pesta elegan berhias payet.'],
                    ['name' => 'Hijab Pashmina Ceruty', 'price' => 45000, 'stock' => 50, 'description' => 'Pashmina jatuh dan mudah dibentuk.'],
                    ['name' => 'Tunika Casual Panjang', 'price' => 155000, 'stock' => 16, 'description' => 'Atasan tunik panjang motif menarik.'],
                    ['name' => 'Jaket Denim Wanita', 'price' => 230000, 'stock' => 10, 'description' => 'Jaket jeans klasik pas badan.'],
                    ['name' => 'Setelan Sleepwear Pajamas', 'price' => 110000, 'stock' => 30, 'description' => 'Piyama tidur adem motif lucu.'],
                ],
            ],
            [
                'category' => 'Peralatan Rumah Tangga',
                'products' => [
                    ['name' => 'Blender Juicer Multifungsi', 'price' => 320000, 'stock' => 12, 'description' => 'Blender penghancur es dan pembuat jus praktis.'],
                    ['name' => 'Rice Cooker Digital 2 Liter', 'price' => 450000, 'stock' => 10, 'description' => 'Penanak nasi otomatis dengan fungsi multi-menu.'],
                    ['name' => 'Set Panci Stainless Steel', 'price' => 380000, 'stock' => 8, 'description' => 'Panci set anti lengket isi 5 pcs.'],
                    ['name' => 'Dispenser Air Galon Bawah', 'price' => 650000, 'stock' => 6, 'description' => 'Dispenser air panas dan dingin praktis.'],
                    ['name' => 'Setrika Uap Listrik', 'price' => 210000, 'stock' => 15, 'description' => 'Setrika uap cepat licin anti lengket.'],
                    ['name' => 'Vacuum Cleaner Portable', 'price' => 290000, 'stock' => 14, 'description' => 'Penyedot debu mini tanpa kabel kuat.'],
                    ['name' => 'Kipas Angin Berdiri', 'price' => 260000, 'stock' => 18, 'description' => 'Kipas angin lantai hembusan angin kencang.'],
                    ['name' => 'Air Fryer Low Watt', 'price' => 580000, 'stock' => 9, 'description' => 'Goreng tanpa minyak lebih sehat.'],
                    ['name' => 'Blender Bumbu Dapur Mini', 'price' => 95000, 'stock' => 25, 'description' => 'Pencincang bawang dan daging elektrik.'],
                    ['name' => 'Rak Piring Plastik Tutup', 'price' => 115000, 'stock' => 20, 'description' => 'Tempat simpan piring higienis bebas debu.'],
                ],
            ],
            [
                'category' => 'Kecantikan & Perawatan',
                'products' => [
                    ['name' => 'Serum Wajah Vitamin C', 'price' => 125000, 'stock' => 30, 'description' => 'Mencerahkan dan menyamarkan noda hitam.'],
                    ['name' => 'Sunscreen SPF 50 PA++++', 'price' => 95000, 'stock' => 40, 'description' => 'Tabir surya ringan tanpa white cast.'],
                    ['name' => 'Moisturizer Barrier Gel', 'price' => 110000, 'stock' => 25, 'description' => 'Pelembap wajah memperkuat skin barrier.'],
                    ['name' => 'Facial Wash Gentle Cleanser', 'price' => 75000, 'stock' => 35, 'description' => 'Pembersih muka pH seimbang untuk kulit sensitif.'],
                    ['name' => 'Sheet Mask Korea Pack', 'price' => 15000, 'stock' => 100, 'description' => 'Masker lembar hidrasi instan.'],
                    ['name' => 'Lip Matte Cream Tahan Lama', 'price' => 85000, 'stock' => 28, 'description' => 'Pewarna bibir ringan hasil akhir matte.'],
                    ['name' => 'Hair Tonic Penumbuh Rambut', 'price' => 90000, 'stock' => 20, 'description' => 'Mengurangi rontok dan menyuburkan rambut.'],
                    ['name' => 'Body Lotion Whitening', 'price' => 65000, 'stock' => 32, 'description' => 'Losion tubuh wangi tahan lama melembapkan.'],
                    ['name' => 'Micellar Water Pembersih Makeup', 'price' => 55000, 'stock' => 30, 'description' => 'Pembersih sisa makeup bersih tanpa dibilas.'],
                    ['name' => 'Exfoliating Gel Scrub', 'price' => 70000, 'stock' => 22, 'description' => 'Pembersih sel kulit mati secara lembut.'],
                ],
            ],
        ];

        // Looping untuk memasukkan data ke database
        foreach ($ecommerceData as $item) {
            // 1. Buat Kategori
            $category = ProductCategory::create([
                'name' => $item['category'],
                'slug' => Str::slug($item['category']),
            ]);

            // 2. Buat Produk di dalam Kategori tersebut
            foreach ($item['products'] as $prod) {
                Product::create([
                    'product_categories_id' => $category->id,
                    'name' => $prod['name'],
                    'slug' => Str::slug($prod['name']),
                    'description' => $prod['description'],
                    'price' => $prod['price'],
                    'stock' => $prod['stock'],
                    'image' => 'default.jpg',
                ]);
            }
        }
    }
}
