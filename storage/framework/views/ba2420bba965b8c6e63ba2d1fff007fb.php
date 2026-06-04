<?php $__env->startSection('title', $data->meta_title ? $data->meta_title : $data->trip_title); ?>
<?php $__env->startSection('meta_keyword', $data->meta_keyword); ?>
<?php $__env->startSection('meta_description', $data->meta_description); ?>
<?php $__env->startSection('thumbnail', $data->thumbnail); ?>
<?php $__env->startSection('content'); ?>
<?php
    $photo_videos = $photos->pluck('video')->filter();
?>
<section class=" uk-cover-container uk-position-relative uk-flex uk-flex-middle uk-background-norepeat uk-background-cover uk-background-top-center uk-background-fixed" uk-height-viewport data-src="<?php echo e(asset('uploads/banners/' . $data->banner)); ?>" alt="<?php echo e($data->trip_title); ?>" uk-img>
     <div class="uk-overlay-banner uk-position-cover"></div>
    <div class="uk-container uk-width-1-1 pt-detail-150 pb-23 uk-position-relative">
        <div class="uk-flex uk-flex-middle uk-grid-collapse uk-margin-top" uk-grid uk-height-match="target: .uk-same-height">
            <div class="uk-width-3-4@m" id="container">
                <!-- original div -->
                <div id="originalDiv">
                    <div class="uk-sub-banner-font">
                        <h1 class="uk-margin-remove" style="font-size:2.5rem;"><?php echo e($data->trip_title); ?></h1>
                        <p class="uk-margin-bottom">
                           <?php echo e($data->discount); ?>

                        </p>
                    </div>
                </div>
                <!-- end of original div -->

                <!-- photo/ video gallery start -->

                <!-- photos section start -->
                <div id="newDiv1" class="hidden uk-grey-bg uk-same-height">
                    <div class="uk-padding uk-list-modal uk-inline uk-width-1-1">
                        <div class="uk-position-right">
                            <button id="closeBtn1"><i class="fa-solid fa-xmark"></i></button>
                        </div>
                        <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slider>
                            <div class="uk-slider-items uk-child-width-1-1 uk-child-width-1-2@m uk-grid" uk-lightbox="animation: slide">
                                <?php $__currentLoopData = $photos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $photo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div>
                                        <a class="uk-inline uk-media-270 uk-width-1-1" href="<?php echo e(asset('/uploads/original/' . $photo->thumbnail)); ?>">
                                            <img src="<?php echo e(asset('/uploads/original/' . $photo->thumbnail)); ?>" class="border" alt="<?php echo e($photo->title); ?>">
                                        </a>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                            <a class="uk-position-center-left uk-position-small uk-hidden-hover" href uk-slidenav-previous uk-slider-item="previous"></a>
                            <a class="uk-position-center-right uk-position-small uk-hidden-hover" href uk-slidenav-next uk-slider-item="next"></a>

                        </div>
                    </div>
                </div>
                <!-- photos section end -->
                <!-- videos section start-->
                <div id="newDiv2" class="hidden uk-grey-bg uk-same-height">
                    <div class="uk-padding uk-list-modal uk-inline uk-width-1-1">
                        <div class="uk-position-right">
                            <button id="closeBtn2"><i class="fa-solid fa-xmark"></i></button>
                        </div>
                        <div class="uk-container ">
                            <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slider>

                                <ul class="uk-slider-items uk-grid uk-child-width-1-2@m">
                                    <?php $__currentLoopData = $photos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li>
                                            <div class="video-container">
                                                <?php if($row->video): ?>
                                                    <iframe src="https://www.youtube.com/embed/<?php echo e($row->video); ?>" title="YouTube video" frameborder="0" allowfullscreen></iframe>
                                                <?php endif; ?>
                                            </div>
                                        </li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>

                                <!-- Navigation -->
                                <?php if($photo_videos->count() > 2): ?>
                                    <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                                    <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- videos section end -->

                <!-- photo/ video gallery end -->
            </div>
            <!-- banner side bar start -->
            <div class="uk-width-1-4@m uk-same-height">
                <div class="uk-grey-bg  uk-padding-dicovery  uk-pattern-bg">
                    <!--<div class="uk-flex uk-flex-between uk-flex-middle">-->
                    <!--    -->
                    <!--    <div class="uk-flex uk-flex-middle">-->
                    <!--        <button class="uk-wish-button uk-res-wishlist" id="wish-button" data-id="<?php echo e($data->id); ?>"><span class="uk-visible@s" uk-icon="icon: heart; "  ></span> <span uk-icon="icon: heart; ratio: 1.5" class="uk-hidden@s"  ></span> </button>-->
                            <!-- <button class="uk-wish-button" id="wish-button" onclick="toggleActive(this)"><i class="fa-solid fa-heart"></i></button> -->
                    <!--        -->
                    <!--    </div>-->
                    <!--    <div class="uk-star-rating uk-visible@m" style="margin: 7px 10px;">-->
                    <!--        <?php for($i = 0 ; $i < $data->rating ; $i++): ?>-->
                    <!--            <i class="fa-solid fa-star"></i>-->
                    <!--        <?php endfor; ?>-->
                    <!--    </div>-->
                    <!--</div>-->
                    <h3 class="uk-white uk-text-uppercase uk-margin-remove  uk-visible@m"><?php echo e($data->trip_title); ?></h3>
                    <hr style="border-color: var(--secondary);" class="uk-visible@m">
                    <p class="uk-white uk-text-justify line-five uk-visible@m"><?php echo e($data->sub_title); ?></p>
                    <div class="uk-margin-remove uk-flex uk-flex-between">
                        <button id="changeBtn1" class="uk-buttons uk-text-center">
                            <span class="uk-secondary"><i class="fa-solid fa-photo-film f-20 uk-margin-small-bottom"></i><br> Photos</span>
                        </button>
                        <?php if($photo_videos->isNotEmpty()): ?>
                            <button id="changeBtn2" class="uk-buttons uk-text-center">
                                <span class="uk-secondary "><i class="fa-solid fa-video f-20 uk-margin-small-bottom"></i><br>Videos</span>
                            </button>
                        <?php endif; ?>
                        <a href="#review" uk-scroll class="uk-buttons uk-text-center">
                            <span class="uk-secondary "><i class="fa-solid fa-users f-20 uk-margin-small-bottom "></i><br>Reviews</span>
                        </a>
                    </div>
                </div>
                <div class="uk-child-width-1-2 uk-grid-collapse" uk-grid>
                        <a href="<?php echo e(route('page.booking', $data->uri)); ?>" class="uk-secondary-bg uk-book-btn">BOOK NOW</a>
                        <a href="#modal-inquiry" class="uk-inquiry-btn uk-primary-bg uk-book-btn" uk-toggle>INQUIRY NOW</a>
                </div>
            </div>
            <!-- banner side bar start -->
        </div>
    </div>
</section>

