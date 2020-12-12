<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Blade;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $products = Product::with(['galleries'])
            ->paginate();

        Blade::directive('currency', function ($expression) {
            return " Rp. <?= number_format($expression, 0, ',', '.'); ?> ";
        });

        return view('pages.category', [
            'categories' => $categories,
            'products' => $products
        ]);
    }

    public function detail(Request $request, $slug)
    {
        $categories = Category::all();

        $category = Category::where('slug', $slug)
            ->firstOrFail();

        $products = Product::with(['galleries'])
            ->where('categories_id', $category->id)
            ->paginate();

        return view('pages.category', [
            'categories' => $categories,
            'products' => $products
        ]);
    }
}
