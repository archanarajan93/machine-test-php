

<?php $__env->startSection('content'); ?>

<section class="content">
    
                <div class="box">
                    <div class="box-body table-responsive" style="padding-left: 247px;">
                    <h1>Customer Details</h1>
                    <button style="background:#1c8f4f; color:#fff"><a href="<?php echo e(route('create')); ?>">Add</a></button>
        <table width=80% border=1>
            <thead>
                <tr>
                    <td style="background: #dbd3d3;">Name</td>
                    <td style="background: #dbd3d3;">Address</td>
                    <td style="background: #dbd3d3;">Email Id</td>
                    <td style="background: #dbd3d3;">Mobile No.</td>
                    <td style="background: #dbd3d3;"></td>
                </tr>
            </thead>
            <tbody>
            <?php $__currentLoopData = $list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rec): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($rec->cust_name); ?></td>
                    <td><?php echo e($rec->cust_address); ?></td>
                    <td><?php echo e($rec->cust_email); ?></td>
                    <td><?php echo e($rec->cust_mobile); ?></td>
                    <td>
                        
                        <button><a  href="<?php echo e(route('customer.edit',$rec->id)); ?>">Edit </a> </button>
                        <button class=btn-delete data-id="<?php echo e($rec->id); ?>" >Delete </button>
                </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>    
</div>
</section>  
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
  $('.btn-delete').click(function() {
    var id = $(this).attr('data-id');
    var url = '/castomer/' + id;
    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });
    $.ajax({
      url: url,
      type: 'DELETE',
      success: function(data) {
        // Handle successful deletion
        $(`tr[data-id="${id}"]`).remove();
      },
      error: function(xhr) {
        // Handle error
        console.log(xhr.responseText);
      }
    });
  });
});
</script>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('auth.layouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\projects\php-machine-test\resources\views/customer-list.blade.php ENDPATH**/ ?>