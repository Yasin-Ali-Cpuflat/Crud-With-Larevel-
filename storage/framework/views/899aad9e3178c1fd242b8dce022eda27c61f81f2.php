



<?php $__env->startSection('contact'); ?>

<h1>contact page</h1>

<?php if(count($people)): ?>

<ul>

<?php $__currentLoopData = $people; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $person): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

 <li><?php echo e($person); ?></li>

    
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</ul>

   <?php endif; ?> 


<?php $__env->stopSection(); ?>


<?php $__env->startSection('footer'); ?>

    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\AppServ\www\eCommerce\resources\views/contact.blade.php ENDPATH**/ ?>