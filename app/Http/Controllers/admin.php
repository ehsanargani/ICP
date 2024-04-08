<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Validator, Auth, Redirect;
use App\User;
use App\role;
use App\notification;
use App\regulations;
use App\message;
use App\Certification;


class admin extends Controller
{
        public function __construct()
    {
        $this->middleware('auth');
    }
    //
            /*=======================User===============================*/
            /*==========================================================*/
            /*==========================================================*/

    public function user_index(){
        $users=user::join('roles','users.role_id','roles.id')
            ->select(
                'users.id',
                'users.name',
                'users.lastname',
                'users.Email',
                'roles.name as role_name',
                'roles.id as role_id'
            )->get();
        return view('admin.user_index',compact('users'));
    }
    public function add_user(){
        $roles=role::get(); 
        return view('admin.add_user',compact('roles'));
    }
    public function insert_user(Request $request){
        $users=User::get();
       
        foreach($users as $user){
            
            if($user->email==$request->Email){
                 $roles=role::get(); 
                return view('admin.add_user',compact('roles'))->withErrors([ '1']);
            }
        }
    
         if (isset($request->personel_pic)) {
            $imageName = time() . '.' . $request->personel_pic->getClientOriginalExtension();
            $tmp = explode('.', $imageName);
            $file_extension = end($tmp);
            $formats = array('jpg', 'JPG', 'gif', 'GIF', 'PNG', 'png');
            if (!in_array($file_extension, $formats)) {
                return Redirect::back()->withInput(Input::all())->with('error', 'فایل آپلود شده مورد تائید نمی باشد.');
            }
            $request->personel_pic->move('images/user/', $imageName);
        }
            $user=new User();
            $user->name = $request->name;
            $user->lastname = $request->lastname;
            $user->Email = $request->Email;
            $user->role_id = $request->role;
            $user->password = bcrypt($request->password);
            $user->co_name='user';
      
        if (isset($request->personel_pic)) {
            $user->pic = $imageName;
        }
            $user->save();

            return redirect()->route('user_index');
        
    }
    public function edit_user(Request $request){
        $roles=role::get();
        $user=User::where('users.id',$request->user_id)
            ->join ('roles','users.role_id','roles.id')
            ->select(
                'users.id',
                'users.name',
                'users.lastname',
                'users.Email',
                'roles.name as role_name',
                'roles.id as role_id',
                'users.pic'
            )->first();
       
                return view('admin.user_edit',compact('user','roles'));

        
    }
    public function update_user(Request $request){
        $user=User::where('users.id',$request->user_id)->first();
         if (isset($request->personel_pic)) {
            $imageName = time() . '.' . $request->personel_pic->getClientOriginalExtension();
            $tmp = explode('.', $imageName);
            $file_extension = end($tmp);
            $formats = array('jpg', 'JPG', 'gif', 'GIF', 'PNG', 'png');
            if (!in_array($file_extension, $formats)) {
                return Redirect::back()->withInput(Input::all())->with('error', 'فایل آپلود شده مورد تائید نمی باشد.');
            }
            $request->personel_pic->move('images/user/', $imageName);
        }

            $user->name = $request->name;
            $user->lastname = $request->lastname;
            $user->role_id = $request->role;
      
        if (isset($request->personel_pic)) {
            $user->pic = $imageName;
        }
      
            $user->save();

            return redirect()->route('user_index');
    }
    public function del_user(Request $request){
        $user=User::where('users.id',$request->user_id);
        $user->delete();
        return redirect()->route('user_index');

    }
    
        /*=======================notification===============================*/
        /*==========================================================*/
        /*==========================================================*/

