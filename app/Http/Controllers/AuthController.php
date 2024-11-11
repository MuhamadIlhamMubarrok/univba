<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

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

    function profile(Request $request)
    {
        $user = auth()->user();
        return view('admin/profile', compact('user'));
    }

    public function updateProfile(Request $request, string $id)
    {
        $user = User::findOrFail($id);

        $request->validate(
            [
                'name' => 'required|string|max:255',
                'kampus' => 'required|string|max:255',
                'email' => 'required|string|email|max:255',
                'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
                'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            ],
            [
                'name.required' => 'Nama wajib diisi.',
                'name.string' => 'Nama harus berupa teks.',
                'name.max' => 'Nama tidak boleh lebih dari 255 karakter.',

                'kampus.required' => 'Nama wajib diisi.',
                'kampus.string' => 'Nama harus berupa teks.',
                'kampus.max' => 'Nama tidak boleh lebih dari 255 karakter.',

                'email.required' => 'Email wajib diisi.',
                'email.string' => 'Email harus berupa teks.',
                'email.email' => 'Format email tidak valid.',
                'email.max' => 'Email tidak boleh lebih dari 255 karakter.',

                'gambar.image' => 'Foto profil harus berupa gambar.',
                'gambar.mimes' => 'Foto profil harus dalam format jpeg, png, jpg, atau gif.',
                'gambar.max' => 'Ukuran foto profil tidak boleh lebih dari 2MB.',

                'logo.image' => 'Logo kampus harus berupa gambar.',
                'logo.mimes' => 'Logo kampus harus dalam format jpeg, png, jpg, atau gif.',
                'logo.max' => 'Ukuran logo kampus tidak boleh lebih dari 2MB.',
            ],
        );
        //  dd($request->all());
        // Proses update data user
        $data = [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'kampus' => $request->input('kampus'),
        ];

        // Cek apakah ada file gambar profil di-upload
        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar');
            $gambarName = $gambar->hashName();
            $gambar->storeAs('public/userImage/', $gambarName);

            // Hapus gambar lama jika ada
            if ($user->gambar) {
                Storage::delete('public/userImage/' . $user->gambar);
            }

            // Simpan nama file gambar baru ke array data
            $data['gambar'] = $gambarName;
        }

        // Cek apakah ada file logo kampus di-upload
        if ($request->hasFile('logo')) {
            $logo = $request->file('logo');
            $logoName = $logo->hashName();
            $logo->storeAs('public/userImage/', $logoName);

            // Hapus logo lama jika ada
            if ($user->logo) {
                Storage::delete('public/userImage/' . $user->logo);
            }

            // Simpan nama file logo baru ke array data
            $data['logo'] = $logoName;
        }

        // Update user dengan data baru
        $user->update($data);

        // Redirect dengan pesan sukses
        return redirect()->route('profile')->with('message', 'Anda Berhasil Mengubah Data')->with('alert-type', 'success');
    }
    function changePassword()
    {
        $user = auth()->user();
        return view('admin/changePassword', compact('user'));
    }

    public function doChangePassword(Request $request)
    {
        // Validasi input
        $request->validate(
            [
                'password-baru' => 'required|string|min:8|confirmed',
            ],
            [
                'password-baru.required' => 'Password baru wajib diisi.',
                'password-baru.string' => 'Password harus berupa teks.',
                'password-baru.min' => 'Password harus memiliki minimal 8 karakter.',
                'password-baru.confirmed' => 'Konfirmasi password tidak sesuai.',
            ],
        );

        // Dapatkan user yang sedang login
        $user = auth()->user();

        // Update password dengan hash baru
        $user->password = Hash::make($request->input('password-baru'));
        $user->save();

        // Redirect dengan pesan sukses
        return redirect()->back()->with('message', 'Anda Berhasil Mengubah Password')->with('alert-type', 'success');
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
        $user = auth()->user();

        return view('admin.dashboard', compact('countPages', 'countContacts', 'countAdmins', 'countRegistrations', 'user'));
       
    }
}
