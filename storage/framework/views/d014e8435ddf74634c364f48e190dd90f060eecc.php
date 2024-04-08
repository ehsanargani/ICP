<?php $__env->startSection('content'); ?>
<!-- begin .main-heading -->
<header class="main-heading">
    <!-- begin dashhead -->
    <div class="dashhead bg-white">
        <div class="dashhead-titles">
            <h6 class="dashhead-subtitle">

            </h6>
            <h3 class="dashhead-title">مدیریت کاربر</h3>
        </div>


    </div>
    <!-- END: dashhead -->
</header>
<!-- END: .main-heading -->
<div class="main-content bg-clouds">
    <div class="container-fluid p-t-15">



        <div class="box">
            <header class="bg-blue text-white">
                <h4></h4>
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
                <form class="form-horizontal" method="post" action="<?php echo e(url('/insert_user')); ?>" id="accountActivation" enctype="multipart/form-data">
                    <?php echo e(csrf_field()); ?>

                    <div class=" container">
                        <div class="col-md-6">
                            <label>نام :</label>
                            <input type="text" name="name" required  class="form-control">
                            <label>نام خانوادگی:</label>
                            <input type="text" name="lastname" required  class="form-control">
                            <label> عکس مورد نظر را انتخاب کنید</label>
                            <input type="file" name="personel_pic" class="btn btn-info0">
                            
                       <br>
                            <br>
                                                 <button type="submit" id="buttonActivate" class="btn btn-success pure-button pure-button-primary">ثبت اطلاعات</button>

                        </div>
                        <div class="col-md-6" style="text-align:right">
                            <label>نام کاربری:</label>
                            <input type="text" name="Email" class="form-control">
                            <label>رمز ورود</label>
                            <input type="password" name="password"  class="form-control">
                            <label> گروه کاری کاربر</label>
                            <select name="role" class="form-control">
                                <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($role->id!='3'): ?>
                                
                                <option value="<?php echo e($role->id); ?>"><?php echo e($role->name); ?></option>
                                <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                          
                           

                        </div>
                    </div>



                </form>
            </div>
        </div>



    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>