    public function notification(){
        $notification=notification::get();
        return view('admin.notification',compact('notification'));
    }
    public function add_notification(){
        return view('admin.add_notification');
    }
    public function insert_notification(Request $request){
        $notification=new notification();
        $notification->title=$request->title;
        $notification->content=$request->content;
        $notification->save();
        return redirect()->route('notification');
        
    }
    public function edit_notification(Request $request){
        $notification=notification::where('id',$request->notify_id)->first();
        return view('admin.edit_notification',compact('notification'));
    }
    public function update_notification(Request $request){
        $notification=notification::where('id',$request->notify_id)->first();
        $notification->title=$request->title;
        $notification->content=$request->content;
        $notification->save();
        return redirect()->route('notification');
        
    }
    public function del_notification(Request $request){
        $notification=notification::where('id',$request->notify_id)->first();
        $notification->delete();
        return redirect()->route('notification');

    }
    /*=======================requlation===============================*/
    /*==========================================================*/
    /*==========================================================*/
    public function requlation(){
        $regulations=regulations::get();
        return view('admin.regulation',compact('regulations'));
    }
    public function add_regulation(){
                return view('admin.add_regulation');
    }
    public function insert_regulation(Request $request){
        $regulations=new regulations();
        $regulations->title=$request->title;
        $regulations->content=$request->content;
        $regulations->save();
        return redirect()->route('requlation');
    }
    public function edit_regulation(Request $request){
        $requlation=regulations::where('id',$request->regulation_id)->first();
        return view('admin.edit_requlation',compact('requlation'));
    }
    public function update_requlation(Request $request){
        $requlation=regulations::where('id',$request->requlation_id)->first();
        $requlation->title=$request->title;
        $requlation->content=$request->content;
        $requlation->save();
        return redirect()->route('requlation');
    }
    public function del_regulation(Request $request){
        $requlation=regulations::where('id',$request->regulation_id)->first();
        $requlation->delete();
        return redirect()->route('requlation');
    }
    public function regulation_home(){
        $regulations=regulations::get();
        return view('user.regulation_home',compact('regulations'));
    }
    /*=======================message===============================*/
    /*==========================================================*/
    /*==========================================================*/
    public function message(){
        $messages=message::get();
        $users=User::get();
        return view('admin.message',compact('messages','users'));
    }
    public function add_message(){
        $user_gets=User::join('roles','users.role_id','roles.id')
            ->select(
                'users.name',
                'users.lastname',
                'users.id',
                'users.co_name',
                'roles.name as role_name',
                'roles.id as role_id'
            )->orderBy('roles.id')->get();
         return view('admin.add_message',compact('user_gets'));
    }
    public function insert_message(Request $request){
        $user_id = Auth::id();
        $message=new message();
        $message->title=$request->title;
        $message->content=$request->content;
        $message->user_send=$user_id;
        $message->user_get=$request->user_get;
        $message->user_get_seen='0';
        $message->save();
        return redirect()->route('message');
    }
    public function del_message(Request $request){
        $message=message::where('id',$request->message_id)->first();
        $message->delete();
        return redirect()->route('message');
    }
    /*=======================co_user_index===============================*/
    /*==========================================================*/
    /*==========================================================*/
    public function co_user_index(){
       
                $users=user::join('roles','users.role_id','roles.id')
                   ->where('roles.id',3)
            ->select(
                'users.id',
                'users.co_name',
                'users.sh_num',
                'users.address',
                'users.Email'
            )->get();
      
        return view('admin.co_user_index',compact('users'));
    }
    public function add_co(){
        return view('admin.add_co');
    }
    public function insert_co(Request $request){
         $users=User::get();
       
        foreach($users as $user){
            
            if($user->email==$request->Email){
                 
                return view('admin.add_co')->withErrors([ '1']);
            }
        }
    
         if (isset($request->personel_pic)) {
            $imageName = time() . '.' . $request->personel_pic->getClientOriginalExtension();
            $tmp = explode('.', $imageName);
            $file_extension = end($tmp);
            $formats = array('jpg', 'JPG', 'gif', 'GIF', 'PNG', 'png');
            if (!in_array($file_extension, $formats)) {
                return Redirect::back()->withInput(Input::all())->with('error', 'فایل آپلود شده مورد تائید نمی باشد.');
            }
            $request->personel_pic->move('images/user/', $imageName);
        }
            $user=new User();
            $user->co_name = $request->co_name;
            $user->sh_num = $request->sh_num;
            $user->meli_num = $request->meli_num;
            $user->post_num = $request->post_num;
            $user->fax_num = $request->fax_num;
            $user->eghtesadi_num = $request->eghtesadi_num;
            $user->sabt_num = $request->sabt_num;
            $user->address = $request->address;
            $user->role_id = '3';
            $user->Email = $request->Email;
            $user->password = bcrypt($request->password);
      
        if (isset($request->personel_pic)) {
            $user->pic = $imageName;
        }
            $user->save();

            return redirect()->route('co_user_index');
        
    }
    public function show_co(Request $request){
        $user=User::where('id',$request->user_id)->first();
     
        return view('admin.show_co',compact('user'));
    }
    public function co_pass(Request $request){
        $user=User::where('id',$request->user_id)->first();
        $user->password = bcrypt('123456');
        $user->save();
        return redirect()->route('co_user_index');

    }
    public function edit_co(Request $request){
        $user=User::where('id',$request->user_id)->first();
        return view('admin.edit_co',compact('user'));
    }
    public function update_co(Request $request){
    
         if (isset($request->personel_pic)) {
            $imageName = time() . '.' . $request->personel_pic->getClientOriginalExtension();
            $tmp = explode('.', $imageName);
            $file_extension = end($tmp);
            $formats = array('jpg', 'JPG', 'gif', 'GIF', 'PNG', 'png');
            if (!in_array($file_extension, $formats)) {
                return Redirect::back()->withInput(Input::all())->with('error', 'فایل آپلود شده مورد تائید نمی باشد.');
            }
            $request->personel_pic->move('images/user/', $imageName);
        }
            $user=User::where('id',$request->user_id)->first();
            $user->co_name = $request->co_name;
            $user->sh_num = $request->sh_num;
            $user->meli_num = $request->meli_num;
            $user->post_num = $request->post_num;
            $user->fax_num = $request->fax_num;
            $user->eghtesadi_num = $request->eghtesadi_num;
            $user->sabt_num = $request->sabt_num;
            $user->address = $request->address;
            $user->role_id = '3';
            $user->password = bcrypt($request->password);
      
        if (isset($request->personel_pic)) {
            $user->pic = $imageName;
        }
            $user->save();

            return redirect()->route('co_user_index');
    }
    public function del_co(Request $request){
        $user=User::where('id',$request->user_id)->first();
        $user->delete();
        return redirect()->route('co_user_index');

    }
    
