<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Event;
use App\Type;
use App\Department;
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

        $NUM_PAGE = 12;
        $events = Event::orderBy('updated_at','DESC')->paginate($NUM_PAGE);
        $page = $request->input('page');
        $page = ($page != null)?$page:1;
        // $objs=DB::table('events')
        //         ->join('users','events.user_id','=','users.id')
        //         ->join('departments','events.department_id','=','departments.id')
        //         ->select('events.id','events.act_name','departments.dep_name','users.name')
        //         ->get();
        return view('admin.event.event',compact('objs','page','events','NUM_PAGE'));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $types = Type::all();
        $departs = Department::all();
        return view('admin.event.create',compact('types','departs'));
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
        $events=Event::with('department')->with('types')->find($id);
        // dd($events->department->dep_name);
        // $events = DB::table('events')
        //      ->join('departments','events.id','=','departments.id')
        //      ->join('event_type','events.id','=','event_type.event_id')
        //      ->join('types','event_type.type_id','=','types.id')
        //      ->where('events.id',$id)->first();
        //      dd($events);

        return view('admin.event.show',compact('events'));
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
         return view('admin.event.edit',compact('event','id','types'));
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
        if ($types == null) {
            $pt = Type::all();
            foreach( $pt as $t )
                $event->types()->detach($t->id);
        }
        else{
            $event->types()->sync($types);
        }

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
