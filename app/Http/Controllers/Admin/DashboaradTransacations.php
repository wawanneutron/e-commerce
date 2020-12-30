<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\TransactionDetail;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class DashboaradTransacations extends Controller
{
    public function index()
    {
        if (request()->ajax()) {
            $query = TransactionDetail::with(['product.user']);
            return DataTables::of($query)
                ->make();
        }
        return view('pages.dashboard.admin.transaction.index');
    }
}
