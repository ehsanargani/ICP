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
                <h4>لیست پیام ها</h4>
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
                                <th style="width: 50px">ردیف</th>
                                <th style="width: 200px">عنوان</th>
                                <th>متن پیام</th>
                                <th>گیرنده</th>
                                <th>وضعیت</th>
<!--                                <th style="width: 50px;text-align: center">ویرایش</th>-->
                                <th style="width: 50px;text-align: center">حذف</th>
                            </tr>
                        </thead>
                        <tbody id="myTable">
                            <?php $n=0 ?>
                            @foreach($messages as $message)
                            <?php $n++ ?>
                            <tr>
                                <td>{{$n}}</td>
                                <td>{{$message->title}}</td>
                                <td>{{$message->content}}</td>
                                <td style="width: 150px">
                                    
                                    @foreach($users as $user)
                                        @if($message->user_get==$user->id)
                                            {{$user->name}} {{$user->lastname}}
                                        @endif
                                    @endforeach
                                
                                </td>
                                <td style="width: 100px">
                                    
                                    @if($message->user_get_seen==0)
                                        <span style="color:red">خوانده نشده</span>
                                    @else
                                        <span style="color:green">خوانده شده</span>

                                    @endif
                                
                                </td>
<!--
                                <td>
                                    <a href="{{ url('/editteachermanagement') }}" onclick="event.preventDefault();document.getElementById('edit-form{{$message->id}}').submit();" class="fa fa-fw fa-edit"></a>
                                    <form id="edit-form{{$message->id}}" action="{{ url('/edit_message') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                        <input type="hidden" name="message_id" value="{{$message->id}}">
                                    </form>
                                </td>
--> @if($message->user_get_seen==0)
                                <td class="text-center">

                                    <a href="{{ url('/editteachermanagement') }}"  onclick="event.preventDefault();document.getElementById('del_message{{$message->id}}').submit();" class="fa fa-times"></a>
                                    <form id="del_message{{$message->id}}" action="{{ url('/del_message') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                        <input type="hidden" name="message_id" value="{{$message->id}}">
                                    </form>


                                </td>
                                @endif
                                @if($message->user_get_seen==1)
                                <td class="text-center">
                                    <i style="color:#999" class="fa fa-times" ></i>
                                     </td>
                                 @endif
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
                    <a href="{{url('add_message')}}" class="btn btn-info0" style="color: #fff">پیام جدید</a>
                    
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