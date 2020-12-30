<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Product;
use App\TransactionDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardTransactionController extends Controller
{
    public function index()
    {

        $sellProducts = Product::with(['user', 'galleries'])
            ->where('users_id', Auth::user()->id)
            ->get();

        $buyTransactions = TransactionDetail::with(['transaction.user', 'product.galleries'])
            ->whereHas('product', function ($product) {
                $product->where('users_id', Auth::user()->id);
            })->get();

        return view('pages.dashboard.user.transactions.index', [
            'sellProducts' => $sellProducts,
            'buyTransactions' => $buyTransactions,
        ]);
    }

    public function details(Request $request, $id)
    {
        $detailTransaction = TransactionDetail::with(['transaction.user', 'product.galleries'])
            ->findOrFail($id);
        return view('pages.dashboard.user.transactions.transaction-details', [
            'detailTransaction' => $detailTransaction
        ]);
    }

    public function update(Request $request, $id)
    {
        $item = $request->all();
        $data = TransactionDetail::findOrFail($id);
        $data->update($item);

        return redirect()->route('dashboard-transactions-details', $id)
            ->with('status-success', 'Update status product is succesfully');
    }
}
