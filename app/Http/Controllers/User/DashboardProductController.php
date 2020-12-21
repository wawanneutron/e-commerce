<?php

namespace App\Http\Controllers\User;

use App\Category;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\GalleryRequest;
use App\Http\Requests\Admin\ProductRequest;
use App\Product;
use App\ProductGallery;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::with('galleries', 'category')
            ->where('users_id', Auth::user()->id)
            ->get();
        return view('pages.dashboard.user.product.index', [
            'products' => $products
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('pages.dashboard.user.product.create-product', [
            'categories' => $categories
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request)
    {
        $new_product = $request->all();
        $new_product['slug'] = Str::slug($request->name);

        $product = Product::create($new_product);
        $gallery = [
            'products_id' => $product->id,
            'photos' => $request->file('photos')->store('product-gallery', 'public')
        ];
        ProductGallery::create($gallery);

        return redirect()->route('dashboard-product')
            ->with('status-success', 'Adding product is succesfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        $product = Product::with('galleries', 'category')
            ->findOrFail($id);
        $categories = Category::all();

        return view('pages.dashboard.user.product.product-details', [
            'product' => $product,
            'categories' => $categories
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductRequest $request, $id)
    {
        $data = Product::findOrFail($id);

        $update_product = $request->all();
        $update_product['slug'] = Str::slug($request->name);

        $data->update($update_product);

        return redirect()->route('dashboard-product')
            ->with('status-success', 'Update product is succesfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $destroy = ProductGallery::findOrFail($id);
        $destroy->delete();

        return redirect()->route('details-product', $destroy->products_id)
            ->with('status-destroy', 'Deleted image product is succesfully');
    }

    public function uploadGallery(GalleryRequest $request)
    {
        $data = $request->all();
        $data['photos'] = $request->file('photos')->store('product-gallery', 'public');
        ProductGallery::create($data);

        return redirect()->route('details-product', $request->products_id)
            ->with('status-success', 'Upload image product is succesfully');
    }
}
