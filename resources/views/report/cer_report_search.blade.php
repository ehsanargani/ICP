@extends('layouts.app')

@section('content')
<!-- begin .main-heading -->
<header class="main-heading">
    <!-- begin dashhead -->
    <div class="dashhead bg-white">
        <div class="dashhead-titles">
            <h6 class="dashhead-subtitle">

            </h6>
            <h3 class="dashhead-title">گزارش گواهی</h3>
        </div>


    </div>
    <!-- END: dashhead -->
</header>
<!-- END: .main-heading -->
<div class="main-content bg-clouds">
    <div class="container-fluid p-t-15">



        <div class="box">
            <header class="bg-blue text-white">
                <h4>جتسجو گواهی  </h4>
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


            <div class="col-md-12">
                <hr class="b-s-dashed">
            </div>
            <div class="box-body canvas-container overflow-hidden" style="min-height: 500px">
                <div class="box-body collapse in" id="box3">

                                <div class="col-md-12">
                <hr class="b-s-dashed">
            </div>
                          <form method="post" action="{{url('result_report_2')}}">
                        {{ csrf_field() }}
                        <div class="col-md-12">
                            <h5>جستجو بر اساس کد: </h5>
                        </div>
                         <div class="col-md-3">
                            <label>جستجو بر اساس :</label>
                              <select class="form-control" name="report">
                               
                                <option value="1">Cerificate no</option>
                                <option value="2">Insurance no</option>
                                <option value="3">P/l no</option>
                                <option value="4">B/L no</option>
                                <option value="5">CB no</option>
                             </select>
                              </div>
                              <div class="col-md-3">
                            <label>کد مورد نظر را وارد نمایید</label>
                            <input type="text" name="code" class="form-control" required>
                        </div>
                               <div class="col-md-12">
                           <br>
                            <input type="submit" value="جستجو" class="btn btn-info0">
                             
                        </div>

                        
                       
                    </form>
                </div>
                
                
                <div class="col-md-12">
                    <hr class="b-s-dashed">
                </div>

@if(isset($result))
                         <div class="col-md-12">
                <hr class="b-s-dashed">
            </div>
            <div class="box-body canvas-container overflow-hidden" style="min-height: 500px">
                <div class="box-body collapse in" id="box3">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th style="width: 200px">اسم شکت</th>
                                <th>شماره گواهی</th>
                                <th>تاریخ صدور</th>
                                <th>کد تعرفه</th>
                                <th style="width: 100px;text-align: center">مشاهده جزیات</th>
                    
                            </tr>
                        </thead>
                        <tbody id="myTable">
                          
                            <tr>
                                <td>{{$result->name}}</td>
                                <td>{{$result->cer_num}}</td>
                                <td>{{$result->issue_date}}</td>
                                <td>{{$result->iran_customs}}</td>
                                   <td class="text-center">
                                    <a href="{{ url('/editteachermanagement') }}" onclick="event.preventDefault();document.getElementById('show-form{{$result->id}}').submit();" class="fa fa-eye"></a>
                                    <form id="show-form{{$result->id}}" action="{{ url('/detile_cer') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                        <input type="hidden" name="cer_id" value="{{$result->id}}">
                                    </form>
                                </td>
                        
                            </tr>


                        </tbody>
                    </table>
                </div>
                <div class="col-md-12">
                    <hr class="b-s-dashed">
                </div>

                <!-- begin box-tools -->
           
                <!-- END: box-tools -->

            </div>
                @endif
            </div>



        </div>



    </div>
</div>

@endsection