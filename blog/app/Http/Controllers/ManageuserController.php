<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManageuserController extends Controller
{
    function manageuser(){
      return view('admin/manageuser/manageuser');
    }
}
