<?php $__env->startSection('content'); ?>
<!-- begin .main-heading -->
<header class="main-heading">
    <!-- begin dashhead -->
    <div class="dashhead bg-white">
        <div class="dashhead-titles">
            <h6 class="dashhead-subtitle">

            </h6>
            <h3 class="dashhead-title">مدیریت کاربر شرکت</h3>
        </div>


    </div>
    <!-- END: dashhead -->
</header>
<!-- END: .main-heading -->
<div class="main-content bg-clouds">
    <div class="container-fluid p-t-15">



        <div class="box">
            <header class="bg-blue text-white">
                <h4>اضافه کردن کاربر شرکت</h4>
                <!-- begin box-tools -->

                <!-- END: box-tools -->
            </header>
             <div class="box-body collapse in">
                
                <?php if($errors->any()): ?>
                <?php if($errors->first()==1): ?>
                    <h4 style="background-color: #FFAA3E;color: #fff;padding: 10px">این نام کاربری در سیستم موجود است. لطفا نام کاربری دیگری را انتخاب نمایید</h4>
                <?php endif; ?>
                <?php endif; ?>


            </div>
            <div class="box-body collapse in">
                <form class="form-horizontal" method="post" action="<?php echo e(url('/insert_co')); ?>" id="accountActivation" enctype="multipart/form-data">
                    <?php echo e(csrf_field()); ?>

                    <div class=" container">
                        <div class="col-md-6">
                            <label>نام شرکت :</label>
                            <input type="text" name="co_name" required  class="form-control">
                            <label>شماره تماس:</label>
                            <input type="text" name="sh_num" required  class="form-control">
                            <label>شماره فکس:</label>
                            <input type="text" name="fax_num"   class="form-control">  
                            <label>شناسه ملی:</label>
                            <input type="text" name="meli_num"   class="form-control">
                            <label>کد اختصادی:</label>
                            <input type="text" name="eghtesadi_num"   class="form-control">
                             <label>شماره ثبت</label>
                            <input type="text" name="sabt_num"   class="form-control">
                             <label>کد پستی:</label>
                            <input type="text" name="post_num"   class="form-control">
                             <label>آدرس:</label>
                            <input type="text" name="address" required   class="form-control">
                         

                        </div>
                        <div class="col-md-6" style="text-align:right">
                            <label>نام کاربری:</label>
                            <input type="text" name="Email" class="form-control">
                            <label>رمز ورود</label>
                            <input type="password" name="password"  class="form-control">
                               <label> عکس مورد نظر را انتخاب کنید</label>
                            <input type="file" name="personel_pic" class="btn btn-info0">
                            
                       <br>
                            <br>
                                                 <button type="submit" id="buttonActivate" class="btn btn-success pure-button pure-button-primary">ثبت اطلاعات</button>
                                                                           <a href="<?php echo e(url('co_user_index')); ?>" class="btn btn-info0">بازشت</a>

                           
                          
                           

                        </div>
                    </div>



                </form>
            </div>
        </div>



    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>