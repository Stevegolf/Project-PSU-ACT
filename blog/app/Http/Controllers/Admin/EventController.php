<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Event;
use App\Type;
use Illuminate\Support\Facades\DB;


class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // $objs = Event::all();
        // return view('admin.event.event')->with('objs',$objs);
        // return view('admin.event.event');
        // $users=DB::table('users')
        //         ->leftJoin('events', 'users.id', '=', 'events.user_id')
        //         ->get();
        $objs=Event::join('users','events.user_id','=','users.id')
                ->select('events.id',
                    'events.act_name',
                    'act_dep',
                    'users.name')
                ->get();
        return view('admin.event.event')
                ->with('objs',$objs);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $types = Type::all();
        return view('admin.event.create')->with('types',$types);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)

    // {
    //     //insert database
    //     $objs              = new Event();
    //     $objs->act_name    =$request->input('act_name');
    //     $objs->act_dep     =$request->input('act_dep');
    //     $objs->act_locat   =$request->input('act_locat');
    //     $objs->dateTime_begin=$request->input('dateTime_begin');
    //     $objs->dateTime_end=$request->input('dateTime_end');
    //     $objs->act_sem     =$request->input('act_sem');
    //     $objs->act_year    =$request->input('act_year');
    //     $objs->act_req     =$request->input('act_req');
    //     $objs->act_hour    =$request->input('act_hour');
    //     $objs->act_note    =$request->input('act_note');
    //     //$objs->act_img     =$request->input('act_img');
    //     //$objs->type_id     =$request->input('type_id');
    //     $objs->user_id     =$request->input('user_id');
    //     $objs->save();
    //     return redirect('/events');
    //     // dd($obj->act_name );
    // }
    {
        Event::create($request->all());
        $types = $request->input('types');
        $event = Event::all()->last();     //get the lastest record
        $event->types()->attach($types);
        return redirect('events');
         }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id){

        // $event = DB::table('events')
        //     ->Join('types', 'types.id', '=', 'events.type_id')
        //     ->select('act_name','act_dep','act_locat','dateTime_begin','dateTime_end','act_sem',
        //        'act_year','nametype','act_req','act_hour','act_note')
        //     ->get();
        //     dd($event);
        $event = Event::findOrFail($id);
        return view('admin.event.show')->with('event',$event);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $event = Event::findOrFail($id);
         $types = Type::all();
         return view('admin.event.edit',compact('event','types','id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $event = Event::findOrFail($id);
        $types = $request->input('types');    
        $event->types()->sync($types);
        $event->update($request->all());    
        return redirect('events');   

    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    //delete database
    {
       Event::destroy($id);
       return redirect('events');

    }
}
