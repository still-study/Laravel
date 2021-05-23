<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateUserRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('user.index', compact('users'));
    }

    public function edit(User $user)
    {
        return view('user.edit', compact('user'));
    }

    public function update(UpdateUserRequest $request, User $user)
    {
        $user->role_id = $request->role_id;
        $user->update($request->validated());
        return redirect()->route('user.index')->with('success', 'Пользователь изменен');
    }

    public function delete(User $user)
    {
        $user->delete();
        return redirect()->route('user.index')->with('success', 'Пользователь удален');
    }
}
