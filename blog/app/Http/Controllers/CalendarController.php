<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class CalendarController extends Controller
{
    function calendar(){
      return view('user/calendar');
    }


}
