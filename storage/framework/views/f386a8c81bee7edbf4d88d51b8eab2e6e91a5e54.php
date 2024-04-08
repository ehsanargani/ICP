<?php $__env->startSection('content'); ?>
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
                <?php if($errors->any()): ?>
                <?php if($errors->first()==1): ?>
                    <h4 style="background-color: #FFAA3E;color: #fff;padding: 10px">رمز عبور با موفقیت ویرایش شد</h4>
                <?php endif; ?>
                <?php endif; ?>
-->

            </div>


            <div class="col-md-12">
                <hr class="b-s-dashed">
            </div>
            <div class="box-body canvas-container overflow-hidden" style="min-height: 500px">
                <div class="box-body collapse in" id="box3">
                    <form method="post" action="<?php echo e(url('result_report')); ?>">
                        <?php echo e(csrf_field()); ?>

                        <div class="col-md-12">
                            <h5>جهت جستجوی گواهی نامه ، فیلد های مورد نظر را پر نمایید و بر روی دکمه جستجو کلیک کنید.</h5>
                        </div>
                        <div class="col-md-3">
                            <label>از تاریخ</label>
                            <input type="date" name="from_date" class="form-control"  required>
                        </div>
                             <div class="col-md-3">
                            <label>تا تاریخ</label>
                            <input type="date" name="to_date" class="form-control" required>
                        </div>
                        <div class="col-md-3">
                            <label>نام شرکت</label>
                            <input type="text" name="co_name" class="form-control">
                        </div>
                          <div class="col-md-3">
                            <label>نام بانک</label>
                            <input type="text" name="bank_name" class="form-control">
                        </div>
                          <div class="col-md-3">
                            <label>نام فروشنده</label>
                            <input type="text" name="seller" class="form-control">
                        </div>
                          <div class="col-md-3">
                            <label>خریدار</label>
                            <input type="text" name="buyer" class="form-control">
                        </div>
                         <div class="col-md-3">
                            <label>کد تعرفه</label>
                            <input type="text" name="iran_customs" class="form-control">
                        </div>
                         <div class="col-md-3">
                            <label>محل بازرسی</label>
                            <input type="text" name="plase_ins" class="form-control">
                        </div>
                          <div class="col-md-12">
                           <br>
                            <input type="submit" value="جتسجو" class="btn btn-info0">
                             <a href="<?php echo e(url('cer_report')); ?>" class="btn btn-warning">خالی کردن فرم</a>
                        </div>
                        
                    </form>
                   
                </div>
                <div class="col-md-12">
                    <hr class="b-s-dashed">
                </div>


            </div>



        </div>



    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>