<nav class="navbar navbar-expand-lg store-navbar" aria-label="Navigasi utama">
    <div class="container">
        <a class="navbar-brand store-brand" href="{{ url('/') }}">sora<span>.</span></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#storeNavigation" aria-controls="storeNavigation" aria-expanded="false" aria-label="Buka navigasi">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="storeNavigation">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item"><a class="nav-link" href="{{ url('/') }}">Beranda</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('/products') }}">Semua produk</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('/') }}#kategori">Kategori</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('/') }}#pilihan">Pilihan kami</a></li>
            </ul>
            <a class="store-cart" href="{{ url('/cart') }}" aria-label="Keranjang belanja">
                <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                    <path d="M3 4h2l2.2 11.1a2 2 0 0 0 2 1.6h8.6a2 2 0 0 0 1.9-1.4L22 8H6" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/>
                    <circle cx="10" cy="20" r="1" fill="currentColor"/><circle cx="18" cy="20" r="1" fill="currentColor"/>
                </svg>
                <span>Keranjang</span>
            </a>
        </div>
    </div>
</nav>
