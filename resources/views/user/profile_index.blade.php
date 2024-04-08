@extends('layouts.app')

@section('content')
<!-- begin .main-heading -->
<header class="main-heading">
    <!-- begin dashhead -->
    <div class="dashhead bg-white">
        <div class="dashhead-titles">
            <h6 class="dashhead-subtitle">

            </h6>
            <h3 class="dashhead-title">پروفایل</h3>
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
                <form class="form-horizontal" method="post" action="{{url('/edit_profile')}}" id="accountActivation" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class=" container">
                        <div class="col-md-6">
                            <label>نام کاربری:</label>
                            <input type="text"  disabled value="{{ Auth::user()->email}} " class="form-control">
                            <label>نام :</label>
                            <input type="text" name="name" required value="{{ Auth::user()->name}} " class="form-control">
                            <label>نام خانوادگی:</label>
                            <input type="text" name="lastname" required value="{{ Auth::user()->lastname}} " class="form-control">
                            <label> عکس مورد نظر را انتخاب کنید</label>
                            <input type="file" name="personel_pic" class="btn btn-info">
                            <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                            
                            <br>
                            <hr class="b-s-dashed">
                            <button type="submit" id="buttonActivate" class="btn btn-warning pure-button pure-button-primary">ویرایش</button>

                        </div>
                        <div class="col-md-6 text-right">
                            <img src="images/user/{{ Auth::user()->pic}}" class="img-responsive" alt="pic_user">
                        </div>
                    </div>



                </form>
            </div>
        </div>



    </div>
</div>

@endsection