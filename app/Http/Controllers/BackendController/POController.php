<?php

namespace App\Http\Controllers\BackendController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Daftar;
use Barryvdh\DomPDF\Facade\Pdf;

class POController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        return view('admin/dashboard', compact('user'));
    }

    public function daftar(Request $request)
    {
        $query = Daftar::query();
        
        if ($request->filled('start_date') && $request->filled('end_date')) {
            $query->whereBetween('created_at', [$request->start_date, $request->end_date]);
        }
    
        if ($request->filled('search')) {
            $search = $request->input('search');
            $query->where(function($q) use ($search) {
                $q->where('nama_leng', 'like', "%{$search}%")
                  ->orWhere('no_hp', 'like', "%{$search}%")
                  ->orWhere('email', 'like', "%{$search}%")
                  ->orWhere('j_kel', 'like', "%{$search}%")
                  ->orWhere('kampus', 'like', "%{$search}%")
                  ->orWhere('kelas', 'like', "%{$search}%");
            });
        }
    
        $query->orderBy('created_at', 'desc');
    
        $daftars = $query->paginate(8);
        $user = auth()->user();
        return view('admin.daftar', compact('daftars', 'user'));
    }

    public function detil($id)
    {
        $daftar = Daftar::findOrFail($id);
        return view('admin.detil', compact('daftar'));
    }

    public function cetak(Request $request)
    {
        // Bersihkan session error sebelumnya
        session()->forget('error');
        session()->forget('success');

        // Logika filter dan generate PDF
        $query = Daftar::query();

        if ($request->has('start_date') && $request->has('end_date')) {
            $query->whereBetween('created_at', [$request->start_date, $request->end_date]);
        }

        $pdf = PDF::loadView('admin.cetak', compact('daftars'));
        return $pdf->download('laporan_pendaftar.pdf');
    }

    public function hapus($id)
    {
        try {
            Daftar::findOrFail($id)->delete();
            return redirect()->route('daftar')->with('success', 'Data berhasil dihapus.');
        } catch (\Exception $e) {
            return redirect()->route('daftar')->with('error', 'Data gagal dihapus.');
        }
    }
}
