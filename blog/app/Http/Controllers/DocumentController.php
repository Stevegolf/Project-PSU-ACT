<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class DocumentController extends Controller
{
    function document(){
      return view('user/document');
    }


}
