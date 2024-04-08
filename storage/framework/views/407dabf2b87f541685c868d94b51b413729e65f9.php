

<?php $__env->startSection('content'); ?>
<!-- begin .main-heading -->
<header class="main-heading">
    <!-- begin dashhead -->
    <div class="dashhead bg-white">
        <div class="dashhead-titles">
            <h6 class="dashhead-subtitle">

            </h6>
            <h3 class="dashhead-title">مدیریت کاربران</h3>
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
                <form class="form-horizontal" method="post" action="<?php echo e(url('/update_user')); ?>" id="accountActivation" enctype="multipart/form-data">
                    <?php echo e(csrf_field()); ?>

                    <div class=" container">
                        <div class="col-md-6">
                            <label>نام کاربری:</label>
                            <input type="text"  disabled value="<?php echo e($user->Email); ?> " class="form-control">
                            <label>نام :</label>
                            <input type="text" name="name" required value="<?php echo e($user->name); ?> " class="form-control">
                            <label>نام خانوادگی:</label>
                            <input type="text" name="lastname" required value="<?php echo e($user->lastname); ?> " class="form-control">
                            <label>گروه کاری</label>
                            <select name="role" class="form-control">
                                <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($role->id!='3'): ?>
                                <option
                                        <?php if($role->id==$user->role_id): ?>
                                    selected    
                                    <?php endif; ?>
                                        value="<?php echo e($role->id); ?>"><?php echo e($role->name); ?></option>
                                <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                            <label> عکس مورد نظر را انتخاب کنید</label>
                            <input type="file" name="personel_pic" class="btn btn-info0">
                            <input type="hidden" name="user_id" value="<?php echo e($user->id); ?>">
                            
                            <br>
                            <hr class="b-s-dashed">
                            <button type="submit" id="buttonActivate" class="btn btn-success pure-button pure-button-primary">ویرایش</button>
                            <a href="<?php echo e(url('user')); ?>" class="btn btn-info0">انصراف</a>

                        </div>
                        <div class="col-md-6 text-right">
                            <img src="images/user/<?php echo e($user->pic); ?>" class="img-responsive" alt="pic_user">
                        </div>
                    </div>



                </form>
            </div>
        </div>



    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>