<div class="uk-position-relative detail-nav">
    <div class=" uk-box-shadow-large uk-sticky" uk-sticky="offset: 80;  animation: uk-animation-slide-top uk-animation-slow uk-transform-origin-bottom-center " style="z-index:960;">
        <div class="">
            <div class="border uk-light">
                <div class="uk-small-details-nav">
                    <div class="uk-container uk-position-relative uk-flex uk-flex-middle">
                        <ul class="uk-width-2-3 uk-navbar-single uk-flex  uk-margin-remove-bottom sidenav" style="gap: 60px;">
                            <li>
                                <a href="#features" >Overview </a>
                            </li>
                            <?php if($itinerary->count() > 0): ?>
                                <li>
                                    <a href="#itinerary" >Itinerary & Maps </a>
                                </li>
                            <?php endif; ?>
                            <?php if($cost_includes->isNotEmpty() || $banner->isNotEmpty() || $cost_excludes->isNotEmpty() || $guidelines->count() > 0): ?>
                                <li>
                                    <a href="#information" >Information</a>
                                </li>
                            <?php endif; ?>
                            <?php if($faqs->count() > 0): ?>
                                <li>
                                    <a href="#faq" >FAQ </a>
                                </li>
                            <?php endif; ?>
                            <li>
                                <a href="#review" >Review </a>
                            </li>
                        </ul>
                        <div class="uk-width-1-3 uk-flex uk-flex-right  uk-visible@m  ">
                            <?php if($schedules->count() > 0): ?>
                                <a href="#offcanvas-usage" class="uk-btn uk-btn-secondary" uk-toggle>Dates & Prices</a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="uk-section"  style="overflow:hidden;">
    <div class="uk-container">
        <div class="uk-grid uk-flex">
            <div class="uk-width-3-4@l ">
                <div id="features">
                    <!-- overview start -->
                    <div>
                        <div class="uk-grid uk-flex ">
                            <div class="uk-width-1-2@s uk-margin-top">
                                <div class="uk-text-title">
                                    <h1 class="uk-primary uk-margin-remove"><?php echo e($data->route); ?></h1>
                                </div>
                            </div>
                            
                            <div class="uk-width-1-2@s uk-text-right@m uk-text-left uk-margin-top uk-responsive-flex">
                                
                               <div>
                                    <?php if($data->trip_pdf): ?>
                                        <a href="<?php echo e(route('trip.download.pdf', $data->id)); ?>" class="uk-btn uk-btn-secondary download-pdf-btn  " download>
                                             <i class="fa-solid fa-download " aria-hidden="true"></i> <span
                                            class=" uk-margin-small-left">Download</span>
                                        </a>
                                        <!-- <a href="<?php echo e(route('trip.download.pdf', $data->id)); ?>" class="uk-btn uk-btn-secondary download-pdf-btn uk-responsive-btn uk-hidden@s" download uk-tooltip="title: Download Itinerary; pos: bottom-center">-->
                                        <!--    <i class="fa-solid fa-download "></i>-->
                                        <!--</a>-->
                                    <?php endif; ?>
                               </div>
                                <?php if($data->trip_code): ?>
                                    <div class="uk-margin-top">
                                        <p><b class="uk-text-uppercase uk-secondary">Ref No: </b><?php echo e($data->trip_code); ?></p>
                                    </div>  
                                <?php endif; ?>
                            </div>
                        </div>
                       
                        <div class="uk-column-1-1 uk-column-1-2@s">
                        <span class="uk-text-justify">
                            <?php echo $data->trip_content; ?>

                        </span>
                        </div>
                    </div>
                    <!-- overview end -->

                    <!-- hightlight start-->
                    <?php if(!empty($data->trip_highlight)): ?>
                        <div class="uk-font uk-margin-top">
                            <span class="uk-primary uk-text-uppercase f-27 "><i class="fa-solid fa-person-hiking uk-margin-small-right" aria-hidden="true"></i>Trip highlight</span>
                            <ul class="uk-list uk-highlight uk-list-divider uk-light-bg uk-padding border uk-responsive-padding">
                                <?php echo $data->trip_highlight; ?>

                            </ul>
                        </div>
                    <?php endif; ?>
                    <!-- end hightlight -->

                    <!-- notice start-->
                    <?php if(!empty($data->trip_excerpt)): ?>
                        <div class="uk-font">
                            <span class="uk-primary uk-text-uppercase f-27 "><i class="fa-solid fa-list uk-margin-small-right" aria-hidden="true"></i>Important notice</span>
                            <div class=" uk-light-bg uk-padding border uk-margin-top uk-responsive-padding">
                                <p class="uk-text-justify">
                                    <?php echo $data->trip_excerpt; ?>

                                </p>
                            </div>
                        </div>
                    <?php endif; ?>
                    <!-- end notice -->

                </div>
                
                <div id="itinerary">
                    <div class="uk-font uk-margin-top uk-margin-bottom" id="itinerary">
                        <?php if($itinerary->count() > 0): ?>
                            <div class="uk-flex uk-flex-middle uk-flex-between">
                                <div class="uk-font uk-text-center">
                                    <span class="uk-primary uk-text-uppercase f-27 "><i class="fa-regular fa-calendar uk-margin-small-right" aria-hidden="true"></i>Itinerary</span>
                                </div>
                                <div>
                                    <p class="uk-margin-remove uk-text-right">Share this: </p>
                                    <div class="uk-footer-icon   uk-margin-bottom">
                                        <!-- ShareThis BEGIN --><div class="sharethis-inline-share-buttons"></div><!-- ShareThis END -->
                                    </div>
                                </div>
                            </div>
                            <div class=" uk-light-bg uk-padding border uk-margin-top uk-margin-bottom uk-responsive-padding">
                                <ul class="uk-detail-list" uk-accordion>
                                    <?php $__currentLoopData = $itinerary; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li class="<?php echo e($loop->first ? 'uk-open' : ''); ?>">
                                            <!--<a class="uk-accordion-title" href><span class="uk-margin-right uk-day-title">Day <?php echo e($item->days); ?></span> <?php echo e($item->title); ?></a>-->
                                            <div class="uk-accordion-title  uk-itinerary-title">
                                                <div class="uk-grid-small uk-flex-middle uk-grid-collapse" uk-grid>
                                                  <div class="uk-width-auto uk-text-center uk-first-column">
                                                     <div class="uk-day-title uk-margin-small-right"> Day <?php echo e($item->days); ?> </div>
                                                  </div>
                                                  <div class="uk-width-expand">
                                                     <div class="uk-width-1-1">
                                                        <p class="uk-margin-remove theme-font-medium"> <?php echo e($item->title); ?> </p>
                                                     </div>
                                                  </div>
                                               </div>  
                                            </div>
                                            <div class="uk-accordion-content uk-margin-remove">
                                                <p><?php echo $item->content; ?></p>
                                            </div>
                                              
                                        </li>
                                        
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            </div>
                        <?php endif; ?>
                        <?php if(!empty($data->trip_map)): ?>
                            <div class="uk-maps uk-margin-large-top" uk-lightbox>
                                <div class="uk-font uk-text-center uk-margin-top">
                                    <span class="uk-primary uk-text-uppercase f-27 "><i class="fa-regular fa-calendar uk-margin-small-right" aria-hidden="true"></i>Maps</span>
                                </div> 
                                <a href="<?php echo e(asset('uploads/original/'.$data->trip_map)); ?>" class="uk-media-400">
                                    <img src="<?php echo e(asset('uploads/original/'.$data->trip_map)); ?>" alt="<?php echo e($data->trip_title); ?>"/>
                                </a>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            
            <!-- sidebar-->
            <div class="uk-width-1-4@l ">
                <!-- facilities start -->
                <div>
                    <div class="uk-light-bg border uk-padding-small uk-margin-top uk-padding-remove-top">
                        <div class="uk-child-width-1-4@m uk-child-width-1-2@l uk-child-width-1-3 uk-grid-match uk-grid uk-flex-left uk-grid-collapse" uk-grid="">
                            <div>
                                <div class="uk-flex uk-flex-column  uk-flex-center uk-text-center uk-margin-top">
                                    <div class="uk-width-auto">
                                        <img src="<?php echo e(asset('theme-assets/img/icon/score.png')); ?>" class="subnav-icon" alt="">
                                    </div>
                                    <div>
                                        <div class="uk-feature-font">
                                            <p class="uk-margin-remove"><strong style="font-size: 14px !important;">Trip Grade</strong></p>
                                            <div class="tooltip-container">
                                                <?php echo e(($data->trip_grade)); ?>

                                                <?php if($data->status_text): ?>
                                                    <div class="tooltip-content uk-contents">
                                                        
                                                        <?php echo $data->status_text; ?>

                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="uk-flex uk-flex-column  uk-flex-center uk-text-center uk-margin-top">
                                    <div class="uk-width-auto">
                                        <img src="<?php echo e(asset('theme-assets/img/icon/clock.png')); ?>" class="subnav-icon" alt="">
                                    </div>
                                    <div>
                                        <div class="uk-feature-font">
                                            <p class="uk-margin-remove"><strong style="font-size: 14px !important;">Duration</strong></p>
                                            <p class="uk-margin-remove"><?php echo e($data->duration); ?> Days</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="uk-flex uk-flex-column  uk-flex-center uk-text-center uk-margin-top">
                                    <div class="uk-width-auto">
                                        <img src="<?php echo e(asset('theme-assets/img/icon/altitude.png')); ?>" class="subnav-icon" alt="">
                                    </div>
                                    <div>
                                        <div class="uk-feature-font">
                                            <p class="uk-margin-remove"><strong style="font-size: 14px !important;">Max Elevation</strong></p>
                                            <p class="uk-margin-remove"><?php echo e($data->max_altitude); ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="uk-flex  uk-flex-column uk-flex-center uk-text-center uk-margin-top">
                                    <div class="uk-width-auto">
                                        <img src="<?php echo e(asset('theme-assets/img/icon/group.png')); ?>" class="subnav-icon" alt="">
                                    </div>
                                    <div>
                                        <div class="uk-feature-font">
                                            <p class="uk-margin-remove"><strong style="font-size: 14px !important;">Group Size</strong></p>
                                            <p class="uk-margin-remove"><?php echo e($data->group_size); ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="uk-flex  uk-flex-column uk-flex-center uk-text-center uk-margin-top">
                                    <div class="uk-width-auto">
                                        <img src="<?php echo e(asset('theme-assets/img/icon/bus.png')); ?>" class="subnav-icon" alt="">
                                    </div>
                                    <div>
                                        <div class="uk-feature-font">
                                            <p class="uk-margin-remove"><strong style="font-size: 14px !important;">Transporation</strong></p>
                                            <p class="uk-margin-remove"><?php echo e($data->peak_name); ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="uk-flex  uk-flex-column uk-flex-center uk-text-center uk-margin-top">
                                    <div class="uk-width-auto">
                                        <img src="<?php echo e(asset('theme-assets/img/icon/point.png')); ?>" class="subnav-icon" alt="">
                                    </div>
                                    <div>
                                        <div>
                                            <p class="uk-margin-remove"><strong style="font-size: 14px !important;">Start / End</strong></p>
                                            <p class="uk-margin-remove"><?php echo e($data->best_season); ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="uk-flex  uk-flex-column uk-flex-center uk-text-center uk-margin-top">
                                    <div class="uk-width-auto">
                                        <img src="<?php echo e(asset('theme-assets/img/icon/hotel.png')); ?>" class="subnav-icon" alt="">
                                    </div>
                                    <div>
                                        <div class="uk-feature-font">
                                            <p class="uk-margin-remove"><strong style="font-size: 14px !important;">Accommodation</strong></p>
                                            <p class="uk-margin-remove"><?php echo e($data->accommodation); ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="uk-flex  uk-flex-column uk-flex-center uk-text-center uk-margin-top">
                                    <div class="uk-width-auto">
                                        <img src="<?php echo e(asset('theme-assets/img/icon/guided.png')); ?>" class="subnav-icon" alt="">
                                    </div>
                                    <div>
                                        <div class="uk-feature-font">
                                            <p class="uk-margin-remove"><strong style="font-size: 14px !important;">Guided</strong></p>
                                            <p class="uk-margin-remove"><?php echo e($data->guided == 1 ? 'Yes' : 'No'); ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="uk-flex">
                            <a href="#modal-customize" class="uk-extra uk-secondary-bg uk-book-btn border uk-margin-small-top " uk-toggle>Customize Your Trip</a>
                        </div>
                        <?php if($schedules->count() > 0): ?>
                        <div class="uk-flex">  
                                <a href="#offcanvas-usage" class=" uk-extra uk-primary-bg uk-book-btn border uk-margin-small-top" uk-toggle>View Dates and prices</a>
                        </div>   
                    </div>
                    <?php endif; ?>
                </div>
                <!-- facilities end -->
                <?php if($experts->count() > 0): ?>
                    <div>
                        <div class="uk-light-bg border uk-padding-small uk-margin-top">
                            <h2 class="uk-primary uk-text-uppercase uk-margin-remove" style="font-size: 24px;">Consult with Experts</h2>
                            <div uk-slider="autoplay: true">
                                <div class="uk-position-relative uk-visible-toggle" tabindex="-1" >
                                    <div class="uk-slider-items uk-child-width-1-1">
                                        <?php $__currentLoopData = $experts->chunk(2); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $group): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <div>
                                                <?php $__currentLoopData = $group; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $expert): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <div class="uk-flex uk-flex-middle uk-margin-small-top">
                                                        <img src="<?php echo e(!empty($expert->thumbnail) ? asset('uploads/team/' .$expert->thumbnail) : asset('theme-assets/img/mountain/mountain1.jpeg')); ?>" class="uk-sherpa-img" alt="">
                                                        <div class="uk-sherpa-font">
                                                            <h2><?php echo e($expert->name); ?></h2>
                                                            <span><?php echo e($expert->position); ?></span>
                                                            <span><b> Languages:</b> <?php echo e($expert->language); ?></span>
                                                            <!--<div>-->
                                                            <!--    <b> Languages:</b> <?php echo e($expert->language); ?>-->
                                                                <!--<i class="fa-brands fa-whatsapp uk-whatsapp"></i>-->
                                                                <!--<i class="fa-brands fa-viber uk-viber"></i>-->
                                                                <!--<i class="fa-solid fa-phone uk-phone"></i>-->
                                                            <!--</div>-->
                                                        </div>
                                                    </div>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </div>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>
                                </div>
                                <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin"></ul>
                            </div>
                            <div class="uk-flex">
                                <a href="<?php echo e(route('page.posttype_detail',$teamPage->uri)); ?>" class="uk-extra uk-secondary-bg uk-book-btn border uk-margin-small-top ">View All Team Members</a>
                            </div>
                            
                        </div>
                    </div>
                <?php endif; ?>
                    <div class="uk-flex">
                        <a href="<?php echo e(route('page.posttype_detail',$suggestionPage->uri)); ?>" class="uk-extra uk-secondary-bg uk-book-btn border uk-margin-small-top ">Message from director</a>
                    </div>
                    <div class="uk-light-bg uk-padding-small uk-margin-top">
                        <div class=" text-secondary-light uk-text-bold">Need Help with this booking:</div>
                        <div class="uk-margin-small-top">
                            <div class="uk-footer-icon uk-flex uk-flex-between">
                                <!--<a href="https://www.instagram.com" class="uk-icon-button "><i class="fa-brands fa-instagram" aria-hidden="true"></i></a>-->
                                <!--<a href="https://www.facebook.com" class="uk-icon-button  "><i class="fa-brands fa-facebook-f" aria-hidden="true"></i></a>-->
                                <!--<a href="https://twitter.com/" class="uk-icon-button"><i class="fa-brands fa-twitter" aria-hidden="true"></i></a>-->
                                <!--<a href="https://www.whatsapp.com/" class="uk-icon-button"><i class="fa-brands fa-whatsapp" aria-hidden="true"></i></a>-->
                                <div>
                                    <a  href="mailto:lhakpatrekking@gmail.com" class="uk-icon-button" style="background-color: white;"><i class="fa-solid fa-envelope" aria-hidden="true" style="color: #dd4a45;"></i></a>
                                    <a href="https://www.viber.com/" class="uk-icon-button" style="background-color: #7a509c;"><i class="fa-brands fa-viber" aria-hidden="true" style="color: white;"></i></a>
                                    <a href="https://twitter.com/" class="uk-icon-button" uk-icon="icon: x" style="background: black; color:white;"></a>
                                    </div>
                                <!--<div class=" text-secondary-light uk-text-bold">-->
                                <!--    NEPAL-->
                                <!--</div>-->
                            </div>
                        </div>
                    </div>
                    <div class="uk-flex">
                        <a href="<?php echo e(route('page.posttype_detail',$aboutPage->uri)); ?>" class="uk-extra uk-primary-bg uk-book-btn border uk-margin-small-top ">Lhakpa Trekking?</a>
                    </div>
                    <div class="uk-flex">
                        <a href="<?php echo e(route('page.posttype_detail',$womenPage->uri)); ?>" class="uk-extra uk-secondary-bg uk-book-btn border uk-margin-small-top ">Women Empowerment</a>
                    </div>
                    <div class="uk-flex">
                        <a href="<?php echo e(route('page.posttype_detail',$foundationPage->uri)); ?>" class="uk-extra uk-grey-bg uk-book-btn border uk-margin-small-top ">Mingmar Foundation</a>
                    </div>
                    <div uk-sticky="offset: 150; end: #my-id; media: @l" style="    z-index: 1;">
                        <div class="uk-light-bg border uk-padding-small uk-margin-top">
                            <h2 class="uk-primary uk-text-uppercase uk-margin-remove" style="font-size: 24px;">International Team</h2>
                            <div uk-slider=" autoplay: true">
                                <div class="uk-position-relative uk-visible-toggle" tabindex="-1" >
                                    <div class="uk-slider-items uk-child-width-1-1">
                                        <?php $__currentLoopData = $international->chunk(2); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $int_group): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <div>
                                                <?php $__currentLoopData = $int_group; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $int_expert): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <div class="uk-flex uk-flex-middle uk-margin-small-top uk-grid">
                                                        <div class="uk-width-1-3 uk-width-1-2@m">
                                                            <img src="<?php echo e(asset('uploads/associated/'.$int_expert->thumbnail)); ?>" class="uk-sherpa-img" alt="<?php echo e($int_expert->title); ?>">
                                                        </div>
                                                       <div class="uk-width-2-3 uk-width-1-2@m uk-padding-remove" style="padding-left:10px !important;">
                                                           <div class="uk-sherpa-font">
                                                          <h2><?php echo e($int_expert->title); ?></h2>
                                                          <span><?php echo e($int_expert->brief); ?></span><br>
                                                          <!--<span><b>Country:</b> France</span><br>-->
                                                          <?php if( $int_expert->language ): ?>
                                                          <span><b> Languages:</b> <?php echo e($int_expert->language); ?></span>
                                                          <?php endif; ?>
                                                       </div>
                                                       </div>
                                                       
                                                    </div>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </div>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                  </div>
                               </div>
                               <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin"></ul>
                            </div>
                            <div class="uk-flex">
                                <a href="<?php echo e(route('page.posttype_detail',$internationalPage->uri)); ?>" class="uk-extra uk-secondary-bg uk-book-btn border uk-margin-small-top ">View All Members</a>
                            </div>
                        </div>
                        <div class="uk-flex">
                            <a href="<?php echo e(route('page.posttype_detail',$termPage->uri)); ?>" class="uk-extra uk-primary-bg uk-book-btn border uk-margin-small-top ">Terms & Condition</a>
                        </div>
                        <div class="uk-flex">
                            <a href="<?php echo e(route('page.posttype_detail',$whyusPage->uri)); ?>" class="uk-extra uk-secondary-bg uk-book-btn border uk-margin-small-top ">Why Lhakpa Trekking?</a>
                        </div>
                    </div>
            </div>
        </div>
        <div id="my-id"></div>
    </div>
