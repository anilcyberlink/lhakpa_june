
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

<section class=" uk-light-bg">
    <div class="uk-margin-medium-bottom">
        <div class="uk-grid-collapse uk-grid" uk-height-match="target: .uk-same-height">
            <div class="uk-width-1-3@m">
                <img src="<?php echo e($data->banner ? asset('uploads/original/'.$data->banner) : asset('theme-assets/img/mountain/mountain8.jpeg')); ?>" class="cover uk-same-height" alt="<?php echo e($data->post_type); ?>">
            </div>
            <div class="uk-width-2-3@m uk-same-height">
                <div class="uk-title-font  uk-container uk-section uk-padding-large">
                    <h1 class="uk-secondary"><?php echo e($data->associated_title); ?></h1>
                    <span class="dotted-line-primary"></span>
                    <p>
                        <?php echo $data->content; ?>

                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
    $post = $posts->firstWhere('id', 195);
?>
<div class="uk-container uk-position-relative">
       <ul class="uk-subnav uk-subnav-pill uk-why-us-tab uk-flex-center  bg-white   py-3"
             uk-sticky="offset: 80; cls-active: uk-navbar-sticky;"
            uk-switcher="animation: uk-animation-fade">
        <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($row->id != 195): ?>
                <li><a class="green-border uk-margin-remove"><?php echo e($row->post_title); ?></a></li>
            <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
        <?php if($post && $post->images->isNotEmpty()): ?>
            <li><a class="green-border uk-margin-remove">Official Documents</a></li>
        <?php endif; ?>
    </ul>

    <div class="uk-switcher  uk-margin-large-bottom  ">
        <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($value->id != 195): ?>
                <div class="uk-container ">
                <?php $__currentLoopData = $value->associated_posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $associated_post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <div class=" border uk-grid uk-flex  uk-margin-large-bottom">
                        <div class="uk-width-1-3@m">
                            <div class="uk-text-center uk-media-220">
                                <img src="<?php echo e($associated_post->thumbnail ? asset('uploads/associated/'.$associated_post->thumbnail) : asset('theme-assets/img/user.png')); ?>" class="uk-border-rounded" alt="">
                                
                            </div>
                             <div class="uk-text-center">
                                 <h3 class="uk-margin-remove uk-secondary"><?php echo e($associated_post->title); ?></h3>
                                <p class="uk-margin-remove"><?php echo e($associated_post->brief); ?></p></div>
                        </div>
                        <div class="uk-width-expand@m">
                             <div class="uk-light-green border uk-padding">
                                <div class=" moretext clamp clamp-4">
                                    <?php echo $associated_post->content; ?>

                                </div>
                                <a href="#" class="read-more-btn text-primary moreless-button">Read More</a>
                                </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <!--document section-->
        <?php if($post && $post->images->isNotEmpty()): ?>
            <div class="uk-container">
                <div class="uk-child-width-1-2@m uk-child-width-1-3@l uk-grid-small" uk-grid uk-lightbox="animation: fade" >
                    <?php $__currentLoopData = $post->images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="award-div">
                            <a class="uk-inline uk-media-260" href="<?php echo e($image->file_name ? asset('uploads/medium/'.$image->file_name) :  asset('theme-assets/img/mountain/mountain8.jpeg')); ?>" data-caption="<?php echo e($image->title); ?>">
                                <img src="<?php echo e($image->file_name ? asset('uploads/medium/'.$image->file_name) : asset('theme-assets/img/mountain/mountain8.jpeg')); ?>" class="border" width="100%" height="260" alt="" loading="lazy">
                                <div class="uk-overlay-primary uk-position-cover border" style="background: rgb(34 34 34 / 50%);"></div>
                                <div class="uk-overlay uk-position-bottom uk-light uk-text-center">
                                    <p class="fw-600 uk-white"><?php echo e($image->title); ?></p>
                                </div>
                            </a>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        <?php endif; ?>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('themes.default.common.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/lhakpa/public_html/resources/views/themes/default/posttypeTemplate-suggestion.blade.php ENDPATH**/ ?>