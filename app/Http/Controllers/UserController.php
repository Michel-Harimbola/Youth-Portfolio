<?php

namespace App\Http\Controllers;

use App\Models\User;
use Inertia\Inertia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class UserController extends Controller
{
    public function loadAllUser() {
        $all_user = User::limit(8)->get();
        return Inertia::render('Index/Dashboard/User/User', ['all_user' => $all_user]);
    }

    public function UserForm() {
        return inertia('Index/Dashboard/User/AddUser');
    }

    public function AddUser(Request $request) {
        $validated = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed|min:4',
            'role' => 'required|string',
        ]);

        User::create($validated);

        return Redirect::route('User.index')->with('message', 'User created succesfully');
    }

    public function destroyUser(User $user ){
        $user->delete();
        return Redirect::route('User.index')->with('message', 'User deleted succesfully');
    }

    public function EditUser(User $user){
        return Inertia::render('Index/Dashboard/User/EditUser', [
            'user' => $user
        ]);
    }

    public function updateUser(Request $request, User $user){
        $validated = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'role' => 'required|string',
        ]);

        $user->update($validated);

        return Redirect::route('User.index')->with('message', 'User update succesfully');
    }
}
