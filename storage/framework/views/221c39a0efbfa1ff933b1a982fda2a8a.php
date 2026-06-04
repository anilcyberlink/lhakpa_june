<div id="footer">  </div>
<div class="uk-light-bg  ">
    <div class="uk-top-footer uk-container" style="padding-top:10px; padding-bottom:20px;">
        <div class="uk-child-width-1-2@s uk-grid">
            <div class=" uk-flex" style="align-items: baseline; " uk-scrollspy="cls:uk-animation-fade; delay: 500;">
                <h3 class="uk-margin-remove" style="font-size:22px;">Associated With</h3>
                <div class="uk-margin-top uk-top-img uk-margin-small-left">
                    <?php $__currentLoopData = $associated; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <img src="<?php echo e(asset('uploads/medium/' . $value->file_name)); ?>" loading="lazy">
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
            <div  class=" uk-flex uk-flex-left uk-flex-right@m " style="align-items: baseline;" uk-scrollspy="cls:uk-animation-fade; delay: 500;">
                <h3 class="uk-margin-remove" style="font-size:22px;">We Accept</h3>
                <div class="uk-margin-top uk-payment uk-margin-small-left">
                    <?php $__currentLoopData = $pay_partners; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <img src="<?php echo e(asset('uploads/medium/' . $value->file_name)); ?>" loading="lazy">
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
            
        </div>
    </div>

    <div class="uk-container uk-padding-small"
        style="background:#f3e6e6; border-radius:6px;">

        <div class="uk-flex uk-flex-column uk-flex-center uk-text-center">

            <!-- Text -->
            <div class="uk-margin-small-bottom">
                <h4 class="uk-margin-remove uk-text-bold">Join Our Community</h4>
                <span class="uk-text-muted">Be the first to know about new treks & offers</span>
            </div>

            <!-- Form -->
            <form action="<?php echo e(route('subscribe')); ?>" method="POST" class="uk-grid-small uk-flex uk-flex-center uk-child-width-auto@s" uk-grid>
                <?php echo csrf_field(); ?>
                <input name="typeOf" type="hidden" value="0"/>
                <input type="hidden" id="g_recaptcha_response" name="g_recaptcha_response"/>

                <div>
                    <input
                        class="uk-input uk-border-pill uk-form-small"
                        type="text"
                        placeholder="Your name"
                        name="name"
                        required
                    >
                </div>

                <div>
                    <input
                        class="uk-input uk-border-pill uk-form-small"
                        type="email"
                        name="email"
                        placeholder="Your email"
                        required
                    >
                </div>

                <div>
                    <button
                        class="uk-button uk-border-pill uk-form-small btn-theme-green"
                        type="submit"
                        style="padding:0 28px; font-weight:600;"
                    >
                        SUBSCRIBE
                    </button>
                </div>

            </form>

        </div>
    </div>

