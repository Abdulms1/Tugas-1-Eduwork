<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ProductCard extends Component
{
    public function __construct(
        public string $image,
        public string $name,
        public ?string $description,
        public int|float $price,
        public string $category,
        public int $stock,
        public string $link,
    ) {}

    public function render(): View|Closure|string
    {
        return view('components.product-card');
    }
}
