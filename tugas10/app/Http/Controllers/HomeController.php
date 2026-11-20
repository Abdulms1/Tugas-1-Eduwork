<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Contracts\View\View;

class HomeController extends Controller
{
    public function index(): View
    {
        $products = Product::with('product_category')->latest()->paginate(8);
        $categories = ProductCategory::all();

        return view('home.index', compact('products', 'categories'));
    }
}
