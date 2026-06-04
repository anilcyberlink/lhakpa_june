
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
    <div>
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

<section class="uk-section">
    <div class="uk-container">
        <h2 class="uk-primary uk-margin-remove">PLAN YOUR TRIP</h2>
        <span class="dotted-line-black"></span>
        <div class="uk-grid">
            <div class="uk-width-3-4@m">
                <div>
                    <form class="uk-contact-form uk-margin-top" action="<?php echo e(route('customize-trip.post')); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <input type="hidden" id="g_recaptcha_response" name="g_recaptcha_response"/>
                        <h3 class="uk-secondary uk-margin-remove">Trip Information</h3>
                        <div class=" uk-child-width-1-2@m uk-grid">
                            <div class="uk-margin-small-top">
                                <label class="uk-form-label uk-text-bold" for="pname">Package Name*</label>
                                <select class="uk-select" aria-label="Select" name="trip_id" id="trip_id" required>
                                    <option value="" selected disabled>Select Trip</option>
                                    <?php $__currentLoopData = $trips; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $trip): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($trip->id); ?>"><?php echo e($trip->trip_title); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                            <div class="uk-margin-small-top">
                                <label class="uk-form-label uk-text-bold" for="people">Number of People*</label>
                                <div class="uk-form-controls">
                                    <input class="uk-input" id="people" name="people" required type="number">
                                </div>
                            </div>
                            <div class="uk-margin-small-top">
                                <label class="uk-form-label uk-text-bold" for="days">Duration*</label>
                                <div class="uk-form-controls">
                                    <input class="uk-input" id="days" name="days" required type="number">
                                </div>
                            </div>
                            <div class="uk-margin-small-top">
                                <label class="uk-form-label uk-text-bold" for="date">Trip Start Date*</label>
                                <div class="uk-form-controls">
                                    <input class="uk-input" id="date" name="date" required type="date">
                                </div>
                            </div>
                        </div>
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
                                <label class="uk-form-label uk-text-bold" for="emails">Email*</label>
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
                            <label class="uk-form-label uk-text-bold" for="contact">Special Requirement</label>
                            <div class="uk-form-controls">
                                <textarea name="message" class="uk-textarea" rows="3"></textarea>
                            </div>
                        </div>
                        <div class="uk-margin-top uk-text-center">
                            
                            <button type="submit" class="uk-btn uk-btn-secondary">Submit Now <span uk-icon="chevron-right"></span></button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="uk-width-1-4@m">
                <div class="uk-light-bg uk-title-font uk-padding-small border uk-margin-top">
                    <h3 class="uk-primary uk-margin-remove">VISIT US</h3>
                    <div class="uk-flex uk-flex-middle  uk-margin-small-top">
                        <i class="fa-solid fa-location-dot uk-secondary uk-margin-small-right f-20"></i>
                        <div>
                            <p class="text-white fw-500 uk-margin-remove f-14">ADDRESS: <br>
                                <?php echo e($setting->address); ?></p>
                        </div>
                    </div>
                    <div class="uk-flex uk-flex-middle uk-margin-small-top">
                        <i class="fa-solid fa-envelope uk-secondary uk-margin-small-right f-20"></i>
                        <div>
                            <p class="text-white fw-500 uk-margin-remove f-14">EMAIL US: <br>
                                <?php echo e($setting->email_primary); ?></p>
                        </div>
                    </div>
                    <div class="uk-flex uk-flex-middle  uk-margin-small-top">
                        <i class="fa-solid fa-phone uk-secondary uk-margin-small-right f-20"></i>
                        <div>
                            <p class="text-white fw-500 uk-margin-remove f-14">PHONE: <br>
                            <?php echo e($setting->phone); ?></p>
                        </div>
                    </div>
                </div>
                <?php
                    $contactUs = 'contact-us';
                ?>
                <div class="uk-secondary-bg uk-book-btn border uk-margin-small-top">
                    <a href="<?php echo e(route('page.posttype_detail',$contactUs)); ?>">Contact us</a>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        let today = new Date().toISOString().split("T")[0]; 
        document.getElementById("date").setAttribute("min", today);
    });
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('themes.default.common.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/lhakpa/public_html/resources/views/themes/default/posttypeTemplate-plan.blade.php ENDPATH**/ ?>