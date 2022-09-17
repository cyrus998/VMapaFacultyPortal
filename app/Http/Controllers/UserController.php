<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(User $user)
    {
        return Blade::render(
            'users',
            [
                'data' => $user->paginate(5)
            ]
        );
    }

    public function create()
    {
        return Blade::render('user.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'facultyNumber' => 'required',
            'password' => 'required',
            'role' => 'required',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'facultyNumber' => $request->facultyNumber,
            'role' => $request->role,
            'password' => Hash::make($request['password']),
        ]);

        return redirect()->route('user.index')
            ->with('success', 'User created successfully.');
    }

    public function show(User $user)
    {
        return Blade::render(
            'user.show',
            [
                'user' => $user
            ]
        );
    }

    public function edit(User $user)
    {
        return Blade::render(
            'user.edit',
            [
                'user' => $user
            ]
        );
    }

    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'facultyNumber' => 'required',
            // 'password' => 'required',
            'role' => 'required'
        ]);

        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            // 'password' => $request->password,
            'facultyNumber' => $request->facultyNumber,
            'role' => $request->role
        ]);

        return redirect()->route('user.index')
            ->with('success', 'User updated successfully.');
    }

    public function delete(User $user)
    {
        $user->delete();

        return redirect()->route('user.index')
            ->with('success', 'User deleted successfully.');
    }
}
