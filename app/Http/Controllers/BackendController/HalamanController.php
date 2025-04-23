<?php

namespace App\Http\Controllers\BackendController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Page;
use Illuminate\Support\Str;

class HalamanController extends Controller
{
    public function index()
    {
        $pages = Page::orderBy('created_at', 'desc')->paginate(5);
        $user = auth()->user();
        return view('admin.pages.index', compact('pages', 'user'));
    }

    public function create()
    {
        $token = mt_rand(100000, 999999);
        $secret_key = config('app.key'); // Use the app key as a secret
        return view('admin.pages.create', compact('token', 'secret_key'));
    }

    public function store(Request $request)
    {
        $request->validate(
            [
                'judul' => 'required|string|max:255',
                'short' => 'nullable|string|max:255',
                'isi' => 'required|string',
                'link' => 'nullable',
            ],
            [
                'judul.required' => 'Judul wajib diisi.',
                'isi.required' => 'Isi wajib diisi.',
            ],
        );

        $data = $request->all();

        // Tetapkan nilai default untuk 'link' jika tidak diisi
        $data['link'] = $data['link'] ?? '#'; // Default ke '#' jika tidak ada input

        // Tetapkan nilai default untuk 'image' jika tidak diupload
        $data['image'] = $data['image'] ?? 'default.jpg';

        // Buat slug dari judul
        $data['slug'] = Str::slug($data['judul']);

        Page::create($data);

        return redirect()->route('pages')->with('message', 'Page created successfully.')->with('alert-type', 'success');
    }

    public function edit($id)
    {
        $page = Page::findOrFail($id);
        $token = mt_rand(100000, 999999);
        $secret_key = config('app.key');
        return view('admin.pages.edit', compact('page', 'token', 'secret_key'));
    }

    public function update(Request $request, $id)
    {
        // Validasi data yang dikirim dengan pesan error kustom
        $request->validate(
            [
                'judul' => 'required|string|max:255',
                'short' => 'nullable|string|max:255',
                'isi' => 'required|string',
                'link' => 'nullable',
            ],
            [
                'judul.required' => 'Judul wajib diisi.',
                'judul.string' => 'Judul harus berupa teks.',
                'judul.max' => 'Judul tidak boleh lebih dari 255 karakter.',
                'short.string' => 'Ringkasan harus berupa teks.',
                'short.max' => 'Ringkasan tidak boleh lebih dari 255 karakter.',
                'isi.required' => 'Isi halaman wajib diisi.',
                'isi.string' => 'Isi halaman harus berupa teks.',
            ],
        );

        // Cari halaman berdasarkan ID
        $page = Page::findOrFail($id);

        // Pastikan nilai default untuk kolom 'link' jika tidak diisi
        $data = $request->all();
        $data['link'] = $data['link'] ?? ''; // Default ke string kosong jika null

        // Update data ke database
        $page->update($data);

        // Redirect kembali ke halaman index dengan pesan sukses
        return redirect()->route('pages')->with('message', 'Page updated successfully.')->with('alert-type', 'success');
    }

    public function destroy($id)
    {
        Page::findOrFail($id)->delete();
        return redirect()->route('pages')->with('message', 'Page deleted successfully.')->with('alert-type', 'success');
    }
}
