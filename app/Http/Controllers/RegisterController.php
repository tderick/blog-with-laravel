<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view('pages.admin.authentication.register');
    }

    public function verificateAccount(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:users,email',
            'name' => 'required|unique:users,name',
            'password' => 'required',
            'password_confirmation' => 'required|same:password'
        ]);
        $data = $request->all();
        $hashedPassword = Hash::make($data['password']);

        User::create([
            'email' => $data['email'],
            'name' => $data['name'],
            'password' => $hashedPassword,
        ]);

        return redirect()->route('login');
    }
}
