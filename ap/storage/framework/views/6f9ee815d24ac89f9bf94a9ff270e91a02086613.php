<?php if(session('errorArray')): ?>
<div class="alert alert-danger alert-dismissable" style="text-align: left;">
    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <i class="fa fa-warning"></i> <?php echo e($value); ?><br>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<?php endif; ?>
<?php if(session('error')): ?>
<div class="alert alert-danger alert-dismissable" style="text-align: left;">
    <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
    <i class="fa fa-warning"></i> <?php echo e(session('error')); ?>

</div>
<?php endif; ?>
<?php if(session('success')): ?>
<div class="alert alert-success alert-dismissable" style="text-align: left;">
    <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
    <i class="fa fa-check"></i> <?php echo e(session('success')); ?>

</div>
<?php endif; ?>