
<?php $__env->startSection('title','Expedition List'); ?>
<?php $__env->startSection('content'); ?>

<section class=" uk-cover-container uk-position-relative uk-flex uk-flex-middle uk-background-norepeat uk-background-cover uk-background-top-center uk-background-fixed" uk-height-viewport data-src="<?php echo e($item->banner ? asset('uploads/banners/'.$item->banner) : asset('theme-assets/img/mountain/mountain6.jpeg')); ?>" alt="" uk-img>
    <div class="uk-container uk-width-1-1 pt-150  uk-responsive-bottom">
        <div class="uk-flex uk-flex-middle uk-grid-collapse uk-grid-match" uk-grid uk-height-match="target: .uk-same-height">
            <div class="uk-width-3-4@m" id="container">
                <div id="originalDiv">
                    <ul class="uk-breadcrumb uk-margin-remove-bottom">
                        <li><a href="<?php echo e(url('/')); ?>" class="uk-white">Home</a></li>
                        <li><span class="uk-secondary"><?php echo e(ucfirst($item->activity_parent)); ?></span></li>
                    </ul>
                    <div class="uk-sub-banner-font">
                        <h1><?php echo e($item->title); ?></h1>
                    </div>
                    <!-- when video is availabe otherwise hiddeb -->
                    <div class="uk-margin-bottom">
                        <?php if($item->category_video): ?>
                            <span class="uk-video">PLAY -VIDEO</span>
                            <a class=" uk-margin-small-left bg-secondary uk-play-button" href="#modal-media-youtube" uk-toggle><i class="fa-solid fa-play"></i></a>
                        <?php endif; ?>
                        <div id="modal-media-youtube" class="uk-flex-top" uk-modal>
                            <div class="uk-modal-dialog uk-width-auto uk-margin-auto-vertical">
                                <button class="uk-modal-close-outside" type="button" uk-close></button>
                                <iframe src="https://www.youtube-nocookie.com/embed/<?php echo e($item->category_video); ?>" width="1920" height="1080" loading="lazy" uk-video uk-responsive></iframe>
                            </div>
                        </div>
                    </div>
                    <!--  -->
                </div>
                <!-- photos section start -->
                <div id="newDiv1" class="hidden uk-grey-bg uk-same-height">
                    <div class="uk-padding uk-list-modal uk-inline uk-width-1-1">
                        <div class="uk-position-right">
                            <button id="closeBtn1"><i class="fa-solid fa-xmark"></i></button>
                        </div>
                        <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slider>
                            <div class="uk-slider-items uk-child-width-1-1 uk-child-width-1-2@m uk-grid" uk-lightbox="animation: slide">
                                <?php $__currentLoopData = $dataAll; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div>
                                        <a class="uk-inline uk-media-270 uk-width-1-1" href="<?php echo e(!empty($row->thumbnail) ? asset('uploads/original/'.$row->thumbnail) : asset('theme-assets/img/mountain/mountain4.jpeg')); ?>">
                                            <img src="<?php echo e(!empty($row->thumbnail) ? asset('uploads/original/'.$row->thumbnail) : asset('theme-assets/img/mountain/mountain4.jpeg')); ?>" class="border" alt="abc">
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

                <!-- information section start -->
                <div id="newDiv2" class="hidden uk-grey-bg uk-same-height">
                    <div class="uk-width-1-1 uk-list-modal uk-inline">
                        <div class="uk-position-right">
                            <button id="closeBtn2"><i class="fa-solid fa-xmark"></i></button>
                        </div>
                        <div class="uk-padding responsive-padding">
                            <h2 class="uk-secondary uk-margin-small-top"><?php echo e($item->title); ?></h2>
                            <hr>
                            <div class="overflow-content">
                                <?php echo $item->content; ?>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- information section end -->
            </div>
            <div class="uk-width-1-4@m uk-same-height ">
                <div class="uk-grey-bg  uk-padding-dicovery  uk-pattern-bg responsive-padding">
                    <div class="uk-visible@m">
                        <h2 class="uk-white uk-text-uppercase">Discovery</h2>
                        <hr style="border-color: var(--secondary);">
                    </div>
                    <p class="uk-white uk-text-justify line-five">
                        <?php echo e($item->excerpt); ?>

                    </p>
                    <div class="uk-margin uk-text-center">
                        <!-- this button will open the photo section -->
                        <button id="changeBtn1" class="uk-buttons">
                            <span class="uk-secondary uk-margin-right"><i class="fa-solid fa-photo-film uk-margin-small-right"></i> Photos</span>
                        </button>
                    </div>
                    <div class="uk-flex uk-text-center">
                        <!-- this button will open the information section -->
                        <button class="uk-button uk-padding-remove uk-btn uk-btn-secondary uk-width-1-1" id="changeBtn2">Know More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- list section start -->
