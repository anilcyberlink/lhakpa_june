
<?php $__env->startSection('title', ''); ?>
<?php $__env->startSection('breadcrumb'); ?>
    <a href="<?php echo e(route('admin.feedbacks')); ?>" class="btn btn-primary btn-sm">Back</a>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container mt-4">

        <div class="card shadow-sm">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Feedback Details</h5>
            </div>

            <div class="card-body">
                <table class="table table-bordered table-striped">
                    <tbody>

                    <tr><th width="30%">Trip</th><td><?php echo e($data->trip); ?></td></tr>
                    <tr><th>Departure Date</th><td><?php echo e($data->departure->format('d M Y')); ?></td></tr>
                    <tr><th>Guide Name</th><td><?php echo e($data->guide_name); ?></td></tr>
                    <tr><th>Full Name</th><td><?php echo e($data->full_name); ?></td></tr>
                    <tr><th>Nationality</th><td><?php echo e($data->nationality); ?></td></tr>

                    <tr><th>Overall Experience</th><td><?php echo e(ucfirst(str_replace('-', ' ', $data->overall))); ?></td></tr>
                    <tr><th>Guide Rating</th><td><?php echo e(ucfirst($data->guide)); ?></td></tr>
                    <tr><th>Porter Rating</th><td><?php echo e(ucfirst($data->porter)); ?></td></tr>
                    <tr><th>Accommodation</th><td><?php echo e(ucfirst(str_replace('-', ' ', $data->accommodation))); ?></td></tr>
                    <tr><th>Recommend</th><td><?php echo e(ucfirst($data->recommend)); ?></td></tr>

                    <tr><th>Favourite Part</th><td><?php echo e($data->favourite); ?></td></tr>
                    <tr><th>Improvement Needed</th><td><?php echo e($data->improvement); ?></td></tr>

                    <tr><th>Guide Professionalism</th><td><?php echo e($data->guide_professionalism); ?></td></tr>
                    <tr><th>Guide Knowledge</th><td><?php echo e($data->guide_knowledge); ?></td></tr>
                    <tr><th>Porter Support</th><td><?php echo e($data->porter_support); ?></td></tr>

                    <tr><th>Additional Comments</th><td><?php echo e($data->comments); ?></td></tr>

                    <tr>
                        <th>Guide Qualities</th>
                        <td>
                            <?php if(!empty($data->guide_qualities)): ?>
                                <ul class="mb-0">
                                    <?php $__currentLoopData = $data->guide_qualities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $q): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li><?php echo e(ucfirst($q)); ?></li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            <?php else: ?>
                                —
                            <?php endif; ?>

                        </td>
                    </tr>

                    <tr><th>Other Guide Qualities</th><td><?php echo e($data->guide_qualities_other ?? '—'); ?></td></tr>
                    <tr><th>Guide Score</th><td><?php echo e($data->guide_score); ?>/20</td></tr>
                    <tr><th>Story</th><td><?php echo e($data->story); ?></td></tr>
                    <tr><th>Newsletter</th><td><?php echo e(ucfirst($data->newsletter)); ?></td></tr>
                    <tr><th>Email</th><td><?php echo e($data->email); ?></td></tr>

                    <tr>
                        <th>Future Destinations</th>
                        <td>
                            <?php if(!empty($data->future_destinations)): ?>
                                <ul class="mb-0">
                                    <?php $__currentLoopData = $data->future_destinations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li><?php echo e(ucfirst(str_replace('_', ' ', $d))); ?></li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            <?php else: ?>
                                —
                            <?php endif; ?>
                        </td>
                    </tr>

                    <tr><th>Other Destinations</th><td><?php echo e($data->future_destinations_other ?? '—'); ?></td></tr>
                    <tr><th>Heard About Us</th>
                        <td><?php echo e(ucfirst($data->heard_about)); ?></td>
                    </tr>
                    <tr><th>Other Source</th><td><?php echo e($data->heard_about_other ?? '—'); ?></td></tr>

                    <tr><th>Submitted At</th><td><?php echo e($data->created_at->format('d M Y')); ?></td></tr>

                    </tbody>
                </table>
            </div>
        </div>

    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/lhakpa/public_html/resources/views/admin/feedback/show.blade.php ENDPATH**/ ?>