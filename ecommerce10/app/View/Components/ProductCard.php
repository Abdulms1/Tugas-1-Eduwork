<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ProductCard extends Component
{
    public string $image;

    /**
     * Create a new component instance.
     */
    public function __construct(
        ?string $image,
        public string $name,
        public string $description,
        public string $link,
        public ?int $price = null,
        public ?string $category = null,
        public string $buttonLabel = 'Lihat Detail',
    ) {
        $this->image = filled($image) ? $image : asset('images/categories/default.jpg');
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.product-card');
    }
}
