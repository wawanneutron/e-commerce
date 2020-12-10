<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\UserRequest;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Yajra\DataTables\Facades\DataTables;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (request()->ajax()) {
            $query = User::query();
            return DataTables::of($query)
                ->addColumn('action', function ($item) {
                    return '
                        <div class="btn-group">
                            <div class="dropdown">
                                <button class="btn btn-primary dropdown-toggle mr-1 mb-1" type="button" data-toggle="dropdown">
                                    Aksi
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="' . route('account-user.edit', $item->id) . '"> Sunting </a>
                                    <form action="' . route('account-user.destroy', $item->id) . '" method="POST">
                                        ' . method_field('DELETE') . csrf_field() . '
                                        <button type="Submit" class="text-danger dropdown-item">
                                            Delete
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    ';
                })
                ->editColumn('avatar', function ($item) {
                    return $item->avatar ? '<img src="' . Storage::url($item->avatar) . '" style="max-height: 48px;" />' : '';
                })
                ->rawColumns(['action', 'avatar'])
                ->make();
        }
        return view('pages.dashboard.admin.user.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('pages.dashboard.admin.user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {
        $data = $request->all();
        $data['password'] = bcrypt($request->password);

        User::create($data);
        return redirect()->route('account-user.index')
            ->with('status-success', 'Created user is successfully');
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
        $item = User::findOrFail($id);

        return view('pages.dashboard.admin.user.edit', [
            'item' => $item
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $item = User::findOrFail($id);
        $data = $request->all();

        // validation form
        Validator::make($data, [
            'name' => 'required|string|max:50',
            'email' => [
                'required', 'email',
                Rule::unique('users')->ignore($item->email, 'email')
            ],
            'roles' => 'nullable|string|in:ADMIN,USER',
        ])->validate();

        // if statment change or don't change password
        if ($request->password) {
            $data['password'] = bcrypt($request->password);
        } else {
            // don't change password
            unset($data['password']);
        }


        $item->update($data);
        return redirect()->route('account-user.index')
            ->with('status-update', 'Updated user is successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = User::findOrFail($id);

        $data->delete();

        return redirect()->route('account-user.index')
            ->with('status-destroy', 'User deleted is succesfully');
    }
}
