
<?php $__env->startSection('content'); ?>
<section class=" uk-cover-container uk-position-relative uk-flex uk-flex-middle uk-background-norepeat uk-background-cover uk-background-top-center uk-background-fixed uk-grey-bg" style="height:400px;" data-src="<?php echo e(asset('theme-assets/img/bg/pattern.png')); ?>" alt="" uk-img>
    <div class="uk-container uk-width-1-1  uk-position-relative">
        <div class="uk-flex uk-flex-middle uk-flex-center uk-grid-collapse " uk-grid>
            <div class="uk-width-1-1@m">
                <div class="uk-sub-banner-font uk-text-center">
                    <h2 class="uk-secondary uk-margin-large-top">Profile Info</h2>  
                </div>
            </div>
        </div>
    </div>
</section>
<section class="uk-section ">
    <div class="uk-container">
        <div class="uk-div-overlay " uk-grid>
            <div class="uk-width-1-4@m ">
                <?php echo $__env->make('themes.default.user.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
            <div class="uk-width-3-4@m">
                <p class="uk-visible@m uk-white" style="margin:2rem 0px 4rem 0;">Update you profile details below:
                </p>
                <div class="uk-container">
                    <div class="uk-light-bg uk-border-rounded uk-padding"> 
                     
                        <div uk-grid>
                            <div class="uk-width-1-4@m uk-flex uk-flex-center">
                                <img src="<?php echo e(Auth::user()->image ? asset('user-profile/'.Auth::user()->image) : asset('theme-assets/img/user.png')); ?>" class="uk-profile-img2" alt="">
                            </div>
                            <div class="uk-width-3-4@m uk-flex uk-flex-middle">
                                <div class="uk-child-width-1-2@m uk-grid">
                                    <div class="uk-margin-bottom">
                                        <p class="uk-margin-remove uk-primary">Full Name:</p>
                                        <p class="uk-margin-remove"><?php echo e(Auth::user()->name); ?></p>
                                    </div>
                                    <div class="uk-margin-bottom">
                                        <p class="uk-margin-remove uk-primary">Address:</p>
                                        <p class="uk-margin-remove "><?php echo e(Auth::user()->address); ?></p>
                                    </div>
                                    <div class="uk-margin-bottom">
                                        <p class="uk-margin-remove uk-primary">Email Address:</p>
                                        <p class="uk-margin-remove"><?php echo e(Auth::user()->email); ?></p>
                                    </div>
                                    <div class="uk-margin-bottom">
                                        <p class="uk-margin-remove uk-primary">Phone Number:</p>
                                        <p class="uk-margin-remove"><?php echo e(Auth::user()->phone); ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <form method="post" action="<?php echo e(route('user-profile')); ?>" enctype="multipart/form-data">
                       <?php echo csrf_field(); ?>
                        <input type="hidden" name="user_id" value="<?php echo e(Auth::user()->id); ?>" >
                        <div class=" uk-child-width-1-2@s uk-grid">
                            <div>
                                 <h3 class="uk-primary uk-margin-medium-top">Update your Profile</h3>
                            </div>
                            <div class="uk-margin-medium-top uk-text-left uk-text-right@m">
                                <?php if(session()->has('intended_trip')): ?>
                                <a href="<?php echo e(url('page/' . tripurl(session('intended_trip')))); ?>" class="uk-btn uk-btn-secondary" >Continue Booking <span uk-icon="chevron-right"></span></a>
                                <?php endif; ?>
                            </div>
                        </div>
                        <hr>
                        <div class="uk-grid">  
                            <div class="uk-width-1-1@s uk-margin-small-top">
                                <div class="uk-flex uk-flex-column" uk-form-custom>
                                    <label class="uk-form-label " for="image">Profile Image:</label>
                                    <div class="uk-flex uk-flex-middle">
                                        <input type="file" aria-label="Custom controls" name="imageProfile">
                                        <button class="uk-button uk-button-default uk-margin-small-right" type="button" tabindex="-1" style="border: 1px solid #333 !important;">Change Profile</button>
                                        <p class="uk-margin-remove">Upload JPG, JPEG or PNG image</p>
                                    </div>
                                </div>
                            </div>
                            <div class="uk-width-1-2@s uk-margin-small-top">
                                <label class="uk-form-label " for="name">Full Name:</label>
                                <input class="uk-input border" type="text" aria-label="name" name="name" value="<?php echo e(Auth::user()->name); ?>">
                            </div>
                            <div class="uk-width-1-2@s uk-margin-small-top">
                                <label class="uk-form-label " for="address">Address:</label>
                                <input class="uk-input border" type="text" aria-label="address" name="address"  value="<?php echo e(Auth::user()->address); ?>">
                            </div>
                            <div class="uk-width-1-2@s uk-margin-small-top">
                                <label class="uk-form-label " for="email">Email: </label>
                                <input class="uk-input border" type="email" name="email" aria-label="email" value="<?php echo e(Auth::user()->email); ?>" readonly>
                            </div>
                            <div class="uk-width-1-2@s uk-margin-small-top">
                                <label class="uk-form-label " for="contact">Contact:</label>
                                <input class="uk-input border" type="number" name="phone" aria-label="contact" 
                                value="<?php echo e(Auth::user()->phone); ?>">
                            </div>
                            <div class="uk-width-1-1@s uk-margin-small-top">
                                <label class="uk-form-label " for="Category">Your way of Travelling:</label>
                                <div class="uk-margin-small uk-grid-small uk-child-width-auto uk-grid">
                                <?php $__currentLoopData = $tripsTags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <label>
                                        <input type="checkbox" name="tags[]" value="<?php echo e($tag->id); ?>" 
                                               class="uk-checkbox uk-margin-small-right"
                                               <?php echo e(in_array($tag->id, $selectedTags ?? []) ? 'checked' : ''); ?>>
                                        <?php echo e($tag->title); ?>

                                    </label>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                          
                                 </div>
                            </div>
                        </div>
                        <div class="uk-width-1-1 uk-margin-medium-top">
                            <button type="submit" class="uk-btn uk-btn-secondary">Update Profile </button>
                        </div> 
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
<script type="text/javascript">
document.getElementById('Category').addEventListener('change', function() {
    let selectedValues = Array.from(this.selectedOptions).map(option => option.value);
    console.log("Selected Categories: ", selectedValues);
});
</script>


<?php $__env->stopPush(); ?>
<?php echo $__env->make('themes.default.common.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/lhakpa/public_html/resources/views/themes/default/user/profile.blade.php ENDPATH**/ ?>