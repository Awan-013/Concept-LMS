<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use Illuminate\Support\Facades\Hash;

class authController extends Controller
{



    public function index()
    {
        if (Auth::check()) {
            return redirect()->route('dashboard');
        } else {
            return redirect()->route('login');
        }
    }

    public function signup()
    {
        return view('auth.signup');
    }

    public function savesignup(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'email' => 'required|string|email|unique:users',
            'password' => 'required|string|min:8',
        ], [
            'name.required' => 'Silahkan isi Nama',
            'email.required' => 'Silahkan isi Email',
            'email.email' => 'Silahkan masukkan alamat Email yang valid',
            'email.unique' => 'Email sudah terdaftar',
            'password.required' => 'Password wajib di isi',
            'password.min' => 'Password kurang dari 8 Karakter',
        ]);

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ];

        User::create($data);

        return redirect()->route('login')->with('message', 'Silahkan tunggu user diaktifkan oleh admin');
    }


    public function login()
    {
        return view('auth.login');
    }

    public function postlogin(Request $request)
    {

        $request->validate([
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:8',
        ], [
            'email.required' => 'Email kosong',
            'email.email' => 'Silahkan masukkan alamat Email yang valid',
            'password.required' => 'Password kosong',
            'password.min' => 'Password kurang dari 8 Karakter',
        ]);


        $credentials = $request->only('email', 'password');


        $user = User::where('email', $credentials['email'])->first();

        if ($user) {
            if ($user->active == 0) {
                return redirect()->back()->withErrors('User not activated')->withInput();
            }
        } else {
            return redirect()->back()->withErrors('Email and password are incorrect')->withInput();
        }


        if (Auth::attempt($credentials)) {

            return redirect()->intended('/');
        } else {
            return redirect()->back()->withErrors('Email and password are incorrect')->withInput();
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }
}
