
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
<section class="uk-section">
   <div class="uk-container">
        <p>
           <?php echo $data->content; ?>

        </p>
    <?php if($posts->count() > 0 ): ?>
      <div class=" uk-light-bg uk-padding border uk-margin-top uk-margin-bottom">
         <ul class="uk-detail-list" uk-accordion>
            <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li class="<?php echo e($loop->first ? 'uk-open' : ''); ?>">
                   <a class="uk-accordion-title" href><span class="uk-margin-right"><?php echo e(str_pad($loop->iteration, 2, '0', STR_PAD_LEFT)); ?></span> <?php echo e($row->post_title); ?></a>
                   <div class="uk-accordion-content uk-margin-remove">
                      <p>
                          <?php echo $row->post_content; ?>

                      </p>
                   </div>
                </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
         </ul>
      </div>
    <?php endif; ?>
   </div>
</section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('themes.default.common.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/lhakpa/public_html/resources/views/themes/default/posttypeTemplate-terms.blade.php ENDPATH**/ ?>