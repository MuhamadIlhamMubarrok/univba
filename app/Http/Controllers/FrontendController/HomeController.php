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
 


}