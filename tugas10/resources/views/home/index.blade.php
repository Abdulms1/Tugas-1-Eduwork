@extends('template.layout')

@section('title', 'Sora — Temukan Favoritmu')

@section('content')
<main class="store-home">
    <section class="hero container">
        <div class="hero-copy">
            <span class="eyebrow"><span class="eyebrow-dot"></span> Pilihan kecil, cerita besar</span>
            <h1>Temukan hal yang bikin harimu <em>lebih berarti.</em></h1>
            <p>Kurasi produk unik dari brand lokal pilihan, dibuat dengan perhatian untuk menemani keseharianmu.</p>
            <div class="hero-actions">
                <a class="button button-dark" href="{{ url('/products') }}">Jelajahi koleksi <span aria-hidden="true">→</span></a>
                <a class="text-link" href="#kategori">Lihat kategori</a>
            </div>
            <div class="hero-note">
                <div class="avatar-stack" aria-hidden="true">
                    <span>R</span><span>A</span><span>N</span>
                </div>
                <p><strong>2.000+</strong> pelanggan menemukan favoritnya</p>
            </div>
        </div>
        <div class="hero-visual">
            <img src="https://images.unsplash.com/photo-1490481651871-ab68de25d43d?auto=format&amp;fit=crop&amp;w=1100&amp;q=85" alt="Pilihan fashion dan aksesori bernuansa hangat">
            <div class="hero-sticker"><span>Curated<br>with care</span><span aria-hidden="true">✳</span></div>
            <div class="hero-caption"><span>Koleksi pilihan</span><strong>Everyday essentials</strong></div>
        </div>
    </section>

    <section class="benefits" aria-label="Keunggulan belanja di Sora">
        <div class="container benefits-row">
            <div><span class="benefit-icon" aria-hidden="true">✳</span><span><strong>Kurasi penuh arti</strong><small>Produk pilihan, bukan sekadar banyak</small></span></div>
            <div><span class="benefit-icon" aria-hidden="true">↗</span><span><strong>Dukung brand lokal</strong><small>Karya baik dari kreator Indonesia</small></span></div>
            <div><span class="benefit-icon" aria-hidden="true">♡</span><span><strong>Belanja dengan tenang</strong><small>Pilihan praktis untuk setiap harimu</small></span></div>
        </div>
    </section>

    <section class="container category-section" id="kategori">
        <div class="section-heading">
            <div>
                <span class="section-kicker">Mulai dari sini</span>
                <h2>Jelajahi kategori</h2>
            </div>
            <a class="text-link" href="{{ url('/products') }}">Semua koleksi <span aria-hidden="true">→</span></a>
        </div>
        @php
            $categoryImages = [
                'https://images.unsplash.com/photo-1483985988355-763728e1935b?auto=format&fit=crop&w=800&q=80',
                'https://images.unsplash.com/photo-1616486338812-3dadae4b4ace?auto=format&fit=crop&w=800&q=80',
                'https://images.unsplash.com/photo-1535632066927-ab7c9ab60908?auto=format&fit=crop&w=800&q=80',
                'https://images.unsplash.com/photo-1608248543803-ba4f8c70ae0b?auto=format&fit=crop&w=800&q=80',
            ];
        @endphp
        <div class="category-grid">
            @forelse ($categories as $category)
                <a class="category-card" href="{{ url('/products?category=' . urlencode($category->slug)) }}">
                    <img src="{{ $categoryImages[$loop->index % count($categoryImages)] }}" alt="">
                    <span class="category-label">
                        <strong>{{ $category->name }}</strong>
                        <small>{{ $category->description ?: 'Jelajahi produk kategori ini' }}</small>
                    </span>
                    <span class="category-arrow" aria-hidden="true">↗</span>
                </a>
            @empty
                <p>Belum ada kategori tersedia.</p>
            @endforelse
        </div>
    </section>

    <section class="container products-section" id="pilihan">
        <div class="section-heading">
            <div>
                <span class="section-kicker">Pilihan dari katalog kami</span>
                <h2>Teman baru favoritmu</h2>
            </div>
            <a class="text-link" href="{{ url('/products') }}">Lihat semua produk <span aria-hidden="true">→</span></a>
        </div>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-4 g-4">
            @foreach ($products as $product)
                <x-product-card
                    :image="asset('images/products/' . $product->image)"
                    :name="$product->name"
                    :description="$product->description"
                    :price="$product->price"
                    :category="$product->product_category->name"
                    :stock="$product->stock"
                    :link="route('products.show', $product->slug)"
                />
            @endforeach
        </div>
        @if ($products->isEmpty())
            <p>Belum ada produk tersedia.</p>
        @endif
        <div class="mt-4">
            {{ $products->links('pagination::bootstrap-5') }}
        </div>
    </section>

    <section class="container promo-section">
        <div class="promo-copy">
            <span class="section-kicker">Sedikit apresiasi untukmu</span>
            <h2>Temukan yang kamu suka.<br><em>Nikmati 15% untuk pesanan pertama.</em></h2>
            <p>Mulai perjalanan belanjamu bersama Sora dan temukan produk yang terasa pas.</p>
            <a class="button button-light" href="{{ url('/products') }}">Mulai menjelajah <span aria-hidden="true">→</span></a>
        </div>
        <div class="promo-image" role="img" aria-label="Koleksi produk lokal pilihan"></div>
        <span class="promo-mark" aria-hidden="true">s.</span>
    </section>
