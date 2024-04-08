<?php $__env->startSection('content'); ?>
<!-- begin .main-heading -->
<header class="main-heading">
    <!-- begin dashhead -->
    <div class="dashhead bg-white">
        <div class="dashhead-titles">
            <h6 class="dashhead-subtitle">

            </h6>
            <h3 class="dashhead-title">مدیریت آیین نام ها</h3>
        </div>


    </div>
    <!-- END: dashhead -->
</header>
<!-- END: .main-heading -->
<div class="main-content bg-clouds">
    <div class="container-fluid p-t-15">



        <div class="box">
                 <header class="bg-blue text-white">
                <h4>اضافه کردن آیین نامه جدید</h4>
                <!-- begin box-tools -->

                <!-- END: box-tools -->
            </header>

            <div class="box-body collapse in">
                <form class="form-horizontal" method="post" action="<?php echo e(url('/insert_regulation')); ?>" id="accountActivation" >
                    <?php echo e(csrf_field()); ?>

                    <div class=" container">
                        <div class="col-md-12">
                            <label>عنوان:</label>
                            <input type="text" name="title" required  class="form-control">
                            <label>متن اطلاعیه:</label>
                            <textarea name="content" class="form-control" required ></textarea>
                           
                            
                       <br>
                            <br>
                                                 <button type="submit" id="buttonActivate" class="btn btn-success pure-button pure-button-primary">ثبت اطلاعات</button>
                                                        <a href="<?php echo e(url('requlation')); ?>" class="btn btn-info0">انصراف</a>


                        </div>
                 
                    </div>



                </form>
            </div>
        </div>



    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>