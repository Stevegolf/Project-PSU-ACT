<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdgalleryController extends Controller
{
    function adgallery(){
      return view('admin/gallery/adgallery');
    }
}
