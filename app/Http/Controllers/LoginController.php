<?php

namespace App\Http\Controllers;
use App\Models\User;
use Auth;
use Illuminate\Support\Str;



use Illuminate\Http\Request;

class LoginController extends Controller
{
    Public function postlogin (Request $request){
        //dd($request->all());

       if (Auth::attempt($request->only('email','password'))){
       return redirect('/dashboard/page');
       }
       return redirect ('/');
    }

    

    public function logout(Request $request) {
        $user = Auth::user(); // get user data before logout
        Auth::logout(); // Logout user
        session()->put('user', $user); // save user data to session
        session()->flush(); // clear session
        return redirect('/'); // Redirect to homepage
    }

    public function register(){
        return view('Pengguna.register');
    }

    public function simpanregister(Request $request){
        //dd($request->all());

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'remember_token' => Str::random(60),

            

        ]);
        return view('Pengguna.login');
    }
}