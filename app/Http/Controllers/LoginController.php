<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Logout;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('pages.admin.authentification.login');
    }

    public function authentificate(Request $request){

        $reponse = $request->validate([
            'email'=>'required',
            'password'=>'required',
        ]);

        if (Auth::attempt($reponse)) {
            return view('pages.admin.posts.new_post');
        }

        return back()->withErrors([
            'email'=>'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect("/login");
    }

}
