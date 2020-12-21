<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\TransactionDetail;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $transactions = TransactionDetail::with(['transaction.user', 'product.galleries'])
            ->whereHas('transaction', function ($transaction) {
                $transaction->where('users_id', Auth::user()->id);
            });
        $revenue = $transactions->get()->reduce(function ($carry, $item) {
            return $carry + $item->price;
        });
        $customer = User::count();
        return view('pages.dashboard.user.dashboard', [
            'transaction_count' => $transactions->count(),
            'transaction_data' => $transactions->paginate(5),
            'revenue' => $revenue,
            'customer' => $customer
        ]);
    }
}
