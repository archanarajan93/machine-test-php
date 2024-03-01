

<?php $__env->startSection('content'); ?>

<section class="content">
    
                <div class="box">
                    <div class="box-body table-responsive" style="padding-left: 247px;">
                    <h1>Create Customer</h1>
                    <?php $__currentLoopData = $customers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rec): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <form action="<?php echo e(route('customer.update',$rec->id)); ?>" method="POST">
        <?php echo csrf_field(); ?>   
     
    <div class="col-lg-4 col-md-5 col-sm-6 col-xs-12">
                                <label>Name</label>
                                 <input autocomplete="off" required="" tabindex="2" type="text" class="form-control movenext" name="cus_name" id="cus_name" value="<?php echo e($rec->cust_name); ?>">
                                
                            </div>  
                            <div class="col-lg-4 col-md-5 col-sm-6 col-xs-12">
                                <label>Address</label>
                                 <input autocomplete="off" required="" tabindex="2" type="text" class="form-control movenext" name="cus_address" id="cus_address" value="<?php echo e($rec->cust_address); ?>">
                                
                            </div>  
                            <div class="col-lg-4 col-md-5 col-sm-6 col-xs-12">
                                <label>Email Id</label>
                                 <input autocomplete="off" required="" tabindex="2" type="text" class="form-control movenext" name="email" id="email" value="<?php echo e($rec->cust_email); ?>">
                                
                            </div>  <div class="col-lg-4 col-md-5 col-sm-6 col-xs-12">
                                <label>Mobile</label>
                                 <input autocomplete="off" required="" tabindex="2" type="text" class="form-control movenext" name="cus_mobile" id="cus_mobile" value="<?php echo e($rec->cust_mobile); ?>">
                               
                            </div>  
                            <button type="submit" style="background:#000; color:#fff;margin: 13px;" class="btn"> Update</button>
                           
                           
</form>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>  
    </div>    
</div>
</section>  
<?php $__env->stopSection(); ?>
<?php echo $__env->make('auth.layouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\projects\php-machine-test\resources\views/customerviewpage.blade.php ENDPATH**/ ?>