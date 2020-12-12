<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Blade;

class HomeController extends Controller
{

    public function index()
    {
        $categories = Category::take(6)->get();
        $products = Product::with(['galleries'])
            ->take(8)
            ->get();

        Blade::directive('currency', function ($expression) {
            return " Rp. <?= number_format($expression, 0, ',', '.'); ?> ";
        });

        return view('pages.home', [
            'categories' => $categories,
            'products' => $products,
        ]);
    }
}
