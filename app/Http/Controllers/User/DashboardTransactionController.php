<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardTransactionController extends Controller
{
    public function index()
    {
        return view('pages.dashboard.user.transactions.index');
    }

    public function details()
    {
        return view('pages.dashboard.user.transactions.transaction-details');
    }
}
