<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManagenewsController extends Controller
{
   function managenews(){
      return view('admin/news/managenews');
    }
}
