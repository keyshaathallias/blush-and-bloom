<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index() {
        $users = User::all();
        
        $title = 'Delete Account';
        $text  = "Are you sure you want to delete?";
        confirmDelete($title, $text);

        return view('admin.pages.account', compact('users'));
    }

    public function create() {
        return view('admin.pages.createAccount');
    }

    public function store(Request $request) {
        $credentials = $request->validate([
            'name'     => 'required',
            'email'    => 'required',
            'password' => 'required|min:6',
            'roles'    => 'required',
        ]);

        $credentials['password'] = Hash::make($request['password']);

        User::create([
            'name'     => $credentials['name'],
            'email'    => $credentials['email'],
            'roles'    => $credentials['roles'],
            'password' => Hash::make($request['password']),
        ]);

        return redirect()->route('account.index')->with('success', 'New Account Added!');
    }

    public function edit(string $id) {
        $user = User::where('id', $id)->firstOrFail();
        return view('admin.pages.editAccount', compact('user'));
    }

    public function update(Request $request, string $id) {
        $user = User::where('id', $id)->firstOrFail();

        $credentials = $request->validate([
            'name'  => 'required',
            'email' => 'required',
            'roles' => 'required',
        ]);

        $user->update($credentials);

        return redirect()->route('account.index')->with('success', 'Account Successfully Updated!');
    }

    public function destroy($id): RedirectResponse {
        $user = User::where('id', $id)->firstOrFail();
        $user->delete();

        return redirect()->back()->with('success', 'Account Deleted.');
    }
}
