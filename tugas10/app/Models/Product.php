<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

#[Fillable(['product_categories_id', 'name', 'slug', 'description', 'price', 'stock', 'image'])]
class Product extends Model
{
    public function category(): BelongsTo
    {
        return $this->belongsTo(ProductCategory::class, 'product_categories_id');
    }

    public function product_category(): BelongsTo
    {
        return $this->belongsTo(ProductCategory::class, 'product_categories_id');
    }

    public function orderItems(): HasMany
    {
        return $this->hasMany(OrderItem::class);
    }

    public function carts(): HasMany
    {
        return $this->hasMany(Cart::class);
    }
}
