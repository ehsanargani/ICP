<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>سامانه ورود اطلاعات گواهی  IC </title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    <!-- Vendor stylesheet files. REQUIRED -->
    <!-- BEGIN: Vendor  -->
    <link rel="stylesheet" href="assets/css/vendor-rtl.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- END: core stylesheet files -->
    <link rel="stylesheet" href="assets/css/jquery.Bootstrap-PersianDateTimePicker.css">
    <link rel="stylesheet" href="assets/css/bootstrap-theme.min.css">

    <!-- Plugin stylesheet files. OPTIONAL -->

    <link rel="stylesheet" href="assets/vendor/jqvmap/jqvmap.css">

    <link rel="stylesheet" href="assets/vendor/dragula/dragula.css">

    <link rel="stylesheet" href="assets/vendor/perfect-scrollbar/perfect-scrollbar.css">

    <!-- END: plugin stylesheet files -->

    <!-- Theme main stlesheet files. REQUIRED -->
    <link rel="stylesheet" href="assets/css/chl-rtl.css">
    <link id="theme-list" rel="stylesheet" href="assets/css/theme-peter-river-rtl.css">
    <!-- END: theme main stylesheet files -->

    <!-- begin pace.js  -->
    <link rel="stylesheet" href="assets/vendor/pace/themes/blue/pace-theme-minimal.css">
    <script src="assets/vendor/pace/pace.js"></script>
    <!-- END: pace.js  -->


</head>

<body dir="rtl">

    <div class="container-fluid underbody"></div>
    <!-- begin .app -->
    <div class="app">
        <!-- begin .app-wrap -->
        <div class="app-wrap">
            <!-- begin  .app-heading -->
            <header class="app-heading shadow-2dp">
                <nav class="navbar navbar-default navbar-static-top">
                    <!-- begin .navbar-header -->
                    <div class="navbar-header">
                        <!-- begin .navbar-header-left with image -->
                        <div class="navbar-header-left b-r">
                            <!--begin logo-->
                            <a class="logo" href="{{url('/home')}}">
                                <span class="logo-xs visible-xs">
                                    <!--<img src="assets/img/logo-xs.png" alt="logo-xs">-->
                                </span>
                                <span class="logo-lg hidden-xs">
                                    <!--<img src="assets/img/logo.png" alt="logo-lg">-->
                                </span>
                            </a>
                            <!--end logo-->
                        </div>
                        <nav class="nav navbar-header-nav">
                            <a class="visible-xs b-r" href="#top-nav-list" data-toggle=collapse>
                                <i class="fa fa-fw fa-bars"></i>
                            </a>
                            <a class="hidden-xs b-r" href="#" data-side=mini>
                                <i class="fa fa-fw fa-bars"></i>
                            </a>
                        </nav>
                        <ul class="nav navbar-header-nav m-l-a">
                            <li class="visible-xs b-l">
                                <a href="#top-search" data-toggle="canvas">
                                    <i class="fa fa-fw fa-search"></i>
                                </a>
                            </li>

                            {{--منوی پروفایل بالای صفحه--}}
                            <li class="dropdown b-l">
                                @if (Auth::guest())
                                @else
                                <a class="dropdown-toggle profile-pic" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    <img class="img-circle" src="images/user/{{Auth::user()->pic }}" alt="Jane Doe">
                                    <b class="hidden-xs hidden-sm"> {{ Auth::user()->name }} {{ Auth::user()->lastname }} </b>
                                </a>
                                @endif
                                <ul class="dropdown-menu animated flipInY pull-right">
<!--
                                    <li>
                                        <a href="{{ url('/profile_index') }}">@lang('backend.profile')</a>
                                    </li>
