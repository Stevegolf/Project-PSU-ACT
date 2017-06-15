<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManagegalleryController extends Controller
{
    function managegallery(){
      return view('admin/gallery/managegallery');
    }
}
