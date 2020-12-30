<?php

namespace App\Http\Controllers\User;

use App\Category;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardSettingController extends Controller
{
    public function show()
    {
        $store = Auth::user();
        $categories = Category::all();

        return view('pages.dashboard.user.store-settings.index', [
            'store' => $store,
            'categories' => $categories
        ]);
    }

    public function updateStore(Request $request)
    {
        $data = $request->all();
        $item = Auth::user();
        $item->update($data);

        return redirect()->route('store-settings')
            ->with('status-update', 'Updated store setting successfully');
    }

    public function account()
    {
        $item = Auth::user();
        return view('pages.dashboard.user.account-settings.index', [
            'item' => $item
        ]);
    }

    public function accountUpdate(Request $request)
    {
        $data = $request->all();
        $item = Auth::user();
        $item->update($data);

        return redirect()->route('account-settings')
            ->with('status-update', 'Updated your account setting is successfully');
    }
}