-->
                                    <li>
                                        <a href="{{ url('/password_index') }}">@lang('backend.chengpassword')</a>
                                    </li>

                                    <li role="separator" class="divider"></li>
                                    <li>
                                        <a href="{{ url('/logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                            @lang('backend.exit')
                                        </a>

                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                            {{--پایان--}}
                        </ul>
                    </div>
                    <!-- END: .navbar-header -->
                </nav>
            </header>

            <div class="app-container">
                <div class="app-main ">
                    <header class="main-heading">
                        <div class="app-container">

                            {{--پایان--}}
                            {{--منوی نرم افزار--}}

                            <aside class="app-side">
                                <div class="side-content">
                                    @if (Auth::guest())
                                    @else
                                    <div class="user-panel">
                                        <div class="col-md-12 text-center img_user">
                                            <img src="images/user/{{Auth::user()->pic}}" class="img-responsive">
                                            <h5>{{ Auth::user()->name }} {{ Auth::user()->lastname }}</h5>
                                        </div>
                                    </div>
                                    @endif
                                    <nav class="side-nav">
                                        <ul class="metismenu nav nav-inverse nav-bordered nav-stacked" data-plugin="metismenu">


                                            <li>
                                                <a class="active" href="{{url('/home')}}">
                                                    <span class="nav-icon">
                                                        <i class="fa fa-fw fa-cogs"></i>
                                                    </span>
                                                    <span class="nav-title">@lang('backend.dashbord')</span>
                                                </a>
                                            </li>

                                            <li class="nav-divider"></li>

                                            @if(Auth::user()->role_id==1)
                                            
                                            <li>
                                                <a href="javascript:;">
                                                    <span class="nav-icon">
                                                        <i class="fa fa-fw fa-user-o "></i>
                                                    </span>
                                                    <span class="nav-title">مدیریت سامانه</span>
                                                    <span class="nav-tools "><i class="fa fa-fw arrow"></i></span>
                                                </a>
                                                <ul class="nav nav-sub nav-stacked">
                                                    <li>
                                                        <a href="{{url('/user')}}">مدیریت کاربران </a>
                                                    </li>
                                                    <li>
                                                        <a href="{{url('/notification')}}"> مدیریت اطلاعیه ها </a>
                                                    </li>

                                                    <li>
                                                        <a href="{{Url('/requlation')}}">مدیریت آیین نامه ها</a>
                                                    </li>

                                                    <li>
                                                        <a href="{{url('/message')}}">مدیریت پیام ها</a>
                                                    </li>
                                                </ul>
                                            </li>

                                            @endif
                                            
                                            

                                            <li>
                                                  @if(Auth::user()->role_id==1  )
                                                <a href="javascript:;">
                                                    <span class="nav-icon">
                                                        <i class="fa fa-fw fa-map"></i>
                                                    </span>
                                                    <span class="nav-title">مدیریت شرکت ها</span>
                                                    <span class="nav-tools ">
                                                        <i class="fa fa-fw arrow"></i>
                                                    </span>
                                                </a>
                                                 @endif
                                                <ul class="nav nav-sub nav-stacked">
                                                    @if(Auth::user()->role_id==1)
                                                    <li>
                                                        <a href="{{url('co_user_index')}}">کاربران شرکت</a>

                                                    </li>
                                                    @endif
                                                    
                                             
                                               
                                                    <li>
