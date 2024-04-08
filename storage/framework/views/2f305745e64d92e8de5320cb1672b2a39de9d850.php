

<?php $__env->startSection('content'); ?>
<!-- begin .main-heading -->
<header class="main-heading">
    <!-- begin dashhead -->
    <div class="dashhead bg-white">
        <div class="dashhead-titles">
            <h6 class="dashhead-subtitle">

            </h6>
            <h3 class="dashhead-title">مدیریت آیین نامه ها</h3>
        </div>


    </div>
    <!-- END: dashhead -->
</header>
<!-- END: .main-heading -->
<div class="main-content bg-clouds">
    <div class="container-fluid p-t-15">



        <div class="box">
            <header class="bg-blue text-white">
                <h4>لیست آیین نامه</h4>
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


            <div class="container-fluid" style="width: 100%">
                <div class="container-fluid" style="width: 100%">
                    <form class="form-inline" action="" style="margin-top: 20px">

                        <div class="form-group">
                            <label for="email"><?php echo app('translator')->getFromJson('backend.search'); ?> </label>
                            <input class="form-control" id="myInput" type="text">
                        </div>
                        <!--                <button type="submit" class="btn btn-default">جستجو</button>-->
                    </form>
                </div>
            </div>
            <div class="col-md-12">
                <hr class="b-s-dashed">
            </div>
            <div class="box-body canvas-container overflow-hidden" style="min-height: 500px">
                <div class="box-body collapse in" id="box3">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th style="width: 50px">ردیف</th>
                                <th style="width: 200px">عنوان</th>
                                <th>متن آیین نامه</th>
                                <th style="width: 50px;text-align: center">ویرایش</th>
                                <th style="width: 50px;text-align: center">حذف</th>
                            </tr>
                        </thead>
                        <tbody id="myTable">
                            <?php $n=0 ?>
                            <?php $__currentLoopData = $regulations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $regulation): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php $n++ ?>
                            <tr>
                                <td><?php echo e($n); ?></td>
                                <td><?php echo e($regulation->title); ?></td>
                                <td><?php echo e($regulation->content); ?></td>
                                <td>
                                    <a href="<?php echo e(url('/editteachermanagement')); ?>" onclick="event.preventDefault();document.getElementById('edit-form<?php echo e($regulation->id); ?>').submit();" class="fa fa-fw fa-edit"></a>
                                    <form id="edit-form<?php echo e($regulation->id); ?>" action="<?php echo e(url('/edit_regulation')); ?>" method="POST" style="display: none;">
                                        <?php echo e(csrf_field()); ?>

                                        <input type="hidden" name="regulation_id" value="<?php echo e($regulation->id); ?>">
                                    </form>
                                </td>
                                <td class="text-center">

                                    <a href="<?php echo e(url('/editteachermanagement')); ?>" onclick="event.preventDefault();document.getElementById('del_user<?php echo e($regulation->id); ?>').submit();" class="fa fa-times"></a>
                                    <form id="del_user<?php echo e($regulation->id); ?>" action="<?php echo e(url('/del_regulation')); ?>" method="POST" style="display: none;">
                                        <?php echo e(csrf_field()); ?>

                                        <input type="hidden" name="regulation_id" value="<?php echo e($regulation->id); ?>">
                                    </form>


                                </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                        </tbody>
                    </table>
                </div>
                <div class="col-md-12">
                    <hr class="b-s-dashed">
                </div>

                <!-- begin box-tools -->
                <div class="box-tools">
                    <a href="<?php echo e(url('add_regulation')); ?>" class="btn btn-info0" style="color: #fff"><?php echo app('translator')->getFromJson('backend.add'); ?></a>
                    
                </div>
                <!-- END: box-tools -->

            </div>



        </div>



    </div>
</div>
<script>
    $(document).ready(function() {
        $("#myInput").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $("#myTable tr ").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
    });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>