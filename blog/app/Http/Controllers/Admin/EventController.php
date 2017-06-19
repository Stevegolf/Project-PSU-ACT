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
        $objs              = new Event();
        $objs->act_name    =$request->input('act_name');
        $objs->act_dep     =$request->input('act_dep');
        $objs->act_locat   =$request->input('act_locat');
        $objs->dateTime_begin=$request->input('dateTime_begin');
        $objs->dateTime_end=$request->input('dateTime_end');
        $objs->act_sem     =$request->input('act_sem');
        $objs->act_year    =$request->input('act_year');
        $objs->act_type    =$request->input('act_type');
        $objs->act_req     =$request->input('act_req');
        $objs->act_hour    =$request->input('act_hour');
        $objs->act_note    =$request->input('act_note');
        //$objs->act_img     =$request->input('act_img');

        $objs->save();
        return redirect('/events');
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
        $obj->dateTime_begin  =$request[dateTime_begin];
        $obj->dateTime_end    =$request[dateTime_end];
        $obj->act_sem     =$request[act_sem];
        $obj->act_year    =$request[act_year];
        $obj->act_type    =$request[act_type];
        $obj->act_req     =$request[act_req];
        $obj->act_hour    =$request[act_hour];
        $obj->act_note    =$request[act_note];
        $obj->act_img     =$request[act_img];
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
