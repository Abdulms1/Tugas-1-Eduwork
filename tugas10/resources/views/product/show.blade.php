@extends('template.layout')

@section('title', $product->name)

@section('content')
<main class="container py-5">
    <a class="text-decoration-none" href="{{ url('/products') }}">← Kembali ke produk</a>
    <div class="row g-4 mt-2">
        <div class="col-md-6">
            <img
                class="img-fluid rounded"
                src="{{ asset('images/products/' . $product->image) }}"
                alt="{{ $product->name }}"
            >
        </div>
        <div class="col-md-6">
            <p class="text-muted">{{ $product->product_category->name }}</p>
            <h1>{{ $product->name }}</h1>
            <p>{{ $product->description }}</p>
            <p class="fs-4 fw-semibold">Rp{{ number_format($product->price, 0, ',', '.') }}</p>
            <p>Stok: {{ $product->stock }}</p>
        </div>
    </div>
</main>
@endsection
