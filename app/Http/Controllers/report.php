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
use PDF;
use Imagick;



class report extends Controller
{
    //
      public function __construct()
    {
        $this->middleware('auth');
       
    }
       public function cer_report(){
           
        return view('report.cer_report');
    }
        public function result_report(Request $request){
            $from_date=     $request->from_date;
            $to_date=       $request->to_date;
            $co_name=       $request->co_name;
            $bank_name=     $request->bank_name;
            $seller=        $request->seller;
            $buyer=         $request->buyer;
            $iran_customs=  $request->iran_customs;
            $plase_ins=     $request->plase_ins;
          
         
            $users=User::where('co_name',$co_name)->get();
           
           
            foreach($users as $user){
                $co_name=$user->id;
                }
       
            if($from_date<>null && $to_date<>null){
            $cer=Certification::join('users','certifications.user_id','users.id')->where(
                [
                ['issue_date','>=',$from_date],
                ['issue_date','<=',$to_date],  
                ]
            )->get(); 
               
                
                ////////////////////////////////co_name//////////////////////////////////////////////
                ////////////////////////////////co_name//////////////////////////////////////////////
                ////////////////////////////////co_name//////////////////////////////////////////////

                    if($from_date<>null && $to_date<>null && $co_name<>null){ 
                  $cer=Certification::join('users','certifications.user_id','users.id')->where([
                ['issue_date','>=',$from_date],
                ['issue_date','<=',$to_date],  
                ['user_id','=',$co_name],  
            ])->get();
                        
                 }
                ////////////////////////////////bank_name//////////////////////////////////////////////
                ////////////////////////////////bank_name//////////////////////////////////////////////
                ////////////////////////////////bank_name//////////////////////////////////////////////
                
                    if($from_date<>null && $to_date<>null && $bank_name<>null){  
                  $cer=Certification::join('users','certifications.user_id','users.id')->where([
                ['issue_date','>=',$from_date],
                ['issue_date','<=',$to_date],  
                ['bank_name','=',$bank_name],  
            ])->get();
                 }
                    if($from_date<>null && $to_date<>null && $bank_name<>null && $co_name<>null){
                  $cer=Certification::join('users','certifications.user_id','users.id')->where([
                ['issue_date','>=',$from_date],
                ['issue_date','<=',$to_date],  
                ['bank_name','=',$bank_name],  
                ['user_id','=',$co_name],  
            ])->get();
                 }
                ////////////////////////////////seleer//////////////////////////////////////////////
                ////////////////////////////////seleer//////////////////////////////////////////////
                ////////////////////////////////seleer//////////////////////////////////////////////
                    if($from_date<>null && $to_date<>null && $seller<>null){ 
                  $cer=Certification::join('users','certifications.user_id','users.id')->where([
                ['issue_date','>=',$from_date],
                ['issue_date','<=',$to_date],  
                ['seller','=',$seller],  
            ])->get();
                   }
                    if($from_date<>null && $to_date<>null && $seller<>null && $co_name<>null ){ 
                  $cer=Certification::join('users','certifications.user_id','users.id')->where([
                ['issue_date','>=',$from_date],
                ['issue_date','<=',$to_date],  
                ['seller','=',$seller],  
                ['user_id','=',$co_name],  
            ])->get();
                    }
                    if($from_date<>null && $to_date<>null && $seller<>null && $bank_name<>null){ 
                  $cer=Certification::join('users','certifications.user_id','users.id')->where([
                ['issue_date','>=',$from_date],
                ['issue_date','<=',$to_date],  
                ['seller','=',$seller],  
                ['bank_name','=',$bank_name],  
            ])->get();
                                }
                    if($from_date<>null && $to_date<>null && $seller<>null && $bank_name<>null  && $co_name<>null){ 
                  $cer=Certification::join('users','certifications.user_id','users.id')->where([
                ['issue_date','>=',$from_date],
                ['issue_date','<=',$to_date],  
                ['seller','=',$seller],  
                ['bank_name','=',$bank_name],  
                ['user_id','=',$co_name],  
            ])->get();
                   }
                ////////////////////////////////buyer//////////////////////////////////////////////
                ////////////////////////////////buyer//////////////////////////////////////////////
                ////////////////////////////////buyer//////////////////////////////////////////////
                    if($from_date<>null && $to_date<>null && $buyer<>null ){ 
                  $cer=Certification::join('users','certifications.user_id','users.id')->where([
                ['issue_date','>=',$from_date],
                ['issue_date','<=',$to_date],  
                ['buyer','=',$buyer],  
             ])->get();
                   }
                    if($from_date<>null && $to_date<>null && $buyer<>null  && $co_name<>null){ 
                  $cer=Certification::join('users','certifications.user_id','users.id')->where([
                ['issue_date','>=',$from_date],
                ['issue_date','<=',$to_date],  
                ['buyer','=',$buyer],  
                ['user_id','=',$co_name],
             ])->get();
                   }
                    if($from_date<>null && $to_date<>null && $buyer<>null  && $bank_name<>null){ 
                  $cer=Certification::join('users','certifications.user_id','users.id')->where([
                ['issue_date','>=',$from_date],
                ['issue_date','<=',$to_date],  
                ['buyer','=',$buyer], 
                ['bank_name','=',$bank_name],
             ])->get();
                   }
                    if($from_date<>null && $to_date<>null && $buyer<>null  && $seller<>null){ 
                  $cer=Certification::join('users','certifications.user_id','users.id')->where([
                ['issue_date','>=',$from_date],
                ['issue_date','<=',$to_date],  
                ['buyer','=',$buyer],
                ['seller','=',$seller],
             ])->get();
                   }
                    if($from_date<>null && $to_date<>null && $buyer<>null  && $co_name<>null  && $bank_name<>null){ 
                  $cer=Certification::join('users','certifications.user_id','users.id')->where([
                ['issue_date','>=',$from_date],
                ['issue_date','<=',$to_date],  
                ['buyer','=',$buyer],  
                ['user_id','=',$co_name],
                ['bank_name','=',$bank_name],
             ])->get();
                   }
                    if($from_date<>null && $to_date<>null && $buyer<>null  && $co_name<>null  && $seller<>null){ 
                  $cer=Certification::join('users','certifications.user_id','users.id')->where([
                ['issue_date','>=',$from_date],
                ['issue_date','<=',$to_date],  
                ['buyer','=',$buyer],  
                ['user_id','=',$co_name],
                ['seller','=',$seller],
             ])->get();
                   }
                    if($from_date<>null && $to_date<>null && $buyer<>null  && $bank_name<>null && $seller<>null){ 
                  $cer=Certification::join('users','certifications.user_id','users.id')->where([
                ['issue_date','>=',$from_date],
                ['issue_date','<=',$to_date],  
                ['buyer','=',$buyer], 
                ['bank_name','=',$bank_name],
                ['seller','=',$seller],
             ])->get();
                   }
                    if($from_date<>null && $to_date<>null && $buyer<>null  && $co_name<>null  && $bank_name<>null && $seller<>null){ 
                  $cer=Certification::join('users','certifications.user_id','users.id')->where([
                ['issue_date','>=',$from_date],
                ['issue_date','<=',$to_date],  
                ['buyer','=',$buyer],  
                ['user_id','=',$co_name],
                ['bank_name','=',$bank_name],
                ['seller','=',$seller],
             ])->get();
                   }
                ////////////////////////////////iran_customs//////////////////////////////////////////////
                ////////////////////////////////iran_customs//////////////////////////////////////////////
                ////////////////////////////////iran_customs//////////////////////////////////////////////
               
                    if($from_date<>null && $to_date<>null && $iran_customs<>null ){ 
                  $cer=Certification::join('users','certifications.user_id','users.id')->where([
                ['issue_date','>=',$from_date],
                ['issue_date','<=',$to_date],  
                ['iran_customs','=',$iran_customs],  
             ])->get();
                }
                    if($from_date<>null && $to_date<>null && $iran_customs<>null &&$co_name<>null ){ 
                  $cer=Certification::join('users','certifications.user_id','users.id')->where([
                ['issue_date','>=',$from_date],
                ['issue_date','<=',$to_date],  
                ['iran_customs','=',$iran_customs],  
                ['user_id','=',$co_name],
             ])->get();
                }
                    if($from_date<>null && $to_date<>null && $iran_customs<>null  && $bank_name<>null ){ 
                  $cer=Certification::join('users','certifications.user_id','users.id')->where([
                ['issue_date','>=',$from_date],
                ['issue_date','<=',$to_date],  
                ['iran_customs','=',$iran_customs],
                ['bank_name','=',$bank_name],
             ])->get();
                }
                    if($from_date<>null && $to_date<>null && $iran_customs<>null && $seller<>null){ 
                  $cer=Certification::join('users','certifications.user_id','users.id')->where([
                ['issue_date','>=',$from_date],
                ['issue_date','<=',$to_date],  
                ['iran_customs','=',$iran_customs],
                ['seller','=',$seller],
             ])->get();
                }
                    if($from_date<>null && $to_date<>null && $iran_customs<>null  && $buyer<>null){ 
                  $cer=Certification::join('users','certifications.user_id','users.id')->where([
                ['issue_date','>=',$from_date],
                ['issue_date','<=',$to_date],  
                ['iran_customs','=',$iran_customs],
                ['buyer','=',$buyer],
             ])->get();
                }
                    if($from_date<>null && $to_date<>null && $iran_customs<>null &&$co_name<>null && $bank_name<>null){ 
                  $cer=Certification::join('users','certifications.user_id','users.id')->where([
                ['issue_date','>=',$from_date],
                ['issue_date','<=',$to_date],  
                ['iran_customs','=',$iran_customs],  
                ['user_id','=',$co_name],
                      ['bank_name','=',$bank_name],
             ])->get();
                }
                    if($from_date<>null && $to_date<>null && $iran_customs<>null &&$co_name<>null && $seller<>null){ 
                  $cer=Certification::join('users','certifications.user_id','users.id')->where([
                ['issue_date','>=',$from_date],
                ['issue_date','<=',$to_date],  
                ['iran_customs','=',$iran_customs],  
                ['user_id','=',$co_name],
                      ['seller','=',$seller],
             ])->get();
                }
                    if($from_date<>null && $to_date<>null && $iran_customs<>null &&$co_name<>null  && $buyer<>null){ 
                  $cer=Certification::join('users','certifications.user_id','users.id')->where([
                ['issue_date','>=',$from_date],
                ['issue_date','<=',$to_date],  
                ['iran_customs','=',$iran_customs],  
                ['user_id','=',$co_name],
                      ['buyer','=',$buyer],
             ])->get();
                }
                    if($from_date<>null && $to_date<>null && $iran_customs<>null  && $bank_name<>null && $seller<>null){ 
                  $cer=Certification::join('users','certifications.user_id','users.id')->where([
                ['issue_date','>=',$from_date],
                ['issue_date','<=',$to_date],  
                ['iran_customs','=',$iran_customs],
                ['bank_name','=',$bank_name],
                       ['seller','=',$seller],
             ])->get();
                }
                    if($from_date<>null && $to_date<>null && $iran_customs<>null  && $bank_name<>null  && $buyer<>null){ 
                  $cer=Certification::join('users','certifications.user_id','users.id')->where([
                ['issue_date','>=',$from_date],
                ['issue_date','<=',$to_date],  
                ['iran_customs','=',$iran_customs],
                ['bank_name','=',$bank_name],
                       ['buyer','=',$buyer],
             ])->get();
                }
                    if($from_date<>null && $to_date<>null && $iran_customs<>null && $seller<>null  && $buyer<>null){ 
                  $cer=Certification::join('users','certifications.user_id','users.id')->where([
                ['issue_date','>=',$from_date],
                ['issue_date','<=',$to_date],  
                ['iran_customs','=',$iran_customs],
                ['seller','=',$seller],
                        ['buyer','=',$buyer],
             ])->get();
                }
                    if($from_date<>null && $to_date<>null && $iran_customs<>null &&$co_name<>null && $bank_name<>null  && $seller<>null){ 
                  $cer=Certification::join('users','certifications.user_id','users.id')->where([
                ['issue_date','>=',$from_date],
                ['issue_date','<=',$to_date],  
                ['iran_customs','=',$iran_customs],  
                ['user_id','=',$co_name],
                      ['bank_name','=',$bank_name],
                      ['seller','=',$seller],
             ])->get();
                }
                    if($from_date<>null && $to_date<>null && $iran_customs<>null &&$co_name<>null && $bank_name<>null && $buyer<>null){ 
                  $cer=Certification::join('users','certifications.user_id','users.id')->where([
                ['issue_date','>=',$from_date],
                ['issue_date','<=',$to_date],  
                ['iran_customs','=',$iran_customs],  
                ['user_id','=',$co_name],
                      ['bank_name','=',$bank_name],
                      ['buyer','=',$buyer],
             ])->get();
                }
                    if($from_date<>null && $to_date<>null && $iran_customs<>null &&$co_name<>null && $seller<>null  && $buyer<>null ){ 
                  $cer=Certification::join('users','certifications.user_id','users.id')->where([
                ['issue_date','>=',$from_date],
                ['issue_date','<=',$to_date],  
                ['iran_customs','=',$iran_customs],  
                ['user_id','=',$co_name],
                      ['seller','=',$seller],
                       ['buyer','=',$buyer],
             ])->get();
                }
                    if($from_date<>null && $to_date<>null && $iran_customs<>null &&$co_name<>null && $seller<>null  && $buyer<>null && $bank_name<>null){ 
                  $cer=Certification::join('users','certifications.user_id','users.id')->where([
                ['issue_date','>=',$from_date],
                ['issue_date','<=',$to_date],  
                ['iran_customs','=',$iran_customs],  
                ['user_id','=',$co_name],
                      ['seller','=',$seller],
                       ['buyer','=',$buyer],
                      ['bank_name','=',$bank_name],
             ])->get();
                }
               
                ////////////////////////////////iran_customs//////////////////////////////////////////////
                ////////////////////////////////iran_customs//////////////////////////////////////////////
                ////////////////////////////////iran_customs//////////////////////////////////////////////                       
                if($from_date<>null && $to_date<>null && $plase_ins<>null ){   
                  $cer=Certification::join('users','certifications.user_id','users.id')->where([
                ['issue_date','>=',$from_date],
                ['issue_date','<=',$to_date],  
                ['place_ins','=',$plase_ins],  
             ])->get();
                }   
                
                 if($from_date<>null && $to_date<>null && $plase_ins<>null && $iran_customs<>null){ 
                  $cer=Certification::join('users','certifications.user_id','users.id')->where([
                ['issue_date','>=',$from_date],
                ['issue_date','<=',$to_date],  
                ['place_ins','=',$plase_ins],  
                ['iran_customs','=',$iran_customs],  
             ])->get();
                }   
                 if($from_date<>null && $to_date<>null && $plase_ins<>null &&$co_name<>null){ 
                  $cer=Certification::join('users','certifications.user_id','users.id')->where([
                ['issue_date','>=',$from_date],
                ['issue_date','<=',$to_date],  
                ['place_ins','=',$plase_ins],  
                ['user_id','=',$co_name],  
             ])->get();
                }   
                 if($from_date<>null && $to_date<>null && $plase_ins<>null && $bank_name<>null){ 
                  $cer=Certification::join('users','certifications.user_id','users.id')->where([
                ['issue_date','>=',$from_date],
                ['issue_date','<=',$to_date],  
                ['place_ins','=',$plase_ins],  
                ['bank_name','=',$bank_name],  
             ])->get();
                }   
                 if($from_date<>null && $to_date<>null && $plase_ins<>null && $seller<>null){ 
                  $cer=Certification::join('users','certifications.user_id','users.id')->where([
                ['issue_date','>=',$from_date],
                ['issue_date','<=',$to_date],  
                ['place_ins','=',$plase_ins],  
                ['seller','=',$seller],  
             ])->get();
                }   
                 if($from_date<>null && $to_date<>null && $plase_ins<>null && $buyer<>null){ 
                  $cer=Certification::join('users','certifications.user_id','users.id')->where([
                ['issue_date','>=',$from_date],
                ['issue_date','<=',$to_date],  
                ['place_ins','=',$plase_ins],  
                ['buyer','=',$buyer],  
             ])->get();
                }   
                
                 if($from_date<>null && $to_date<>null && $plase_ins<>null && $iran_customs<>null && $co_name<>null){ 
                  $cer=Certification::join('users','certifications.user_id','users.id')->where([
                ['issue_date','>=',$from_date],
                ['issue_date','<=',$to_date],  
                ['place_ins','=',$plase_ins],  
                ['iran_customs','=',$iran_customs],  
                ['user_id','=',$co_name],  
             ])->get();
                }  
                 if($from_date<>null && $to_date<>null && $plase_ins<>null && $iran_customs<>null && $bank_name<>null){ 
                  $cer=Certification::join('users','certifications.user_id','users.id')->where([
                ['issue_date','>=',$from_date],
                ['issue_date','<=',$to_date],  
                ['place_ins','=',$plase_ins],  
                ['iran_customs','=',$iran_customs],  
                ['bank_name','=',$bank_name],  
             ])->get();
                }  
                 if($from_date<>null && $to_date<>null && $plase_ins<>null && $iran_customs<>null && $seller<>null){ 
                  $cer=Certification::join('users','certifications.user_id','users.id')->where([
                ['issue_date','>=',$from_date],
                ['issue_date','<=',$to_date],  
                ['place_ins','=',$plase_ins],  
                ['iran_customs','=',$iran_customs],  
                ['seller','=',$seller],  
             ])->get();
                }  
                 if($from_date<>null && $to_date<>null && $plase_ins<>null && $iran_customs<>null && $buyer<>null){ 
                  $cer=Certification::join('users','certifications.user_id','users.id')->where([
                ['issue_date','>=',$from_date],
                ['issue_date','<=',$to_date],  
                ['place_ins','=',$plase_ins],  
                ['iran_customs','=',$iran_customs],  
                ['buyer','=',$buyer],  
             ])->get();
                }  
                
                
                if($from_date<>null && $to_date<>null && $plase_ins<>null &&$co_name<>null && $bank_name<>null){ 
                  $cer=Certification::join('users','certifications.user_id','users.id')->where([
                ['issue_date','>=',$from_date],
                ['issue_date','<=',$to_date],  
                ['place_ins','=',$plase_ins],  
                ['user_id','=',$co_name],  
                ['bank_name','=',$bank_name],  
             ])->get();
                } 
                if($from_date<>null && $to_date<>null && $plase_ins<>null &&$co_name<>null && $seller<>null){ 
                  $cer=Certification::join('users','certifications.user_id','users.id')->where([
                ['issue_date','>=',$from_date],
                ['issue_date','<=',$to_date],  
                ['place_ins','=',$plase_ins],  
                ['user_id','=',$co_name],  
                ['seller','=',$seller],  
             ])->get();
                } 
                if($from_date<>null && $to_date<>null && $plase_ins<>null &&$co_name<>null && $buyer<>null){ 
                  $cer=Certification::join('users','certifications.user_id','users.id')->where([
                ['issue_date','>=',$from_date],
                ['issue_date','<=',$to_date],  
                ['place_ins','=',$plase_ins],  
                ['user_id','=',$co_name],  
                ['buyer','=',$buyer],  
             ])->get();
                } 
                
                if($from_date<>null && $to_date<>null && $plase_ins<>null && $bank_name<>null && $seller<>null){ 
                  $cer=Certification::join('users','certifications.user_id','users.id')->where([
                ['issue_date','>=',$from_date],
                ['issue_date','<=',$to_date],  
                ['place_ins','=',$plase_ins],  
                ['bank_name','=',$bank_name],  
                ['seller','=',$seller],  
             ])->get();
                }   
                if($from_date<>null && $to_date<>null && $plase_ins<>null && $bank_name<>null && $buyer<>null){ 
                  $cer=Certification::join('users','certifications.user_id','users.id')->where([
                ['issue_date','>=',$from_date],
                ['issue_date','<=',$to_date],  
                ['place_ins','=',$plase_ins],  
                ['bank_name','=',$bank_name],  
                ['buyer','=',$buyer],  
             ])->get();
                }  
                
                if($from_date<>null && $to_date<>null && $plase_ins<>null  && $seller<>null  && $buyer<>null){ 
                  $cer=Certification::join('users','certifications.user_id','users.id')->where([
                ['issue_date','>=',$from_date],
                ['issue_date','<=',$to_date],  
                ['place_ins','=',$plase_ins],  
                ['seller','=',$seller],  
                ['buyer','=',$buyer],  
             ])->get();
                }   
                
                if($from_date<>null && $to_date<>null && $plase_ins<>null && $iran_customs<>null && $co_name<>null    && $bank_name<>null){ 
                  $cer=Certification::join('users','certifications.user_id','users.id')->where([
                ['issue_date','>=',$from_date],
                ['issue_date','<=',$to_date],  
                ['place_ins','=',$plase_ins],  
                ['iran_customs','=',$iran_customs],  
                ['user_id','=',$co_name],  
                ['bank_name','=',$bank_name],  
             ])->get();
                } 
                if($from_date<>null && $to_date<>null && $plase_ins<>null && $iran_customs<>null && $co_name<>null    && $seller<>null){ 
                  $cer=Certification::join('users','certifications.user_id','users.id')->where([
                ['issue_date','>=',$from_date],
                ['issue_date','<=',$to_date],  
                ['place_ins','=',$plase_ins],  
                ['iran_customs','=',$iran_customs],  
                ['user_id','=',$co_name],  
                ['seller','=',$seller],  
             ])->get();
                } 
                if($from_date<>null && $to_date<>null && $plase_ins<>null && $iran_customs<>null && $co_name<>null    && $buyer<>null){ 
                  $cer=Certification::join('users','certifications.user_id','users.id')->where([
                ['issue_date','>=',$from_date],
                ['issue_date','<=',$to_date],  
                ['place_ins','=',$plase_ins],  
                ['iran_customs','=',$iran_customs],  
                ['user_id','=',$co_name],  
                ['buyer','=',$buyer],  
             ])->get();
                }
                
                if($from_date<>null && $to_date<>null && $plase_ins<>null && $iran_customs<>null && $bank_name<>null  && $seller<>null){ 
                  $cer=Certification::join('users','certifications.user_id','users.id')->where([
                ['issue_date','>=',$from_date],
                ['issue_date','<=',$to_date],  
                ['place_ins','=',$plase_ins],  
                ['iran_customs','=',$iran_customs],  
                ['bank_name','=',$bank_name],  
                ['seller','=',$seller],  
             ])->get();
                }  
                if($from_date<>null && $to_date<>null && $plase_ins<>null && $iran_customs<>null && $bank_name<>null  && $buyer<>null){ 
                  $cer=Certification::join('users','certifications.user_id','users.id')->where([
                ['issue_date','>=',$from_date],
                ['issue_date','<=',$to_date],  
                ['place_ins','=',$plase_ins],  
                ['iran_customs','=',$iran_customs],  
                ['bank_name','=',$bank_name],  
                ['buyer','=',$buyer],  
             ])->get();
                } 
                
                if($from_date<>null && $to_date<>null && $plase_ins<>null && $iran_customs<>null && $seller<>null     && $buyer<>null){ 
                  $cer=Certification::join('users','certifications.user_id','users.id')->where([
                ['issue_date','>=',$from_date],
                ['issue_date','<=',$to_date],  
                ['place_ins','=',$plase_ins],  
                ['iran_customs','=',$iran_customs],  
                ['seller','=',$seller],  
                ['buyer','=',$buyer],  
             ])->get();
                }  
                
                if($from_date<>null && $to_date<>null && $plase_ins<>null && $co_name<>null && $bank_name<>null  && $seller<>null){ 
                  $cer=Certification::join('users','certifications.user_id','users.id')->where([
                ['issue_date','>=',$from_date],
                ['issue_date','<=',$to_date],  
                ['place_ins','=',$plase_ins],  
                ['user_id','=',$co_name],  
                ['bank_name','=',$bank_name],  
                ['seller','=',$seller],  
             ])->get();
                } 
                if($from_date<>null && $to_date<>null && $plase_ins<>null && $co_name<>null && $bank_name<>null  && $buyer<>null){ 
                  $cer=Certification::join('users','certifications.user_id','users.id')->where([
                ['issue_date','>=',$from_date],
                ['issue_date','<=',$to_date],  
                ['place_ins','=',$plase_ins],  
                ['user_id','=',$co_name],  
                ['bank_name','=',$bank_name],  
                ['buyer','=',$buyer],  
             ])->get();
                } 
                
                if($from_date<>null && $to_date<>null && $plase_ins<>null && $co_name<>null  && $seller<>null && $buyer<>null){ 
                  $cer=Certification::join('users','certifications.user_id','users.id')->where([
                ['issue_date','>=',$from_date],
                ['issue_date','<=',$to_date],  
                ['place_ins','=',$plase_ins],  
                ['user_id','=',$co_name],  
                ['seller','=',$seller],  
                ['buyer','=',$buyer],  
             ])->get();
                } 
                if($from_date<>null && $to_date<>null && $plase_ins<>null && $bank_name<>null  && $seller<>null && $buyer<>null){ 
                  $cer=Certification::join('users','certifications.user_id','users.id')->where([
                ['issue_date','>=',$from_date],
                ['issue_date','<=',$to_date],  
                ['place_ins','=',$plase_ins],  
                ['bank_name','=',$bank_name],  
                ['seller','=',$seller],  
                ['buyer','=',$buyer],  
             ])->get();
                } 
                
                if($from_date<>null && $to_date<>null && $plase_ins<>null && $iran_customs<>null && $co_name<>null    && $bank_name<>null && $seller<>null){ 
                  $cer=Certification::join('users','certifications.user_id','users.id')->where([
                ['issue_date','>=',$from_date],
                ['issue_date','<=',$to_date],  
                ['place_ins','=',$plase_ins],  
                ['iran_customs','=',$iran_customs],  
                ['user_id','=',$co_name],  
                ['bank_name','=',$bank_name],  
                ['seller','=',$seller],  
             ])->get();
                } 
                if($from_date<>null && $to_date<>null && $plase_ins<>null && $iran_customs<>null && $co_name<>null    && $bank_name<>null && $buyer<>null){ 
                  $cer=Certification::join('users','certifications.user_id','users.id')->where([
                ['issue_date','>=',$from_date],
                ['issue_date','<=',$to_date],  
                ['place_ins','=',$plase_ins],  
                ['iran_customs','=',$iran_customs],  
                ['user_id','=',$co_name],  
                ['bank_name','=',$bank_name],  
                ['buyer','=',$buyer],  
             ])->get();
                } 
                
                if($from_date<>null && $to_date<>null && $plase_ins<>null && $iran_customs<>null && $co_name<>null    && $seller<>null  && $buyer<>null){ 
                  $cer=Certification::join('users','certifications.user_id','users.id')->where([
                ['issue_date','>=',$from_date],
                ['issue_date','<=',$to_date],  
                ['place_ins','=',$plase_ins],  
                ['iran_customs','=',$iran_customs],  
                ['user_id','=',$co_name],  
                ['seller','=',$seller],  
                ['buyer','=',$buyer],  
             ])->get();
                } 
                
                if($from_date<>null && $to_date<>null && $plase_ins<>null && $iran_customs<>null && $bank_name<>null  && $seller<>null && $buyer<>null){ 
                  $cer=Certification::join('users','certifications.user_id','users.id')->where([
                ['issue_date','>=',$from_date],
                ['issue_date','<=',$to_date],  
                ['place_ins','=',$plase_ins],  
                ['iran_customs','=',$iran_customs],  
                ['bank_name','=',$bank_name],  
                ['seller','=',$seller],  
                ['buyer','=',$buyer],  
             ])->get();
                }  
                
                if($from_date<>null && $to_date<>null && $plase_ins<>null && $co_name<>null && $bank_name<>null  && $seller<>null  && $buyer<>null){ 
                  $cer=Certification::join('users','certifications.user_id','users.id')->where([
                ['issue_date','>=',$from_date],
                ['issue_date','<=',$to_date],  
                ['place_ins','=',$plase_ins],  
                ['user_id','=',$co_name],  
                ['bank_name','=',$bank_name],  
                ['seller','=',$seller],  
                ['buyer','=',$buyer],  
             ])->get();
                } 
                
                if($from_date<>null && $to_date<>null && $plase_ins<>null && $iran_customs<>null && $co_name<>null    && $bank_name<>null && $seller<>null && $buyer<>null){ 
                  $cer=Certification::join('users','certifications.user_id','users.id')->where([
                ['issue_date','>=',$from_date],
                ['issue_date','<=',$to_date],  
                ['place_ins','=',$plase_ins],  
                ['iran_customs','=',$iran_customs],  
                ['user_id','=',$co_name],  
                ['bank_name','=',$bank_name],  
                ['seller','=',$seller],  
                ['buyer','=',$buyer],  
             ])->get();
                } 
                 
                $pdf = PDF::loadView('pdf.document_1',compact('cer'));
           
		        return $pdf->stream('report.pdf');
                
          
                }
        }
    
