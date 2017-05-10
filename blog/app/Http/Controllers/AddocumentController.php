<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AddocumentController extends Controller
{
    function addocument(){
      return view('admin/document/addocument');
    }
}
