<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardTransactionController extends Controller
{
    public function index()
    {
        return view('pages.dashboard.transactions.index');
    }

    public function details()
    {
        return view('pages.dashboard.transactions.transaction-details');
    }
}
