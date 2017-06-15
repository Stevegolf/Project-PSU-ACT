<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManagedocumentController extends Controller
{
    function managedocument(){
      return view('admin/document/managedocument');
    }
}
