@extends('layouts.app')

@section('content')
    <!-- END: .main-heading -->

    <!-- begin .main-heading -->
    <header class="main-heading">
        <!-- begin dashhead -->
        <div class="dashhead bg-white">
            <div class="dashhead-titles">
                <h6 class="dashhead-subtitle">

                </h6>
                <h3 class="dashhead-title">داشبورد</h3>
            </div>

                              
        </div>
        <!-- END: dashhead -->
    </header>
    <!-- END: .main-heading -->

    <div class="main-content bg-clouds">

        <!-- begin .container-fluid -->
        <div class="container-fluid p-t-15">
   

            <div class="row">
                <div class="container-fluid">
                    <div class="panel panel-default">
                      
           
                        
            
                        
                           <div class="panel-heading">آیین نامه ها</div>
                         <div class="panel-body">
                                <div class="col-sm-12">
                                
                                   @foreach($regulations as $regulation)
                                    <div class="block">
                                    <h4>{{$regulation->title}}</h4>
                                    <p>{{$regulation->content}}</p>
                                        </div>
                                @endforeach
                   
                                </div>
                             
                           
                        
                         
                        </div>
                     
                        
                        

                    </div>
                </div>
            </div>


        </div>
        <!-- END: .container-fluid -->

    </div>
    <!-- END: .main-content -->





@endsection
