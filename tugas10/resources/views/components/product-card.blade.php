<div class="col">
    <article class="product-card">
        <a class="product-image" href="{{ $link }}">
            <img src="{{ $image }}" alt="{{ $name }}">
            <span class="quick-view" aria-hidden="true">↗</span>
        </a>
        <div class="product-info">
            <span class="product-category">{{ $category }}</span>
            <h3><a href="{{ $link }}">{{ $name }}</a></h3>
            <p class="product-description">{{ $description }}</p>
            <div class="product-bottom">
                <strong>Rp{{ number_format($price, 0, ',', '.') }}</strong>
                <span class="product-stock">Stok: {{ $stock }}</span>
            </div>
        </div>
    </article>
</div>