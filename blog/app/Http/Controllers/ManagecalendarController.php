<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManagecalendarController extends Controller
{
	 function managecalendar(){
      return view('admin/calendar/managecalendar');
    }
}
