<?php
namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use DB;

class ManageuserController extends Controller
{

    public function index(Request $request)
    {
        $users = User::orderBy('name')->paginate(50);
        return view('admin.manageuser.manageuser',compact('users'));
    }


     public function create()
    {

        $users = User::all();
        return view('admin.manageuser.create',compact('users'));
    }


	public function destroy($id)
    {
       User::destroy($id);
       return redirect('manageuser');

    }



}
