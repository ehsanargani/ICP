@extends('layouts.app')

@section('content')
<!-- begin .main-heading -->
<header class="main-heading">
    <!-- begin dashhead -->
    <div class="dashhead bg-white">
        <div class="dashhead-titles">
            <h6 class="dashhead-subtitle">

            </h6>
            <h3 class="dashhead-title">مشاهده گواهی ها</h3>
        </div>


    </div>
    <!-- END: dashhead -->
</header>
<!-- END: .main-heading -->
<div class="main-content bg-clouds">
    <div class="container-fluid p-t-15">



        <div class="box">
            <header class="bg-blue text-white">
                <h4>لیست گواهی ها</h4>
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
                                <th style="width: 200px">اسم شکت</th>
                                <th>شماره گواهی</th>
                                <th>تاریخ صدور</th>
                                <th>کد تعرفه</th>
                                <th style="width: 100px;text-align: center">مشاهده جزیات</th>
                                <th style="width: 100px;text-align: center">مجوز ویرایش</th>
                                <th style="width: 50px;text-align: center">حذف</th>
                            </tr>
                        </thead>
                        <tbody id="myTable">
                            <?php $n=0 ?>
                            @foreach($cers as $cer)
                            <?php $n++ ?>
                            <tr>
                                <td>{{$n}}</td>
                                <td>{{$cer->name}}</td>
                                <td>{{$cer->cer_num}}</td>
                                <td>{{$cer->issue_date}}</td>
                                <td>{{$cer->iran_customs}}</td>
                                   <td class="text-center">
                                    <a href="{{ url('/editteachermanagement') }}" onclick="event.preventDefault();document.getElementById('show-form{{$cer->id}}').submit();" class="fa fa-eye"></a>
                                    <form id="show-form{{$cer->id}}" action="{{ url('/detile_cer') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                        <input type="hidden" name="cer_id" value="{{$cer->id}}">
                                    </form>
                                </td>
                                <td class="text-center">
                                    <a href="{{ url('/editteachermanagement') }}" onclick="event.preventDefault();document.getElementById('edit-form{{$cer->id}}').submit();" class="fa fa-remove"></a>
<!--                                    <a href="{{ url('/editteachermanagement') }}" onclick="event.preventDefault();document.getElementById('edit-form{{$cer->id}}').submit();" class="fa fa-check"></a>-->
                                    <form id="edit-form{{$cer->id}}" action="{{ url('/edit_notification') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                        <input type="hidden" name="cer_id" value="{{$cer->id}}">
                                    </form>
                                </td>
                                <td class="text-center">

                                    <a href="{{ url('/editteachermanagement') }}" onclick="event.preventDefault();document.getElementById('del_user{{$cer->id}}').submit();" class="fa fa-trash-o"></a>
                                    <form id="del_user{{$cer->id}}" action="{{ url('/del_cer') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                        <input type="hidden" name="cer_id" value="{{$cer->id}}">
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