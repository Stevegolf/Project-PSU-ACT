<?php namespace App\Http\Controllers\Admins;
use App\Http\Controllers\AdminsController;
use App\Models\Users;
use Illuminate\Http\Request;
use App\Http\Requests\Admins\userRequest;
use Auth;
 
class  UserController extends AdminsController {
        // สำหรับแสดงรายชื่อสมาชิก หรือ admin ที่มีอยู่ในปัจจุบัน
    public function getIndex(){
                      $user = Users::orderBy('username')->paginate(50);//ทำการกำหนด จำนวน 50 แถวต่อ 1 หน้า
        return view('admin.user.index',['user'=>$user]);
    }
 
       // สำหรับแสดงหน้า Form สำหรับ เพิ่ม และแก้ไขข้อมูล สมาชิก
    public function getForm($id = 0){
        if($id != 0){
            $user = Users::where('id',$id)->first();
            if(!$user) return redirect('admin/user/form');
        }else{ $user = false;}
        $data = array('id' => $id,'user' => $user);
        return view('admin.user.form',$data);
    }
 
        //สำหรับแก้ไขข้อมูล Profile ของตัวเอง
    public function getProfile(){
        $id = Auth::user()->id;
        $user = Users::where('id',$id)->first();
        if(!$user) return redirect('admin/user/index');
        $data = array('id' => $id,'user' => $user);
        return view('admin.user.form',$data);
    }
 
        //สำหรับ การเพิ่ม และแก้ไข โดยตรวจสอบว่ามีการส่งค่า id มาหรือไม่ และให้ทำการตรวจสอบจากฐานข้อมูล ถ้าไม่มีให้บันทึกใหม่ แต่ถ้ามีข้อมูลอยู่แล้วให้ทำการอัพเดทข้อมูล โดยใช้การ Validate จาก userRequest
    public function postForm(userRequest $request){
        $id = $request->get('id');
        $chk = Users::where('id',$id)->first();
        $user = $chk ? $chk : new Users;
        $user->name      = $request->get('name');
        $user->username  = $request->get('username');
        $user->email = $request->get('email');
        if($request->get('password') != '')  $user->password  = bcrypt($request->get('password'));
        $user->tel       = $request->get('tel');
        $user->active    = $request->has('active') ? 'Y' : 'N';
        $user->type  = 'admin';
        $user->save();
        return redirect()->to('admin/user');
    }
 
        //สำหรับทำการ ลบข้อมูลแบบ หลายข้อมูลพร้อมกัน
    public function postAction(Request $request){
        $arr = $request->get('id');
        if($request->exists('delete') && $arr){
            foreach($arr as $key => $id){
                Users::where('id',$id)->delete();
            }
        }
        return redirect()->back();
    }
 
          //สำหรับทำการ ลบข้อมูลแบบ 1 record
    public function getDelete($id){
        Users::where('id',$id)->delete();
        return redirect()->back();
    }
}