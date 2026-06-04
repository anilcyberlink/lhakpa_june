
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

<section class="uk-section uk-light-bg">
    <div class="uk-container">
        <div class="uk-title-font">
            <h2 class="uk-secondary"><?php echo e($data->associated_title); ?></h2>
            <span class="dotted-line-primary"></span>
            
                <?php echo $data->content; ?>

            
        </div>
    </div>
</section>

<?php
    $firstPost = $posts->first();
?>

<?php if($firstPost && $firstPost->images->isNotEmpty()): ?>
    <section class="uk-section">
        <div class="uk-container">
            <div class="uk-child-width-1-3@m" uk-grid uk-lightbox="animation: slide">
                <?php $__currentLoopData = $firstPost->images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div>
                        <a class="uk-inline uk-media-260 uk-display-block uk-transition-toggle" href="<?php echo e($image->file_name ? asset('uploads/medium/'.$image->file_name) : asset('theme-assets/img/mountain/mountain2.jpeg')); ?>" data-caption="<?php echo e($image->title); ?>">
                            <img src="<?php echo e($image->file_name ? asset('uploads/medium/'.$image->file_name) : asset('theme-assets/img/mountain/mountain2.jpeg')); ?>" alt="<?php echo e($image->title); ?>" class="border uk-transition-scale-up uk-transition-opaque">
                        </a>
                        <h3 class="uk-text-center uk-text-uppercase uk-margin-remove"><?php echo e($image->title); ?></h3>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </section>
<?php endif; ?>

<?php if($posts->isNotEmpty()): ?>
    <section>
        <?php $__currentLoopData = $posts->skip(1); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($loop->iteration % 2 != 0): ?>
                <div class="uk-child-width-1-2@m uk-grid-collapse uk-grid-match" uk-grid >
                    <div class="uk-primary-bg uk-about-text">
                        <div class="uk-contents uk-title-font uk-container uk-section">
                            <h2 class="uk-secondary">
                                <?php echo e($row->post_title); ?>

                            </h2>
                            
                                <?php echo $row->post_content; ?>

                            
                        </div>
                    </div>
                    <div>
                        <img src="<?php echo e(!empty($row->page_thumbnail) ? asset('uploads/original/'.$row->page_thumbnail) : asset('theme-assets/img/mountain/mountain8.jpeg')); ?>" alt="<?php echo e($row->post_title); ?>">
                    </div>
                </div>
            <?php else: ?>
                <div class="uk-child-width-1-2@m uk-grid-collapse uk-grid-match" uk-grid >
                    <div class="uk-flex-last uk-flex-first@m">
                        <img src="<?php echo e(!empty($row->page_thumbnail) ? asset('uploads/original/'.$row->page_thumbnail) : asset('theme-assets/img/mountain/mountain8.jpeg')); ?>" alt="<?php echo e($row->post_title); ?>">
                    </div>
                    <div class="uk-primary-bg uk-about-text uk-flex-first uk-flex-last@m">
                        <div class="uk-contents uk-title-font uk-container uk-section">
                            <h2 class="uk-secondary">
                                <?php echo e($row->post_title); ?>

                            </h2>
                            
                                <?php echo $row->post_content; ?>

                            
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </section>
<?php endif; ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('themes.default.common.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/lhakpa/public_html/resources/views/themes/default/posttypeTemplate-women-empower.blade.php ENDPATH**/ ?>