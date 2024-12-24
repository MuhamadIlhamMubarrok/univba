<?php

namespace App\Http\Controllers\BackendController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Page;
use App\Models\Beranda;

class BerandaController extends Controller
{
    public function index()
    {
        $berandas = Beranda::with('page')->paginate(5); // Assuming Beranda has a relation with Page
        $user = auth()->user();
        return view('admin.beranda.index', compact('berandas', 'user'));
    }

    public function create()
    {
        $pages = Page::orderBy('judul', 'ASC')->get();
        $token = rand(100000, 999999);
        $user = auth()->user();
        return view('admin.beranda.create', compact('pages', 'token', 'user'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'page' => 'required',
            'posisi' => 'required',
            'urut' => 'required|integer',
        ]);

        Beranda::create([
            'page_id' => $validated['page'],
            'tipe' => $validated['posisi'],
            'urut' => $validated['urut'],
            'active' => $request->has('active') ? 1 : 0,
        ]);

        return redirect()->route('beranda')->with('success', 'Beranda added successfully');
    }

    public function edit($id)
    {
        $beranda = Beranda::with('page')->findOrFail($id);
        $pages = Page::orderBy('judul', 'ASC')->get();
        $token = rand(100000, 999999);
        return view('admin.beranda.edit', compact('beranda', 'pages', 'token'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'page' => 'required',
            'posisi' => 'required',
            'urut' => 'required|integer',
        ]);

        $beranda = Beranda::findOrFail($id);
        $beranda->update([
            'page_id' => $validated['page'],
            'tipe' => $validated['posisi'],
            'urut' => $validated['urut'],
            'active' => $request->has('active') ? 1 : 0,
        ]);

        return redirect()->route('beranda')->with('success', 'Beranda updated successfully');
    }

    public function destroy($id)
    {
        $beranda = Beranda::findOrFail($id);

        if ($beranda->delete()) {
            return redirect()->route('beranda')->with('success', 'Data berhasil dihapus.');
        } else {
            return redirect()->route('beranda')->with('error', 'Data gagal dihapus.');
        }
    }
}
