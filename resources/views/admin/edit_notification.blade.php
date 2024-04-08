@extends('layouts.app')

@section('content')
<!-- begin .main-heading -->
<header class="main-heading">
    <!-- begin dashhead -->
    <div class="dashhead bg-white">
        <div class="dashhead-titles">
            <h6 class="dashhead-subtitle">

            </h6>
            <h3 class="dashhead-title">مدیریت اطلاعیه ها</h3>
        </div>


    </div>
    <!-- END: dashhead -->
</header>
<!-- END: .main-heading -->
<div class="main-content bg-clouds">
    <div class="container-fluid p-t-15">



        <div class="box">
                 <header class="bg-blue text-white">
                <h4>ویرایش کردن اطلاعیه </h4>
                <!-- begin box-tools -->

                <!-- END: box-tools -->
            </header>

            <div class="box-body collapse in">
                <form class="form-horizontal" method="post" action="{{url('/update_notification')}}" id="accountActivation" >
                    {{ csrf_field() }}
                    <div class=" container">
                        <div class="col-md-12">
                            <label>عنوان:</label>
                            <input type="text" name="title" required  class="form-control" value="{{$notification->title}}">
                            <input type="hidden" name="notify_id" value="{{$notification->id}}">
                            <label>متن اطلاعیه:</label>
                            <textarea name="content" class="form-control" required >{{$notification->content}}</textarea>
                           
                            
                       <br>
                            <br>
                                                 <button type="submit" id="buttonActivate" class="btn btn-warning pure-button pure-button-primary">ویرایش اطلاعات</button>
                            <a href="{{url('notification')}}" class="btn btn-info0">انصراف</a>

                        </div>
                 
                    </div>



                </form>
            </div>
        </div>



    </div>
</div>

@endsection