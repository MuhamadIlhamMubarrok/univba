<?php

namespace App\Http\Controllers\FrontendController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Berita;
use App\Models\Beranda;
use App\Models\Menu;

class HomeController extends Controller
{
    
    public function __construct(){
         
    }

    public function index(){
        // Fetching data for berita and program studi (examples)
        $berita = Berita::all(); // Adjust query as needed
        $beranda = Beranda::with('page')->where('tipe', 'posisi1')->first();
        // Fetch main menu items (submenu_id=0)
        $mainMenus = Menu::where('submenu_id', 0)->orderBy('urutan', 'asc')->get();

        // Fetch all submenus
        $subMenus = Menu::where('submenu_id', '!=', 0)->get();

 
         return view('Frontend.home', compact('berita', 'beranda', 'mainMenus', 'subMenus'));
    }
    
    public function success(){
     
        return view('Frontend.Success');
    }
 
     public function showForm(Request $request)
    {
        // Ambil nilai "step" dari query string, default ke 1 jika tidak ada
        $step = $request->query('step', 1);
        $pilihan = '';
        $mainMenus = Menu::where('submenu_id', 0)->orderBy('urutan', 'asc')->get();
         $subMenus = Menu::where('submenu_id', '!=', 0)->get();

        // Tentukan pilihan kelas jika "step" adalah 2
        if ($step == 2) {
            $kelas = $request->input('kelas');
            switch ($kelas) {
                case 'reguler':
                    $pilihan = 'Kelas Reguler Pagi';
                    break;
                case 'sore':
                    $pilihan = 'Kelas Reguler Sore';
                    break;
                case 'karyawan':
                    $pilihan = 'Kelas Karyawan';
                    break;
                case 'rpl':
                    $pilihan = 'Kelas RPL';
                    break;
                default:
                    $pilihan = '';
                    break;
            }
        }

        // Kirim variabel $step dan $pilihan ke view
        return view('Frontend.daftaronline', compact('step', 'pilihan', 'mainMenus', 'subMenus'));
    }

    public function storeRegistration(Request $request)
    {
        // Validasi dan simpan data pendaftaran di sini
        $data = $request->validate([
            'kelas' => 'required|string',
            'nama' => 'required|string',
            'jk' => 'required|string',
            'kampus' => 'required|string',
            // Tambahkan validasi untuk semua input yang diperlukan
        ]);

        // Lakukan penyimpanan ke database atau tindakan lain yang dibutuhkan

        return redirect()->route('registration.show')->with('success', 'Pendaftaran berhasil.');
    }

}