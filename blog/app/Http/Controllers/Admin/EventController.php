<?php
namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Event;
use App\Type;
use App\Department;
use Illuminate\Support\Facades\DB;
use File;

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
        return view('admin.event.event',compact('objs','page','events','NUM_PAGE'));
        // $objs=DB::table('events')
        //         ->join('users','events.user_id','=','users.id')
        //         ->join('departments','events.department_id','=','departments.id')
        //         ->select('events.id','events.act_name','departments.dep_name','users.name')
        //         ->get();

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

    {

        Event::create($request->all());
        $event = Event::all()->last();//get the lastest record
        $types = $request->input('types');
        $event->types()->attach($types);
        $event->act_img = '-';
        $act_img = $request->file('act_img');
        $act_img->move(public_path('images/events/type'),'events-'.$event->id.'.png');
        $event->act_img = 'events-'.$event->id.'.png';
        $event->save();
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
        return view('admin.event.show',compact('events'));
        // $event = Event::findOrFail($id);
        // return view('user/activity/show',compact('event'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         //$event = Event::findOrFail($id);
          $event=Event::with('department')->with('types')->find($id);
          $types = Type::all();
          $departs=$event->department->dep_name;
          return view('admin.event.edit',compact('event','id','types','departs'));
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
       File::delete(public_path('images/events/type/events-'.$id.'.png'));
       Event::destroy($id);
       return redirect('events');

    }



    public function activity(){
        $events = Event::all()->sortByDesc("created_at");
        return view('user/activity/activity',compact('events'));

    }

     public function showactivity($id){
        $event = Event::findOrFail($id);
        return view('user/activity/show',compact('event'));
    }


}