</main>
@endsection

@push('styles')
<style>
    :root {
        --sora-ink: #20291f;
        --sora-muted: #777d72;
        --sora-cream: #f7f6f0;
        --sora-green: #315a46;
        --sora-line: #e8e8df;
    }

    .store-navbar { min-height: 76px; border-bottom: 1px solid #eeeee7; background: #fff; }
    .store-navbar .container { max-width: 1220px; }
    .store-navbar .store-brand { color: #20291f; font-family: Georgia, "Times New Roman", serif; font-size: 30px; letter-spacing: -.08em; }
    .store-brand span { color: #bd805d; }
    .store-navbar .navbar-nav { gap: 29px; }
    .store-navbar .nav-link { padding-right: 0; padding-left: 0; color: #656b61; font-size: 12px; }
    .store-navbar .nav-link:hover, .store-navbar .nav-link:focus { color: #315a46; }
    .store-cart { display: inline-flex; align-items: center; gap: 8px; color: #20291f; font-size: 12px; text-decoration: none; }
    .store-cart:hover { color: #315a46; }
    .store-cart svg { width: 19px; height: 19px; }
    .store-home { color: var(--sora-ink); overflow: hidden; }
    .store-home .container { max-width: 1220px; }
    .hero { display: grid; grid-template-columns: 1fr 0.9fr; gap: 7%; align-items: center; padding-top: 68px; padding-bottom: 76px; }
    .hero-copy { padding: 18px 0 0 3%; }
    .eyebrow, .section-kicker { color: var(--sora-green); font-size: 11px; font-weight: 700; letter-spacing: .14em; text-transform: uppercase; }
    .eyebrow { display: inline-flex; align-items: center; gap: 9px; }
    .eyebrow-dot { width: 7px; height: 7px; background: #d78c59; border-radius: 50%; }
    .hero h1 { max-width: 590px; margin: 22px 0 18px; font-family: Georgia, "Times New Roman", serif; font-size: clamp(42px, 5.4vw, 70px); font-weight: 400; letter-spacing: -.055em; line-height: 1.06; }
    .hero h1 em, .promo-copy h2 em { color: var(--sora-green); font-weight: 400; }
    .hero-copy > p, .promo-copy > p { max-width: 430px; color: var(--sora-muted); font-size: 15px; line-height: 1.8; }
    .hero-actions { display: flex; align-items: center; gap: 26px; margin-top: 28px; }
    .button { display: inline-flex; align-items: center; justify-content: center; gap: 20px; min-height: 50px; padding: 0 23px; border-radius: 4px; font-size: 13px; font-weight: 600; text-decoration: none; transition: transform .2s, background .2s; }
    .button:hover { transform: translateY(-2px); }
    .button-dark { color: #fff; background: var(--sora-ink); }
    .button-dark:hover { color: #fff; background: var(--sora-green); }
    .button-light { color: var(--sora-ink); background: #fff; }
    .button-light:hover { color: var(--sora-green); }
    .text-link { color: var(--sora-ink); font-size: 13px; font-weight: 600; text-decoration: none; }
    .text-link:hover { color: var(--sora-green); }
    .hero-note { display: flex; align-items: center; gap: 13px; margin-top: 40px; }
    .avatar-stack { display: flex; padding-left: 4px; }
    .avatar-stack span { display: grid; width: 29px; height: 29px; margin-left: -4px; place-items: center; border: 2px solid #fff; border-radius: 50%; color: #fff; background: #8d9f82; font-family: Georgia, serif; font-size: 11px; }
    .avatar-stack span:nth-child(2) { background: #c78867; }
    .avatar-stack span:nth-child(3) { background: #5b7766; }
    .hero-note p { margin: 0; color: var(--sora-muted); font-size: 11px; }
    .hero-note strong { color: var(--sora-ink); }
    .hero-visual { position: relative; min-height: 470px; }
    .hero-visual > img { width: 100%; height: 470px; object-fit: cover; object-position: center; border-radius: 48% 48% 5px 5px; }
    .hero-sticker { position: absolute; top: 34px; left: -29px; display: flex; width: 88px; height: 88px; flex-direction: column; align-items: center; justify-content: center; border-radius: 50%; color: #fff; background: #c88763; font-family: Georgia, serif; font-size: 12px; line-height: 1.25; text-align: center; transform: rotate(-9deg); }
    .hero-sticker span:last-child { margin-top: 3px; font-size: 16px; }
    .hero-caption { position: absolute; right: 17px; bottom: 17px; display: flex; min-width: 200px; flex-direction: column; padding: 14px 18px; border-radius: 3px; background: rgba(255,255,255,.92); }
    .hero-caption span { color: var(--sora-muted); font-size: 10px; }
    .hero-caption strong { margin-top: 3px; font-family: Georgia, serif; font-size: 16px; font-weight: 400; }
    .benefits { border-top: 1px solid var(--sora-line); border-bottom: 1px solid var(--sora-line); background: #fbfbf8; }
    .benefits-row { display: grid; grid-template-columns: repeat(3, 1fr); padding-top: 21px; padding-bottom: 21px; }
    .benefits-row > div { display: flex; align-items: center; justify-content: center; gap: 12px; }
    .benefit-icon { display: grid; width: 36px; height: 36px; place-items: center; border: 1px solid #dfe5dc; border-radius: 50%; color: var(--sora-green); font-size: 17px; }
    .benefits-row strong, .benefits-row small { display: block; }
    .benefits-row strong { font-size: 11px; }
    .benefits-row small { margin-top: 3px; color: var(--sora-muted); font-size: 10px; }
    .category-section, .products-section { padding-top: 82px; }
    .section-heading { display: flex; align-items: end; justify-content: space-between; margin-bottom: 25px; }
    .section-heading h2 { margin: 8px 0 0; font-family: Georgia, "Times New Roman", serif; font-size: 35px; font-weight: 400; letter-spacing: -.035em; }
    .section-heading > .text-link { padding-bottom: 5px; }
    .category-grid { display: grid; grid-template-columns: repeat(4, 1fr); gap: 15px; }
    .category-card { position: relative; height: 255px; overflow: hidden; border-radius: 3px; color: #fff; background: #d9d8cd; }
    .category-card::after { position: absolute; inset: 30% 0 0; background: linear-gradient(transparent, rgba(20,25,20,.62)); content: ""; }
    .category-card img { width: 100%; height: 100%; object-fit: cover; transition: transform .5s; }
    .category-card:hover { color: #fff; }
    .category-card:hover img { transform: scale(1.05); }
    .category-label { position: absolute; z-index: 1; bottom: 19px; left: 18px; display: flex; flex-direction: column; }
    .category-label strong { font-family: Georgia, serif; font-size: 20px; font-weight: 400; }
    .category-label small { margin-top: 4px; font-size: 10px; opacity: .85; }
    .category-arrow { position: absolute; z-index: 1; right: 16px; bottom: 22px; display: grid; width: 29px; height: 29px; place-items: center; border: 1px solid rgba(255,255,255,.6); border-radius: 50%; }
    .products-section { padding-bottom: 82px; }
    .product-image { position: relative; display: block; height: 300px; overflow: hidden; background: var(--sora-cream); }
    .product-image > img { width: 100%; height: 100%; object-fit: cover; transition: transform .4s; }
    .product-image-placeholder { display: grid; width: 100%; height: 100%; place-items: center; color: var(--sora-muted); font-size: 12px; }
    .product-card:hover .product-image > img { transform: scale(1.04); }
    .product-badge { position: absolute; top: 12px; left: 12px; padding: 6px 9px; color: var(--sora-ink); background: #fff; font-size: 9px; font-weight: 600; }
    .badge-new { color: #fff; background: var(--sora-green); }
    .badge-limited { color: #fff; background: #bd805d; }
    .quick-view { position: absolute; right: 12px; bottom: 12px; display: grid; width: 32px; height: 32px; place-items: center; border-radius: 50%; color: var(--sora-ink); background: #fff; opacity: 0; transition: opacity .2s; }
    .product-card:hover .quick-view, .product-image:focus-visible .quick-view { opacity: 1; }
    .product-info { padding-top: 14px; }
    .product-category { color: var(--sora-muted); font-size: 9px; letter-spacing: .1em; }
    .product-info h3 { margin: 7px 0 10px; font-family: Georgia, "Times New Roman", serif; font-size: 17px; font-weight: 400; }
    .product-info h3 a { color: var(--sora-ink); text-decoration: none; }
    .product-info h3 a:hover { color: var(--sora-green); }
    .product-description { min-height: 38px; margin-bottom: 10px; color: var(--sora-muted); font-size: 11px; line-height: 1.6; }
    .product-bottom { display: flex; align-items: center; justify-content: space-between; }
    .product-bottom strong { font-size: 12px; }
    .product-stock { color: var(--sora-muted); font-size: 10px; }
    .promo-section { position: relative; display: grid; min-height: 330px; grid-template-columns: 1.2fr .8fr; overflow: hidden; margin-bottom: 82px; background: #e9eee5; }
    .promo-copy { position: relative; z-index: 1; align-self: center; padding: 44px 8%; }
    .promo-copy h2 { margin: 12px 0; font-family: Georgia, "Times New Roman", serif; font-size: clamp(28px, 3.2vw, 42px); font-weight: 400; letter-spacing: -.04em; line-height: 1.18; }
    .promo-copy h2 em { color: #587560; }
    .promo-copy > p { max-width: 420px; margin-bottom: 20px; font-size: 13px; }
    .promo-image { min-height: 330px; background: linear-gradient(90deg, #e9eee5 0%, rgba(233,238,229,0) 28%), url("https://images.unsplash.com/photo-1490312278390-ab64016e0aa9?auto=format&fit=crop&w=1000&q=80") center 48% / cover; }
    .promo-mark { position: absolute; right: 38%; bottom: -48px; color: rgba(49,90,70,.08); font-family: Georgia, serif; font-size: 240px; line-height: 1; }

    @media (max-width: 991.98px) {
        .store-navbar .navbar-collapse { padding: 14px 0 17px; }
        .store-navbar .navbar-nav { gap: 0; }
        .store-navbar .store-cart { margin-top: 8px; }
        .hero { gap: 5%; padding-top: 48px; padding-bottom: 55px; }
        .hero-copy { padding-left: 0; }
        .hero-visual, .hero-visual > img { min-height: 390px; height: 390px; }
        .category-grid { grid-template-columns: repeat(2, minmax(0, 1fr)); }
        .category-card { height: 280px; }
        .product-image { height: 340px; }
        .promo-section { grid-template-columns: 1fr .75fr; }
    }
    @media (max-width: 575.98px) {
        .hero { grid-template-columns: 1fr; gap: 34px; padding-top: 35px; padding-bottom: 40px; }
        .hero h1 { max-width: 440px; font-size: 46px; }
        .hero-copy > p { font-size: 13px; }
        .hero-note { margin-top: 28px; }
        .hero-visual, .hero-visual > img { min-height: 340px; height: 340px; }
        .hero-visual { margin: 0 8px 0 16px; }
        .hero-sticker { left: -18px; width: 74px; height: 74px; }
        .benefits-row { grid-template-columns: 1fr; gap: 15px; padding-top: 18px; padding-bottom: 18px; }
        .benefits-row > div { justify-content: flex-start; }
        .category-section, .products-section { padding-top: 54px; }
        .section-heading { align-items: start; gap: 14px; }
        .section-heading h2 { font-size: 29px; }
        .section-heading > .text-link { max-width: 110px; padding-top: 17px; font-size: 11px; text-align: right; }
        .category-grid { gap: 11px; }
        .category-card { height: 205px; }
        .category-label { bottom: 14px; left: 12px; }
        .category-label strong { font-size: 16px; }
        .category-label small { max-width: 120px; font-size: 9px; }
        .category-arrow { right: 10px; bottom: 15px; width: 25px; height: 25px; }
        .product-image { height: 220px; }
        .product-info { padding-top: 10px; }
        .product-category { font-size: 8px; }
        .product-info h3 { min-height: 38px; font-size: 15px; }
        .product-bottom strong { font-size: 11px; }
        .product-stock { font-size: 9px; }
        .products-section { padding-bottom: 55px; }
        .promo-section { grid-template-columns: 1fr; margin-bottom: 55px; }
        .promo-copy { padding: 38px 24px; }
        .promo-copy h2 { font-size: 31px; }
        .promo-image { min-height: 190px; }
        .promo-mark { right: 4%; bottom: 90px; font-size: 160px; }
    }
</style>
@endpush
