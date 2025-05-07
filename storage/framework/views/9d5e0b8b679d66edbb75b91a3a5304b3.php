<?php $__env->startSection('content'); ?>

    <div class="card">
        <div class="card-header"><h1>Products edit Page<h1></div>
        <div class="card-body">

            <form action="<?php echo e(url('products/' .$products->id)); ?>" method="post">
                <?php echo csrf_field(); ?>

                <?php echo method_field("PATCH"); ?>
                <input type="hidden" name="id" id="id" value="<?php echo e($products->id); ?>" id="id" />
                <label>Name</label></br>
                <input type="text" name="name" id="name" value="<?php echo e($products->name); ?>" class="form-control"></br>
                <label>Quantity</label></br>
                <input type="text" name="quantity" id="quantity" value="<?php echo e($products->quantity); ?>" class="form-control"></br>
                <label>Price</label></br>
                <input type="text" name="price" id="price" value="<?php echo e($products->price); ?>" class="form-control"></br>
                <input type="submit" value="Update" class="btn btn-success"></br>
            </form>

        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\onyan\INVE\resources\views/products/edit.blade.php ENDPATH**/ ?>