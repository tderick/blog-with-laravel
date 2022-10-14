<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
      public function register(){
        return view('pages.admin.authentification.register');
    }

    public function verificateAccount(Request $request){
        $request->validate([
            'email' => 'required|email|unique:users,email',
            'name' => 'required|unique:users,name',
            'password' => 'required',
            'password_confirmation' => 'required|same:password'
        ]);
        $data=$request->all();
        $hashedPassword = Hash::make($data['password']);
        // $data['password']=$hashedPassword;
        $ele= User::create([
            'email'=>$data['email'],
            'name'=>$data['name'],
            'password'=>$hashedPassword,
        ]);
        // dd($ele);
        return redirect("/login");
    }

}
