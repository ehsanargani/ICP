@extends('layouts.app')

@section('content')
<!-- begin .main-heading -->
<header class="main-heading">
    <!-- begin dashhead -->
    <div class="dashhead bg-white">
        <div class="dashhead-titles">
            <h6 class="dashhead-subtitle">

            </h6>
            <h3 class="dashhead-title">مشاهده کردن گواهی</h3>
        </div>


    </div>
    <!-- END: dashhead -->
</header>
<!-- END: .main-heading -->
<div class="main-content bg-clouds">
    <div class="container-fluid p-t-15">

        <h3 style="color:blue">نام شرکت: {{$cer->co_name}}</h3>

        <div class="box">

            <div class="box-body collapse in">



            </div>
            <div class="box-body collapse in">

                <div class=" container form_en form_en_detile">
                    <div class="row">
                        <div class="col-md-4">
                            <label>issue date</label>
                            <h5>{{$cer->issue_date}}</h5>
                        </div>

                        <div class="col-md-4">
                            <label>Certificate No</label>
                            <h5>{{$cer->cer_num}}</h5>
                        </div>
                        <div class="col-md-4">
                            <label>Type Of Inspection</label>
                            <h5>{{$cer->cer_type}}</h5>

                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <label>Bank name</label>
                            <h5>{{$cer->bank_name}}</h5>
                        </div>
                        <div class="col-md-4">
                            <label>Seller / Beneficiary</label>
                            <h5>{{$cer->seller}}</h5>
                        </div>
                        <div class="col-md-4">
                            <label>Buyer / Applicant</label>
                            <h5>{{$cer->buyer}}</h5>
                        </div>


                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <label>P/l date</label>
                            <h5>{{$cer->p_l_date}}</h5>

                        </div>
                        <div class="col-md-4">
                            <label>P/l no</label>
                            <h5>{{$cer->p_l_no}}</h5>
                        </div>
                        <div class="col-md-4">
                            <label>Bank code</label>
                            <h5>{{$cer->bank_code}}</h5>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <label>Date of Inspection</label>
                            <h5>{{$cer->date_ins}}</h5>
                        </div>
                        <div class="col-md-4">
                            <label>B/L no</label>
                            <h5>{{$cer->b_l_no}}</h5>
                        </div>
                        <div class="col-md-4">
                            <label>Iranian Customs Tarif no</label>
                            <h5>{{$cer->iran_customs}}</h5>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <label>Insurance no</label>
                            <h5>{{$cer->ins_no}}</h5>
                        </div>
                        <div class="col-md-4">
                            <label>CB no</label>
                            <h5>{{$cer->cb_no}}</h5>
                        </div>
                        <div class="col-md-4">
                            <label>Place of Inspection</label>
                            <h5>{{$cer->place_ins}}</h5>
                        </div>

                    </div>
                    <div class="row">

                        <div class="col-md-4">
                            <label>BL PDF</label>
                            <br>
                            <a href="file/{{$cer->user_id}}/{{$cer->bl_pdf}}" class="btn btn-warning">دریافت فایل</a>
                        </div>
                        <div class="col-md-4">
                            <label>PI PDF</label>
                            <br>
                            <a href="file/{{$cer->user_id}}/{{$cer->pl_pdf}}" class="btn btn-warning">دریافت فایل</a>

                        </div>
                        <div class="col-md-4">
                            <label>Insurance date</label>
                            <h5>{{$cer->ins_date}}</h5>
                        </div>
                    </div>
                    <div class="row">

                        <div class="col-md-4">
                            <label>Operator name</label>
                            <h5>{{$cer->operator_name}}</h5>
                        </div>

                        <div class="col-md-4">
                            <label>Acceptance letter PDF</label>
                            <br>
                            <a href="file/{{$cer->user_id}}/{{$cer->acc_pdf}}" class="btn btn-warning">دریافت فایل</a>

                        </div>
                        <div class="col-md-4">
                            <label>IC PDF</label>
                            <br>
                            <a href="file/{{$cer->user_id}}/{{$cer->ic_pdf}}" class="btn btn-warning">دریافت فایل</a>
                        </div>
                        <div class="col-md-4"></div>
                        <div class="col-md-4">
                             <br>
<!--                            <a href="{{url('see_Certification')}}" class="btn btn-info0">بازگشت</a>-->
                        </div>
                    </div>






                </div>

            </div>
        </div>



    </div>
</div>

@endsection