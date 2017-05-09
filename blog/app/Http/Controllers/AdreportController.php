<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdreportController extends Controller
{
    function adreport(){
      return view('admin/adreport');
    }
}
