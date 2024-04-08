<?php $__env->startSection('content'); ?>
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
                <form class="form-horizontal" method="post" action="<?php echo e(url('/edit_profile')); ?>" id="accountActivation" enctype="multipart/form-data">
                    <?php echo e(csrf_field()); ?>

                    <div class=" container">
                        <div class="col-md-6">
                            <label>نام کاربری:</label>
                            <input type="text"  disabled value="<?php echo e(Auth::user()->email); ?> " class="form-control">
                            <label>نام :</label>
                            <input type="text" name="name" required value="<?php echo e(Auth::user()->name); ?> " class="form-control">
                            <label>نام خانوادگی:</label>
                            <input type="text" name="lastname" required value="<?php echo e(Auth::user()->lastname); ?> " class="form-control">
                            <label> عکس مورد نظر را انتخاب کنید</label>
                            <input type="file" name="personel_pic" class="btn btn-info">
                            <input type="hidden" name="user_id" value="<?php echo e(Auth::user()->id); ?>">
                            
                            <br>
                            <hr class="b-s-dashed">
                            <button type="submit" id="buttonActivate" class="btn btn-warning pure-button pure-button-primary">ویرایش</button>

                        </div>
                        <div class="col-md-6 text-right">
                            <img src="images/user/<?php echo e(Auth::user()->pic); ?>" class="img-responsive" alt="pic_user">
                        </div>
                    </div>



                </form>
            </div>
        </div>



    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>