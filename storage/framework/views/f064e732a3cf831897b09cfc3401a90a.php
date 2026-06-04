<?php if($trips->count() > 0): ?>
    <?php $__currentLoopData = $trips; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="uk-margin-bottom">
            <div class=" uk-flex-middle uk-grid-match uk-grid-collapse" uk-height-match uk-grid>
                <div class="uk-width-2-5@m">
                    <div class="uk-display-block uk-inline-clip uk-transition-toggle uk-link-toggle ur-media-270r">                          
                        <img src="<?php echo e(!empty($row->thumbnail) ? asset('uploads/original/'.$row->thumbnail) : asset('theme-assets/img/mountain/mountain9.jpeg')); ?>" class="uk-height-1-1 uk-transition-scale-up uk-transition-opaque" alt="<?php echo e($row->trip_title); ?>">
                        <div class="uk-position-top-left uk-overlay uk-overlay-default" style="background: none;">
                            
                            <button class="uk-wish-button"id="wish-button" data-id="<?php echo e($row->id); ?>"><i class="fa-solid fa-heart" aria-hidden="true"></i></button>
                        </div>
                    </div>
                </div>
                <div class="uk-width-3-5@m uk-light-bg uk-padding-small uk-trip-list" style="padding: 30px 25px;">
                    <div class="uk-text-title uk-text-title uk-flex uk-flex-between uk-flex-middle">
                        <div>
                            <div class="uk-star-rating">
                                <?php for($i = 0 ; $i < $row->rating ; $i++): ?>
                                    <i class="fa-solid fa-star"></i>
                                <?php endfor; ?>
                            </div>
                            <a href="<?php echo e(url('page/' . tripurl($row->uri))); ?>" class="uk-news-title">
                                <h2><?php echo e($row->trip_title); ?></h2>
                            </a>
                        </div>
                        <div>
                            <?php if($row->price): ?>
                            <h2 class="uk-margin-remove uk-text-right" style="font-size:20px;">US $<?php echo e($row->price); ?></h2>
                            <?php endif; ?>
                            <?php if($row->price_euro): ?>
                            <h3 class="uk-margin-remove uk-secondary uk-text-right" style="font-size:17px;"> € <?php echo e($row->price_euro); ?></h3>
                            <?php endif; ?>
                        </div>
                    </div>
                    <?php if($row->flight == 1): ?>
                    <div class="uk-margin-small-bottom">
                        <p class="uk-margin-remove uk-text-right uk-text-uppercase " style="font-size:15px;"> <i class="fa-solid fa-plane-up uk-margin-small-right"></i> <b>Including fligh sdsdvt</b></p>
                    </div>
                    <?php endif; ?>
                    <p class="uk-margin-remove line-three">
                        <?php echo e($row->sub_title); ?>

                    </p>
                    <hr style="border-color: var(--grey); margin-bottom:0;">
                    <div class="uk-grid uk-margin-small-top uk-margin-small-bottom">
                                            <div  class="uk-width-expand@m uk-flex uk-flex-between">
                                               <div class="uk-flex uk-flex-middle uk-trip">
                                                <i class="fa-solid fa-calendar"></i>
                                                <div>
                                                    <p class="uk-trip-title uk-margin-remove">Duration</p>
                                                    <p class="uk-trip-description uk-margin-remove"><?php echo e($row->duration); ?> Days</p>
                                                </div>
                                            </div>
                                            <div class="uk-flex uk-flex-middle uk-trip ">
                                                <i class="fa-solid fa-location-dot"></i>
                                                <div>
                                                    <p class="uk-trip-title uk-margin-remove">Location</p>
                                                    <p class="uk-trip-description uk-margin-remove"><?php echo e(getDestinationNameByTripId($row->id)); ?></p>
                                                </div>
                                            </div>
                                            <div class="uk-flex uk-flex-middle uk-trip ">
                                                <i class="fa-solid fa-calendar"></i>
                                                <div>
                                                    <p class="uk-trip-title uk-margin-remove">Difficulty</p>
                                                    <p class="uk-trip-description uk-margin-remove"><?php echo e($row->trip_grade); ?></p>
                                                </div>
                                            </div> 
                                            </div>
                                            
                                            <div class="uk-width-auto@m uk-flex uk-flex-center">
                                                <div  style="margin-top:25px;">
                                                    <a href="<?php echo e(url('page/' . tripurl($row->uri))); ?>" class="uk-btn uk-btn-secondary">Know more</a>
                                                </div>
                                            </div>
                                        </div>
                </div>
            </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php else: ?>
    <div class="uk-section uk-text-center uk-text-bold uk-text-lead"><strong>No trips found matching your criteria.</strong></div>
<?php endif; ?>
<?php /**PATH /home/lhakpa/public_html/resources/views/themes/default/search-results.blade.php ENDPATH**/ ?>