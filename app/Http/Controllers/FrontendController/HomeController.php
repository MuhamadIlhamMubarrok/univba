<?php

namespace App\Http\Controllers\FrontendController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Berita;
use App\Models\Beranda;
use App\Models\Daftar;
use App\Models\Menu;
use App\Models\Images;
use App\Models\Page;

class HomeController extends Controller
{
    
    public function __construct(){
         
    }

    public function index(){
        // Fetching data for berita and program studi (examples)
        $berita = Berita::all(); // Adjust query as needed
         // Fetch the data from the 'beranda' table with a join to the 'page' table
         $beranda = Beranda::leftJoin('page', 'page.page_id', '=', 'beranda.page_id')
         ->where('tipe', 'posisi1')
         ->select('beranda.*', 'page.*') // Select specific fields if necessary
         ->first();

        // Fetch main menu items (submenu_id=0)
        $mainMenus = Menu::where('submenu_id', 0)->orderBy('urutan', 'asc')->get();

        // Fetch all submenus
        $subMenus = Menu::where('submenu_id', '!=', 0)->get();
        $images = Images::where('kategori', 'Event Kampus')->get();
        $galleryImages = Images::all();

 
         return view('Frontend.home', compact('berita', 'beranda', 'mainMenus', 'subMenus', 'images', 'galleryImages'));
    }
    
    public function success(){
     
        return view('Frontend.Success');
    }

    public function sejarah(){

        // Fetch main menu items (submenu_id=0)
        $mainMenus = Menu::where('submenu_id', 0)->orderBy('urutan', 'asc')->get();

        // Fetch all submenus
        $subMenus = Menu::where('submenu_id', '!=', 0)->get();
 
         return view('Frontend.sejarah', compact('mainMenus', 'subMenus'));
    }

    public function visimisi(){

        // Fetch main menu items (submenu_id=0)
        $mainMenus = Menu::where('submenu_id', 0)->orderBy('urutan', 'asc')->get();

        // Fetch all submenus
        $subMenus = Menu::where('submenu_id', '!=', 0)->get();
 
         return view('Frontend.visimisi', compact('mainMenus', 'subMenus'));
    }

    public function strukturorganisasi(){

        // Fetch main menu items (submenu_id=0)
        $mainMenus = Menu::where('submenu_id', 0)->orderBy('urutan', 'asc')->get();

        // Fetch all submenus
        $subMenus = Menu::where('submenu_id', '!=', 0)->get();
 
         return view('Frontend.struktur', compact('mainMenus', 'subMenus'));
    }

    public function kontak(){

        // Fetch main menu items (submenu_id=0)
        $mainMenus = Menu::where('submenu_id', 0)->orderBy('urutan', 'asc')->get();

        // Fetch all submenus
        $subMenus = Menu::where('submenu_id', '!=', 0)->get();
 
         return view('Frontend.kontak', compact('mainMenus', 'subMenus'));
    }

    public function brosur(){

        // Fetch main menu items (submenu_id=0)
        $mainMenus = Menu::where('submenu_id', 0)->orderBy('urutan', 'asc')->get();

        // Fetch all submenus
        $subMenus = Menu::where('submenu_id', '!=', 0)->get();
 
         return view('Frontend.brosur', compact('mainMenus', 'subMenus'));
    }

    public function pageShow($id)
    {
        // Fetch main menu items (submenu_id=0)
        $mainMenus = Menu::where('submenu_id', 0)->orderBy('urutan', 'asc')->get();

        // Fetch all submenus
        $subMenus = Menu::where('submenu_id', '!=', 0)->get();

        $page = Page::findOrFail($id); // Fetch page by ID
        return view('Frontend.page', compact('mainMenus', 'subMenus', 'page')); // Pass the data to the view
    }
 
     public function showForm(Request $request)
    {
        // Ambil nilai "step" dari query string, default ke 1 jika tidak ada
        $step = $request->query('step', 1);
        $pilihan = '';
        $mainMenus = Menu::where('submenu_id', 0)->orderBy('urutan', 'asc')->get();
        $subMenus = Menu::where('submenu_id', '!=', 0)->get();

        $kelas = $request->kelas;

        return view('Frontend.daftaronline', compact('step', 'pilihan', 'mainMenus', 'subMenus', 'kelas'));
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

        $data = [
            'kelas' => $request->kelas,
            'nama_leng' => $request->nama,
            'kampus' => $request->kampus,
            'al_ktp' => $request->alamat_ktp,
            'al_dom' => $request->alamat_dom,
            'j_kel' => $request->jk,
            'tmpt_lahir' => $request->tmpt_lahir,
            'no_ktp' => $request->ktp,
            'jurusan' => $request->jurusan,
            'no_hp' => $request->no_hp,
            'no_wa' => $request->no_wa,
            'email' => $request->email,
            'agama' => $request->agama,
            'ibu' => $request->ibu,
            'ayah' => $request->ayah,
            'jaket' => $request->jaket,
            'lulusan' => $request->lulusan,
            'biaya' => $request->biaya,
            'info' => $request->info,
            'kerja' => $request->kerja,
            'jabatan' => $request->jabatan,
            'al_kerja' => $request->al_kerja,
            'no_kantor' => $request->no_kantor,
        ];

        Daftar::create($data);

        // Lakukan penyimpanan ke database atau tindakan lain yang dibutuhkan

        return redirect()->route('registration.show')->with('success', 'Pendaftaran berhasil.');
    }

}