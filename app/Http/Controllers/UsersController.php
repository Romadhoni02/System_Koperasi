<?php

namespace App\Http\Controllers;

use App\Models\UsersModel;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    // Display a listing of the users
    public function index()
    {
        $users = UsersModel::all();
        return view('users.index', compact('users'));
    }

    // Show the form for creating a new user
    public function create()
    {
        return view('users.create');
    }

    // Store a newly created user in the database
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'role' => 'required',
        ]);

        $user = new UsersModel([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'password' => bcrypt($request->get('password')),
            'role' => $request->get('role'),
        ]);

        $user->save();
        return redirect('/users')->with('success', 'User created successfully');
    }

    // Display the specified user
    public function show($id)
    {
        $user = UsersModel::findOrFail($id);
        return view('users.show', compact('user'));
    }

    // Show the form for editing the specified user
    public function edit($id)
    {
        $user = UsersModel::findOrFail($id);
        return view('users.edit', compact('user'));
    }

    // Update the specified user in the database
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email,'.$id,
            'role' => 'required',
        ]);

        $user = UsersModel::findOrFail($id);
        $user->name = $request->get('name');
        $user->email = $request->get('email');
        if ($request->get('password')) {
            $user->password = bcrypt($request->get('password'));
        }
        $user->role = $request->get('role');
        $user->save();

        return redirect('/users')->with('success', 'User updated successfully');
    }

    // Remove the specified user from the database
    public function destroy($id)
    {
        $user = UsersModel::findOrFail($id);
        $user->delete();

        return redirect('/users')->with('success', 'User deleted successfully');
    }
}
