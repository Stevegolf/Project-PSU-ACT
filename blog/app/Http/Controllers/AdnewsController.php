<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdnewsController extends Controller
{
   function adnews(){
      return view('admin/adnews');
    }
}
