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
    public function __construct()
    {
    }

    public function index()
    {
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

    public function success()
    {
        return view('Frontend.Success');
    }

    public function sejarah()
    {
        // Fetch main menu items (submenu_id=0)
        $mainMenus = Menu::where('submenu_id', 0)->orderBy('urutan', 'asc')->get();

        // Fetch all submenus
        $subMenus = Menu::where('submenu_id', '!=', 0)->get();

        return view('Frontend.sejarah', compact('mainMenus', 'subMenus'));
    }

    public function visimisi()
    {
        // Fetch main menu items (submenu_id=0)
        $mainMenus = Menu::where('submenu_id', 0)->orderBy('urutan', 'asc')->get();

        // Fetch all submenus
        $subMenus = Menu::where('submenu_id', '!=', 0)->get();

        return view('Frontend.visimisi', compact('mainMenus', 'subMenus'));
    }

    public function strukturorganisasi()
    {
        // Fetch main menu items (submenu_id=0)
        $mainMenus = Menu::where('submenu_id', 0)->orderBy('urutan', 'asc')->get();

        // Fetch all submenus
        $subMenus = Menu::where('submenu_id', '!=', 0)->get();

        return view('Frontend.struktur', compact('mainMenus', 'subMenus'));
    }

    public function kontak()
    {
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
        $request->validate(
            [
                'kelas' => 'required|string',
                'nama' => 'required|string|max:255',
                'jk' => 'required|string|in:L,P', 
                'kampus' => 'required|string|max:255',
                'alamat_ktp' => 'nullable|string|max:255',
                'alamat_dom' => 'nullable|string|max:255',
                'tmpt_lahir' => 'nullable|string|max:255',
                'ktp' => 'required|numeric|digits:16|unique:daftar,no_ktp',
                'jurusan' => 'required|string|max:255',
                'no_hp' => 'required|numeric|digits_between:10,13',
                'no_wa' => 'nullable|numeric|digits_between:10,13',
                'email' => 'required|email|max:255|unique:daftar,email',
                'agama' => 'nullable|string|max:50',
                'ibu' => 'required|string|max:255',
                'ayah' => 'required|string|max:255',
                'jaket' => 'nullable|string|max:10',
                'lulusan' => 'nullable|string|max:255',
                'biaya' => 'nullable|numeric',
                'info' => 'nullable|string|max:255',
                'kerja' => 'nullable|string|max:255',
                'jabatan' => 'nullable|string|max:255',
                'al_kerja' => 'nullable|string|max:255',
                'no_kantor' => 'nullable|numeric|digits_between:10,13',
            ],
            [
                // Pesan error untuk validasi setiap field
                'kelas.required' => 'Kelas wajib diisi.',
                'kelas.string' => 'Kelas harus berupa teks.',

                'nama.required' => 'Nama lengkap wajib diisi.',
                'nama.string' => 'Nama lengkap harus berupa teks.',
                'nama.max' => 'Nama lengkap maksimal 255 karakter.',

                'jk.required' => 'Jenis kelamin wajib diisi.',
                'jk.string' => 'Jenis kelamin harus berupa teks.',
                'jk.in' => 'Jenis kelamin harus L (Laki-laki) atau P (Perempuan).',

                'kampus.required' => 'Nama kampus wajib diisi.',
                'kampus.string' => 'Nama kampus harus berupa teks.',
                'kampus.max' => 'Nama kampus maksimal 255 karakter.',

                'alamat_ktp.string' => 'Alamat KTP harus berupa teks.',
                'alamat_ktp.max' => 'Alamat KTP maksimal 255 karakter.',

                'alamat_dom.string' => 'Alamat domisili harus berupa teks.',
                'alamat_dom.max' => 'Alamat domisili maksimal 255 karakter.',

                'tmpt_lahir.string' => 'Tempat lahir harus berupa teks.',
                'tmpt_lahir.max' => 'Tempat lahir maksimal 255 karakter.',

                'ktp.required' => 'Nomor KTP wajib diisi.',
                'ktp.numeric' => 'Nomor KTP harus berupa angka.',
                'ktp.digits' => 'Nomor KTP harus terdiri dari 16 angka.',
                'ktp.unique' => 'Nomor KTP ini sudah terdaftar.',

                'jurusan.required' => 'Jurusan wajib diisi.',
                'jurusan.string' => 'Jurusan harus berupa teks.',
                'jurusan.max' => 'Jurusan maksimal 255 karakter.',

                'no_hp.required' => 'Nomor HP wajib diisi.',
                'no_hp.numeric' => 'Nomor HP harus berupa angka.',
                'no_hp.digits_between' => 'Nomor HP harus antara 10 hingga 13 digit.',

                'no_wa.numeric' => 'Nomor WhatsApp harus berupa angka.',
                'no_wa.digits_between' => 'Nomor WhatsApp harus antara 10 hingga 13 digit.',

                'email.required' => 'Alamat email wajib diisi.',
                'email.email' => 'Format email tidak valid.',
                'email.max' => 'Email maksimal 255 karakter.',
                'email.unique' => 'Alamat email ini sudah terdaftar.',

                'agama.string' => 'Agama harus berupa teks.',
                'agama.max' => 'Agama maksimal 50 karakter.',

                'ibu.required' => 'Nama ibu wajib diisi.',
                'ibu.string' => 'Nama ibu harus berupa teks.',
                'ibu.max' => 'Nama ibu maksimal 255 karakter.',

                'ayah.required' => 'Nama ayah wajib diisi.',
                'ayah.string' => 'Nama ayah harus berupa teks.',
                'ayah.max' => 'Nama ayah maksimal 255 karakter.',

                'jaket.string' => 'Ukuran jaket harus berupa teks.',
                'jaket.max' => 'Ukuran jaket maksimal 10 karakter.',

                'lulusan.string' => 'Lulusan harus berupa teks.',
                'lulusan.max' => 'Lulusan maksimal 255 karakter.',

                'biaya.numeric' => 'Biaya harus berupa angka.',

                'info.string' => 'Informasi tambahan harus berupa teks.',
                'info.max' => 'Informasi tambahan maksimal 255 karakter.',

                'kerja.string' => 'Pekerjaan harus berupa teks.',
                'kerja.max' => 'Pekerjaan maksimal 255 karakter.',

                'jabatan.string' => 'Jabatan harus berupa teks.',
                'jabatan.max' => 'Jabatan maksimal 255 karakter.',

                'al_kerja.string' => 'Alamat kerja harus berupa teks.',
                'al_kerja.max' => 'Alamat kerja maksimal 255 karakter.',

                'no_kantor.numeric' => 'Nomor telepon kantor harus berupa angka.',
                'no_kantor.digits_between' => 'Nomor telepon kantor harus antara 10 hingga 13 digit.',
            ],
        );

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

        return redirect()->route('registration.show')->with('success', 'Pendaftaran berhasil.')->withInput();
    }
}