    public function cer_report_search(){
        return view('report.cer_report_search');
    }
    public function result_report_2(Request $request){
            $code=         $request->code;
            $report=       $request->report;
    
    
        if($report==0){
        
            $result='انتخاب نکرده اید';
       
            
        }
        if($report==1){
        
            $result=Certification::join('users','certifications.user_id','users.id')
            ->select(
                'users.co_name as name',
                'certifications.id',
                'certifications.cer_num',
                'certifications.issue_date',
                'certifications.iran_customs'
            )->where('cer_num',$code)->first();
       
            
        }
          if($report==2){
                        $result=Certification::join('users','certifications.user_id','users.id')
            ->select(
                'users.co_name as name',
                'certifications.id',
                'certifications.cer_num',
                'certifications.issue_date',
                'certifications.iran_customs'
            )->where('ins_no',$code)->first();
               

        }
          if($report==3){
                        $result=Certification::join('users','certifications.user_id','users.id')
            ->select(
                'users.co_name as name',
                'certifications.id',
                'certifications.cer_num',
                'certifications.issue_date',
                'certifications.iran_customs'
            )->where('p_l_no',$code)->first();
            

        }
          if($report==4){
                        $result=Certification::join('users','certifications.user_id','users.id')
            ->select(
                'users.co_name as name',
                'certifications.id',
                'certifications.cer_num',
                'certifications.issue_date',
                'certifications.iran_customs'
            )->where('b_l_no',$code)->first();
              

        }
            if($report==5){
            
                 $result=Certification::join('users','certifications.user_id','users.id')
            ->select(
                'users.co_name as name',
                'certifications.id',
                'certifications.cer_num',
                'certifications.issue_date',
                'certifications.iran_customs'
            )->where('cb_no',$code)->first();
         
                  } 
return view('report.cer_report_search',compact('result'));

//		$pdf = PDF::loadView('pdf.document_2',compact('result','co_name'));
//		return $pdf->download('report.pdf');
            
    }
}