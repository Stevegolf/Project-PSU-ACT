<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Event;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $objs = Event::all();
        return view('admin.event.event')->with('objs',$objs);
        // return view('admin.event.event');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //return view('event.create');
        return view('admin.event.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)

    {
        //insert database
        $obj              = new Event();
        $obj->act_name    =$request->input('act_name');
        $obj->act_dep     =$request->input('act_dep');
        $obj->act_locat   =$request->input('act_locat');
        $obj->date_begin  =$request->input('date_begin');
        $obj->time_begin  =$request->input('time_begin');
        $obj->date_end    =$request->input('date_end');
        $obj->time_end    =$request->input('time_end');
        $obj->act_sem     =$request->input('act_sem');
        $obj->act_year    =$request->input('act_year');
        $obj->act_type    =$request->input('act_type');
        $obj->act_req     =$request->input('act_req');
        $obj->act_hour    =$request->input('act_hour');
        $obj->act_note    =$request->input('act_note');
        $obj->save();
        return view('admin.event.event');
        // dd($obj->act_name );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $objs = Event::all();
        return view('admin.event.event')->with('objs',$objs);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($act_id)
    {
         $obj = Event::find($act_id);
        //load view to edit
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $act_id)
    {
        $obj             = Event::find($act_id);
        $obj->act_name    =$request[act_name];
        $obj->act_dep     =$request[act_dep];
        $obj->act_locat   =$request[act_locat];
        $obj->date_begin  =$request[date_begin];
        $obj->time_begin  =$request[time_begin];
        $obj->date_end    =$request[date_end];
        $obj->time_end    =$request[time_end];
        $obj->act_sem     =$request[act_sem];
        $obj->act_year    =$request[act_year];
        $obj->act_type    =$request[act_type];
        $obj->act_req     =$request[act_req];
        $obj->act_hour    =$request[act_hour];
        $obj->act_note    =$request[act_note];
        $obj->user;
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($act_id)
    //delete database
    {
        $obj = Event::find($act_id);
        $obj->delete();
    }
}
