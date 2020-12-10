<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CategoryRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (request()->ajax()) {
            $query = Category::query();
            return DataTables::of($query)
                ->addColumn('action', function ($item) {
                    return '
                        <div class="btn-group">
                            <div class="dropdown">
                                <button class="btn btn-primary dropdown-toggle mr-1 mb-1" type="button" data-toggle="dropdown">
                                    Aksi
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="' . route('dashboard-category.edit', $item->id) . '">Sunting</a>
                                    <form action="' . route('dashboard-category.destroy', $item->id) . '" method="POST">
                                        ' . method_field('DELETE') . csrf_field() . '
                                        <button type="submit" class="text-danger dropdown-item">
                                            Delete
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    ';
                })
                ->editColumn('photo', function ($item) {
                    return $item->photo ? '<img src="' . Storage::url($item->photo) . '" style="max-height: 48px;" />' : '';
                })
                ->rawColumns(['action', 'photo'])
                ->make();
        }
        return view('pages.dashboard.admin.category.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.dashboard.admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryRequest $request)
    {
        $new_category = $request->all();
        $new_category['photo'] = $request->file('photo')->store('photo-category', 'public');
        $new_category['slug'] = Str::slug($request->name);

        Category::create($new_category);

        return redirect()->route('dashboard-category.index')
            ->with('status-success', 'Adding category is successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Category::findOrFail($id);
        return view('pages.dashboard.admin.category.edit', [
            'item' => $item,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryRequest $request, $id)
    {
        $update_category = Category::findOrFail($id);

        $name = $request->get('name');
        $update_category->name = $name;
        $update_category->slug = Str::slug($name);

        if ($request->file('photo')) {
            if ($update_category->photo && file_exists(storage_path('app/public/' . $update_category->photo))) {
                Storage::delete('public/' . $update_category->photo);
                $new_photo = $request->file('photo')->store('photo-category', 'public');
                $update_category->photo = $new_photo;
            }
            $new_photo = $request->file('photo')->store('photo-category', 'public');
            $update_category->photo = $new_photo;
        }
        $update_category->save();

        return redirect()->route('dashboard-category.index')
            ->with('status-update', 'Updated category is successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = Category::findOrFail($id);

        $delete->delete();

        return redirect()->route('dashboard-category.index')
            ->with('status-destroy', 'Deleted category is successfully, moved to trash');
    }
}
