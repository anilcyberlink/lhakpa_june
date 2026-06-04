
<?php $__env->startSection('title',$data->post_title); ?>
<?php $__env->startSection('meta_keyword',$data->meta_keyword); ?>
<?php $__env->startSection('meta_description',$data->meta_description); ?>
<?php $__env->startSection('thumbnail',$data->page_thumbnail); ?>
<?php $__env->startSection('content'); ?>

<section class=" uk-cover-container uk-position-relative uk-flex uk-flex-middle uk-background-norepeat uk-background-cover uk-background-top-center uk-background-fixed" style="height:400px;" data-src="<?php echo e(!empty($data->page_thumbnail) ? asset('uploads/original/'.$data->page_thumbnail) : asset('theme-assets/img/mountain/mountain6.jpeg')); ?>" alt="<?php echo e($data->post_title); ?>" uk-img>
    <div class="uk-overlay-banner uk-position-cover"></div>
    <div class="uk-container uk-width-1-1 pt-150 uk-position-relative">
        <div class="uk-flex uk-flex-middle uk-flex-center uk-grid-collapse " uk-grid>
            <div class="uk-width-1-1@m">
                <div class="uk-sub-banner-font uk-text-center">
                    <h2 class="uk-secondary"><?php echo e($data->post_title); ?></h2>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="uk-section">
    <div class="uk-container">
        <div class="uk-grid uk-flex">
            <div class="uk-width-1-4@m uk-flex-first@m uk-flex-last">
                <div class="uk-sidebar">
                    <h2 class="uk-primary uk-margin-remove">related news</h2>
                    <ul class="uk-related-news">
                        <?php $__currentLoopData = $related->take(4); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><a href="<?php echo e(route('page.pagedetail', $value->uri)); ?>" class="line-two"><?php echo e($value->post_title); ?></a></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                    <p>Share this Trip:</p>
                    <div>
                        <a href="<?php echo e($setting->youtube_link); ?>" class="uk-icon-button uk-margin-small-right"><i class="fa-brands fa-youtube"></i></a>
                        <a href="<?php echo e($setting->facebook_link); ?>" class="uk-icon-button  uk-margin-small-right"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="<?php echo e($setting->twitter_link); ?>" class="uk-icon-button"><i class="fa-brands fa-twitter"></i></a>
                    </div>
                </div>
            </div>
            <div class="uk-width-3-4@m uk-flex uk-flex-last@m uk-flex-first">
                <div>
                    <span class="uk-primary"><i class="fa-solid fa-calendar uk-margin-small-right"></i> <?php echo e(date('l F j, Y', strtotime($data->post_date))); ?></span>
                    <div class="uk-title-font  uk-container uk-margin-top">
                        <h2 class="uk-secondary"><?php echo e($data->sub_title); ?></h2>
                        <span class="dotted-line-primary"></span>
                        <p><?php echo e($data->post_excerpt); ?></p>
                        <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slider>
                            <div class="uk-slider-items uk-child-width-1-1">
                                <?php $__currentLoopData = $data->images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="uk-media-500">
                                        <img src="<?php echo e($image->file_name ? asset('uploads/medium/'.$image->file_name) : asset('theme-assets/img/mountain/mountain2.jpeg')); ?>"  class="border" alt="<?php echo e($image->title); ?>">
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                            <a class="uk-position-center-left uk-position-small prev-btn" href uk-slidenav-previous uk-slider-item="previous"></a>
                            <a class="uk-position-center-right uk-position-small next-btn" href uk-slidenav-next uk-slider-item="next"></a>
                        </div>
                        <p>
                            <?php echo $data->post_content; ?>

                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('themes.default.common.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/lhakpa/public_html/resources/views/themes/default/template-news.blade.php ENDPATH**/ ?>