    public function see_Certification(){
        $cers=Certification::join('users','certifications.user_id','users.id')
            ->select(
                'users.co_name as name',
                'certifications.id',
                'certifications.cer_num',
                'certifications.issue_date',
                'certifications.iran_customs'
            )->get();
        return view('admin.see_Certification',compact('cers'));
    }
    public function detile_cer(Request $request){
        
        $cer=Certification::join('users','certifications.user_id','users.id')
            ->where('certifications.id',$request->cer_id)
            ->select(
                'users.id as user_id',
                'users.co_name as co_name',
                'certifications.cer_type',
                'certifications.cer_num',
                'certifications.issue_date',
                'certifications.buyer',
                'certifications.seller',
                'certifications.bank_name',
                'certifications.bank_code',
                'certifications.b_l_no',
                'certifications.p_l_date',
                'certifications.iran_customs',
                'certifications.b_l_no',
                'certifications.date_ins',
                'certifications.place_ins',
                'certifications.cb_no',
                'certifications.ins_no',
                'certifications.ins_date',
                'certifications.pl_pdf',
                'certifications.bl_pdf',
                'certifications.ic_pdf',
                'certifications.acc_pdf',
                'certifications.operator_name'
            )->first();
    
        return view('admin.detile_cer',compact('cer'));
    }
    public function del_cer(Request $request){
        $cer=Certification::where('id',$request->cer_id)->first();
        $cer->delete();
        return redirect()->route('see_Certification');
    }
    public function see_message(Request $request){
        $message_id=$request->message_id;
        $message=message::where('id',$message_id)->first();
        $message->user_get_seen='1';
        $message->save();
        return view('company.message',compact('message'));
    }
    

    
    
}


































