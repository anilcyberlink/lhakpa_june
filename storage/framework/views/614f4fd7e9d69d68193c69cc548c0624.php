
<?php $__env->startSection('title', $data->post_type); ?>
<?php $__env->startSection('meta_keyword', $data->meta_keyword); ?>
<?php $__env->startSection('meta_description', $data->meta_description); ?>
<?php $__env->startSection('thumbnail', $data->banner); ?>
<?php $__env->startSection('content'); ?>

<section class=" uk-cover-container uk-position-relative uk-flex uk-flex-middle uk-background-norepeat uk-background-cover uk-background-top-center uk-background-fixed" uk-height-viewport data-src="<?php echo e($data->banner ? asset('uploads/original/'.$data->banner) : asset('theme-assets/img/mountain/mountain6.jpeg')); ?>" alt="<?php echo e($data->post_type); ?>" uk-img>
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
<section class="uk-section">
   <!--document section-->
   <div class="uk-container">
       <h1 class="uk-secondary uk-margin-remove">Our offical legal documents</h1>
       <span class="dotted-line-primary"></span>
       <div class="uk-margin-medium-top uk-margin-bottom">
            <p>
                <?php echo $data->content; ?>

            </p>
       </div>
       
      
      <?php if($documents): ?>
      <div class="uk-child-width-1-2@m uk-child-width-1-3@l uk-grid-small" uk-grid uk-lightbox="animation: fade" >
        <?php $__currentLoopData = $documents->images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="award-div">
                <a class="uk-inline uk-media-260" href="<?php echo e($image->file_name ? asset('uploads/medium/'.$image->file_name ) : asset('theme-assets/img/mountain/mountain8.jpeg')); ?>" data-caption="<?php echo e($image->title); ?>">
                   <img src="<?php echo e($image->file_name ? asset('uploads/medium/'.$image->file_name ) : asset('theme-assets/img/mountain/mountain8.jpeg')); ?>" class="border" width="100%" height="260" alt="<?php echo e($image->title); ?>" loading="lazy">
                   <div class="uk-overlay-primary uk-position-cover border" style="background: rgb(34 34 34 / 50%);"></div>
                   <div class="uk-overlay uk-position-bottom uk-light uk-text-center">
                      <p class="fw-600 uk-white"><?php echo e($image->title); ?></p>
                   </div>
                </a>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </div>
      <?php endif; ?>
   </div>
</section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('themes.default.common.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/lhakpa/public_html/resources/views/themes/default/posttypeTemplate-document.blade.php ENDPATH**/ ?>