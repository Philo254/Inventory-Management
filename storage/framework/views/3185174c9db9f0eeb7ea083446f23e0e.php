<?php $__env->startSection('content'); ?>

                <div class="card">
                    <div class="card-header">
                        <h2>Orders List</h2>
                    </div>
                    <div class="card-body">
                        <a href="<?php echo e(url('/orders/create')); ?>" class="btn btn-success btn-sm" title="create order">
                            <i class="fa fa-plus" aria-hidden="true"></i> create order
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Item</th>
                                    <th>Quantity</th>
                                    <th>Price</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($loop->iteration); ?></td>
                                        <td><?php echo e($item->item); ?></td>
                                        <td><?php echo e($item->quantity); ?></td>
                                        <td><?php echo e($item->price); ?></td>

                                        <td>
                                            <a href="<?php echo e(url('/orders/' . $item->id)); ?>" title="View order"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>

                                            <form method="POST" action="<?php echo e(url('/orders' . '/' . $item->id)); ?>" accept-charset="UTF-8" style="display:inline">
                                                <?php echo e(method_field('DELETE')); ?>

                                                <?php echo e(csrf_field()); ?>

                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete order" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\onyan\INVE\resources\views/orders/index.blade.php ENDPATH**/ ?>