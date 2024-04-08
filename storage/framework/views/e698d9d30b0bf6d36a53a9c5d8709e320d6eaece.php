

<?php $__env->startSection('content'); ?>
<!-- begin .main-heading -->
<header class="main-heading">
    <!-- begin dashhead -->
    <div class="dashhead bg-white">
        <div class="dashhead-titles">
            <h6 class="dashhead-subtitle">

            </h6>
            <h3 class="dashhead-title">میریت کاربر شرکت</h3>
        </div>


    </div>
    <!-- END: dashhead -->
</header>
<!-- END: .main-heading -->
<div class="main-content bg-clouds">
    <div class="container-fluid p-t-15">



        <div class="box">
            <header class="bg-blue text-white">
                <h4>مشاهده جزیات کاربر شرکت</h4>
                <!-- begin box-tools -->

                <!-- END: box-tools -->
            </header>
             <div class="box-body collapse in">
                
           


            </div>
            <div class="box-body collapse in">
                 
                    <div class=" container">
                        <div class="col-md-6 show_co">
                           
                            <h5> <label>نام شرکت :</label> <?php echo e($user->co_name); ?></h5>
                           
                            <h5>  <label>شماره تماس:</label> <?php echo e($user->sh_num); ?></h5>
                           
                            <h5>  <label>شماره فکس:</label> <?php echo e($user->fax_num); ?></h5>
                           
                            <h5>  <label>شناسه ملی:</label> <?php echo e($user->meli_num); ?></h5>
                          
                            <h5>  <label>کد اختصادی:</label> <?php echo e($user->eghtesadi_num); ?></h5>
                           
                            <h5>   <label>شماره ثبت</label> <?php echo e($user->sabt_num); ?></h5>
                            
                            <h5>  <label>کد پستی:</label> <?php echo e($user->post_num); ?></h5>
                        
                            <h5>      <label>آدرس:</label> <?php echo e($user->address); ?></h5>
                         

                        </div>
                        <div class="col-md-6" style="text-align:right">
                            <label>نام کاربری:</label>
                            <h5><?php echo e($user->email); ?></h5>
                           
                               <label> عکس لوگو</label>
                                <img src="images/user/<?php echo e($user->pic); ?>" alt="logo" class="img-responsive">
                       <br>
                            <br>
                                               <a href="<?php echo e(url('co_user_index')); ?>" class="btn btn-info0">بازشت</a>
                           
                          
                           

                        </div>
                    </div>



        
            </div>
        </div>



    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>