<?php

namespace App\Http\Controllers;

use datatables;
use App\Models\User;
use Illuminate\Http\Request;
// use \Yajra\Datatables\Datatables;
use App\Http\Requests\UserRequest;


class UsersController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = User::latest();
            return datatables()->of($data)
                ->addIndexColumn()
                ->addColumn('action', fn ($row)
                =>
                '<a href="javascript:void(0)" class="edit btn btn-primary btn-sm">View</a>')->rawColumns(['action'])->make(true);
        }

        return view('dashboard.users.index');
    }

    public function create()
    {
        return view('dashboard.users.create');
    }

    public function store(UserRequest $request)
    {

        User::create($request->validated());
        return redirect()->route('dashboard');
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('users.edit', compact('user'));
    }


    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $user->update($request->validated());
        return redirect()->route('dashboard.users.index');
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->route('dashboard.users.index');
    }
}
