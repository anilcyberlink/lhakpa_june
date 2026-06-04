
<?php $__env->startSection('title',$parent->title); ?>
<?php $__env->startSection('meta_keyword',$parent->title); ?>
<?php $__env->startSection('meta_description',$parent->brief); ?>
<?php $__env->startSection('thumbnail',$parent->thumbnail); ?>
<?php $__env->startSection('content'); ?>

<section class=" uk-cover-container uk-position-relative uk-flex uk-flex-middle uk-background-norepeat uk-background-cover uk-background-top-center uk-background-fixed" uk-height-viewport data-src="<?php echo e(asset('uploads/banners/'.$parent->banner)); ?> " alt="" uk-img>
    <div class="uk-overlay-banner uk-position-cover"></div>
    <div class="uk-container uk-width-1-1 pt-150 uk-position-relative">
        <div class="uk-flex uk-flex-middle uk-grid-collapse " uk-grid>
            <div class="uk-width-1-1@m">
                <ul class="uk-breadcrumb">
                    <li><a href="<?php echo e(url('/')); ?>" class="uk-white">Home</a></li>
                    
                </ul>
                <div class="uk-sub-banner-font">
                    <h1>Activity</h1>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="uk-section">
    <div class="uk-container">
        <div class="uk-child-width-1-2@s" uk-grid uk-scrollspy="target: img,h2,.uk-overlay-primary; cls: uk-animation-fade; delay: 100;">
            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div>
                    <?php if($item->external_link): ?>
                        <a href="<?php echo e($item->external_link); ?>" class="uk-display-block uk-inline-clip uk-transition-toggle border ">
                    <?php else: ?>
                        <a href="<?php echo e(route('activity-list', $item->uri)); ?>" class="uk-display-block uk-inline-clip uk-transition-toggle border ">
                    <?php endif; ?>
                        <div class="uk-inline uk-media-260">
                            <img src="<?php echo e(asset('uploads/icon/'.$item->thumbnail)); ?>" loading="lazy" class="border uk-transition-scale-up uk-transition-opaque" alt="<?php echo e($item->title); ?>">
                            <div class="uk-overlay-primary uk-position-cover border"></div>
                            <div class="uk-overlay uk-position-center uk-light">
                                <h1 class="text-secondary"> <?php echo e($item->title); ?></h1>
                            </div>
                        </div>
                    </a>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <?php echo $data->links('themes.default.common.pagination'); ?>

    </div>
</section>
<!-- list section end -->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('themes.default.common.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/lhakpa/public_html/resources/views/themes/default/activitylist.blade.php ENDPATH**/ ?>