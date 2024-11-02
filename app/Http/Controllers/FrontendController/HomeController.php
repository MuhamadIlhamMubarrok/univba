<?php

namespace App\Http\Controllers\FrontendController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Berita;
use App\Models\Beranda;
use App\Models\Menu;
use App\Models\Images;

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
 


}