</section>

<!-- itnerary start-->
<!--<section id="itinerary">-->
<!--    <div class="uk-container">-->
<!--        <div class="uk-font uk-margin-top uk-margin-bottom" id="itinerary">-->
<!--            <?php if($itinerary->count() > 0): ?>-->
<!--                <div class="uk-flex uk-flex-between">-->
<!--                    <div class="uk-font uk-text-center">-->
<!--                        <span class="uk-primary uk-text-uppercase f-27 "><i class="fa-regular fa-calendar uk-margin-small-right" aria-hidden="true"></i>Itinerary</span>-->
<!--                    </div>-->
<!--                    <div class="uk-flex uk-flex-middle">-->
<!--                        <p class="uk-margin-small-right">Share this: </p>-->
<!--                        <div class="uk-footer-icon   uk-margin-bottom">-->
<!--                            <a href="https://www.instagram.com" class="uk-icon-button uk-margin-small-right"><i class="fa-brands fa-instagram" aria-hidden="true"></i></a>-->
<!--                            <a href="https://www.facebook.com" class="uk-icon-button  uk-margin-small-right"><i class="fa-brands fa-facebook-f" aria-hidden="true"></i></a>-->
<!--                            <a href="https://twitter.com/" class="uk-icon-button"><i class="fa-brands fa-twitter" aria-hidden="true"></i></a>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class=" uk-light-bg uk-padding border uk-margin-top uk-margin-bottom">-->
<!--                    <ul class="uk-detail-list" uk-accordion>-->
<!--                        <?php $__currentLoopData = $itinerary; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>-->
<!--                            <li class="<?php echo e($loop->first ? 'uk-open' : ''); ?>">-->
                                <!--<a class="uk-accordion-title" href><span class="uk-margin-right uk-day-title">Day <?php echo e($item->days); ?></span> <?php echo e($item->title); ?></a>-->
