<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Validator, Auth, Redirect;
use App\User;
use App\notification;
use App\regulations;
use App\message;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_id = Auth::id();
        $notifications=notification::get();
        $regulations=regulations::get();
        $messages=message::where('user_get',$user_id)->get();
        return view('home',compact('notifications','regulations','messages'));
    }
    
    
    public function profile_index(){
        return view('user.profile_index');
    }
    
    
    public function edit_profile(Request $request){
        $user_id = Auth::id();
        $user = user::where('id', $user_id)->first();
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
      
        if (isset($request->personel_pic)) {
            $user->pic = $imageName;
        }
      
            $user->save();

            return redirect()->route('profile_index');
    }
    
    
    public function password_index(){
        return view('user.password_index');
    }  
    
    
    public function edit_password(Request $request){
        $user_id = Auth::id();
        $user = user::where('id', $user_id)->first();
        $user->password = bcrypt($request->password);
        $user->save();
  
        return redirect()->route('password_index')->withErrors([ '1']);
    }
}























