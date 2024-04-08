<?php $__env->startSection('content'); ?>
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
                        <?php if(Auth::user()->role_id!=3): ?>
                        <div class="panel-heading">لینکهای سریع</div>
                        <div class="panel-body">
                            <div class="row" style="border-bottom: 1px solid #eee;margin-top: 10px;padding-bottom: 15px">
                                <a href="<?php echo e(url('user')); ?>">
                                <div class="col-sm-6">
                                    <div class="col-sm-2 text-center">
                                        <img src="assets/img/link_1.png">
                                    </div>
                                    <div class="col-sm-10">
                                        <h4>مدیریت کاربران سامانه</h4>
                                        <p>در واقع ادمین سایت و کاربران نهاد نظارتی در این قسمت وارد میشوند</p>
                                    </div>
                                </div>
                                </a>
                                <a href="<?php echo e(url('co_user_index')); ?>">
                                <div class="col-sm-6">
                                    <div class="col-sm-2 text-center">
                                        <img src="assets/img/link_4.png">
                                    </div>
                                    <div class="col-sm-10">
                                        <h4>مدیریت کاربران شرکت</h4>
                                        <p>کاربرانی که از طرف شرکت میخواهند گواهی ثبت کنند</p>
                                    </div>
                                </div>
                                </a>
                            </div>
                            <div class="row" style="border-bottom: 1px solid #eee;margin-top: 20px;padding-bottom: 15px">
                                <a href="<?php echo e(url('see_Certification')); ?>">
                                <div class="col-sm-6">
                                    <div class="col-sm-2 text-center">
                                        <img src="assets/img/link_2.png">
                                    </div>
                                    <div class="col-sm-10">
                                        <h4>مشاهده گواهی ها</h4>
                                        <p>گواهی های درج شده قابل مشاهده است</p>
                                    </div>
                                </div>
                                </a>
                                <a href="<?php echo e(url('notification')); ?>">
                                <div class="col-sm-6">
                                    <div class="col-sm-2 text-center">
                                        <img src="assets/img/link_5.png">
                                    </div>
                                    <div class="col-sm-10">
                                        <h4>مدیریت اطلاعیه ها</h4>
                                        <p>میتوانید در این بخش اطلاعایه ها را وارد نمایید</p>
                                    </div>
                                </div>
                                </a>
                            </div>
                            <div class="row" style="margin-top: 20px">
                                <a href="<?php echo e(url('requlation')); ?>">
                                <div class="col-sm-6">
                                    <div class="col-sm-2 text-center">
                                        <img src="assets/img/link_3.png">
                                    </div>
                                    <div class="col-sm-10">
                                        <h4>مدیریت آیین نامه ها</h4>
                                        <p>آیین نامه ها در این قسمت مدیریت خواهند شد</p>
                                    </div>
                                </div>
                                </a>
                                <a href="<?php echo e(url('message')); ?>">
                                <div class="col-sm-6">
                                    <div class="col-sm-2 text-center">
                                        <img src="assets/img/link_6.png">
                                    </div>
                                    <div class="col-sm-10">
                                        <h4>مدیریت پیامها</h4>
                                        <p>امکان ارسال پیان برای هر شرکت در این بخش ایحجاد شده است</p>
                                    </div>
                                </div>
                                </a>
                            </div>
                        </div>
                        <?php endif; ?>
                        <div class="panel-heading">اطلاعیه ها</div>
                         <div class="panel-body">
                                <div class="col-sm-12">
                                <?php $__currentLoopData = $notifications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $notification): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="block">
                                    <h4><?php echo e($notification->title); ?></h4>
                                    <p><?php echo e($notification->content); ?></p>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                 
                                </div>
                            </div>
                        
            
<!--
                        
                           <div class="panel-heading">آیین نامه ها</div>
                         <div class="panel-body">
                                <div class="col-sm-12">
                                
                                   <?php $__currentLoopData = $regulations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $regulation): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="block">
                                    <h4><?php echo e($regulation->title); ?></h4>
                                    <p><?php echo e($regulation->content); ?></p>
                                        </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                           
                        
                         
                        </div>
-->
                        <div class="panel-heading">پیامهای خصوصی</div>
                        <div class="panel-body">
                            <div class="row" style="border-bottom: 1px solid #eee;margin-top: 10px;padding-bottom: 15px">
                                <div class="col-sm-12">
                                    <?php $__currentLoopData = $messages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="block">
                                        <a href="<?php echo e(url('/editteachermanagement')); ?>" <?php if($message->user_get_seen==0){ ?> style="color:red" <?php } ?> <?php if($message->user_get_seen==1){ ?> style="color:green" <?php } ?> onclick="event.preventDefault();document.getElementById('message<?php echo e($message->id); ?>').submit();">
                                            <h4><?php echo e($message->title); ?> - <?php if($message->user_get_seen==0){ ?> (خوانده نشده) <?php } if($message->user_get_seen==1){ ?> (خوانده شده) <?php } ?></h4>
                                        </a>
                                        <form id="message<?php echo e($message->id); ?>" action="<?php echo e(url('/see_message')); ?>" method="POST" style="display: none;">
                                            <?php echo e(csrf_field()); ?>

                                            <input type="hidden" name="message_id" value="<?php echo e($message->id); ?>">
                                        </form>
                                    </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                            </div>
                        </div>
                        
                        

                    </div>
                </div>
            </div>


        </div>
        <!-- END: .container-fluid -->

    </div>
    <!-- END: .main-content -->





<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>