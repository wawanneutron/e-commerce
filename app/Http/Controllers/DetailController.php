<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Blade;

class DetailController extends Controller
{
    public function index(Request $request, $slug)
    {
        $product = Product::with(['galleries', 'user'])
            ->where('slug', $slug)->firstOrFail();

        Blade::directive('currency', function ($expression) {
            return " Rp. <?= number_format($expression, 0, ',', '.'); ?> ";
        });

        return view('pages.detail', [
            'product' => $product
        ]);
    }

    public function add(Request $request, $id)
    {
        $data = [
            'products_id' => $id,
            'users_id' => Auth::user()->id,
        ];
        Cart::create($data);
        return redirect()->route('cart');
    }
}
