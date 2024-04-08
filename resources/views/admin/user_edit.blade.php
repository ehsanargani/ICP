@extends('layouts.app')

@section('content')
<!-- begin .main-heading -->
<header class="main-heading">
    <!-- begin dashhead -->
    <div class="dashhead bg-white">
        <div class="dashhead-titles">
            <h6 class="dashhead-subtitle">

            </h6>
            <h3 class="dashhead-title">مدیریت کاربران</h3>
        </div>


    </div>
    <!-- END: dashhead -->
</header>
<!-- END: .main-heading -->
<div class="main-content bg-clouds">
    <div class="container-fluid p-t-15">



        <div class="box">
            <header class="bg-blue text-white">
                <h4>ویرایش اطلاعات کاربری</h4>
                <!-- begin box-tools -->

                <!-- END: box-tools -->
            </header>
            <div class="box-body collapse in">
                <form class="form-horizontal" method="post" action="{{url('/update_user')}}" id="accountActivation" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class=" container">
                        <div class="col-md-6">
                            <label>نام کاربری:</label>
                            <input type="text"  disabled value="{{$user->Email}} " class="form-control">
                            <label>نام :</label>
                            <input type="text" name="name" required value="{{$user->name}} " class="form-control">
                            <label>نام خانوادگی:</label>
                            <input type="text" name="lastname" required value="{{$user->lastname}} " class="form-control">
                            <label>گروه کاری</label>
                            <select name="role" class="form-control">
                                @foreach($roles as $role)
                                @if($role->id!='3')
                                <option
                                        @if($role->id==$user->role_id)
                                    selected    
                                    @endif
                                        value="{{$role->id}}">{{$role->name}}</option>
                                @endif
                                @endforeach
                            </select>
                            <label> عکس مورد نظر را انتخاب کنید</label>
                            <input type="file" name="personel_pic" class="btn btn-info0">
                            <input type="hidden" name="user_id" value="{{$user->id}}">
                            
                            <br>
                            <hr class="b-s-dashed">
                            <button type="submit" id="buttonActivate" class="btn btn-success pure-button pure-button-primary">ویرایش</button>
                            <a href="{{url('user')}}" class="btn btn-info0">انصراف</a>

                        </div>
                        <div class="col-md-6 text-right">
                            <img src="images/user/{{$user->pic}}" class="img-responsive" alt="pic_user">
                        </div>
                    </div>



                </form>
            </div>
        </div>



    </div>
</div>

@endsection