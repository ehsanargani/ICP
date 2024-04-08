

<?php $__env->startSection('content'); ?>
<!-- begin .main-heading -->
<header class="main-heading">
    <!-- begin dashhead -->
    <div class="dashhead bg-white">
        <div class="dashhead-titles">
            <h6 class="dashhead-subtitle">

            </h6>
            <h3 class="dashhead-title">ثبت کردن گواهی</h3>
        </div>


    </div>
    <!-- END: dashhead -->
</header>
<!-- END: .main-heading -->
<div class="main-content bg-clouds">
    <div class="container-fluid p-t-15">



        <div class="box">
      
             <div class="box-body collapse in">
                
                <?php if($errors->any()): ?>
                <?php if($errors->first()==1): ?>
                    <h4 style="background-color: #FFAA3E;color: #fff;padding: 10px">Certificate no تکراری است</h4>
                <?php endif; ?>
                  <?php if($errors->first()==2): ?>
                    <h4 style="background-color: #FFAA3E;color: #fff;padding: 10px">B/I no تکراری است</h4>
                <?php endif; ?>
                  <?php if($errors->first()==3): ?>
                    <h4 style="background-color: #FFAA3E;color: #fff;padding: 10px">CB no تکراری است</h4>
                <?php endif; ?>
                  <?php if($errors->first()==4): ?>
                    <h4 style="background-color: #FFAA3E;color: #fff;padding: 10px">Insurance no تکراری است</h4>
                <?php endif; ?>
                  <?php if($errors->first()==5): ?>
                    <h4 style="background-color: green;color: #fff;padding: 10px">اطلاعات با موفقیت ثبت شد</h4>
                <?php endif; ?>
                     <?php if($errors->first()==6): ?>
                    <h4 style="background-color: #FFAA3E;color: #fff;padding: 10px">تمامی فایل های پیوست شده باید فرمت PDF باشند</h4>
                <?php endif; ?>
                <?php endif; ?>


            </div>
            <div class="box-body collapse in">
                <form class="form-horizontal" method="post" action="<?php echo e(url('/insert_cer')); ?>" id="accountActivation" enctype="multipart/form-data">
                    <?php echo e(csrf_field()); ?>

                    <div class=" container form_en" >
                        <div class="row">
                             <div class="col-md-4"  >
                                <label>issue date</label>
                                <input type="date" name="issue_date" class="form-control">
                            </div>
                            
                            <div class="col-md-4"  >
                                <label>Certificate No</label>
                                <input type="text" name="cer_num" class="form-control">
                            </div>
                            <div class="col-md-4">
                                <label>Type Of Inspection</label>
                                <select name="cer_type" class="form-control">
                                    <option value="Loading Supervision">Loading Supervision</option>
                                    <option value="Destination">Destination</option>
                                    <option value="Loading Supervision & Destination">Loading Supervision & Destination</option>
                                </select>
                            </div>
                           
                        </div>
                               <div class="row">
                                    <div class="col-md-4"  >
                                <label>Bank name</label>
                                <input type="text" name="bank_name" class="form-control" required>
                            </div>
                                    <div class="col-md-4"  >
                                <label>Seller / Beneficiary</label>
                                <input type="text" name="seller" class="form-control" required>
                            </div>
                            <div class="col-md-4">
                                <label>Buyer / Applicant</label>
                                <input type="text" name="buyer" required  class="form-control">
                            </div>
                           
                           
                        </div>
                               <div class="row">
                          <div class="col-md-4"  >
                                <label>P/l date</label>
                                <input type="date" name="p_l_date" class="form-control" required>
                            </div>
                            <div class="col-md-4"  >
                                <label>P/l no</label>
                                <input type="text" name="p_l_no" class="form-control" required>
                            </div>
                                      <div class="col-md-4">
                                <label>Bank code</label>
                                <input type="text" name="bank_code" required  class="form-control">
                            </div>
                           
                        </div>
                        <div class="row">
                           <div class="col-md-4"  >
                                <label>Date of Inspection</label>
                                <input type="date" name="date_ins" class="form-control" required>
                            </div>
                            <div class="col-md-4"  >
                                <label>B/L no</label>
                                <input type="text" name="b_l_no" class="form-control" required>
                            </div>
                             <div class="col-md-4">
                                <label>Iranian Customs Tarif no</label>
                                <input type="text" name="iran_customs" required  class="form-control">
                            </div>
                            
                        </div>
                         <div class="row">
                            <div class="col-md-4"  >
                                <label>Insurance no</label>
                                <input type="text" name="ins_no" class="form-control" required>
                            </div>
                            <div class="col-md-4"  >
                                <label>CB no</label>
                                <input type="text" name="cb_no" class="form-control" required>
                            </div>
                              <div class="col-md-4">
                                <label>Place of Inspection</label>
                                <input type="text" name="place_ins" required  class="form-control">
                            </div>
                           
                        </div>
                           <div class="row">
                            
                               <div class="col-md-4"  >
                                <label>BL PDF</label>
                                <input type="file" name="bl_pdf" class="btn btn-info  btn-block" required>
                            </div>
                            <div class="col-md-4"  >
                                <label>PI PDF</label>
                                <input type="file" name="pl_pdf" class="btn btn-info  btn-block" required>
                            </div>
                            <div class="col-md-4">
                                <label>Insurance date</label>
                                <input type="date" name="ins_date" required  class="form-control">
                            </div>
                        </div>
                           <div class="row">
                               
                            <div class="col-md-4"  >
                                <label>Operator name</label>
                                <input type="text" name="operator_name" class="form-control" required>
                            </div>
                               
                            <div class="col-md-4"  >
                                <label>Acceptance letter PDF</label>
                                <input  type="file" name="acc_pdf" class="btn btn-info btn-block" required>
                            </div>
                            <div class="col-md-4">
                                <label>IC PDF</label>
                                <input type="file" name="ic_pdf" class="btn btn-info  btn-block" required>
                            </div>
                               <div class="col-md-4"></div>
                               <div class="col-md-4"></div>
                               <div class="col-md-4">      <br>
                   
                                                                                   <button type="submit" id="buttonActivate" class="btn btn-success pure-button pure-button-primary">ثبت اطلاعات</button>

                               </div>
                        </div>
                        
                        
                        
                        
                      
                      
                    </div>
                </form>
            </div>
        </div>



    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>