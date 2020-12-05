<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardSettingController extends Controller
{
    public function store()
    {
        return view('pages.dashboard.user.store-settings.index');
    }

    public function account()
    {
        return view('pages.dashboard.user.account-settings.index');
    }
}
