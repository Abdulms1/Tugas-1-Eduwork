<?php

namespace Tests\Feature;

use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class HomeProductCardsTest extends TestCase
{
    use RefreshDatabase;

    public function test_homepage_renders_product_cards_from_database(): void
    {
        $category = ProductCategory::create([
            'name' => 'Aksesori',
            'slug' => 'aksesori',
        ]);

        Product::create([
            'product_categories_id' => $category->id,
            'name' => 'Tas Buatan Lokal',
            'slug' => 'tas-buatan-lokal',
            'description' => 'Tas untuk kebutuhan sehari-hari.',
            'price' => 135000,
            'stock' => 8,
            'image' => null,
        ]);

        $this->get('/')
            ->assertOk()
            ->assertSee('Tas Buatan Lokal')
            ->assertSee('Aksesori')
            ->assertSee('/products?category=aksesori')
            ->assertSee('Rp135.000')
            ->assertSee('Stok: 8')
            ->assertDontSee('Everyday Canvas Tote');

        $this->get(route('products.show', 'tas-buatan-lokal'))
            ->assertOk()
            ->assertSee('Tas Buatan Lokal')
            ->assertSee('Aksesori');
    }

    public function test_homepage_renders_each_product_category_from_database(): void
    {
        ProductCategory::create([
            'name' => 'Elektronik',
            'slug' => 'elektronik',
        ]);
        ProductCategory::create([
            'name' => 'Peralatan Rumah',
            'slug' => 'peralatan-rumah',
        ]);

        $this->get('/')
            ->assertOk()
            ->assertSee('Elektronik')
            ->assertSee('/products?category=elektronik')
            ->assertSee('Peralatan Rumah')
            ->assertSee('/products?category=peralatan-rumah')
            ->assertDontSee('Home &amp; living');
    }

    public function test_homepage_paginates_products_eight_per_page(): void
    {
        $category = ProductCategory::create([
            'name' => 'Aksesori',
            'slug' => 'aksesori',
        ]);

        foreach (range(1, 9) as $number) {
            Product::create([
                'product_categories_id' => $category->id,
                'name' => "Produk {$number}",
                'slug' => "produk-{$number}",
                'description' => 'Deskripsi produk.',
                'price' => 10000,
                'stock' => 5,
                'image' => null,
            ]);

            Product::query()
                ->where('slug', "produk-{$number}")
                ->update(['created_at' => now()->addSeconds($number)]);
        }

        $this->get('/')
            ->assertOk()
            ->assertSee('Produk 9')
            ->assertDontSee('Produk 1');

        $this->get('/?page=2')
            ->assertOk()
            ->assertSee('Produk 1')
            ->assertDontSee('Produk 9');
    }
}
