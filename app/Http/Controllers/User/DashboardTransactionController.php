<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardTransactionController extends Controller
{
    public function index()
    {
        $products = Product::with('galleries')
            ->where('users_id', Auth::user()->id)
            ->get();
        return view('pages.dashboard.user.transactions.index', [
            'products' => $products
        ]);
    }

    public function details()
    {
        return view('pages.dashboard.user.transactions.transaction-details');
    }
}
