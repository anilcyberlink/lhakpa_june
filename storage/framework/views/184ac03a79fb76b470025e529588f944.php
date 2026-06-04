
<?php $__env->startSection('content'); ?>

<section class=" uk-cover-container uk-position-relative uk-flex uk-flex-middle uk-background-norepeat uk-background-cover uk-background-top-center uk-background-fixed" style="height:400px;" data-src="<?php echo e($trip->banner ? asset('uploads/banners/'.$trip->banner) : asset('theme-assets/img/mountain/mountain8.jpeg')); ?>" alt="" uk-img>
    <div class="uk-overlay-banner uk-position-cover"></div>
    <div class="uk-container uk-width-1-1 pt-150 uk-position-relative">
        <div class="uk-flex uk-flex-middle uk-flex-center uk-grid-collapse " uk-grid>
            <div class="uk-width-1-1@m">
                <div class="uk-sub-banner-font uk-text-center">
                    <h2 class="uk-secondary"><?php echo e($trip->trip_title); ?></h2>  
                </div>
            </div>
        </div>
    </div>
</section>
<section class="uk-section ">
    <div class="uk-container">
        <div uk-grid>
            <div class="uk-width-3-4@m">
                <form action="<?php echo e(route('post-trip')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <input type="hidden" id="g_recaptcha_response" name="g_recaptcha_response"/>
                    <input type="hidden" name="depature_type" value="<?php echo e($schedule ? 1 : 0); ?>">
                    <input type="hidden" name="schedule_id" value="<?php echo e($schedule ? $schedule->id : ''); ?>">
                    <h3 class="uk-primary" style="background: var(--primary);color: white !important; padding: 7px;">Personal Details</h3>
                    <hr>
                    <div class="uk-grid">
                        <div class="uk-width-1-2@s uk-margin-small-top">
                            <label class="uk-form-label " for="name">Full Name *</label>
                            <input class="uk-input border" style="background:#9e9e9e17;" name="full_name" type="text" aria-label="name" value="<?php echo e(Auth::user()->name); ?>" required>

                        </div>
                        <div class="uk-width-1-2@s uk-margin-small-top">
                            <label class="uk-form-label " for="email">Email *</label>
                            <input class="uk-input border" style="background:#9e9e9e17;"  name="email" type="email" value="<?php echo e(Auth::user()->email); ?>" aria-label="email" required>
                        </div>
                        <div class="uk-width-1-2@s uk-margin-small-top">
                            <label class="uk-form-label " for="contact">Contact *</label>
                            <input class="uk-input border" style="background:#9e9e9e17;"  name="phone" value="<?php echo e(Auth::user()->phone); ?>" type="number" aria-label="contact" required>
                        </div>
                        <div class="uk-width-1-2@s uk-margin-small-top">
                            <label class="uk-form-label " for="country">Nationality *</label>
                            <select name="country"  style="background:#9e9e9e17;" class="uk-select border" id="country" required>
                                <?php echo $__env->make('themes.default.common.country', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            </select>
                        </div>
                    </div>
                    <small><em>Fields marked with * are required.</em></small>
            <?php if($trip->latest_info): ?>
                <!-- new element added -->
                <div class="uk-flex uk-flex-middle uk-margin-top">
                    <p class="uk-margin-remove">To know more about our latest trip information:</p>
                    <button class="uk-button uk-button-default uk-info-button" type="button" uk-toggle="target: .toggle">View Info</button>
                </div>
                <p class="toggle"></p>
                <div class="toggle" hidden>
                    <h3 class="uk-secondary uk-margin-top">More Information</h3>
                    <div class=" uk-padding uk-light-bg border uk-margin-remove "><?php echo $trip->latest_info; ?></div>
                </div>
            <?php endif; ?>
            <!-- new element added -->
                    <h3 class="uk-primary uk-margin-top" style="background: var(--primary);color: white !important; padding: 7px;">trip details</h3>
                    <hr>
                    <div class="uk-grid">
                        <div class="uk-width-1-1 uk-margin-small-top">
                            <label class="uk-form-label " for="trip_id"> Package Name *</label>
                            <select name="trip_id" style="background:#9e9e9e17;" class="uk-select border" id="trip_id" required>
                                <option value="<?php echo e($trip->id); ?>"><?php echo e($trip->trip_title); ?></option>
                            </select>
                        </div>
                        <div class="uk-width-1-2@s uk-margin-small-top">
                            <label class="uk-form-label " for="start">Trip Start Date *</label>
                            <input class="uk-input border" style="background:#9e9e9e17;"  name="trip_start_date" type="date" aria-label="start" value="<?php echo e($start_date); ?>" <?php echo e($start_date ? 'readonly' : ''); ?> required>
                        </div>
                        <?php if($end_date): ?>
                            <div class="uk-width-1-2@s uk-margin-small-top">
                                <label class="uk-form-label " for="end">Trip End Date *</label>
                                <input class="uk-input border" style="background:#9e9e9e17;" name="trip_end_date" type="date" aria-label="end" value="<?php echo e($end_date); ?>" <?php echo e($end_date ? 'readonly' : ''); ?> required>
                            </div>
                        <?php endif; ?>
                        <?php if($schedule && $schedule->price && $schedule->group_size): ?>
                            <div class="uk-width-1-2@s uk-margin-small-top">
                                <label class="uk-form-label " for="meal">Meal*</label>
                                <select name="meal" style="background:#9e9e9e17;" class="uk-select border" id="meal" required>
                                    <option value="" disabled>Choose you option</option>
                                    <option value="1" selected>Yes</option>
                                    <option value="0">No</option>
                                </select>
                            </div>
                            <script>
                                $('#meal').on('change', function() {
                                    const selectedValue = this.value;
                                    let price;
                                    if (selectedValue === '1') {
                                        price = <?php echo e($schedule->price); ?>;
                                    } else if (selectedValue === '0') {
                                        price = <?php echo e($schedule->group_size); ?>; 
                                    }
                                    $('#price').val(price);
                                });
                            </script>
                        <?php endif; ?>
                        <?php if(($schedule && $schedule->price) || ($schedule && $schedule->group_size)): ?>
                            <div class="uk-width-1-2@s uk-margin-small-top">
                                <label class="uk-form-label " for="price">Price*</label>
                                <input class="uk-input border" style="background:#9e9e9e17;" name="price" id="price" type="number" min="1" value="<?php echo e($schedule->price ?? $schedule->group_size); ?>" aria-label="price" style="cursor: not-allowed;" readonly required>
                            </div>
                        <?php elseif($trip->price): ?>
                            <div class="uk-width-1-2@s uk-margin-small-top">
                                <label class="uk-form-label " for="price">Price*</label>
                                <input class="uk-input border" style="background:#9e9e9e17;" name="price" id="price" type="number" min="1" value="<?php echo e($trip->price); ?>" aria-label="price" style="cursor: not-allowed;" readonly required>
                            </div>
                        <?php endif; ?>
                        <div class="uk-width-1-2@s uk-margin-small-top">
                            <label class="uk-form-label " for="people">No of People *</label>
                            <input class="uk-input border" style="background:#9e9e9e17;" name="total_travellers" type="number" min="1" aria-label="people" required>
                        </div>
      
                        <div class="uk-width-1-1 uk-margin-small-top">
                            <label class="uk-form-label " for="Message">Extra Requirement</label>
                            <textarea name="message"style="background:#9e9e9e17;" class="uk-textarea border" rows="5" placeholder="Message" aria-label="Message"></textarea>
                        </div>
                    </div>
                    <div class="uk-width-1-1 uk-margin-top">
                        <button type="submit" class="uk-btn uk-btn-secondary">Submit
                          </button>
                    </div>
                </form>
            </div>
            <div class="uk-width-1-4@m">
                <div class="uk-sidebar" uk-sticky="offset: 90; end: !">
                    <div class="uk-media-260 ">
                        <img src="<?php echo e($trip->banner ? asset('uploads/banners/'.$trip->banner) : asset('theme-assets/img/mountain/mountain1.jpeg')); ?>" class="border" alt="">
                    </div>
                    <h3 class="uk-text-center uk-margin-top" style="background: var(--primary);color: white;padding: 7px;">
                        <?php echo e($trip->trip_title); ?>

                    </h3>
                    <hr>
                </div>

            </div> 
        </div>
    </div>
</section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('themes.default.common.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/lhakpa/public_html/resources/views/themes/default/booking.blade.php ENDPATH**/ ?>