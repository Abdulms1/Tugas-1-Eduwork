        // Data 50 Produk
        const products = [
            { id: 1, name: "Smartphone X10 Pro", category: "Elektronik", price: 3500000, image: "https://images.unsplash.com/photo-1511707171634-5f897ff02aa9?auto=format&fit=crop&w=500&q=80", description: "Ponsel pintar dengan kamera 108MP dan baterai tahan lama." },
            { id: 2, name: "Laptop UltraBook Slim", category: "Elektronik", price: 8500000, image: "https://images.unsplash.com/photo-1496181133206-80ce9b88a853?auto=format&fit=crop&w=500&q=80", description: "Laptop ringan berkinerja tinggi untuk kerja & gaming kasual." },
            { id: 3, name: "Kemeja Flanel Casual", category: "Pakaian", price: 150000, image: "https://images.unsplash.com/photo-1596755094514-f87e34085b2c?auto=format&fit=crop&w=500&q=80", description: "Kemeja flanel bahan katun adem dan nyaman dipakai." },
            { id: 4, name: "Sepatu Sneakers Sporty", category: "Sepatu", price: 450000, image: "https://images.unsplash.com/photo-1542291026-7eec264c27ff?auto=format&fit=crop&w=500&q=80", description: "Sepatu lari ringan dengan sol empuk anti selip." },
            { id: 5, name: "Jam Tangan Kulit Klasik", category: "Aksesoris", price: 275000, image: "https://images.unsplash.com/photo-1523275335684-37898b6baf30?auto=format&fit=crop&w=500&q=80", description: "Jam tangan elegan dengan tali kulit asli berkualitas tinggi." },
            { id: 6, name: "Bola Sepak Profesional", category: "Olahraga", price: 180000, image: "https://images.unsplash.com/photo-1614632537456-7468770f7dab?auto=format&fit=crop&w=500&q=80", description: "Bola standar FIFA untuk latihan dan pertandingan resmi." },
            { id: 7, name: "Headphone Bluetooth ANC", category: "Elektronik", price: 650000, image: "https://images.unsplash.com/photo-1505740420928-5e560c06d30e?auto=format&fit=crop&w=500&q=80", description: "Peredam bising aktif dengan kualitas audio jernih dan bass dalam." },
            { id: 8, name: "Kaos Polos Cotton Combed", category: "Pakaian", price: 75000, image: "https://images.unsplash.com/photo-1521572267360-ee0c2909d518?auto=format&fit=crop&w=500&q=80", description: "Kaos polos nyaman 100% katun adem menyerap keringat." },
            { id: 9, name: "Sepatu Pantofel Formal", category: "Sepatu", price: 380000, image: "https://images.unsplash.com/photo-1614252235316-8c857d38b5f4?auto=format&fit=crop&w=500&q=80", description: "Sepatu kulit formal kerja kantoran tampil profesional." },
            { id: 10, name: "Kacamata Hitam Polarized", category: "Aksesoris", price: 120000, image: "https://images.unsplash.com/photo-1572635196237-14b3f281503f?auto=format&fit=crop&w=500&q=80", description: "Melindungi mata dari sinar UV dengan lensa anti silau." },
            { id: 11, name: "Matras Yoga Anti Slip", category: "Olahraga", price: 135000, image: "https://images.unsplash.com/photo-1601925260368-ae2f83cf8b7f?auto=format&fit=crop&w=500&q=80", description: "Matras empuk ketebalan 8mm untuk yoga dan senam lantai." },
            { id: 12, name: "Power Bank 20000mAh", category: "Elektronik", price: 250000, image: "https://images.unsplash.com/photo-1609592424104-97d4c42e174d?auto=format&fit=crop&w=500&q=80", description: "Pengisi daya portabel cepat dengan dual port USB." },
            { id: 13, name: "Jaket Hoodie Fleece", category: "Pakaian", price: 220000, image: "https://images.unsplash.com/photo-1556905055-8f358a7a47b2?auto=format&fit=crop&w=500&q=80", description: "Hoodie hangat bahan fleece tebal cocok untuk musim dingin." },
            { id: 14, name: "Sepatu Slip-On Santai", category: "Sepatu", price: 210000, image: "https://images.unsplash.com/photo-1525966222134-fcfa99b8ae77?auto=format&fit=crop&w=500&q=80", description: "Praktis dipakai sehari-hari tanpa tali." },
            { id: 15, name: "Dompet Kulit Asli", category: "Aksesoris", price: 150000, image: "https://images.unsplash.com/photo-1627123424574-724758594e93?auto=format&fit=crop&w=500&q=80", description: "Dompet lipat pria banyak slot kartu awet bertahun-tahun." },
            { id: 16, name: "Raket Badminton Karbon", category: "Olahraga", price: 320000, image: "https://images.unsplash.com/photo-1626224583764-f87db24ac4ea?auto=format&fit=crop&w=500&q=80", description: "Raket ringan kuat untuk smash keras dan akurat." },
            { id: 17, name: "Smartwatch Fitness Tracker", category: "Elektronik", price: 450000, image: "https://images.unsplash.com/photo-1508685096489-7aacd43bd3b1?auto=format&fit=crop&w=500&q=80", description: "Monitor detak jantung, tidur, dan langkah harian Anda." },
            { id: 18, name: "Celana Chinos Panjang", category: "Pakaian", price: 190000, image: "https://images.unsplash.com/photo-1624378439575-d8705ad7ae80?auto=format&fit=crop&w=500&q=80", description: "Celana panjang kasual bahan katun twill stretch." },
            { id: 19, name: "Sandal Gunung Outdoor", category: "Sepatu", price: 175000, image: "https://images.unsplash.com/photo-1603808033192-082d6939d3e1?auto=format&fit=crop&w=500&q=80", description: "Sandal tangguh untuk aktivitas alam bebas dan mendaki." },
            { id: 20, name: "Topi Baseball Casual", category: "Aksesoris", price: 65000, image: "https://images.unsplash.com/photo-1588850561407-ed78c282e89b?auto=format&fit=crop&w=500&q=80", description: "Topi trendi melindungi kepala dari terik matahari." },
            { id: 21, name: "Dumbbell Adjustable 10kg", category: "Olahraga", price: 350000, image: "https://images.unsplash.com/photo-1584735935682-2f2b69dff9d2?auto=format&fit=crop&w=500&q=80", description: "Beban besi praktis untuk latihan otot tangan di rumah." },
            { id: 22, name: "Mouse Gaming RGB", category: "Elektronik", price: 195000, image: "https://images.unsplash.com/photo-1615663245857-ac93bb7c39e7?auto=format&fit=crop&w=500&q=80", description: "Mouse ergonomis beresolusi tinggi dengan lampu LED warna-warni." },
            { id: 23, name: "Jaket Bomber Pria", category: "Pakaian", price: 290000, image: "https://images.unsplash.com/photo-1544441893-675973e31985?auto=format&fit=crop&w=500&q=80", description: "Jaket bomber anti angin keren bergaya pilot." },
            { id: 24, name: "Sepatu Loafers Kulit", category: "Sepatu", price: 340000, image: "https://images.unsplash.com/photo-1533867617858-e7d9790f105b?auto=format&fit=crop&w=500&q=80", description: "Sepatu slip-on formal semi-casual elegan." },
            { id: 25, name: "Tas Ransel Laptop 15 inch", category: "Aksesoris", price: 260000, image: "https://images.unsplash.com/photo-1553062407-98eeb64c6a62?auto=format&fit=crop&w=500&q=80", description: "Tas ransel kuat anti air lengkap slot laptop aman." },
            { id: 26, name: "Skipping Rope Speed", category: "Olahraga", price: 55000, image: "https://images.unsplash.com/photo-1517838277536-f5f99be501cd?auto=format&fit=crop&w=500&q=80", description: "Tali lompat kecepatan tinggi untuk latihan kardio efektif." },
            { id: 27, name: "Keyboard Mechanical RGB", category: "Elektronik", price: 550000, image: "https://images.unsplash.com/photo-1587829741301-dc798b83add3?auto=format&fit=crop&w=500&q=80", description: "Keyboard mekanis responsif suara klik empuk memuaskan." },
            { id: 28, name: "Celana Pendek Chinos", category: "Pakaian", price: 110000, image: "https://images.unsplash.com/photo-1591195853828-11db59a44f6b?auto=format&fit=crop&w=500&q=80", description: "Celana pendek santai santai cocok untuk jalan-jalan sore." },
            { id: 29, name: "Sepatu Futsal Indoor", category: "Sepatu", price: 280000, image: "https://images.unsplash.com/photo-1511556532299-8f662fc26c06?auto=format&fit=crop&w=500&q=80", description: "Sol karet kesat mencengkeram lantai lapangan indoor." },
            { id: 30, name: "Ikat Pinggang Kulit Pria", category: "Aksesoris", price: 95000, image: "https://images.unsplash.com/photo-1624378439575-d8705ad7ae80?auto=format&fit=crop&w=500&q=80", description: "Gesper kepala besi kokoh dengan tali kulit kuat." },
            { id: 31, name: "Resistance Band Set", category: "Olahraga", price: 125000, image: "https://images.unsplash.com/photo-1598289431512-b97b09177c42?auto=format&fit=crop&w=500&q=80", description: "Karet resistensi berbagai tingkat beban untuk fitness di rumah." },
            { id: 32, name: "Webcam HD 1080p", category: "Elektronik", price: 310000, image: "https://images.unsplash.com/photo-1587829741301-dc798b83add3?auto=format&fit=crop&w=500&q=80", description: "Kamera web jernih dilengkapi mikrofon peredam bising untuk meeting online." },
            { id: 33, name: "Sweater Rajut Turtleneck", category: "Pakaian", price: 230000, image: "https://images.unsplash.com/photo-1620799140408-edc6dcb6d633?auto=format&fit=crop&w=500&q=80", description: "Sweater hangat rajutan halus gaya korea modis." },
            { id: 34, name: "Sepatu Basket High Top", category: "Sepatu", price: 600000, image: "https://images.unsplash.com/photo-1579338559194-a162d19bf842?auto=format&fit=crop&w=500&q=80", description: "Melindungi pergelangan kaki saat melakukan lompatan tinggi." },
            { id: 35, name: "Tas Selempang Sling Bag", category: "Aksesoris", price: 140000, image: "https://images.unsplash.com/photo-1548036328-c9fa89d128fa?auto=format&fit=crop&w=500&q=80", description: "Tas dada praktis muat dompet, hp, dan kunci kendaraan." },
            { id: 36, name: "Botol Minum Olahraga 1L", category: "Olahraga", price: 85000, image: "https://images.unsplash.com/photo-1602143407151-7111542de6e8?auto=format&fit=crop&w=500&q=80", description: "Botol air bebas BPA tahan banting penanda waktu minum." },
            { id: 37, name: "TWS Earbuds Wireless", category: "Elektronik", price: 290000, image: "https://images.unsplash.com/photo-1590658268037-6bf12165a8df?auto=format&fit=crop&w=500&q=80", description: "Earphone nirkabel true stereo dengan charging case ringkas." },
            { id: 38, name: "Blazer Formal Pria", category: "Pakaian", price: 480000, image: "https://images.unsplash.com/photo-1507679799987-c73779587ccf?auto=format&fit=crop&w=500&q=80", description: "Jas blazer modern untuk acara pesta dan formal." },
            { id: 39, name: "Sepatu Sandal Kulit", category: "Sepatu", price: 195000, image: "https://images.unsplash.com/photo-1560769629-975ec94e6a86?auto=format&fit=crop&w=500&q=80", description: "Sandal kulit kasual nyaman untuk jalan santai." },
            { id: 40, name: "Dompet Kartu RFID Blocking", category: "Aksesoris", price: 80000, image: "https://images.unsplash.com/photo-1565557623262-b51c2513a641?auto=format&fit=crop&w=500&q=80", description: "Melindungi kartu kredit dari pembobolan nirkabel." },
            { id: 41, name: "Foam Roller Fitness", category: "Olahraga", price: 145000, image: "https://images.unsplash.com/photo-1518611012118-696072aa579a?auto=format&fit=crop&w=500&q=80", description: "Alat pijat relaksasi otot setelah berolahraga berat." },
            { id: 42, name: "LED Strip Light RGB 5m", category: "Elektronik", price: 110000, image: "https://images.unsplash.com/photo-1550745165-9bc0b252726f?auto=format&fit=crop&w=500&q=80", description: "Lampu LED dekorasi kamar kontrol warna via remote." },
            { id: 43, name: "Jaket Parka Outdoor", category: "Pakaian", price: 340000, image: "https://images.unsplash.com/photo-1548883354-7622d03aca27?auto=format&fit=crop&w=500&q=80", description: "Parka tebal anti air penahan angin gunung." },
            { id: 44, name: "Sepatu Running Profesional", category: "Sepatu", price: 750000, image: "https://images.unsplash.com/photo-1584735935682-2f2b69dff9d2?auto=format&fit=crop&w=500&q=80", description: "Teknologi sol responsif mengurangi benturan lutut." },
            { id: 45, name: "Gelang Kesehatan Logam", category: "Aksesoris", price: 110000, image: "https://images.unsplash.com/photo-1611591483321-14c1d683794b?auto=format&fit=crop&w=500&q=80", description: "Aksesoris gaya kasual maskulin." },
            { id: 46, name: "Sarung Tangan Fitness Gym", category: "Olahraga", price: 65000, image: "https://images.unsplash.com/photo-1583454110551-21f2fa2afe61?auto=format&fit=crop&w=500&q=80", description: "Melindungi telapak tangan dari lecet saat angkat beban." },
            { id: 47, name: "Flashdisk 64GB USB 3.0", category: "Elektronik", price: 95000, image: "https://images.unsplash.com/photo-1588834791167-2d1847e06a77?auto=format&fit=crop&w=500&q=80", description: "Penyimpanan data cepat transfer file ukuran besar." },
            { id: 48, name: "Kaos Polo Katun", category: "Pakaian", price: 130000, image: "https://images.unsplash.com/photo-1625910513418-7c47fb5aa92c?auto=format&fit=crop&w=500&q=80", description: "Kaos berkerah rapi untuk gaya semi formal santai." },
            { id: 49, name: "Sepatu Skate Sneakers", category: "Sepatu", price: 310000, image: "https://images.unsplash.com/photo-1525966222134-fcfa99b8ae77?auto=format&fit=crop&w=500&q=80", description: "Desain tapak flat tahan aus khas pemain skateboard." },
            { id: 50, name: "Tas Pinggang Waist Bag", category: "Aksesoris", price: 90000, image: "https://images.unsplash.com/photo-1622560480605-d83c853bc5c3?auto=format&fit=crop&w=500&q=80", description: "Praktis dikenakan di pinggang atau selempang dada." }
        ];

        let cart = [];

        // Format ke Rupiah
        function formatRupiah(number) {
            return new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR', minimumFractionDigits: 0 }).format(number);
        }

        // Render Produk ke DOM
        function renderProducts(listToRender) {
            const container = document.getElementById('productContainer');
            const emptyState = document.getElementById('emptyState');
            const countText = document.getElementById('productCountText');

            container.innerHTML = '';
            countText.innerText = `Menampilkan ${listToRender.length} produk`;

            if (listToRender.length === 0) {
                emptyState.classList.remove('d-none');
                return;
            } else {
                emptyState.classList.add('d-none');
            }

            listToRender.forEach(product => {
                const col = document.createElement('div');
                col.className = 'col';
                col.innerHTML = `
                    <div class="card product-card h-100 shadow-sm border-0">
                        <div class="product-img-wrapper">
                            <img src="${product.image}" alt="${product.name}" loading="lazy" onerror="this.src='https://placehold.co/500x300/e9ecef/6c757d?text=No+Image'">
                        </div>
                        <div class="card-body d-flex flex-column">
                            <div class="mb-2">
                                <span class="badge bg-secondary bg-opacity-10 text-secondary badge-category">${product.category}</span>
                            </div>
                            <h5 class="card-title fs-6 fw-bold text-dark mb-1">${product.name}</h5>
                            <p class="card-text text-muted small flex-grow-1 mb-3">${product.description}</p>
                            <div class="d-flex align-items-center justify-content-between mt-auto">
                                <span class="text-primary fw-bold">${formatRupiah(product.price)}</span>
                                <button class="btn btn-sm btn-primary" onclick="addToCart(${product.id})">
                                    <i class="fas fa-cart-plus me-1"></i> Beli
                                </button>
                            </div>
                        </div>
                    </div>
                `;
                container.appendChild(col);
            });
        }

        // Filter dan Search serta Sorting Logic
        function filterAndSortProducts() {
            const searchTerm = document.getElementById('searchInput').value.toLowerCase();
            const selectedCategory = document.getElementById('categorySelect').value;
            const sortOption = document.getElementById('sortSelect').value;

            // Filter by Search & Category
            let filtered = products.filter(product => {
                const matchesSearch = product.name.toLowerCase().includes(searchTerm) || product.description.toLowerCase().includes(searchTerm);
                const matchesCategory = selectedCategory === 'all' || product.category === selectedCategory;
                return matchesSearch && matchesCategory;
            });

            // Sorting
            if (sortOption === 'az') {
                filtered.sort((a, b) => a.name.localeCompare(b.name));
            } else if (sortOption === 'za') {
                filtered.sort((a, b) => b.name.localeCompare(a.name));
            } else if (sortOption === 'price-low') {
                filtered.sort((a, b) => a.price - b.price);
            } else if (sortOption === 'price-high') {
                filtered.sort((a, b) => b.price - a.price);
            }

            renderProducts(filtered);
        }

        // Tambah ke Keranjang
        function addToCart(productId) {
            const product = products.find(p => p.id === productId);
            const existingItem = cart.find(item => item.id === productId);

            if (existingItem) {
                existingItem.qty += 1;
            } else {
                cart.push({ ...product, qty: 1 });
            }

            updateCartUI();
            
            // Show toast/notification effect or badge bump
            const cartBadge = document.getElementById('cartCount');
            cartBadge.classList.add('bg-success');
            setTimeout(() => cartBadge.classList.remove('bg-success'), 500);
        }

        // Ubah jumlah item keranjang
        function changeQty(productId, delta) {
            const item = cart.find(i => i.id === productId);
            if (item) {
                item.qty += delta;
                if (item.qty <= 0) {
                    cart = cart.filter(i => i.id !== productId);
                }
            }
            updateCartUI();
        }

        // Update UI Keranjang
        function updateCartUI() {
            const cartCount = document.getElementById('cartCount');
            const cartItemsList = document.getElementById('cartItemsList');
            const cartTotalPrice = document.getElementById('cartTotalPrice');

            const totalItems = cart.reduce((sum, item) => sum + item.qty, 0);
            cartCount.innerText = totalItems;

            if (cart.length === 0) {
                cartItemsList.innerHTML = `<p class="text-center text-muted py-4 mb-0">Keranjang belanja Anda masih kosong.</p>`;
                cartTotalPrice.innerText = formatRupiah(0);
                return;
            }

            let html = '';
            let totalPrice = 0;

            cart.forEach(item => {
                const subtotal = item.price * item.qty;
                totalPrice += subtotal;
                html += `
                    <div class="list-group-item d-flex justify-content-between align-items-center">
                        <div class="me-3">
                            <h6 class="mb-1 fw-bold">${item.name}</h6>
                            <small class="text-muted">${formatRupiah(item.price)} x ${item.qty}</small>
                        </div>
                        <div class="d-flex align-items-center">
                            <span class="fw-bold text-primary me-3">${formatRupiah(subtotal)}</span>
                            <div class="btn-group btn-group-sm" role="group">
                                <button class="btn btn-outline-secondary" onclick="changeQty(${item.id}, -1)">-</button>
                                <button class="btn btn-outline-secondary disabled text-dark fw-bold px-2">${item.qty}</button>
                                <button class="btn btn-outline-secondary" onclick="changeQty(${item.id}, 1)">+</button>
                            </div>
                        </div>
                    </div>
                `;
            });

            cartItemsList.innerHTML = html;
            cartTotalPrice.innerText = formatRupiah(totalPrice);
        }

        // Checkout Simulasi
        function checkout() {
            if (cart.length === 0) {
                return;
            }
            const modalElement = document.getElementById('cartModal');
            const modalInstance = bootstrap.Modal.getInstance(modalElement);
            modalInstance.hide();
            
            alert("Terima kasih! Pesanan Anda berhasil diproses.");
            cart = [];
            updateCartUI();
        }

        // Event Listeners
        document.getElementById('searchInput').addEventListener('input', filterAndSortProducts);
        document.getElementById('categorySelect').addEventListener('change', filterAndSortProducts);
        document.getElementById('sortSelect').addEventListener('change', filterAndSortProducts);

        // Initial render on load
        window.onload = function() {
            renderProducts(products);
        };