<!--                                <div class="uk-accordion-title  uk-itinerary-title">-->
<!--                                    <div class="uk-grid-small uk-flex-middle uk-grid-collapse" uk-grid>-->
<!--                                      <div class="uk-width-auto uk-text-center uk-first-column">-->
<!--                                         <div class="uk-day-title uk-margin-small-right"> Day <?php echo e($item->days); ?> </div>-->
<!--                                      </div>-->
<!--                                      <div class="uk-width-expand">-->
<!--                                         <div class="uk-width-1-1">-->
<!--                                            <p class="uk-margin-remove theme-font-medium"> <?php echo e($item->title); ?> </p>-->
<!--                                         </div>-->
<!--                                      </div>-->
<!--                                   </div>  -->
<!--                                </div>-->
<!--                                <div class="uk-accordion-content uk-margin-remove">-->
<!--                                    <p><?php echo $item->content; ?></p>-->
<!--                                </div>-->
                                  
<!--                            </li>-->
                            
<!--                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>-->
<!--                    </ul>-->
<!--                </div>-->
<!--            <?php endif; ?>-->
<!--            <?php if(!empty($data->trip_map)): ?>-->
<!--                <div class="uk-maps uk-margin-large-top" uk-lightbox>-->
<!--                    <div class="uk-font uk-text-center uk-margin-top">-->
<!--                        <span class="uk-primary uk-text-uppercase f-27 "><i class="fa-regular fa-calendar uk-margin-small-right" aria-hidden="true"></i>Maps</span>-->
<!--                    </div> -->
<!--                    <a href="<?php echo e(asset('uploads/original/'.$data->trip_map)); ?>" class="uk-media-400">-->
<!--                        <img src="<?php echo e(asset('uploads/original/'.$data->trip_map)); ?>" alt="<?php echo e($data->trip_title); ?>"/>-->
<!--                    </a>-->
<!--                </div>-->
<!--            <?php endif; ?>-->
<!--        </div>-->
<!--    </div>-->
<!--</section>-->
<!-- itnerary end-->

