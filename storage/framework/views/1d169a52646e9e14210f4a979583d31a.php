
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

<section class="uk-section-padding-page pattern">
  <div class=" uk-container">

      <div class="uk-text-left" uk-grid>
          <div class="uk-width-expand@m">
              <!--  -->
              <div class=" uk-margin-medium-bottom">
                  <div class="uk-margin">
                      <h3> <?php echo e($data->post_title); ?> </h3>
                      <span class="uk-date"><?php echo e($data->created_at->format('d M Y')); ?></span>
                  </div>
                  <div uk-lightbox>
                    <?php if($data->page_banner != null): ?>
                      <a href="<?php echo e(asset('uploads/banners/'. $data->page_banner)); ?>"><div class="uk-card-media-top uk-news-details-img ">
                          <img src="<?php echo e(asset('uploads/banners/'. $data->page_banner)); ?>" alt="<?php echo e($data->post_title); ?>">
                      </div></a>
                    <?php endif; ?>
                  </div>

                  <div class="uk-card uk-card-default uk-card-body uk-blog-list">
                    <?php echo $data->post_content; ?>

                      <hr>
                      <div class="sharethis-inline-share-buttons"></div>
                  </div>
              </div>
              <!--  -->
          </div>
      </div>
  </div>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('themes.default.common.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/lhakpa/public_html/resources/views/themes/default/single.blade.php ENDPATH**/ ?>