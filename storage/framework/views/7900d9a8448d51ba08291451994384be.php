
<?php $__env->startSection('title', $data->post_type); ?>
<?php $__env->startSection('meta_keyword', $data->meta_keyword); ?>
<?php $__env->startSection('meta_description', $data->meta_description); ?>
<?php $__env->startSection('thumbnail', $data->banner); ?>
<?php $__env->startSection('content'); ?>

    <section class=" uk-cover-container uk-position-relative uk-flex uk-flex-middle uk-background-norepeat uk-background-cover uk-background-top-center uk-background-fixed" uk-height-viewport data-src="<?php echo e($data->banner ? asset('uploads/original/'.$data->banner) : asset('theme-assets/img/mountain/mountain6.jpeg')); ?>" alt="<?php echo e($data->post_type); ?>" uk-img>
        <div class="uk-overlay-banner uk-position-cover"></div>
        <div class="uk-container uk-width-1-1 pt-150 uk-position-relative">
            <div class="uk-flex uk-flex-middle uk-grid-collapse " uk-grid>
                <div class="uk-width-1-1@m">
                    <ul class="uk-breadcrumb">
                        <li><a href="<?php echo e(url('/')); ?>" class="uk-white">Home</a></li>
                        
                    </ul>
                    <div class="uk-sub-banner-font">
                        <h1><?php echo e($data->post_type); ?></h1>
                    </div>
                </div>
            </div>
        </div>
    </section>


<section class="uk-section-small uk-position-relative">
        <div class="uk-container">
          <ul class="uk-subnav uk-subnav-pill uk-why-us-tab uk-flex-center bg-white py-3"
            uk-sticky="offset: 80; cls-active: uk-navbar-sticky;"
            uk-switcher="animation: uk-animation-fade">
           
                <?php $__currentLoopData = $team_category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><a class="green-border uk-margin-remove"><?php echo e($item->category); ?></a></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
            <div class="uk-switcher uk-margin">
                <?php $__currentLoopData = $team_category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div>
                        <div class="uk-child-width-1-3@m uk-grid">
                            <?php $__currentLoopData = $related_teams[$category->id] ?? []; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $team): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="uk-margin-top">
                                    <div class="uk-inline uk-width-1-1">
                                        <a href="#"
                                           class="team-link uk-display-block uk-inline-clip uk-transition-toggle uk-link-toggle uk-media-360"
                                           data-name="<?php echo e($team->name); ?>"
                                           data-position="<?php echo e($team->position); ?>"
                                           data-image="<?php echo e($team->thumbnail ? asset('uploads/team/' .$team->thumbnail) : asset('theme-assets/img/mountain/mountain1.jpeg')); ?>"
                                           data-phone="<?php echo e($team->phone ?? ''); ?>"
                                           data-email="<?php echo e($team->email ?? ''); ?>"
                                           data-description="<?php echo e($team->content ?? ''); ?>">
                                            <img src="<?php echo e($team->thumbnail ? asset('uploads/team/' .$team->thumbnail) : asset('theme-assets/img/mountain/mountain1.jpeg')); ?>"
                                                 class="uk-transition-scale-up uk-transition-opaque" alt="<?php echo e($team->name); ?>">
                                            <div class="uk-overlay uk-overlay-default uk-position-bottom uk-overlay-bottom uk-title-font">
                                                <h3 class="uk-secondary uk-margin-remove"><?php echo e($team->name); ?></h3>
                                                <span class="uk-text-uppercase uk-white uk-margin-remove"><?php echo e($team->position); ?></span><br>
                                                <h3 class="uk-secondary uk-margin-remove">SEE MESSAGE <i class="fa-solid fa-circle-arrow-right uk-secondary f-30"></i></h3>
                                            </div>
                                            
                                            <span class="see-message-hint uk-position-bottom-right uk-margin-small-right uk-margin-small-bottom uk-text-small">
                                                <!--<i class="fa-solid fa-circle-arrow-right uk-secondary f-30"></i>-->
                                                <!--See message →-->
                                            </span>
                                        </a>
                                        
                                    </div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>

        </div>
    </section>

    <div id="modal-container" class="uk-modal-container" uk-modal>
        <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical uk-light-bg">
            <button class="uk-modal-close-default" type="button" uk-close></button>
            <div class="border uk-grid uk-flex uk-flex-middle">
                <div class="uk-width-auto@m">
                    <div class="uk-text-center">
                        <img id="modal-team-image" src="" class="uk-client-img" alt="">
                        <h3 id="modal-team-name" class="uk-margin-remove uk-secondary"></h3>
                        <p id="modal-team-position" class="uk-margin-remove"></p>
                    </div>
                </div>
                <div class="uk-width-expand@m">
                    <p id="modal-team-description"></p>
                    <span><i class="fa-solid fa-phone uk-margin-small-right uk-secondary"></i><span id="modal-team-phone"></span></span>
                    <span class="uk-margin-small-left"><i class="fa-solid fa-envelope uk-margin-small-right uk-secondary"></i><span id="modal-team-email"></span></span>
                </div>
            </div>
        </div>
    </div>


    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const teamLinks = document.querySelectorAll('.team-link');
        
            teamLinks.forEach(link => {
                link.addEventListener('click', function(e) {
                    e.preventDefault(); // prevent default link behavior
        
                    document.getElementById('modal-team-name').textContent = link.dataset.name;
                    document.getElementById('modal-team-position').textContent = link.dataset.position;
                    document.getElementById('modal-team-image').src = link.dataset.image;
                    document.getElementById('modal-team-phone').textContent = link.dataset.phone || "";
                    document.getElementById('modal-team-email').textContent = link.dataset.email || "";
                    document.getElementById('modal-team-description').innerHTML = link.dataset.description || "";
        
                    UIkit.modal('#modal-container').show(); // open modal
                });
            });
        });
    </script>
    

<?php $__env->stopSection(); ?>

<?php echo $__env->make('themes.default.common.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/lhakpa/public_html/resources/views/themes/default/posttypeTemplate-team-member.blade.php ENDPATH**/ ?>