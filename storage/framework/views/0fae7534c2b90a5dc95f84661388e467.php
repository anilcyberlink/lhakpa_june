
<?php $__env->startSection('title', $data->post_type); ?>
<?php $__env->startSection('meta_keyword', $data->meta_keyword); ?>
<?php $__env->startSection('meta_description', $data->meta_description); ?>
<?php $__env->startSection('thumbnail', $data->banner); ?>
<?php $__env->startSection('content'); ?>

<section class=" uk-cover-container uk-position-relative uk-flex uk-flex-middle uk-background-norepeat uk-background-cover uk-background-top-center uk-background-fixed" uk-height-viewport data-src="<?php echo e($data->banner ? asset('uploads/original/'.$data->banner) : asset('theme-assets/img/mountain/mountain9.jpeg')); ?>" alt="<?php echo e($data->post_type); ?>" uk-img>
    <div class="uk-overlay-banner uk-position-cover"></div>
    <div class="uk-container uk-width-1-1 pt-150 uk-position-relative">
        <div class="uk-flex uk-flex-middle uk-grid-collapse " uk-grid>
            <div class="uk-width-1-1@m">
                <ul class="uk-breadcrumb">
                    <li><a href="<?php echo e(url('/')); ?>" class="uk-white">Home</a></li>
                    <li><span class="uk-secondary"><?php echo e($data->post_type); ?></span></li>
                </ul>
                <div class="uk-sub-banner-font">
                    <h1><?php echo e($data->sub_title); ?></h1>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="uk-section uk-primary-bg uk-about-text uk-margin-bottom">
    <div class="uk-container">
        <div class="uk-contents uk-title-font uk-same-height">
            <h1 class="uk-secondary"><?php echo e($data->associated_title); ?></h1>
            <span class="dotted-line-black uk-margin-bottom"></span>
            
                <?php echo $data->content; ?>

            
        </div>
    </div>
</section>

<?php if($posts->isNotEmpty()): ?>
    <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if($loop->iteration % 2 != 0): ?>
            <section class="uk-section uk-padding-remove-top">
                <div class="uk-container">
                    <div class="uk-grid uk-flex uk-flex-middle"  uk-height-match=".uk-same-height">
                        <div class="uk-width-1-2@m uk-flex-first@m uk-flex-last uk-same-height">
                            <div class="uk-title-font uk-light-bg border uk-padding ">
                                <h1 class="uk-secondary"><?php echo e($row->post_title); ?></h1>
                                <span class="dotted-line-primary"></span>
                                <p><?php echo $row->post_content; ?></p>
                            </div>
                        </div>
                        <div class="uk-width-1-2@m  uk-flex-first uk-flex-last@m uk-margin-bottom uk-text-center">
                            <img src="<?php echo e(!empty($row->page_thumbnail) ? asset('uploads/original/'.$row->page_thumbnail) : asset('theme-assets/img/mountain/mountain8.jpeg')); ?>" class="border uk-same-height cover" alt="<?php echo e($row->post_title); ?>">
                        </div>
                    </div>
                </div>
            </section>
        <?php else: ?>
            <section class="uk-section uk-padding-remove-top">
                <div class="uk-container">
                    <div class="uk-grid uk-flex uk-flex-middle" uk-height-match=".uk-same-height1">
                        <div class="uk-width-1-2@m  uk-margin-bottom uk-text-center">
                            <img src="<?php echo e(!empty($row->page_thumbnail) ? asset('uploads/original/'.$row->page_thumbnail) : asset('theme-assets/img/mountain/mountain8.jpeg')); ?>" class="border uk-same-height1 cover" alt="">
                        </div>
                        <div class="uk-width-1-2@m uk-same-height1">
                            <div class="uk-title-font uk-light-bg border uk-padding">
                                <h1 class="uk-secondary"><?php echo e($row->post_title); ?></h1>
                                <span class="dotted-line-primary"></span>
                                <p><?php echo $row->post_content; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        <?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('themes.default.common.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/lhakpa/public_html/resources/views/themes/default/posttypeTemplate-safety.blade.php ENDPATH**/ ?>