<?php $__env->startSection('content'); ?>
<!-- begin .main-heading -->
<header class="main-heading">
    <!-- begin dashhead -->
    <div class="dashhead bg-white">
        <div class="dashhead-titles">
            <h6 class="dashhead-subtitle">

            </h6>
            <h3 class="dashhead-title">مدیریت پیام ها</h3>
        </div>


    </div>
    <!-- END: dashhead -->
</header>
<!-- END: .main-heading -->
<div class="main-content bg-clouds">
    <div class="container-fluid p-t-15">



        <div class="box">
                 <header class="bg-blue text-white">
                <h4>ارسال پیام جدید</h4>
                <!-- begin box-tools -->

                <!-- END: box-tools -->
            </header>

            <div class="box-body collapse in">
                <form class="form-horizontal" method="post" action="<?php echo e(url('/insert_message')); ?>" id="accountActivation" >
                    <?php echo e(csrf_field()); ?>

                    <div class=" container">
                        <div class="col-md-6">
                            <label>عنوان:</label>
                            <input type="text" name="title" required  class="form-control">
                          
                           
                            
              


                        </div>
                        <div class="col-md-6">
                        <label>گیرنده:</label>
                            <select name="user_get" class="form-control">
                                <?php $__currentLoopData = $user_gets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user_get): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($user_get->id); ?>">
                                        <?php if($user_get->role_id<>3): ?>
                                        <?php echo e($user_get->name); ?> <?php echo e($user_get->lastname); ?> ( <?php echo e($user_get->role_name); ?> )
                                        <?php else: ?>
                                        <?php echo e($user_get->co_name); ?> ( <?php echo e($user_get->role_name); ?> )
                                        <?php endif; ?>
                                </option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                        <div class="col-md-12">
                          <label>متن پیام:</label>
                            <textarea name="content" class="form-control" required ></textarea>
                                     <br>
                            <br>
                                                 <button type="submit" id="buttonActivate" class="btn btn-success pure-button pure-button-primary">ثبت اطلاعات</button>
                                                        <a href="<?php echo e(url('message')); ?>" class="btn btn-info0">انصراف</a>
                        </div>
                 
                    </div>



                </form>
            </div>
        </div>



    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>