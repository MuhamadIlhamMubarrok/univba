<?php

namespace App\Http\Controllers\BackendController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Berita;
use HTMLPurifier;
use HTMLPurifier_Config;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class BeritaController extends Controller
{
    public function index()
    {
        $beritas = Berita::orderBy('tanggal_berita', 'desc')->paginate(10); // Use paginate, not get or all
        return view('admin.berita.index', compact('beritas'));
    }

    public function create()
    {
        $token = mt_rand(100000, 999999);
        $secret_key = config('app.secret_key'); // Add a secret key in config if needed
        return view('admin.berita.create', compact('token', 'secret_key'));
    }

    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'judul' => 'required|string|max:255',
            'ringkasan' => 'required|string',
            'content' => 'required|string',
            'tanggal_berita' => 'required|date',
            'file_foto' => 'nullable|mimes:webp|max:2048',
        ]);

        // Konfigurasi HTMLPurifier untuk membersihkan konten
        $config = HTMLPurifier_Config::createDefault();
        $config->set('HTML.Allowed', 'p,strong,em,a[href|title],ul,ol,li,br,img[src|alt|title]'); // Tag yang diizinkan
        $purifier = new HTMLPurifier($config);

        // Sanitasi konten CKEditor
        $sanitizedContent = $purifier->purify($request->input('content'));

        // Menyiapkan data untuk disimpan
        $data = $request->all();
        $data['content'] = $sanitizedContent; // Menyimpan konten yang sudah disanitasi

        // Proses upload file jika ada
        if ($request->hasFile('file_foto')) {
            $data['file_foto'] = $request->file('file_foto')->store('images/berita', 'public');
        }

        // Simpan data ke dalam model Berita
        Berita::create($data);

        // Redirect dengan pesan sukses
        return redirect()->route('admin.berita.index')->with('message', 'Berita berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $berita = Berita::findOrFail($id);
        $token = mt_rand(100000, 999999);
        $secret_key = config('app.secret_key');
        return view('admin.berita.edit', compact('berita', 'token', 'secret_key'));
    }

    public function update(Request $request, $id)
    {
        // Temukan berita berdasarkan ID atau gagal jika tidak ditemukan
        $berita = Berita::findOrFail($id);

        // Validasi input
        $request->validate([
            'judul' => 'required|string|max:255',
            'ringkasan' => 'required|string',
            'content' => 'required|string',
            'tanggal_berita' => 'required|date',
            'file_foto' => 'nullable|mimes:webp|max:2048',
        ]);

        // Konfigurasi HTMLPurifier untuk membersihkan konten
        $config = HTMLPurifier_Config::createDefault();
        $config->set('HTML.Allowed', 'p,strong,em,a[href|title],ul,ol,li,br,img[src|alt|title]'); // Tag yang diizinkan
        $purifier = new HTMLPurifier($config);

        // Sanitasi konten CKEditor
        $sanitizedContent = $purifier->purify($request->input('content'));

        // Menyiapkan data untuk diperbarui
        $data = $request->all();
        $data['content'] = $sanitizedContent; // Menyimpan konten yang sudah disanitasi

        // Proses upload file baru jika ada
        if ($request->hasFile('file_foto')) {
            // Hapus file lama jika ada
            if ($berita->file_foto) {
                Storage::disk('public')->delete($berita->file_foto);
            }

            // Simpan file baru
            $data['file_foto'] = $request->file('file_foto')->store('images/berita', 'public');
        }

        // Update data di dalam model Berita
        $berita->update($data);

        // Redirect dengan pesan sukses
        return redirect()->route('admin.berita.index')->with('message', 'Berita berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $berita = Berita::findOrFail($id);
        $berita->delete();
        return redirect()->route('admin.berita.index')->with('message', 'Berita berhasil dihapus.');
    }
}