<!-- cost includes / excludes section start-->
<?php if($cost_includes->isNotEmpty() || $banner->isNotEmpty() || $cost_excludes->isNotEmpty() || $guidelines->count() > 0): ?>
    <section class="uk-position-relative uk-section  uk-background-norepeat uk-background-cover" uk-parallax="bgx: -100; easing: 1;" data-src="<?php echo e(asset('theme-assets/img/bg/01.jpg')); ?>" id="information" uk-img>
        <div class="uk-overlay-pink uk-position-cover"></div>
        <div class="uk-container uk-position-relative">
            <ul class="uk-subnav uk-subnav-pill uk-why-us-tab uk-flex-center" uk-switcher="animation: uk-animation-fade">           
                <?php if($cost_includes->count() > 0): ?>
                    <li><a href="#" class="green-border">TRIP</a></li>
                <?php endif; ?>
                <?php if($banner->count() > 0): ?>
                    <li><a href="#" class="green-border">Document</a></li>
                <?php endif; ?>
                <?php if($cost_excludes->count() > 0): ?>
                    <li><a href="#" class="green-border">Equipment</a></li>
                <?php endif; ?>
                <?php if($guidelines->count() > 0): ?>
                    <li><a href="#" class="green-border">Guidelines</a></li>
                <?php endif; ?>
            </ul>
            <div class="uk-switcher uk-margin">
                <?php if($cost_includes->count() > 0): ?>
                    <div class="uk-light-bg border uk-padding-small">
                        <ul uk-accordion class="uk-information-ul">
                            <?php $__currentLoopData = $cost_includes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li class="uk-information-li">
                                    <a class="uk-accordion-title uk-accordion-font" href><span class="uk-margin-small-right"><?php echo e($loop->iteration); ?></span><?php echo e($item->title); ?></a>
                                    <div class="uk-accordion-content uk-padding-remove uk-margin-remove">
                                        <?php if($loop->first): ?>
                                            <ul class="uk-includes uk-margin-top uk-margin-bottom">
                                        <?php elseif($loop->iteration == 2): ?>
                                            <ul class="uk-excludes uk-margin-top uk-margin-bottom">
                                        <?php else: ?>
                                            <ul class="uk-highlight uk-margin-top uk-margin-bottom">
                                        <?php endif; ?>
                                            <?php echo $item->content; ?>

                                        </ul>
                                    </div>
                                </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                <?php endif; ?>
                <?php if($banner->count() > 0): ?>
                    <div class="uk-light-bg border uk-padding-small">
                        <ul uk-accordion class="uk-information-ul">
                            <?php $__currentLoopData = $banner; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li class="uk-information-li">
                                    <a class="uk-accordion-title uk-accordion-font" href><span class="uk-margin-small-right"><?php echo e($loop->iteration); ?></span><?php echo e($item->title); ?></a>
                                    <div class="uk-accordion-content uk-padding uk-margin-remove">
                                        <p><?php echo $item->content; ?></p>
                                    </div>
                                </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                <?php endif; ?>
                <?php if($cost_excludes->count() > 0): ?>
                    <div class="uk-light-bg border uk-padding-small">
                        <ul uk-accordion class="uk-information-ul">
                            <?php $__currentLoopData = $cost_excludes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li class="uk-information-li">
                                    <a class="uk-accordion-title uk-accordion-font" href><span class="uk-margin-small-right"><?php echo e($loop->iteration); ?></span><?php echo e($item->title); ?></a>
                                    <div class="uk-accordion-content uk-padding uk-margin-remove">
                                        <p><?php echo $item->content; ?></p>
                                    </div>
                                </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                <?php endif; ?>
                <?php if($guidelines->count() > 0): ?>
                    <div class="uk-light-bg border uk-padding-small">
                        <ul uk-accordion class="uk-information-ul">
                            <?php $__currentLoopData = $guidelines; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li class="uk-information-li">
                                    <a class="uk-accordion-title uk-accordion-font" href><span class="uk-margin-small-right"><?php echo e($loop->iteration); ?></span><?php echo e($item->title); ?></a>
                                    <div class="uk-accordion-content uk-padding uk-margin-remove">
                                        <p><?php echo $item->content; ?></p>
                                    </div>
                                </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                <?php endif; ?>
            </div>
        </div>
        </div>
    </section>
<?php endif; ?>
<!-- cost includes / excludes section end -->

<!-- faq section -->
<section class="uk-section uk-section-overlap-top-light" id="faq"> 
    <div class="uk-container">
        <?php if($faqs->count()>0): ?>
            <div class="uk-font uk-text-center">
                <span class="uk-primary uk-text-uppercase f-27 "><i class="fa-solid fa-person-circle-question uk-margin-small-right" aria-hidden="true"></i>FAQs</span>
            </div>
            <ul class="uk-detail-list uk-light-bg uk-padding uk-responsive-padding border" uk-accordion>
                <?php $__currentLoopData = $faqs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li class="<?php echo e($loop->first ? 'uk-open' : ''); ?>">
                        <a class="uk-accordion-title" style="font-size:16px ; font-weight:600;" href><span class="uk-margin-right"><?php echo e($loop->iteration); ?></span><?php echo e($item->title); ?></a>
                        <div class="uk-accordion-content uk-margin-remove">
                            <p style="font-size:14px;"><?php echo e($item->content); ?></p>
                        </div>
                    </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        <?php endif; ?>
    </div>
</section>
<!-- faq section end -->

<!-- review section start-->
<section class=" uk-primary-bg" id="review">
    <div class="uk-child-width-1-2@m uk-grid-match uk-grid-collapse" uk-grid>
        <div>
            <img src="<?php echo e($data->thumbnail ? asset('uploads/original/'.$data->thumbnail) : asset('theme-assets/img/review.jpeg')); ?>" alt="<?php echo e($data->trip_title); ?>" style="height:100%; object-fit:cover;">
        </div>
        <div class="uk-primary-bg uk-padding uk-padding-left uk-about-text" style="line-break: anywhere;">
            <div class="uk-container uk-flex uk-flex-middle uk-margin-top">
                <div class="uk-width-1-1">
                    <span class="uk-white dotted-line-white"><i class="fa-solid fa-person-hiking uk-margin-small-right"></i>TRAVEL WITH US</span>
                    <h1 class="uk-secondary  uk-margin-remove" style="font-size:2rem;">What people say</h1>
                    <div uk-slider="autoplay : true; autoplay-interval: 6000; pause-on-hover: true; finite: false;">
                        <div class="uk-position-relative uk-visible-toggle" tabindex="-1">
                            <div class="uk-slider-items">
                                <!-- client detail -->
                                <?php $__currentLoopData = $trip_review; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>  
                                    <div class="uk-width-1-1">  
                                        <div class="uk-star-rating">
                                            <?php for($i=0; $i < $value->rating; $i++): ?>
                                                <i class="fa-solid fa-star"></i>
                                            <?php endfor; ?>
                                        </div>
                                        <span class=" uk-contents"> 
                                             
                                             <p  id="text" class="message-container uk-margin-top"> 
                                             <?php echo e($value->message); ?>

                                             </p>
                                             <button id="toggleBtn" class="read-more-btn">Read More </button>
                                              </span>
                                            <div class="uk-flex uk-margin-top">
                                                <img src="<?php echo e($value->image ? asset('uploads/reviews/'.$value->image) : asset('theme-assets/img/user.png')); ?>" class="uk-testimonial-img" alt="">
                                                <div class="uk-title-font">
                                                    <h2 class="uk-secondary"><?php echo e($value->full_name); ?></h2>
                                                    <span class="uk-white"><?php echo e($value->country); ?></span>
                                                       <?php if(trip_count($value->user_id) >= 1): ?>
                                                   <p class="uk-white uk-margin-top"> <?php echo e(trip_count($value->user_id)); ?> trip with Lhakpa Treks</p>
                                                   <?php endif; ?>
                                                </div>
                                            </div>
                                        </p>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <!-- client detail -->
                            </div>
                            <ul class="uk-slider-nav uk-dotnav uk-flex uk-flex-center"></ul>
                        </div>
                    </div>
                    <div class="uk-margin-top uk-text-center uk-child-width-1-2@m uk-grid">
                            <div class="" style="padding: 20px 0;">
                                <a href="#offcanvas-review" class="uk-btn uk-btn-secondary" uk-toggle>Add Review</a>
                            </div>
                            <div class="" style="padding: 20px 0;">
                                <a href="<?php echo e(route('all-review')); ?>" class="uk-btn uk-btn-primary">View All Review</a>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- review section end -->