<!--                                                        <a href="{{url('educationalplace')}}">درخواست های ارسال شده</a>-->
                                                    </li>

                                                </ul>
                                            </li>
                                             @if(Auth::user()->role_id==1 || Auth::user()->role_id==2 )

                                              <li>
                                                <a class="" href="{{url('/see_Certification')}}">
                                                    <span class="nav-icon">
                                                        <i class="fa fa-file-text"></i>
                                                    </span>
                                                    <span class="nav-title">مشاهده گواهی نامه</span>
                                                </a>
                                            </li>
                                                 @endif
                                            <li>
                                                <a class="" href="{{url('/regulation_home')}}">
                                                    <span class="nav-icon">
                                                        <i class="fa fa-file-text"></i>
                                                    </span>
                                                    <span class="nav-title">مشاهده آیین نامه ها</span>
                                                </a>
                                            </li>
                                             @if(Auth::user()->role_id==3)
                                              <li>
                                                <a class="" href="{{url('/add_Certification')}}">
                                                    <span class="nav-icon">
                                                        <i class="fa fa-bookmark"></i>
                                                    </span>
                                                    <span class="nav-title">ثبت گواهی جدید</span>
                                                </a>
                                            </li>
                                            @endif
                                            
                                            
                                            <li class="nav-divider"></li>
                                                      @if(Auth::user()->role_id==1 || Auth::user()->role_id==2 )

                                            <li>
                                                <a href="javascript:;">
                                                    <span class="nav-icon">
                                                        <i class="fa fa-fw fa-tachometer"></i>
                                                    </span>

                                                    <span class="nav-title">گزارش ها</span>
                                                    <span class="nav-tools "><i class="fa fa-fw arrow"></i></span>
                                                </a>
                                                <ul class="nav nav-sub nav-stacked">


                                                    <li>
                                                        <a href="cer_report">گزارش</a>
                                                    </li>
                                                        <li>
                                                        <a href="cer_report_search">جستجو</a>
                                                    </li>
                                                    
                                                </ul>
                                            </li>
                                            @endif

                                            <!-- BEGIN: تقویم آموزشی -->


                                        </ul>
                                        <!-- END: nav-content -->
                                    </nav>
                                </div>
                            </aside>
                            <!-- پایان -->

                            <div class="side-visible-line hidden-xs" data-side="collapse">
                                <i class="fa fa-caret-right"></i>
                            </div>
                            <div class="app-main">
                                <div class="main-content ">

                                    <!-- begin .container-fluid -->
                                    <div class="container-fluid main_page ">

                                        @yield('content')

                                    </div>
                                    <!-- END: .container-fluid -->
                                </div>

                                <footer class="main-footer bg-white p-a-5">

                                </footer>

                            </div>

                        </div>

                        <footer class="app-footer p-t-10 text-white">
                            <div class="container-fluid">
                                <p class="text-center small">
                                    حق کپی رایت در این قسمت نوشته میشود
                                </p>
                            </div>
                        </footer>

                    </header>
                </div>
            </div>
            <!-- END: .app -->
            <span class="fa fa-angle-up" id="totop" data-plugin="totop"></span>
            <!-- Vendor javascript files. REQUIRED -->
            <script src="assets/js/vendor.js"></script>
            <!-- END: End javascript files -->
            <!-- Plugin javascript files. OPTIONAL -->
            <script src="assets/vendor/waypoints/jquery.waypoints.js"></script>
            <script src="assets/vendor/counterup/jquery.counterup.js"></script>
            <script src="assets/vendor/jqvmap/jquery.vmap.js"></script>
            <script src="assets/vendor/jqvmap/jquery.vmap.sampledata.js"></script>
            <script src="assets/vendor/jqvmap/maps/jquery.vmap.usa.js"></script>
            <script src="assets/vendor/perfect-scrollbar/perfect-scrollbar.jquery.js"></script>
            <script src="assets/vendor/dragula/dragula.js"></script>
            <script src="assets/vendor/chart.js/Chart.js"></script>
            <script src="assets/vendor/tablesorter/js/jquery.tablesorter.js"></script>
            <script src="assets/js/chl.js"></script>
            <script src="assets/js/chl-demo.js"></script>
            <script type="text/javascript" src="assets/js/jquery.magnific-popup.js"></script>
            <script type="text/javascript" src="assets/js/owl.carousel.min.js"></script>
            <script type="text/javascript" src="assets/js/main.js"></script>
            <script type="text/javascript" src="assets/js/myjs.js.js"></script>
         
            <script>
                Pace.on('done', function() {
                    Elk.Chart();
                });
            </script>
            </footer>
            <script src="assets/js/jalaali.js" type="text/javascript"></script>
            <script src="assets/js/jquery.Bootstrap-PersianDateTimePicker.js" type="text/javascript"></script>
            <!-- END: .main-footer -->

        </div>
        <!-- END: .app-main -->
    </div>
    </header>
</body>

</html>