<?php

namespace App\Http\Controllers;

use App\Models\Images;
use Illuminate\Http\Request;

class galleryController extends Controller
{
    function index(){
        $image = Images::all();
        return view('admin.gallery.index', compact('image'));
    }
}
