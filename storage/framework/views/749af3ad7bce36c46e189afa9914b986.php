<?php $__env->startSection('content'); ?>


    <div class="card">
        <div class="card-header"><h1>Products show Page</h1></div>
        <div class="card-body">


            <div class="card-body">
                <h5 class="card-title">Name : <?php echo e($products->name); ?></h5>
                <p class="card-text">Quantity : <?php echo e($products->quantity); ?></p>
                <p class="card-text">Price : <?php echo e($products->price); ?></p>
            </div>

            </hr>

        </div>
    </div>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\onyan\INVE\resources\views/products/show.blade.php ENDPATH**/ ?>