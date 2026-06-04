
<?php $__env->startSection('content'); ?>
<section class=" uk-cover-container uk-position-relative uk-flex uk-flex-middle uk-background-norepeat uk-background-cover uk-background-top-center uk-background-fixed" uk-height-viewport data-src="https://cyberlinknepal.com/design/lhakpa/assets/img/mountain/mountain6.jpeg" alt="" uk-img>
    <div class="uk-overlay-banner uk-position-cover"></div>
    <div class="uk-container uk-width-1-1 pt-150 uk-position-relative">
        <div class="uk-flex uk-flex-middle uk-grid-collapse " uk-grid>
            <div class="uk-width-1-1@m">
                <ul class="uk-breadcrumb">
                    <li><a href="<?php echo e(url('/')); ?>" class="uk-white">Home</a></li>
                    <li><span class="uk-secondary">Review</span></li>
                </ul>
                <div class="uk-sub-banner-font">
                    <h1>Review from our travellers</h1>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="uk-section">
    <div class="uk-container">
     <?php if($data->count() > 0): ?>
      <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
       
               
                        <div class=" border uk-grid uk-flex  uk-margin-large-bottom">
                            <div class="uk-width-1-5@m">
                                <div class="uk-media-280">
                                    <img src="<?php echo e($value->image ? asset('uploads/reviews/'.$value->image) : asset('theme-assets/img/user.png')); ?>" class="uk-border-rounded" alt="">
                                    
                                </div>
                                <div class="uk-text-center">
                                    <h3 class="uk-margin-remove uk-secondary"><?php echo e($value->full_name); ?></h3>
                                    <p class="uk-margin-remove"><b><?php echo e($value->country); ?></b></p>
                                    <div class="uk-star-rating">
                                        <?php for($i=0; $i < $value->rating; $i++): ?>
                                                <i class="fa-solid fa-star"></i>
                                            <?php endfor; ?>
                                    </div>
                                    <?php if(trip_count($value->user_id) >= 1): ?>
                                    <p class=" uk-margin-top uk-primary"> <?php echo e(trip_count($value->user_id)); ?> trip with Lhakpa Treks</p>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="uk-width-4-5@m">
                                <div class="uk-light-bg border uk-padding">
                                      <div class="uk-margin-remove moretext clamp clamp-4">
                                    
                                       <?php echo e($value->message); ?>   
                                       </div>
                                       <a href="#" class="read-more-btn text-primary moreless-button">Read More</a>
                                        
                                </div>
                            </div>
                        </div>
                 
        
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>
    </div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('themes.default.common.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/lhakpa/public_html/resources/views/themes/default/review.blade.php ENDPATH**/ ?>