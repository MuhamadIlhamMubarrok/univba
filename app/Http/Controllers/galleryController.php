<?php

namespace App\Http\Controllers;

use App\Models\Images;
use App\Models\Kontak;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class galleryController extends Controller
{
    function index()
    {
        $image = Images::orderBy('created_at', 'desc')->paginate(8);
        return view('admin.gallery.index', compact('image'));
    }

    function kontak()
    {
        $messages = Kontak::paginate(8);
        return view('admin.kontak.index', compact('messages'));
    }

    function create()
    {
        return view('admin.gallery.create');
    }

    function store(Request $request)
    {
        // Validasi input
        $validator = Validator::make(
            $request->all(),
            [
                'kategori' => 'required|string|max:255',
                'file' => 'required|image|mimes:jpeg,png,jpg,webp|max:2048',
            ],
            [
                'file.mimes' => 'File harus berupa gambar dengan format jpeg, png, jpg, atau webp.',
                'file.max' => 'Ukuran file tidak boleh lebih dari 2MB.',
                'file.required' => 'File gambar harus diunggah.',
            ],
        );

        // Jika validasi gagal, kembali ke halaman sebelumnya dengan pesan error
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Penyimpanan file gambar dengan nama hash
        $gambar = null;
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $file->storeAs('public/galleryFoto', $file->hashName());
            $gambar = $file->hashName(); // Simpan nama hash dari file
        }

        // Simpan data ke database
        Images::create([
            'kategori' => $request->kategori,
            'file' => $gambar,
            'active' => $request->has('active') ? '1' : '0',
            'created_at' => now(),
        ]);

        return redirect()->route('gallery.index')->with('message', 'Gambar berhasil ditambahkan ke galeri!')->with('alert-type', 'success');
    }

    function show($id)
    {
        $images = Images::findOrFail($id);
        return view('admin.gallery.edit', compact('images'));
    }

    public function update(Request $request, $id)
    {
        // Validasi input
        $validator = Validator::make(
            $request->all(),
            [
                'kategori' => 'required|string|max:255',
                'file' => 'required|image|mimes:jpeg,png,jpg,webp|max:2048',
            ],
            [
                'file.mimes' => 'File harus berupa gambar dengan format jpeg, png, jpg, atau webp.',
                'file.max' => 'Ukuran file tidak boleh lebih dari 2MB.',
                'file.required' => 'File gambar harus diunggah.',
            ],
        );

        // Mencari gambar berdasarkan ID
        $image = Images::findOrFail($id);

        // Jika ada file baru, hapus file lama dan simpan file baru
        if ($request->hasFile('file')) {
            // Hapus gambar lama jika ada
            if (Storage::exists('public/galleryFoto/' . $image->file)) {
                Storage::delete('public/galleryFoto/' . $image->file);
            }

            // Simpan file baru dengan nama hash
            $file = $request->file('file');
            $fileName = $file->hashName();
            $file->storeAs('public/galleryFoto', $fileName);
            $image->file = $fileName; // Perbarui nama file
        }

        // Update kategori dan status aktif
        $image->kategori = $request->kategori;

        // Pastikan nilai 'active' adalah '1' atau '0' sesuai dengan ENUM
        $image->active = $request->has('active') ? '1' : '0'; // Mengubah nilai menjadi string '1' atau '0'

        // Simpan perubahan
        $image->save();

        return redirect()->route('gallery.index')->with('message', 'Gambar berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $image = Images::findOrFail($id);
        if ($image->gambar) {
            Storage::delete('public/galleryFoto/' . $image->gambar);
        }
        // Hapus data dataPenyakitDbd
        $image->delete();
        return redirect()->route('gallery.index')->with('message', 'Gambar berhasil dihapus !')->with('alert-type', 'success');
    }

    public function destroyKontak($id)
    {
        $kontak = Kontak::findOrFail($id);
        // Hapus data dataPenyakitDbd
        $kontak->delete();
        return redirect()->route('kontak.index')->with('message', 'Kontak berhasil dihapus !')->with('alert-type', 'success');
    }
}
