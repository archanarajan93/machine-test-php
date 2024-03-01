

<?php $__env->startSection('content'); ?>

<section class="content">
    
                <div class="box">
                    <div class="box-body table-responsive" style="padding-left: 247px;">
                    <h1>Create Customer</h1>
                    <?php $__currentLoopData = $invoices; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rec): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <form action="<?php echo e(route('invoice.update',$rec->id)); ?>" method="POST">
        <div class="col-lg-4 col-md-5 col-sm-6 col-xs-12">

<label>Name</label>
<select id="cus_name" name="cus_name"  class="form-control">
<?php $__currentLoopData = $list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $record): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <option value="<?php echo e($record->id); ?>" <?php echo e(old('status', $rec->status) == 0 ? 'selected' : ''); ?>><?php echo e($record->cust_name); ?></option>
    
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</select>

</div>  
<div class="col-lg-4 col-md-5 col-sm-6 col-xs-12">
<label>Amount</label>
 <input autocomplete="off" required="" tabindex="2" type="number" class="form-control movenext" name="amount" id="amount" value="<?php echo e($rec->amount); ?>">

</div>  
<div class="col-lg-4 col-md-5 col-sm-6 col-xs-12">
<label>Status</label>
<select id="status" name="status"  class="form-control">
    <option value="0" <?php echo e(old('status', $rec->status) == 0 ? 'selected' : ''); ?>>Unpaid</option>
    <option value="1" <?php echo e(old('status', $rec->status) == 1 ? 'selected' : ''); ?>>Paid</option>
    <option value="2" <?php echo e(old('status', $rec->status) == 2 ? 'selected' : ''); ?>>Cancelled</option>
</select>
</div>  
<button type="submit" style="background:#000; color:#fff;margin: 13px;" class="btn"> Update</button>
<?php echo csrf_field(); ?>                 
</form>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>  
    </div>    
</div>
</section>  
<?php $__env->stopSection(); ?>
<?php echo $__env->make('auth.layouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\projects\php-machine-test\resources\views/invoice-view-page.blade.php ENDPATH**/ ?>