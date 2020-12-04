<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardSettingController extends Controller
{
    public function store()
    {
        return view('pages.dashboard.store-settings.index');
    }

    public function account()
    {
        return view('pages.dashboard.account-settings.index');
    }
}
