

<?php $__env->startSection('content'); ?>

<section class="content">
    
                <div class="box">
                    <div class="box-body table-responsive" style="padding-left: 247px;">
                    <h1>Create Customer</h1>
        <form action="/createlist" method="POST">
       
    <div class="col-lg-4 col-md-5 col-sm-6 col-xs-12">
                                <label>Name</label>
                                 <input autocomplete="off" required="" tabindex="2" type="text" class="form-control movenext" name="cus_name" id="cus_name" value="">
                                
                            </div>  
                            <div class="col-lg-4 col-md-5 col-sm-6 col-xs-12">
                                <label>Address</label>
                                 <input autocomplete="off" required="" tabindex="2" type="text" class="form-control movenext" name="cus_address" id="cus_address" value="">
                                
                            </div>  
                            <div class="col-lg-4 col-md-5 col-sm-6 col-xs-12">
                                <label>Email Id</label>
                                 <input autocomplete="off" required="" tabindex="2" type="text" class="form-control movenext" name="email" id="email" value="">
                                
                            </div>  <div class="col-lg-4 col-md-5 col-sm-6 col-xs-12">
                                <label>Mobile</label>
                                 <input autocomplete="off" required="" tabindex="2" type="text" class="form-control movenext" name="cus_mobile" id="cus_mobile" value="">
                               
                            </div>  
                            <button type="submit" style="background:#000; color:#fff;margin: 13px;" class="btn"> Create</button>
                            <?php echo csrf_field(); ?>     
</form>
    </div>    
</div>
</section>  
<?php $__env->stopSection(); ?>
<?php echo $__env->make('auth.layouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\projects\php-machine-test\resources\views/customer-create.blade.php ENDPATH**/ ?>