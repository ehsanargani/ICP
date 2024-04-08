<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Validator, Auth, Redirect;
use App\User;
use App\Certification;



class CertificationController extends Controller
{
    //
        public function __construct()
    {
        $this->middleware('auth');
    }
    public function add_Certification(){
        return view('company.add_certification');
    }
    public function insert_cer(Request $request){
        
        
         $cers=Certification::get();
       
        foreach($cers as $cer){
            
            if($cer->cer_num==$request->cer_num){
                return view('company.add_certification')->withErrors([ '1']);
            }
             if($cer->b_l_no==$request->b_l_no){
                return view('company.add_certification')->withErrors([ '2']);
            }
              if($cer->cb_no==$request->cb_no){
                return view('company.add_certification')->withErrors([ '3']);
            }
              if($cer->ins_no==$request->ins_no){
                return view('company.add_certification')->withErrors([ '4']);
            }
        }
        
        
        
        
        $user_id = Auth::id();
          if (isset($request->pl_pdf)) {
            $imageName1 = 'pi-'.time() . '.' . $request->pl_pdf->getClientOriginalExtension();
            $tmp = explode('.', $imageName1);
            $file_extension = end($tmp);
            $formats = array('pdf');
            if (!in_array($file_extension, $formats)) {
              return view('company.add_certification')->withErrors([ '6']);
            }
            $request->pl_pdf->move('file/'.$user_id.'/', $imageName1);
        }
          if (isset($request->bl_pdf)) {
            $imageName2 = 'bl-'.time() . '.' . $request->bl_pdf->getClientOriginalExtension();
            $tmp = explode('.', $imageName2);
            $file_extension = end($tmp);
            $formats = array('pdf');
            if (!in_array($file_extension, $formats)) {
              return view('company.add_certification')->withErrors([ '6']);
            }
            $request->bl_pdf->move('file/'.$user_id.'/', $imageName2);
        }
          if (isset($request->ic_pdf)) {
            $imageName3 = 'ic-'.time() . '.' . $request->ic_pdf->getClientOriginalExtension();
            $tmp = explode('.', $imageName3);
            $file_extension = end($tmp);
            $formats = array('pdf');
            if (!in_array($file_extension, $formats)) {
              return view('company.add_certification')->withErrors([ '6']);
            }
            $request->ic_pdf->move('file/'.$user_id.'/', $imageName3);
        }
          if (isset($request->acc_pdf)) {
            $imageName4 = 'acc-'.time() . '.' . $request->acc_pdf->getClientOriginalExtension();
            $tmp = explode('.', $imageName4);
            $file_extension = end($tmp);
            $formats = array('pdf');
            if (!in_array($file_extension, $formats)) {
              return view('company.add_certification')->withErrors([ '6']);
            }
            $request->acc_pdf->move('file/'.$user_id.'/', $imageName4);
        }
        
        
            $cer=new Certification();
            $cer->cer_num =              $request->cer_num;
            $cer->cer_type =             $request->cer_type;
            $cer->issue_date =           $request->issue_date;
            $cer->buyer =                $request->buyer;
            $cer->seller =               $request->seller;
            $cer->bank_name =            $request->bank_name;
            $cer->bank_code =            $request->bank_code;
            $cer->p_l_no =               $request->p_l_no;
            $cer->p_l_date =             $request->p_l_date;
            $cer->iran_customs =         $request->iran_customs;
            $cer->b_l_no =               $request->b_l_no;
            $cer->date_ins =             $request->date_ins;
            $cer->place_ins =            $request->place_ins;
            $cer->cb_no =                $request->cb_no;
            $cer->ins_no =               $request->ins_no;
            $cer->ins_date =             $request->ins_date;
            $cer->operator_name =        $request->operator_name;
            $cer->user_id =              $user_id;
         
      
        if (isset($request->pl_pdf)) {
            $cer->pl_pdf = $imageName1;
        }
        if (isset($request->bl_pdf)) {
            $cer->bl_pdf = $imageName2;
        }
        if (isset($request->ic_pdf)) {
            $cer->ic_pdf = $imageName3;
        }
        if (isset($request->acc_pdf)) {
            $cer->acc_pdf = $imageName4;
        }
            $cer->save();

              return view('company.add_certification')->withErrors([ '5']);
        
    }
}
