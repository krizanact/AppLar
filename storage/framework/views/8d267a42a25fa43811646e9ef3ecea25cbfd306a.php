<?php $__env->startSection('content'); ?>
    <h1>Functionallity</h1>
    <?php if(count($functions)>0): ?>
    <?php $__currentLoopData = $functions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $table): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="well">
            <h2><?php echo e($table->title); ?></h2>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php else: ?>
        <p> You don't have any documents uploaded.</p>
    <?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('connect.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>