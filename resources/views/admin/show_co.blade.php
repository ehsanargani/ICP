@extends('layouts.app')

@section('content')
<!-- begin .main-heading -->
<header class="main-heading">
    <!-- begin dashhead -->
    <div class="dashhead bg-white">
        <div class="dashhead-titles">
            <h6 class="dashhead-subtitle">

            </h6>
            <h3 class="dashhead-title">میریت کاربر شرکت</h3>
        </div>


    </div>
    <!-- END: dashhead -->
</header>
<!-- END: .main-heading -->
<div class="main-content bg-clouds">
    <div class="container-fluid p-t-15">



        <div class="box">
            <header class="bg-blue text-white">
                <h4>مشاهده جزیات کاربر شرکت</h4>
                <!-- begin box-tools -->

                <!-- END: box-tools -->
            </header>
             <div class="box-body collapse in">
                
           


            </div>
            <div class="box-body collapse in">
                 
                    <div class=" container">
                        <div class="col-md-6 show_co">
                           
                            <h5> <label>نام شرکت :</label> {{$user->co_name}}</h5>
                           
                            <h5>  <label>شماره تماس:</label> {{$user->sh_num}}</h5>
                           
                            <h5>  <label>شماره فکس:</label> {{$user->fax_num}}</h5>
                           
                            <h5>  <label>شناسه ملی:</label> {{$user->meli_num}}</h5>
                          
                            <h5>  <label>کد اختصادی:</label> {{$user->eghtesadi_num}}</h5>
                           
                            <h5>   <label>شماره ثبت</label> {{$user->sabt_num}}</h5>
                            
                            <h5>  <label>کد پستی:</label> {{$user->post_num}}</h5>
                        
                            <h5>      <label>آدرس:</label> {{$user->address}}</h5>
                         

                        </div>
                        <div class="col-md-6" style="text-align:right">
                            <label>نام کاربری:</label>
                            <h5>{{$user->email}}</h5>
                           
                               <label> عکس لوگو</label>
                                <img src="images/user/{{$user->pic}}" alt="logo" class="img-responsive">
                       <br>
                            <br>
                                               <a href="{{url('co_user_index')}}" class="btn btn-info0">بازشت</a>
                           
                          
                           

                        </div>
                    </div>



        
            </div>
        </div>



    </div>
</div>

@endsection