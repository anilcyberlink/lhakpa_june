
<?php $__env->startSection('title','Dashboard'); ?>
<?php $__env->startSection('content'); ?>
<div class="row mb10">
  <div class="col-sm-6 col-md-3">
    <div class="panel bg-alert light of-h mb10">
      <div class="pn pl20 p5">
        <div class="icon-bg">
          <i class="fa fa-file-o"></i>
        </div>
        <h2 class="mt15 lh15">
          <b><?php echo e($total_posts); ?></b>
        </h2>
        <h5 class="text-muted">Total Posts</h5>
      </div>
    </div>
  </div>

    <div class="col-sm-6 col-md-3">
      <div class="panel bg-warning light of-h mb10">
        <div class="pn pl20 p5">
          <div class="icon-bg">
             <i class="fa fa-file-o"></i>
          </div>
          <h2 class="mt15 lh15">
            <b><?php echo e($total_trips); ?></b>
          </h2>
          <h5 class="text-muted">Total Trips</h5>
        </div>
      </div>
    </div>

        <div class="col-sm-6 col-md-3">
          <div class="panel bg-primary light of-h mb10">
            <div class="pn pl20 p5">
              <div class="icon-bg">
                <i class="fa fa-file-o"></i>
              </div>
              <h2 class="mt15 lh15">
                <b><?php echo e($total_inquires); ?></b>
              </h2>
              <h5 class="text-muted">Total Inquires</h5>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3">
           <div class="panel bg-info light of-h mb10">
              <div class="pn pl20 p5">
                <div class="icon-bg">
                  <i class="fa fa-file-o"></i>
                </div>
                <h2 class="mt15 lh15">
                  <b><?php echo e($total_booking); ?></b>
                </h2>
                <h5 class="text-muted">Total Booking</h5>
              </div>
            </div>
          </div>
</div>
<?php $__env->stopSection(); ?>
<!-- END: PAGE SCRIPTS -->

<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/lhakpa/public_html/resources/views/admin/dashboard.blade.php ENDPATH**/ ?>