<!-- new element added -->
<!-- similar trip section  start-->
<section class="uk-section">
    <div class="uk-container">
        <div class="uk-text-center">
            <div class="uk-title-font">
                <span class="uk-secondary "><i class="fa-solid fa-person-hiking uk-margin-small-right"></i>PACKAGES</span>
                <h1 class="uk-primary uk-margin-bottom">Related Trips</h1>
            </div>
        </div>
        <div class="uk-child-width-1-2@m" uk-grid uk-height-match>
            <?php if($related_trips): ?>
                <?php $__currentLoopData = $related_trips; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="activity">
                        <div class=" uk-flex-middle uk-grid-match uk-grid-collapse" uk-height-match uk-grid>
                            <div class="uk-width-2-5@s">
                                <a href="<?php echo e(url('page/' . tripurl($row->uri))); ?>" class="uk-display-block uk-inline-clip uk-transition-toggle uk-link-toggle">
                                    <img src="<?php echo e(!empty($row->thumbnail) ? asset('uploads/original/'.$row->thumbnail) : asset('theme-assets/img/mountain/mountain3.jpeg')); ?>" class="uk-height-1-1 uk-width-1-1 uk-transition-scale-up uk-transition-opaque uk-trip-image" alt="">
                                </a>
                            </div>
                            <div class="uk-width-3-5@s uk-light-bg uk-padding-small uk-trip-list" style="padding: 30px 25px;">
                                <div class="uk-text-title uk-text-title">
                                    <a href="<?php echo e(url('page/' . tripurl($row->uri))); ?>" class="uk-news-title">
                                        <h2 class="line-two"><?php echo e($row->trip_title); ?></h2>
                                    </a>
                                </div>
                                <div class="uk-star-rating">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                                <div class="uk-flex uk-flex-between uk-margin-small-top uk-margin-small-bottom">
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
                                            <p class="uk-trip-description uk-margin-remove"><?php echo e(($row->trip_grade)); ?></p>
                                        </div>
                                    </div>
                                </div>
                                <p class="uk-margin-remove two-line" style="line-height: 20px; font-size: 15px;"><?php echo e($row->sub_title); ?></p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
        </div>
    </div>
</section>
<!-- similar trip section  end-->
<!-- new element added -->


 
   
 
<!-- review form modal start -->
 
