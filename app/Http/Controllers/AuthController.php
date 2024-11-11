<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    function login()
    {
        return view('auth/login');
    }

    function doLogin(Request $request)
    {
        $data = [
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ];

        if (Auth::attempt($data)) {
            return redirect()->route('dashboard')->with('message', 'Kamu Sudah Dalam Keadaan Login')->with('alert-type', 'success');
        } else {
            return redirect()->route('login')->withErrors('Email dan Pasword Tidak Sesuai')->withInput();
        }
    }

    function logout()
    {
        Auth::logout();
        return redirect()->route('login')->with('message', 'Kamu Berhasil Logout');
    }
    function dashboard()
    {
        $countPages = \DB::table('page')->count();
        $countContacts = \DB::table('kontak')->count();
        $countAdmins = \DB::table('useradmin')->count();
        $countRegistrations = \DB::table('daftar')->count();
    
        return view('admin.dashboard', compact('countPages', 'countContacts', 'countAdmins', 'countRegistrations'));
    }
}
