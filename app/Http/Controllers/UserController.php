<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'List Pengguna',
            'users' => User::all()
        ];

        return view('dashboard.user.index', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Tambah Admin'
        ];

        return view('dashboard.user.create', $data);
    }

    public function store(Request $request)
    {
        $request->validate([
            'username' => ['required', 'max:129', 'unique:users,username'],
            'password' => ['required'],
            'name' => ['required', 'max:129'],
            'email' => ['required', 'email'],
        ]);

        $user = new User();
        $user->username = $request->username;
        $user->name = $request->name;
        $user->password = Hash::make($request->password);
        $user->email = $request->email;
        $user->role = 'admin';
        if ($request->hasFile('avatar')) {
            $filename = Str::random(32) . '.' . $request->file('avatar')->getClientOriginalExtension();
            $file_path = $request->file('avatar')->storeAs('public/uploads', $filename);
        }

        $user->avatar = isset($file_path) ? $file_path : '';
        $user->save();

        return redirect()->back()->with('success', 'Data berhasil disimpan');
    }

    public function destroy(Request $request, $id)
    {
        User::findOrFail($id)->delete();
        return redirect()->back()->with('success', 'Berhasil menghapus data');
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        $data = [
            'title' => 'Edit Admin',
            'user' => $user
        ];

        return view('dashboard.user.edit', $data);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'username' => ['required', 'max:129', 'unique:users,username,' . $id],
            'password' => ['nullable'],
            'name' => ['required', 'max:129'],
            'email' => ['required', 'email', 'unique:users,email,' . $id],
            'avatar' => ['nullable', 'file', 'mimes:jpg,jpeg,png', 'between:0,2048']
        ]);

        $user = User::findOrFail($id);
        $user->username = $request->username;
        $user->name = $request->name;
        if ($request->password) {
            $user->password = Hash::make($request->password);
        }
        $user->email = $request->email;
        if ($request->hasFile('avatar')) {
            $filename = Str::random(32) . '.' . $request->file('avatar')->getClientOriginalExtension();
            $file_path = $request->file('avatar')->storeAs('public/uploads', $filename);
        }

        $user->avatar = isset($file_path) ? $file_path : $user->avatar;
        $user->save();

        return redirect()->back()->with('success', 'Data berhasil diupdate');
    }


    public function profile()
    {
        $user = User::findOrFail(Auth::user()->id);
        $data = [
            'title' => 'Edit Profile',
            'user' => $user
        ];

        return view('dashboard.user.profile', $data);
    }

    public function update_profile(Request $request)
    {
        $id = Auth::user()->id;
        $request->validate([
            'username' => ['required', 'max:129', 'unique:users,username,' . $id],
            'password' => ['nullable'],
            'name' => ['required', 'max:129'],
            'email' => ['required', 'email', 'unique:users,email,' . $id],
            'avatar' => ['nullable', 'file', 'mimes:jpg,jpeg,png', 'between:0,2048']
        ]);

        $user = User::findOrFail($id);
        $user->username = $request->username;
        $user->name = $request->name;
        if ($request->password) {
            $user->password = Hash::make($request->password);
        }
        $user->email = $request->email;
        if ($request->hasFile('avatar')) {
            $filename = Str::random(32) . '.' . $request->file('avatar')->getClientOriginalExtension();
            $file_path = $request->file('avatar')->storeAs('public/uploads', $filename);
        }

        $user->avatar = isset($file_path) ? $file_path : $user->avatar;
        $user->save();

        return redirect()->back()->with('success', 'Profile berhasil diupdate');
    }
}