<div id="offcanvas-review" uk-modal> 
    <div class="uk-modal-dialog uk-modal-body uk-padding-remove-top uk-padding-remove-left uk-padding-remove-right uk-padding-bottom">
        <div class="uk-padding uk-padding-remove-bottom">
            <h3 class="uk-modal-title uk-text-center uk-white uk-margin-remove uk-primary-bg border">write a review</h3>
            <button class="uk-modal-close-default" type="button" uk-close></button>
            <form class="uk-contact-form" action="<?php echo e(route('review.create')); ?>" method="post" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <input type="hidden" name="trip_id" value="<?php echo e($data->id); ?>">
                <div class=" uk-child-width-1-2@m uk-grid">
                    <div class="uk-margin-small-top">
                        <label class="uk-form-label uk-text-bold" for="full_name">Full Name</label>
                        <div class="uk-form-controls">
                            <input class="uk-input" id="fullname" name="full_name" value="<?php echo e(Auth::check() ? Auth::user()->name : ''); ?>" required type="text">  
                        </div>
                    </div>
                    <div class="uk-margin-small-top">
                        <label class="uk-form-label uk-text-bold" for="email">Email</label>
                        <div class="uk-form-controls">
                            <input class="uk-input" id="email" name="email"  value="<?php echo e(Auth::check() ? Auth::user()->email : ''); ?>" required type="email">
                        </div>
                    </div>
                    <div class="uk-margin-small-top">
                        <label class="uk-form-label uk-text-bold" for="image">Image</label>
                        <div class="uk-form-controls">
                            <input class="uk-input" id="image" name="image"  type="file" style="padding: 6px;">
                        </div>
                    </div>
                    <div class="uk-margin-small-top">
                        <label class="uk-form-label uk-text-bold" for="">Rating</label>
                        <div class="star-rating">
                            <input type="radio" id="5-stars" name="rating" value="5">
                            <label for="5-stars" class="star">&#9733;</label>
                            <input type="radio" id="4-stars" name="rating" value="4">
                            <label for="4-stars" class="star">&#9733;</label>
                            <input type="radio" id="3-stars" name="rating" value="3">
                            <label for="3-stars" class="star">&#9733;</label>
                            <input type="radio" id="2-stars" name="rating" value="2">
                            <label for="2-stars" class="star">&#9733;</label>
                            <input type="radio" id="1-star" name="rating" value="1">
                            <label for="1-star" class="star">&#9733;</label>
                        </div>
                    </div>
                </div>
                <div class="uk-margin-small-top">
                    <label class="uk-form-label uk-text-bold" for="country">Country</label>
                    <div class="uk-form-controls">
                        <select name="country" class="uk-select border" id="country" required>
                                <?php echo $__env->make('themes.default.common.country', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            </select>
                    </div>
                </div>
                <div class="uk-margin-small-top">
                    <label class="uk-form-label uk-text-bold" for="message">Message</label>
                    <div class="uk-form-controls">
                        <textarea name="message" class="uk-textarea" rows="3" required></textarea>
                    </div>
                </div>
                <div class="uk-margin-top uk-text-center">
                    <button type="submit" class="uk-btn uk-btn-secondary">Submit</button>
                </div>
            </form> 
        </div>
    </div>
</div>
<!-- review form modal end -->

<!-- dates and prices modal start -->
<div id="offcanvas-usage" style="width:100%" uk-offcanvas>
    <div class="uk-offcanvas-bar uk-padding-remove uk-white-bg">
        <button class="uk-offcanvas-close" type="button" uk-close></button>
        <div class=" uk-padding uk-res-padding ">
            <h3 class="text-secondary uk-margin-remove uk-text-center uk-primary-bg border">
                Dates & Prices
            </h3>
        </div>
        <div class="uk-padding uk-res-padding uk-padding-remove-top">
            
            <div class="uk-container uk-padding-remove uk-black uk-margin-remove">
                <!-- Table Header -->
                <div class=" uk-grid-small uk-child-width-1-6 uk-text-bold uk-background-muted uk-margin-top uk-margin-remove-left uk-padding-small uk-visible@m" uk-grid>
                    <div class="uk-padding-remove">Dates</div>
                    <div class="uk-padding-remove">With Meal</div>
                    <div class="uk-padding-remove">Without Meal</div>
                    <div class="uk-padding-remove">Status</div>
                    <div class="uk-padding-remove"></div>
                    <div class="uk-padding-remove"></div>
                </div>
                <!-- Table Rows -->
                <ul class=" uk-margin-remove uk-padding-remove " style="list-style: none;">
                    <?php $__currentLoopData = $schedules; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li class="uk-price-li">
                            <div class="uk-grid-small uk-child-width-expand@m uk-child-width-1-1 uk-flex-middle uk-border-bottom" uk-grid>
                                <div class="uk-black uk-text-bold uk-secondary">
                                    <span class="uk-block uk-hidden@m">Dates: </span><?php echo e(date('d M, Y', strtotime($item->start_date))); ?> – <br class="uk-visible@s"> <?php echo e(date('d M, Y', strtotime($item->end_date))); ?>

                                </div>
                                <div class="uk-black uk-flex">
                                    <span class="uk-block uk-hidden@m">With Meal: </span>
                                    <div class="custom-flex">
                                        <?php if($item->old_price1): ?>
                                            <span style="color: #b50000; text-decoration: line-through; margin-right:5px;">US $<?php echo e($item->old_price1); ?></span>
                                        <?php endif; ?>
                                        
                                        <?php if($item->price): ?>
                                            <span>US $<?php echo e($item->price); ?></span>
                                        <?php else: ?>
                                            <span>Unavailable</span>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="uk-black uk-flex">
                                    <span class="uk-block uk-hidden@m">Without Meal: </span>
                                    <div class="custom-flex">
                                        <?php if($item->old_price2): ?>
                                            <span style="color: #b50000; text-decoration: line-through; margin-right:5px;">US $<?php echo e($item->old_price2); ?></span>
                                        <?php endif; ?>
                                        <?php if($item->group_size): ?>
                                            <span>US $<?php echo e($item->group_size); ?></span>
                                        <?php else: ?>
                                            <span>Unavailable</span>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <?php if($item->availability === 'AVAILABLE'): ?>
                                    <div class="uk-text-success">
                                <?php elseif($item->availability === 'LIMITED'): ?>
                                    <div class="uk-text-warning">
                                <?php elseif($item->availability === 'CLOSED'): ?>
                                    <div class="uk-text-danger">
                                <?php else: ?>
                                    <div class="uk-primary">
                                <?php endif; ?>
                                    <span class="uk-block uk-hidden@m">Status: </span><?php echo e($item->availability); ?>

                                </div>
                                <div class="uk-black">
                                    <?php if($item->availability != 'CLOSED'): ?>
                                    <!-- <a href="book.php" class="uk-btn uk-btn-secondary">Book Now</a> -->
                                    <form action="<?php echo e(route('page.booking', $data->uri)); ?>" method="post" id="form-<?php echo e($item->id); ?>">
                                        <?php echo csrf_field(); ?>
                                        <input type="hidden" name="schedule_id" id="schedule_id<?php echo e($item->id); ?>" value="<?php echo e($item->id); ?>">
                                        <button type="button" onclick="document.getElementById('form-<?php echo e($item->id); ?>').submit();" class="uk-btn uk-btn-secondary">Book Now</button>
                                    </form>
                                    <?php endif; ?>
                                </div>
                                <div class="trigger" data-target="#sidebar<?php echo e($item->id); ?>">
                                    <span class="pointer">View Info</span>
                                </div>
                            </div>
                            <?php if($item->remarks ): ?>
                                <div class="sidebar" id="sidebar<?php echo e($item->id); ?>" hidden>
                                    <h3 class="uk-secondary uk-margin-top">Highlights at a Glance</h3>
                                    <?php echo $item->remarks; ?>

                                </div>
                            <?php endif; ?>
                        </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
            <div class="uk-margin-top">
                <h3 class="uk-primary"><?php echo e($setting->text3_title); ?></h3>
                <div class="uk-light-bg uk-padding-small border" style="color:black;">
                    <?php echo $setting->text3_sub_title; ?>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- dates and prices modal end -->


<div class="uk-position-bottom uk-hidden@m ">
    <div class="uk-mobile-menu uk-padding-remove uk-sticky uk-active uk-sticky-below uk-sticky-fixed"
        uk-sticky="start:0; end: #footer;  animation: uk-animation-slide-top; position: bottom;"
        style="position: fixed; top: 730px; width: 390px;">
        <div class="uk-container uk-container-small">
            <ul class="uk-flex  uk-flex-center uk-flex-middle uk-flex-around"> 
                <li class="uk-padding-small">

                    <a href="#offcanvas-usage" uk-toggle class="uk-small-menu">
                        <span uk-icon="icon: calendar; "></span>
                        <p>Date and Prices </p>
                    </a>
                </li>
                <li class=" uk-padding-small">
                    <a href="#offcanvas-usage" class="uk-small-menu">
                        <span uk-icon="icon: heart; "></span>
                        <p>My Favourite </p>
                    </a>
                </li>


            </ul>
        </div>
    </div>
</div>

<!-- inquiry form modal start-->
<div id="modal-inquiry" class="uk-flex-top" uk-modal>
    <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical">
        <h3 class="uk-modal-title uk-text-center uk-white uk-margin-remove  uk-primary-bg border">Have Questions?</h3>
        <h3 class="uk-text-center uk-margin-remove"><?php echo e($data->trip_title); ?></h3>
        <button class="uk-modal-close-default" type="button" uk-close></button>

        <form class="uk-contact-form uk-margin-top" action="<?php echo e(route('inquiry')); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <div class=" uk-child-width-1-2@m uk-grid">
                <input type="hidden" id="g_recaptcha_response" name="g_recaptcha_response"/>
                <input type="hidden" name="trip_id" value="<?php echo e($data->id); ?>" />
                <div class="uk-margin-small-top">
                    <label class="uk-form-label uk-text-bold" for="name">Full Name*</label>
                    <div class="uk-form-controls">
                        <input class="uk-input" id="name" name="name" required type="text">
                    </div>
                </div>
                <div class="uk-margin-small-top">
                    <label class="uk-form-label uk-text-bold" for="emailid">Email*</label>
                    <div class="uk-form-controls">
                        <input class="uk-input" id="emailid" name="emailid" required type="email">
                    </div>
                </div>
         
            <!-- new element added -->
                <div class="uk-margin-small-top">
                    <label class="uk-form-label uk-text-bold" for="country">Country*</label>
                    <select name="country" class="uk-select" id="country" required>
                        <?php echo $__env->make('themes.default.common.country', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </select>
                </div>
                <div class="uk-margin-small-top">
                    <label class="uk-form-label uk-text-bold" for="number">Contact*</label>
                    <div class="uk-form-controls">
                        <input class="uk-input" id="contact" name="contact" required type="number">
                    </div>
                </div>
            </div>
                               <?php if($data->latest_info): ?>
                <!-- new element added -->
                <div class="uk-flex uk-flex-middle uk-margin-top">
                    <p class="uk-margin-remove">To know more about our latest trip information:</p>
                    <button class="uk-button uk-button-default uk-info-button" type="button" uk-toggle="target: .toggle">View Info</button>
                </div>
                <p class="toggle"></p>
                <div class="toggle" hidden>
                    <h3 class="uk-secondary uk-margin-top">More Information</h3>
                    <div class=" uk-padding uk-light-bg border uk-margin-remove "><?php echo $data->latest_info; ?></div>
                </div>
            <?php endif; ?>
            <div class="uk-margin-small-top">
                <label class="uk-form-label uk-text-bold" for="contact">Message</label>
                <div class="uk-form-controls">
                    <textarea name="message" class="uk-textarea" rows="3" required></textarea>
                </div>
            </div>
            <div class="uk-margin-top uk-text-center">
                
                <button type="submit" class="uk-btn uk-btn-secondary">Submit Now <span uk-icon="chevron-right"></span></button>
            </div>
        </form>

    </div>
</div>
<!-- inquiry form modal end -->

<!-- Customize form modal start-->
<div id="modal-customize" class="uk-flex-top" uk-modal>
    <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical">
        <h3 class="uk-modal-title uk-text-center uk-white uk-margin-remove  uk-primary-bg border">Customize Trip</h3>
        <h3 class="uk-text-center uk-margin-remove"><?php echo e($data->trip_title); ?></h3>
        <button class="uk-modal-close-default" type="button" uk-close></button>
        <form class="uk-contact-form uk-margin-top" action="<?php echo e(route('customize-trip.post')); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <input type="hidden" id="g_recaptcha_response2" name="g_recaptcha_response"/>
            <h3 class="uk-secondary uk-margin-remove">Trip Information</h3>
            <div class=" uk-child-width-1-2@m uk-grid">
                <div class="uk-margin-small-top">
                    <label class="uk-form-label uk-text-bold" for="pname">Package Name*</label>
                    <div class="uk-form-controls">
                        <select class="uk-select" aria-label="Select" name="trip_id" id="trip_id" required>
                            <option value="<?php echo e($data->id); ?>"><?php echo e($data->trip_title); ?></option>
                        </select>
                    </div>
                </div>
                <div class="uk-margin-small-top">
                    <label class="uk-form-label uk-text-bold" for="people">Number of People*</label>
                    <div class="uk-form-controls">
                        <input class="uk-input" id="people" name="people" required type="number">
                    </div>
                </div>
                <div class="uk-margin-small-top">
                    <label class="uk-form-label uk-text-bold" for="days">Duration (In Days)*</label>
                    <div class="uk-form-controls">
                        <input class="uk-input" id="days" name="days" required type="number" placeholder="In Days">
                    </div>
                </div>
                <div class="uk-margin-small-top">
                    <label class="uk-form-label uk-text-bold" for="date">Trip Start Date*</label>
                    <div class="uk-form-controls">
                        <input class="uk-input" id="date" name="date" required type="date">
                    </div>
                </div>
            </div>
            <?php if($data->latest_info): ?>
                <!-- new element added -->
                <div class="uk-flex uk-flex-middle uk-margin-top">
                    <p class="uk-margin-remove">To know more about our latest trip information:</p>
                    <button class="uk-button uk-button-default uk-info-button" type="button" uk-toggle="target: .toggle">View Info</button>
                </div>
                <p class="toggle"></p>
                <div class="toggle" hidden>
                    <h3 class="uk-secondary uk-margin-top">More Information</h3>
                    <div class=" uk-padding uk-light-bg border uk-margin-remove "><?php echo $data->latest_info; ?></div>
                </div>
            <?php endif; ?>
            <!-- new element added -->
            <hr>
            <h3 class="uk-secondary uk-margin-remove">Personal Information</h3>
            <div class=" uk-child-width-1-2@m uk-grid">
                <div class="uk-margin-small-top">
                    <label class="uk-form-label uk-text-bold" for="fname">Full Name*</label>
                    <div class="uk-form-controls">
                        <input class="uk-input" id="fname" name="fname" required type="text">
                    </div>
                </div>
                <div class="uk-margin-small-top">
                    <label class="uk-form-label uk-text-bold" for="email">Email*</label>
                    <div class="uk-form-controls">
                        <input class="uk-input" id="email" name="email" required type="email">
                    </div>
                </div>
                <div class="uk-margin-small-top">
                    <label class="uk-form-label uk-text-bold" for="fcountry">Country*</label>
                    <select name="country" class="uk-select" id="country" required>
                        <?php echo $__env->make('themes.default.common.country', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </select>
                </div>
                <div class="uk-margin-small-top">
                    <label class="uk-form-label uk-text-bold" for="phone">Contact*</label>
                    <div class="uk-form-controls">
                        <input class="uk-input" id="phone" name="phone" required type="number">
                    </div>
                </div>
            </div>
            <div class="uk-margin-small-top">
                <label class="uk-form-label uk-text-bold" for="requirement">Special Requirement</label>
                <div class="uk-form-controls">
                    <textarea name="message" class="uk-textarea" rows="3" required></textarea>
                </div>
            </div>
            <div class="uk-margin-top uk-text-center">
                
                <button type="submit" class="uk-btn uk-btn-secondary">Submit Now <span uk-icon="chevron-right"></span></button>
            </div>
        </form>

    </div>
</div>
<!--<div class="uk-flex fixed-date uk-hidden@m">  -->
<!--    <a href="#offcanvas-usage" class=" uk-extra uk-secondary-bg uk-book-btn border uk-margin-small-top" uk-toggle><span uk-icon="icon: calendar; ratio: 1.5"  ></span></a>-->
<!--</div> -->
<script>
  // Custom smooth scrolling with offset
  document.querySelectorAll('.sidenav a[href^="#"]').forEach(anchor => {
      anchor.addEventListener("click", function(event) {
          event.preventDefault(); 

          const target = document.querySelector(this.getAttribute("href"));

          if (target) {
              window.scrollTo({
                  top: target.offsetTop - 80,
                 
              });
          }
      });
  });

  // UIkit scrollspyNav only for active state — no scrolling
  spyNav = UIkit.scrollspyNav(".sidenav", {
      closest: "a", // or "li" depending on where you want .uk-active
      scroll: false,
    //   offset: 120, // same as your scroll offset for accuracy
      cls: "uk-active"
  });
</script>
<!-- inquiry form modal end -->
 <script>
    const text = document.getElementById('text');
    const btn = document.getElementById('toggleBtn');

    btn.addEventListener('click', () => {
      text.classList.toggle('expanded');
      btn.textContent = text.classList.contains('expanded') ? 'Read Less' : 'Read More';
    });
  </script>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('scripts'); ?>
    <script>
        window.isAuthenticated = <?php echo json_encode(Auth::check(), 15, 512) ?>;
    
        document.addEventListener("DOMContentLoaded", function () {
            let today = new Date().toISOString().split("T")[0]; 
            document.getElementById("date").setAttribute("min", today);
        });
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function () {
            $(document).on('click', '#wish-button', function (e) {
                e.preventDefault();

                if (!window.isAuthenticated) {
                    let tripUri = "<?php echo e($data->uri); ?>"; // current trip identifier
                
                    $.post("<?php echo e(route('save.intended.trip')); ?>", {
                        _token: $('meta[name="csrf-token"]').attr('content'),
                        uri: tripUri
                    }).always(function () {
                        window.location.href = "<?php echo e(route('login.form')); ?>";
                    });
                
                    return;
                }
                // alert('ok'); // Debugging: Check if button click is detected

                let itemId = $(this).data('id'); // Get the item ID from the button
                let url = "<?php echo e(route('add-wishlist', ':id')); ?>".replace(':id', itemId);

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                    type: 'GET',
                    url: url,
                    contentType: false,
                    cache: false,
                    processData: false,
                    success: function (data) {
                        if (data.status === 'success') {
                            toastr.success(data.message);
                        } else {
                            toastr.error(data.message);
                        }
                        $.each(data.errors, function (key, value) {
                            toastr.error(value);
                        });
                    },
                    error: function (xhr) {
                        alert("An error occurred.\nError code: " + xhr.statusText);
                    }
                });
            });
            
            //for pdf download
            $(document).on('click', '.download-pdf-btn', function (e) {
                if (!window.isAuthenticated) {
                    e.preventDefault();
                    $.post("<?php echo e(route('save.intended.trip')); ?>", {
                        uri: "<?php echo e($data->uri); ?>",
                        _token: "<?php echo e(csrf_token()); ?>"
                    }, function() {
                        window.location.href = "<?php echo e(route('login.form')); ?>";
                    });
                }
            });
        });
    </script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('themes.default.common.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/lhakpa/public_html/resources/views/themes/default/tripdetail.blade.php ENDPATH**/ ?>