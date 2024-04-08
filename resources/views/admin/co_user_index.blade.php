@extends('layouts.app')

@section('content')
<!-- begin .main-heading -->
<header class="main-heading">
    <!-- begin dashhead -->
    <div class="dashhead bg-white">
        <div class="dashhead-titles">
            <h6 class="dashhead-subtitle">

            </h6>
            <h3 class="dashhead-title">مدیریت کاربران شکت</h3>
        </div>


    </div>
    <!-- END: dashhead -->
</header>
<!-- END: .main-heading -->
<div class="main-content bg-clouds">
    <div class="container-fluid p-t-15">



        <div class="box">
            <header class="bg-blue text-white">
                <h4>لیست کاربران شرکت</h4>
                <!-- begin box-tools -->

                <!-- END: box-tools -->
            </header>
            <div class="box-body collapse in">
                <!--
                @if($errors->any())
                @if($errors->first()==1)
                    <h4 style="background-color: #FFAA3E;color: #fff;padding: 10px">رمز عبور با موفقیت ویرایش شد</h4>
                @endif
                @endif
-->

            </div>


            <div class="container-fluid" style="width: 100%">
                <div class="container-fluid" style="width: 100%">
                    <form class="form-inline" action="" style="margin-top: 20px">

                        <div class="form-group">
                            <label for="email">@lang('backend.search') </label>
                            <input class="form-control" id="myInput" type="text">
                        </div>
                        <!--                <button type="submit" class="btn btn-default">جستجو</button>-->
                    </form>
                </div>
            </div>
            <div class="col-md-12">
                <hr class="b-s-dashed">
            </div>
            <div class="box-body canvas-container overflow-hidden" style="min-height: 500px">
                <div class="box-body collapse in" id="box3">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th style="width: 250px">نام شرکت</th>
                                <th style="width: 150px">شماره تماس</th>
                                <th>آدرس</th>
                                <th style="width: 150px">نام کاربری</th>
                                <th style="width: 70px;text-align: center">بازیابی رمز</th>
                                <th style="width: 50px;text-align: center">جزیات</th>
                                <th style="width: 50px;text-align: center">ویرایش</th>
                                <th style="width: 50px;text-align: center">حذف</th>
                            </tr>
                        </thead>
                        <tbody id="myTable">

                            @foreach($users as $user)
                           
                            <tr>
                                <td>{{$user->co_name}}</td>
                                <td>{{$user->sh_num}}</td>
                                <td>{{$user->address}}</td>
                                <td>{{$user->Email}}</td>
                                <td class="text-center">
                                    <a title="رمز عبور: 123456" href="{{ url('/editteachermanagement') }}" onclick="event.preventDefault();document.getElementById('reset{{$user->id}}').submit();" class="fa fa-refresh"></a>
                                    <form id="reset{{$user->id}}" action="{{ url('/co_pass') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                        <input type="hidden" name="user_id" value="{{$user->id}}">
                                    </form>
                                </td> 
                                <td class="text-center">
                                    <a href="{{ url('/editteachermanagement') }}" onclick="event.preventDefault();document.getElementById('show{{$user->id}}').submit();" class="fa fa-eye"></a>
                                    <form id="show{{$user->id}}" action="{{ url('/show_co') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                        <input type="hidden" name="user_id" value="{{$user->id}}">
                                    </form>
                                </td>
                                <td class="text-center">
                                    <a href="{{ url('/editteachermanagement') }}" onclick="event.preventDefault();document.getElementById('edit-form{{$user->id}}').submit();" class="fa fa-fw fa-edit"></a>
                                    <form id="edit-form{{$user->id}}" action="{{ url('/edit_co') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                        <input type="hidden" name="user_id" value="{{$user->id}}">
                                    </form>
                                </td>
                                <td class="text-center">

                                    <a href="{{ url('/editteachermanagement') }}" onclick="event.preventDefault();document.getElementById('del_user{{$user->id}}').submit();" class="fa fa-times"></a>
                                    <form id="del_user{{$user->id}}" action="{{ url('/del_co') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                        <input type="hidden" name="user_id" value="{{$user->id}}">
                                    </form>


                                </td>
                            </tr>
                          
                            @endforeach


                        </tbody>
                    </table>
                </div>
                <div class="col-md-12">
                    <hr class="b-s-dashed">
                </div>

                <!-- begin box-tools -->
                <div class="box-tools">
                    <a href="{{url('add_co')}}" class="btn btn-info0" style="color: #fff">@lang('backend.add')</a>
                </div>
                <!-- END: box-tools -->

            </div>



        </div>



    </div>
</div>
<script>
    $(document).ready(function() {
        $("#myInput").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $("#myTable tr ").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
    });
</script>
@endsection