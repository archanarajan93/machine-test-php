

<?php $__env->startSection('content'); ?>

<section class="content">
    
    <div class="box">
        <div class="box-body table-responsive" style="padding-left: 247px;">
                    <h1>Create Invoice</h1>
            <form action="/insert" method="POST">
           
                            <div class="col-lg-4 col-md-5 col-sm-6 col-xs-12">

                                <label>Name</label>
                                <select id="cus_name" name="cus_name"  class="form-control">
                                <?php $__currentLoopData = $list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rec): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($rec->id); ?>"><?php echo e($rec->cust_name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                                
                            </div>  
                            <div class="col-lg-4 col-md-5 col-sm-6 col-xs-12">
                                <label>Amount</label>
                                 <input autocomplete="off" required="" tabindex="2" type="number" class="form-control movenext" name="amount" id="amount" value="">
                                
                            </div>  
                            <div class="col-lg-4 col-md-5 col-sm-6 col-xs-12">
                                <label>Status</label>
                                <select id="status" name="status"  class="form-control">
                                    <option value="0">Unpaid</option>
                                    <option value="1">Paid</option>
                                    <option value="2">Cancelled</option>
                                </select>
                            </div>  
                            <button type="submit" style="background:#000; color:#fff;margin: 13px;" class="btn"> Create</button>
                            <?php echo csrf_field(); ?>    
</form>
    </div>    
</div>
</section>  
<?php $__env->stopSection(); ?>
<?php echo $__env->make('auth.layouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\projects\php-machine-test\resources\views/invoice-create.blade.php ENDPATH**/ ?>