<?php if($data->isNotEmpty()): ?>
    <section class="uk-section">
        <div class="uk-container">
            <div uk-grid>
                <?php echo $__env->make('themes.default.common.sidebar-search', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                
                <div class="uk-width-3-4@m" id="tripsearchResult">
                    <!--  -->
                    <div class="uk-grid">
                    
                    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="uk-width-1-1 ">
                        <div class="uk-margin-bottom">
                            <div class=" uk-flex-middle uk-grid-match uk-grid-collapse" uk-height-match uk-grid>
                                <div class="uk-width-2-5@s">
                                    <div class="uk-display-block uk-inline-clip uk-transition-toggle uk-link-toggle ur-media-270r">                          
                                        <img src="<?php echo e(!empty($row->thumbnail) ? asset('uploads/original/'.$row->thumbnail) : asset('theme-assets/img/mountain/mountain9.jpeg')); ?>" class="uk-height-1-1 uk-transition-scale-up uk-transition-opaque" alt="<?php echo e($row->trip_title); ?>">
                                    </div>
                                </div>
                                <div class="uk-width-3-5@s uk-light-bg uk-padding-small uk-trip-list uk-responsive-size"  style="padding: 30px 25px;">
                                    <div class="uk-text-title uk-grid">
                                        <div class="uk-width-2-3@m">
                                            <div class="uk-star-rating">
                                                <?php for($i = 0 ; $i < $row->rating ; $i++): ?>
                                                    <i class="fa-solid fa-star"></i>
                                                <?php endfor; ?>
                                            </div>
                                            <a href="<?php echo e(url('page/' . tripurl($row->uri))); ?>" class="uk-news-title">
                                                <h2  class="two-line"><?php echo e($row->trip_title); ?></h2>
                                            </a>
                                        </div>
                                        <div class="uk-width-1-3@m">
                                            <?php if($row->price): ?>
                                            <h2 class="uk-margin-remove uk-text-left uk-text-right@m" style="font-size:20px;">US $<?php echo e($row->price); ?></h2>
                                            <?php endif; ?>
                                            <?php if($row->price_euro): ?>
                                            <h3 class="uk-margin-remove uk-secondary uk-text-left uk-text-right@m" style="font-size:20px;"> € <?php echo e($row->price_euro); ?></h3>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <?php if($row->flight == 1): ?>
                                    <div class="uk-margin-small-bottom">
                                        <p class="uk-margin-remove uk-text-right uk-text-uppercase " style="font-size:15px;"> <i class="fa-solid fa-plane-up uk-margin-small-right"></i> <b>Including flight</b></p>
                                    </div>
                                    <?php endif; ?>
                                    <p class="uk-margin-remove line-three">
                                        <?php echo e($row->sub_title); ?>

                                    </p>
                                    <hr style="border-color: var(--grey); margin-bottom: 0;">
                                    <div class="uk-grid-small uk-grid uk-margin-small-top uk-margin-small-bottom uk-flex" style="align-items:baseline;" >
                                        <div class="uk-width-expand@l uk-flex uk-flex-between" >
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
                                        <div  class="uk-width-auto@l uk-flex uk-flex-between" style="align-items: baseline; margin-top:11px;">
                                             <div>
                                            
                                                <button class="uk-wish-button"id="wish-button" data-id="<?php echo e($row->id); ?>"><i class="fa-solid fa-heart" aria-hidden="true"></i></button>
                                            </div>
                                            <div >
                                                <a href="<?php echo e(url('page/' . tripurl($row->uri))); ?>" class="uk-btn uk-btn-secondary">Know more</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                    <!--paginate  -->
                    <?php echo $data->links('themes.default.common.pagination'); ?>

                </div>
            </div>
        </div>
    </section>
<?php else: ?>
    <div class="uk-section uk-text-center"><?php echo e(ucfirst($item->title)); ?> Coming Soon... </div>
<?php endif; ?>
<!-- list section end -->
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function () {
            $(document).on('click', '#wish-button', function (e) {
                e.preventDefault();

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
        });
    </script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('themes.default.common.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/lhakpa/public_html/resources/views/themes/default/expedition.blade.php ENDPATH**/ ?>