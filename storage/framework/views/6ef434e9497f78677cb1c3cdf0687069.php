<?php $__env->startSection('content'); ?>

    <div class="card">
        <div class="card-header"><h1>Add Product Page</h1></div>
        <div class="card-body">

            <form action="<?php echo e(url('products')); ?>" method="post">
                <?php echo csrf_field(); ?>

                <label>Name</label></br>
                <input type="text" name="name" id="name" class="form-control"></br>
                <label>Quantity</label></br>
                <input type="text" name="quantity" id="quantity" class="form-control"></br>
                <label>Price</label></br>
                <input type="text" name="price" id="price" class="form-control"></br>
                <input type="submit" value="Save" class="btn btn-success"></br>
            </form>

        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\onyan\INVE\resources\views/products/create.blade.php ENDPATH**/ ?>