
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

<?php if($news->isNotEmpty()): ?>
    <section class="uk-section">
        <div class="uk-container">
            <div class="uk-child-width-1-2@m" uk-grid>
                <?php $__currentLoopData = $news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="uk-margin-top">
                        <a href="<?php echo e(route('page.pagedetail', $row->uri)); ?>" class="uk-display-block uk-inline-clip uk-transition-toggle uk-link-toggle uk-media-280">
                            <img src="<?php echo e(!empty($row->page_thumbnail) ? asset('uploads/original/'.$row->page_thumbnail) : asset('theme-assets/img/mountain/mountain5.jpeg')); ?>" class="uk-height-1-1 uk-transition-scale-up uk-transition-opaque" alt="<?php echo e($row->post_title); ?>">
                        </a>
                        <div class="uk-flex uk-flex-between uk-flex-middle">
                            <div class="uk-text-title uk-margin-top">
                                <span class="uk-primary"><i class="fa-solid fa-calendar uk-margin-small-right"></i> <?php echo e(date('l F j, Y', strtotime($row->post_date))); ?></span>
                                <a href="<?php echo e(route('page.pagedetail', $row->uri)); ?>" class="uk-news-title">
                                    <h2><?php echo e($row->post_title); ?></h2>
                                </a>
                            </div>
                            <div>
                                <a href="<?php echo e(route('page.pagedetail', $row->uri)); ?>">
                                    <i class="fa-solid fa-circle-arrow-right uk-secondary f-30"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            <?php echo $news->links('themes.default.common.pagination'); ?>

        </div>
    </section>
<?php endif; ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('themes.default.common.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/lhakpa/public_html/resources/views/themes/default/posttypeTemplate-news.blade.php ENDPATH**/ ?>