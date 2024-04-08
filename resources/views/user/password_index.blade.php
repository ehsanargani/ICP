@extends('layouts.app')

@section('content')
<!-- begin .main-heading -->
<header class="main-heading">
    <!-- begin dashhead -->
    <div class="dashhead bg-white">
        <div class="dashhead-titles">
            <h6 class="dashhead-subtitle">

            </h6>
            <h3 class="dashhead-title">مدیریت رمز ورود</h3>
        </div>


    </div>
    <!-- END: dashhead -->
</header>
<!-- END: .main-heading -->
<div class="main-content bg-clouds">
    <div class="container-fluid p-t-15">



        <div class="box">
            <header class="bg-blue text-white">
                <h4>ویرایش رمز عبور</h4>
                <!-- begin box-tools -->

                <!-- END: box-tools -->
            </header>
            <div class="box-body collapse in">
                @if($errors->any())
                @if($errors->first()==1)
                    <h4 style="background-color: #FFAA3E;color: #fff;padding: 10px">رمز عبور با موفقیت ویرایش شد</h4>
                @endif
                @endif
                <form class="form-horizontal" method="post" action="{{url('/edit_password')}}" id="accountActivation">
                    {{ csrf_field() }}
                    <div class=" container">
                        <div class="col-md-6">
                            <label>نام کاربری:</label>
                            <input type="text"  disabled value="{{ Auth::user()->email}} " class="form-control">
                            <label>رمز عبور جدید</label>
                            <input type="password" class="form-control " name="password" id="pass" required>
                            <label>تکرار رمز عبور</label>
                            <input type="password" class="form-control " name="re_password" id="re_pass" required>
                           
                            <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                            
                            <br>
                            <hr class="b-s-dashed">
                            <button type="submit" id="buttonActivate" class="btn btn-warning pure-button pure-button-primary">ویرایش</button>

                        </div>
                       
                    </div>



                </form>
            </div>
        </div>



    </div>
</div>
<script>
    $(document).ready(function() {

        var password = document.getElementById("pass")
            , confirm_password = document.getElementById("re_pass");

        function validatePassword(){
            if(password.value != confirm_password.value) {
                confirm_password.setCustomValidity("کلمه عبور با هم یکسان نیست");
                $("#pass").css("background", "#ffeaea");
                $("#re_pass").css("background", "#ffeaea");
            } else {
                confirm_password.setCustomValidity('');
                $("#pass").css("background", "#f1ffea");
                $("#re_pass").css("background", "#f1ffea");
            }
        }

        password.onchange = validatePassword;
        confirm_password.onkeyup = validatePassword;


        $('input.radiobb').on('change', function() {
            $('input.radiobb').not(this).prop('checked', false);
        });



        $("#hide").click(function(){
            $("#pop_up").slideUp("slow");
        });

        $("#show").click(function(){
            $("#pop_up").toggle("slow");
        });



        $("#myInput").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $("#myTable tr ").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
    });
</script>
@endsection