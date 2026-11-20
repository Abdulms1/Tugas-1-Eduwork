<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Str;

#[Fillable(['name', 'description', 'slug', 'price', 'stock', 'image', 'product_category_id'])]
class Product extends Model
{
    public function getImageUrlAttribute(): string
    {
        $image = trim((string) $this->image);

        if ($image === '') {
            return asset('images/categories/default.jpg');
        }

        if (preg_match('/^https?:\/\//i', $image) === 1) {
            return $image;
        }

        if (Str::contains($image, '/')) {
            return asset(ltrim($image, '/'));
        }

        return asset('images/products/'.$image);
    }

    public function product_category(): BelongsTo
    {
        return $this->belongsTo(ProductCategory::class);
    }

    public function order_items(): HasMany
    {
        return $this->hasMany(OrderItem::class);
    }

    public function carts(): HasMany
    {
        return $this->hasMany(Cart::class);
    }
}
