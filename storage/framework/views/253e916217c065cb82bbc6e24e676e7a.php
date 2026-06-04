<div class="uk-box-shadow-medium uk-border-rounded uk-white-bg ">
    <div class="uk-flex uk-flex-middle uk-padding-small">
        <img src="<?php echo e(Auth::user()->image ? asset('user-profile/'.Auth::user()->image) : asset('theme-assets/img/user.png')); ?>" class="uk-profile-img" alt="">
        
        <?php if(Auth::check()): ?>
        <div class="uk-title-font">
            <h3 class="uk-secondary uk-margin-remove"><?php echo e(Auth::user()->name); ?>

            </h3>
            <p class="uk-margin-remove" style="line-break: anywhere;"><?php echo e(Auth::user()->email); ?></p>
        </div>
        <?php endif; ?>
    </div>
    <div>
        <ul style="list-style:none; padding: 0; overflow:hidden; margin:0;">
            <li class="uk-div uk-padding-small">
                <a href="<?php echo e(route('user-profile')); ?>" class="uk-flex"><i class="fa-solid fa-user login-logo uk-margin-small-right"></i>User Profile</a>
            </li>
            <li class="uk-div uk-padding-small">
                <a href="<?php echo e(route('user-wishlist')); ?>" class="uk-flex"><i class="fa-solid fa-heart login-logo uk-margin-small-right"></i>Travel Wishlist</a>
            </li>
            <li class="uk-div uk-padding-small">
                <a href="<?php echo e(route('user-recommendation')); ?>" class="uk-flex"><i class="fa-solid fa-person-hiking login-logo uk-margin-small-right"></i>Recommended Trips</a>
            </li>
            <li class="uk-div uk-padding-small">  
                <a href="<?php echo e(route('user-history')); ?>" class="uk-flex"><i class="fa-solid fa-clock-rotate-left login-logo uk-margin-small-right"></i>Travel History</a>
            </li>
            <li class="uk-div uk-padding-small">
                <a href="<?php echo e(route('user-review')); ?>" class="uk-flex"><i class="fa-solid fa-comment login-logo uk-margin-small-right"></i>Your Opinion</a>
            </li>
            <li class="uk-div uk-padding-small">
                <a href="<?php echo e(route('user-logout')); ?>" class="uk-flex"><i class="fa-solid fa-right-from-bracket login-logo uk-margin-small-right"></i>Log Out</a>
            </li>
        </ul>
    </div>
</div><?php /**PATH /home/lhakpa/public_html/resources/views/themes/default/user/sidebar.blade.php ENDPATH**/ ?>