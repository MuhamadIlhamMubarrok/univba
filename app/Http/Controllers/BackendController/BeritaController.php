<?php


namespace App\Http\Controllers\BackendController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Berita;
use Illuminate\Support\Facades\Session;

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
        $request->validate([
            'judul' => 'required|string|max:255',
            'ringkasan' => 'required|string',
            'content' => 'required',
            'tanggal_berita' => 'required|date',
            'file_foto' => 'nullable|mimes:webp|max:2048',
        ]);

        $data = $request->all();
        if ($request->hasFile('file_foto')) {
            $data['file_foto'] = $request->file('file_foto')->store('images/berita', 'public');
        }

        Berita::create($data);
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
        $berita = Berita::findOrFail($id);

        $request->validate([
            'judul' => 'required|string|max:255',
            'ringkasan' => 'required|string',
            'content' => 'required',
            'tanggal_berita' => 'required|date',
            'file_foto' => 'nullable|mimes:webp|max:2048',
        ]);

        $data = $request->all();
        if ($request->hasFile('file_foto')) {
            $data['file_foto'] = $request->file('file_foto')->store('images/berita', 'public');
        }

        $berita->update($data);
        return redirect()->route('admin.berita.index')->with('message', 'Berita berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $berita = Berita::findOrFail($id);
        $berita->delete();
        return redirect()->route('admin.berita.index')->with('message', 'Berita berhasil dihapus.');
    }
}
