
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

<section class="uk-section uk-light-pink">
    <div class="uk-container">
       <ul class="uk-subnav uk-subnav-pill uk-why-us-tab uk-flex-center  py-3"
            uk-sticky="offset: 80; sel-target: .uk-container; cls-active: uk-navbar-sticky  bg-white; bottom:.uk-light-bg;"
            uk-switcher="animation: uk-animation-fade">
            <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><a href="#" class="green-border "><?php echo e($row->post_title); ?></a></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>

        <div class="uk-switcher uk-margin">
            <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="uk-container">
                    <?php $__currentLoopData = $value->associated_posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $associated_post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class=" border uk-grid uk-flex  uk-margin-large-bottom">
                            <div class="uk-width-1-3@m">
                                <div class="uk-text-center">
                                    <img src="<?php echo e($associated_post->thumbnail ? asset('uploads/associated/'.$associated_post->thumbnail) : asset('theme-assets/img/user.png')); ?>" class="uk-client-img " alt="">
                                    <h3 class="uk-margin-remove uk-secondary"><?php echo e($associated_post->title); ?></h3>
                                    <p class="uk-margin-remove"><?php echo e($associated_post->brief); ?></p>
                                </div>
                            </div>
                            <div class="uk-width-2-3@m">
                                <div class="uk-light-green border uk-padding">
                                <div class=" moretext clamp clamp-6">
                                    <?php echo $associated_post->content; ?>

                                </div>
                                <a href="#" class="read-more-btn text-primary moreless-button">Read More</a>
                                </div>
                                
                                
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('themes.default.common.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/lhakpa/public_html/resources/views/themes/default/posttypeTemplate-message-from-us.blade.php ENDPATH**/ ?>