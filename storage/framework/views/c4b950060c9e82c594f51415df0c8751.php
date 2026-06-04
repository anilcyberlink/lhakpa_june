
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

<section class="uk-section uk-section-small uk-pattern-bg uk-grey-bg">
    <div class="uk-container">
        <div class="uk-title-font ">
            <div>
                <div class="uk-child-width-1-1 uk-child-width-1-3@m uk-child-width-1-4@l uk-grid uk-flex uk-flex-middle">
                    <div class="uk-margin-small-bottom">
                        <p class="uk-white f-20 uk-margin-remove"><i class="fa-solid fa-location-dot uk-secondary uk-margin-small-right"></i>Address: </p>
                        <p class="uk-white uk-margin-remove uk-text-left"><?php echo e($setting->address); ?></p>
                    </div>
                    <div  class="uk-margin-small-bottom">
                        <p class="uk-white f-20 uk-margin-remove"><i class="fa-solid fa-phone uk uk-secondary uk-margin-small-right"></i>Phone: </p>
                        <p class="uk-white uk-margin-remove uk-text-left"><?php echo e($setting->phone); ?></p>
                    </div>
                    <div  class="uk-margin-small-bottom">
                        <p class="uk-white f-20 uk-margin-remove"><i class="fa-solid fa-envelope uk-secondary uk-margin-small-right"></i>Email: </p>
                        <p class="uk-white uk-margin-remove uk-text-left"><?php echo e($setting->email_primary); ?></p>
                    </div>
                    <div  class="uk-margin-small-bottom">
                        <p class="uk-white">FOLLOW US HERE: </p>
                        <div class="uk-footer-icon   uk-margin-bottom">
                            <a href="<?php echo e($setting->youtube_link); ?>" class="uk-icon-button uk-margin-small-right"><i class="fa-brands fa-youtube"></i></a>
                            <a href="<?php echo e($setting->facebook_link); ?>" class="uk-icon-button  uk-margin-small-right"><i class="fa-brands fa-facebook-f"></i></a>
                            <a href="<?php echo e($setting->twitter_link); ?>" class="uk-icon-button"><i class="fa-brands fa-twitter"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="uk-section">
    <div class="uk-container">
        <div class="uk-grid uk-grid-collapse uk-grid-match uk-margin-top uk-child-width-1-2@m">
            <div class="uk-margin-top">
                <?php echo $setting->google_map2; ?>

                <!--<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d44668.49294806555!2d85.3261328!3d27.708960349999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb198a307baabf%3A0xb5137c1bf18db1ea!2sKathmandu%2044600!5e1!3m2!1sen!2snp!4v1733741373198!5m2!1sen!2snp" width="600" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>-->
            </div>
            <div class="uk-primary-bg uk-pattern-bg uk-padding uk-margin-top">
                <form action="<?php echo e(route('contact')); ?>" method="post" class="uk-grid-small" uk-grid>
                    <?php echo csrf_field(); ?>
                    <input type="hidden" id="g_recaptcha_response" name="g_recaptcha_response"/>
                    <div class="uk-width-1-2@s">
                        <label class="uk-form-label uk-white" for="Name">Full Name</label>
                        <input class="uk-input border" name="full_name" type="text" aria-label="Name" required>
                    </div>
                    <div class="uk-width-1-2@s">
                        <label class="uk-form-label uk-white" for="Contact">Contact</label>
                        <input class="uk-input border" name="number" type="number" aria-label="Contact" required>
                    </div>
                    <div class="uk-width-1-2@s">
                        <label class="uk-form-label uk-white" for="Email">Email</label>
                        <input class="uk-input border" name="email" type="email" aria-label="Email" required>
                    </div>
                    <div class="uk-width-1-2@s">
                        <label class="uk-form-label uk-white" for="country">Country</label>
                        <select class="uk-input border" name="country" id="country" required>
                            <?php echo $__env->make('themes.default.common.country', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        </select>
                    </div>
                    <div class="uk-width-1-2@s">
                        <label class="uk-form-label uk-white" for="expert">Experts</label>
                        <select class="uk-input border" name="expert" id="expert">
                            <option value="" selected>Select Expert</option>
                            <?php $__currentLoopData = $experts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $expert): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($expert->id); ?>"><?php echo e($expert->name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                    <div class="uk-width-1-1">
                        <textarea class="uk-textarea border" rows="5" name="message" placeholder="Message" aria-label="Message"></textarea>
                    </div>
                    <div class="uk-width-1-1 uk-text-center uk-margin-top">
                        <button type="submit" class="uk-btn uk-btn-secondary ">SUBMIT</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<?php if($experts): ?>
    <section class="uk-section uk-padding-remove-top">
        <div class="uk-container">
            <div class="uk-grid-collapse uk-grid">
                <div class="uk-width-1-4@m uk-first-column">
                    <div class="uk-title-font">
                        <span class="uk-secondary dotted-line-black "><i class="fa-solid fa-person-hiking uk-margin-small-right"></i>ENQUIRY</span>
                        <h1 class="uk-primary  uk-margin-bottom">CONTACT OUR TRAVEL EXPERTS</h1>
                        
                    </div>
                </div>
                <div class="uk-width-3-4@m">
                    <div class="uk-child-width-1-2@m uk-grid">
                        <?php $__currentLoopData = $experts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $expert): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="">
                                <h1 class="uk-secondary  uk-margin-bottom"></h1>
                                <div class="uk-flex">
                                    <div>
                                        <img class="travel-img" src="<?php echo e(!empty($expert->thumbnail) ? asset('uploads/team/' .$expert->thumbnail) : asset('theme-assets/img/mountain/mountain1.jpeg')); ?>" alt="<?php echo e($expert->name); ?>" style="height: 165px; width: 180px; object-fit: cover;">
                                    </div>
                                    <div class="uk-margin-left ">
                                        <h2 class="uk-margin-remove"><?php echo e($expert->name); ?></h2>
                                        <h3 class="uk-margin-remove uk-secondary" style="font-size:20px;"><?php echo e($expert->position); ?></h3>
                                        <span style="font-size:14px;"><i class="fa-solid fa-phone uk-margin-small-right uk-secondary uk-visible@s" aria-hidden="true"></i><?php echo e($expert->phone); ?></span><br>
                                        <span style="font-size:14px;"><i class="fa-solid fa-envelope uk-margin-small-right uk-secondary uk-visible@s" aria-hidden="true"></i><?php echo e($expert->email); ?></span><br>
                                        <span style="font-size:14px;"><i class="fa-solid fa-language uk-margin-small-right uk-secondary uk-visible@s" aria-hidden="true"></i><?php echo e($expert->language); ?></span>
                                        <br>
                                        <div class="flag">
                                           
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('themes.default.common.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/lhakpa/public_html/resources/views/themes/default/posttypeTemplate-contact.blade.php ENDPATH**/ ?>