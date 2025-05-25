<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    // Dashboard
    public function index()
    {
        return view('admin.dashboard');
    }

    // 1. Index
    public function usersIndex()
    {
        $users = User::orderBy('created_at','desc')->paginate(10);
        return view('admin.users.index', compact('users'));
    }

    // 2. Create form
    public function usersCreate()
    {
        return view('admin.users.create');
    }

    // 3. Store
    public function usersStore(Request $request)
    {
        $data = $request->validate([
            'name'  => 'required|string|max:50',
            'email' => 'required|email|unique:users,email',
            'role'  => 'required|in:admin,barber,customer',
            'password' => 'required|string|min:6|confirmed',
        ]);
        $data['password'] = Hash::make($data['password']);
        User::create($data);
        return redirect()->route('admin.users.index');
    }

    // 4. Show
    public function usersShow(User $user)
    {
        return view('admin.users.show', compact('user'));
    }

    // 5. Edit form
    public function usersEdit(User $user)
    {
        return view('admin.users.edit', compact('user'));
    }

    // 6. Update
    public function usersUpdate(Request $request, User $user)
    {
        $rules = [
            'name' => 'required|string|max:50',
            'role' => 'required|in:admin,barber,customer',
        ];
        if ($request->email !== $user->email) {
            $rules['email'] = 'required|email|unique:users,email';
        }
        if ($request->filled('password')) {
            $rules['password'] = 'string|min:6|confirmed';
        }
        $data = $request->validate($rules);
        if (isset($data['password'])) {
            $data['password'] = Hash::make($data['password']);
        }
        $user->update($data);
        return redirect()->route('admin.users.index');
    }

    // 7. Destroy
    public function usersDestroy(User $user)
    {
        $user->delete();
        return back();
    }
}