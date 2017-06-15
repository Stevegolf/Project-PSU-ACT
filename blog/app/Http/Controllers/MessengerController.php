<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessengerController extends Controller
{
    function messenger(){
      return view('admin/messenger/messenger');
    }
}
