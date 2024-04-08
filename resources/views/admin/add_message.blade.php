@extends('layouts.app')

@section('content')
<!-- begin .main-heading -->
<header class="main-heading">
    <!-- begin dashhead -->
    <div class="dashhead bg-white">
        <div class="dashhead-titles">
            <h6 class="dashhead-subtitle">

            </h6>
            <h3 class="dashhead-title">مدیریت پیام ها</h3>
        </div>


    </div>
    <!-- END: dashhead -->
</header>
<!-- END: .main-heading -->
<div class="main-content bg-clouds">
    <div class="container-fluid p-t-15">



        <div class="box">
                 <header class="bg-blue text-white">
                <h4>ارسال پیام جدید</h4>
                <!-- begin box-tools -->

                <!-- END: box-tools -->
            </header>

            <div class="box-body collapse in">
                <form class="form-horizontal" method="post" action="{{url('/insert_message')}}" id="accountActivation" >
                    {{ csrf_field() }}
                    <div class=" container">
                        <div class="col-md-6">
                            <label>عنوان:</label>
                            <input type="text" name="title" required  class="form-control">
                          
                           
                            
              


                        </div>
                        <div class="col-md-6">
                        <label>گیرنده:</label>
                            <select name="user_get" class="form-control">
                                @foreach($user_gets as $user_get)
                                    <option value="{{$user_get->id}}">
                                        @if($user_get->role_id<>3)
                                        {{$user_get->name}} {{$user_get->lastname}} ( {{$user_get->role_name}} )
                                        @else
                                        {{$user_get->co_name}} ( {{$user_get->role_name}} )
                                        @endif
                                </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-12">
                          <label>متن پیام:</label>
                            <textarea name="content" class="form-control" required ></textarea>
                                     <br>
                            <br>
                                                 <button type="submit" id="buttonActivate" class="btn btn-success pure-button pure-button-primary">ثبت اطلاعات</button>
                                                        <a href="{{url('message')}}" class="btn btn-info0">انصراف</a>
                        </div>
                 
                    </div>



                </form>
            </div>
        </div>



    </div>
</div>

@endsection