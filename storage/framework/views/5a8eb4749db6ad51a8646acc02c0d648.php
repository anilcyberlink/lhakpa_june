
<?php $__env->startSection('title','User List'); ?>
<?php $__env->startSection('breadcrumb'); ?>
<a href="<?php echo e(route('subscriber.index')); ?>" class="btn btn-primary btn-sm">Back</a>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="tray tray-center">
    <div class="panel">
        <div class="panel-body ph20">
            <h4>User Details</h4>

            <table class="table table-bordered">
                <tr>
                    <th>Name</th>
                    <td><?php echo e($user->name ?? $data->name); ?></td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td><?php echo e($user->email ?? $data->email); ?></td>
                </tr>
                <tr>
                    <th>User Downloads</th>
                    <td>
                        <?php if($user && $user->downloadedPdfs->count()): ?>
                            <ul>
                                <?php $__currentLoopData = $user->downloadedPdfs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pdf): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><?php echo e($pdf->trip_title); ?> (<?php echo e($pdf->created_at->format('Y-m-d') ?? 'N/A'); ?>)</li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        <?php else: ?>
                            <span>No Downloads</span>
                        <?php endif; ?>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/lhakpa/public_html/resources/views/admin/newsletter/view-user-detail.blade.php ENDPATH**/ ?>