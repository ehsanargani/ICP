@extends('layouts.app')

@section('content')
<!-- begin .main-heading -->
<header class="main-heading">
    <!-- begin dashhead -->
    <div class="dashhead bg-white">
        <div class="dashhead-titles">
            <h6 class="dashhead-subtitle">

            </h6>
            <h3 class="dashhead-title">مدیریت کاربر شرکت</h3>
        </div>


    </div>
    <!-- END: dashhead -->
</header>
<!-- END: .main-heading -->
<div class="main-content bg-clouds">
    <div class="container-fluid p-t-15">



        <div class="box">
            <header class="bg-blue text-white">
                <h4>اضافه کردن کاربر شرکت</h4>
                <!-- begin box-tools -->

                <!-- END: box-tools -->
            </header>
             <div class="box-body collapse in">
                
       


            </div>
            <div class="box-body collapse in">
                <form class="form-horizontal" method="post" action="{{url('/update_co')}}" id="accountActivation" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class=" container">
                        <div class="col-md-6">
                            <label>نام شرکت :</label>
                            <input type="text" name="co_name" required  class="form-control" value="{{$user->co_name}}">
                            <label>شماره تماس:</label>
                            <input type="text" name="sh_num" required  class="form-control" value="{{$user->sh_num}}">
                            <label>شماره فکس:</label>
                            <input type="text" name="fax_num"   class="form-control" value="{{$user->fax_num}}">  
                            <label>شناسه ملی:</label>
                            <input type="text" name="meli_num"   class="form-control" value="{{$user->meli_num}}">
                            <label>کد اختصادی:</label>
                            <input type="text" name="eghtesadi_num"   class="form-control" value="{{$user->eghtesadi_num}}">
                             <label>شماره ثبت</label>
                            <input type="text" name="sabt_num"   class="form-control" value="{{$user->sabt_num}}">
                             <label>کد پستی:</label>
                            <input type="text" name="post_num"   class="form-control" value="{{$user->post_num}}">
                             <label>آدرس:</label>
                            <input type="text" name="address" required   class="form-control" value="{{$user->address}}">
                            <input type="hidden" name="user_id"   value="{{$user->id}}">
                         

                        </div>
                        <div class="col-md-6" style="text-align:right">
                            <label>نام کاربری:</label>
                            <input type="text" name="email" disabled class="form-control" value="{{$user->email}}">
                            <img src="images/user/{{$user->pic}}" class="img-responsive" alt="logo">
                               <label> عکس مورد نظر را انتخاب کنید</label>
                            <input type="file" name="personel_pic" class="btn btn-info0">
                            
                       <br>
                            <br>
                                                 <button type="submit" id="buttonActivate" class="btn btn-warning pure-button pure-button-primary">ویرایش اطلاعات</button>
                                                                           <a href="{{url('co_user_index')}}" class="btn btn-info0">بازشت</a>

                           
                          
                           

                        </div>
                    </div>



                </form>
            </div>
        </div>



    </div>
</div>

@endsection