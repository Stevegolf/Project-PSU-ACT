<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    function news(){
      return view('user/news');
    }


}