</div>
    <footer class="uk-padding bg-primary ">
        <div uk-grid  uk-scrollspy="cls: uk-animation-fade;  delay: 300; repeat: false">
            <div class="uk-width-1-3@m uk-text-left@m uk-text-center">
                <a class="uk-logo" href="<?php echo e(url('/')); ?>">
                    <img src="<?php echo e(asset('theme-assets/img/green-lhakpa.png')); ?>" class="footer-logo" width="250" alt="">
                </a>
                <hr style="border-top: 1px solid #e5e5e530;">
                <p class="text-white"><?php echo e($setting->copyright_text); ?></p>
                <div>
                   <ul style="list-style: none; padding: 0;">
                       <li class="uk-white uk-margin-small-bottom"><a href="tel:+9779849055448" class="uk-white"><i class="fa-solid fa-phone uk-margin-small-right"></i><?php echo e($setting->phone); ?></a></li>
                       <li class="uk-white uk-margin-small-bottom"><i class="fa-solid fa-location-dot uk-margin-small-right"></i><?php echo e($setting->address); ?></li>
                       <li class="uk-white uk-margin-small-bottom"><a href="mailto:lhakpatrekking@gmail.com" class="uk-white"><i class="fa-solid fa-envelope uk-margin-small-right"></i><?php echo e($setting->email_primary); ?></a></li>
                   </ul>
                </div>
            </div>
            <div class="uk-width-expand@m">
                <div class="uk-child-width-1-4@m uk-child-width-1-2 uk-grid-small" uk-grid>
                    <div>
                        <p class="uk-margin-remove "><a href="<?php echo e(route('page.trekkinglist')); ?>" class="uk-secondary f-20 fw-600 uk-text-uppercase ">Destination</a></p>
                        <ul class=" footer-list">
                            <?php $__currentLoopData = $trekking; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $trek): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li> <a href="<?php echo e(route('trekking-list',$trek->uri)); ?>"><?php echo e($trek->title); ?></a> </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                    <div>
                        <p class="uk-margin-remove "><a href="<?php echo e(route('page.activitylist')); ?>" class="uk-secondary f-20 fw-600 uk-text-uppercase ">Activities</a></p>
                        <ul class=" footer-list">
                            <?php $__currentLoopData = $activity; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li> <a href="<?php echo e(route('activity-list', $row->uri)); ?>"><?php echo e($row->title); ?></a> </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    
                        </ul>
                    </div>
                    <div>
                        <p class="uk-margin-remove "><a href="<?php echo e(route('page.expeditionlist')); ?>" class="uk-secondary f-20 fw-600 uk-text-uppercase ">Expedition</a></p>
                        <ul class=" footer-list">
                            <?php $__currentLoopData = $expedition; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li> <a href="<?php echo e(route('expedition-list', $row->uri)); ?>"><?php echo e($row->title); ?></a> </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
    
                    <div>
                        <p class="uk-margin-remove "><a href="#" class="uk-secondary f-20 fw-600 uk-text-uppercase ">Useful Links</a></p>
                        <ul class=" footer-list">
                            <?php $__currentLoopData = $navigations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $nav): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><a href="<?php echo e(route('page.posttype_detail',$nav->uri)); ?>"><?php echo e($nav->post_type); ?> </a></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <li><a href="<?php echo e(route('feedback')); ?>">Give Feedback</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    
    <div class="small-footer uk-child-width-1-2@m uk-padding uk-padding-remove-vertical uk-flex uk-flex-middle uk-pattern-bg " uk-grid >
        <div class="uk-text-center uk-text-left@m uk-margin-top" uk-scrollspy="cls: uk-animation-fade;  delay: 300; repeat: false">
            <div class="uk-white">Made with <i class="fa fa-heart" style="color: #ea050a;"></i> by <a href="https://cyberlink.com.np/" target="_blank" class="uk-white">Cyberlink Pvt.Ltd.</a></div>
        </div>
        <div class="uk-footer-icon uk-text-right@m uk-text-center uk-margin-top uk-margin-bottom" uk-scrollspy="cls: uk-animation-fade;  delay: 300; repeat: false">
            <a href="<?php echo e($setting->youtube_link); ?>" class="uk-icon-button uk-margin-small-right"><i class="fa-brands fa-youtube"></i></a>
            <a href="<?php echo e($setting->facebook_link); ?>" class="uk-icon-button  uk-margin-small-right"><i class="fa-brands fa-facebook-f"></i></a>
            <a href="<?php echo e($setting->twitter_link); ?>" class="uk-icon-button"><i class="fa-brands fa-twitter"></i></a>
        </div>
    </div>
   
    <script src=" <?php echo e(asset('theme-assets/js/uikit-icons.js')); ?>"></script>
    <script src="<?php echo e(asset('theme-assets/js/swiper.min.js')); ?>"></script>
    <script src="<?php echo e(asset('theme-assets/js/youtube-video.js')); ?>"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js"></script>
    <script src="<?php echo e(asset('theme-assets/js/main.js')); ?>"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <script src="https://www.google.com/recaptcha/api.js?render=<?php echo e(env('SITE_KEY')); ?>"></script>

<script>
    grecaptcha.ready(function () {
        function executeRecaptcha() {
            grecaptcha.execute('<?php echo env("SITE_KEY"); ?>', {action: 'homepage'}).then(function (token) {
                document.getElementById('g_recaptcha_response').value = token;
                document.getElementById('g_recaptcha_response2').value = token;
            });
        }

        // Initial execution of reCAPTCHA
        executeRecaptcha();

        // Refresh the reCAPTCHA token every 100 seconds (less than 2 minutes)
        setInterval(executeRecaptcha, 900000);
    });

</script>
<!-- WhatsApp Chat Button -->
<a href="https://wa.me/9849055448" 
   target="_blank" 
   style="
      position:fixed;
      bottom:100px;   /* moved above Tawk.to */
      right:20px;
      background-color:#25D366;
      color:white;
      border-radius:50%;
      width:60px;
      height:60px;
      text-align:center;
      font-size:30px;
      z-index:1000;
      display:flex;
      align-items:center;
      justify-content:center;
      box-shadow: 0 4px 8px rgba(0,0,0,0.2);
      ">
    <i class="fab fa-whatsapp"></i>
</a>

<style>
    .uk-form-small {
        height: 36px;
        font-size: 14px;
    }

    .uk-button-primary {
        font-weight: 600;
        letter-spacing: 0.4px;
    }

    .uk-input {
        background: #fff;
    }
    .btn-theme-green {
        background-color: #7d0020; /* theme green */
        color: #ffffff;
        border: none;
    }

    .btn-theme-green:hover,
    .btn-theme-green:focus {
        background-color: #7aa92f;
        color: #ffffff;
    }

    .btn-theme-green:active {
        background-color: #6c9b28;
    }
</style>
<script>
document.addEventListener("DOMContentLoaded", () => {
    const texts = document.querySelectorAll(".moretext");

    texts.forEach(text => {
        const btn = text.nextElementSibling; // must be the button
        if (!btn) return;

        // Ensure line-clamp is applied first
        text.style.display = '-webkit-box';

        // Always show button (ignore scrollHeight issues for UKit)
        btn.style.display = 'inline-block';

        btn.addEventListener("click", e => {
            e.preventDefault();
            text.classList.toggle("expanded");
            btn.textContent = text.classList.contains("expanded") ? "Read Less" : "Read More";
        });
    });
});
</script>
</body>
    </body>
    </html> <?php /**PATH C:\xampp\htdocs\Lhakpa_june\resources\views/themes/default/common/footer.blade.php ENDPATH**/ ?>