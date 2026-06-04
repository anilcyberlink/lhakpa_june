
<?php $__env->startSection('title','Home Brief'); ?>
<?php $__env->startSection('breadcrumb'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<form action="<?php echo e(route('home_brief.update', $data->id)); ?>" method="POST" class="form-horizontal" role="form" enctype="multipart/form-data">
    <div class="col-md-12">
        <!-- Input Fields -->
        <?php echo method_field('PUT'); ?>
        <?php echo csrf_field(); ?>
        <div class="panel">
            <div class="panel-heading">
                <span class="panel-title">Home Brief Section</span>
            </div>
            <div class="panel-body">

                <div class="form-group">
                    <label for="inputStandard" class="col-lg-2 control-label">Title</label>
                    <div class="col-lg-8">
                        <div class="bs-component">
                            <input type="text" id="" name="title" class="form-control" placeholder="" value="<?php echo e($data->title); ?>">
                        </div>
                    </div>
                </div>
                 <div class="form-group">
                    <label for="inputStandard" class="col-lg-2 control-label">Brief</label>
                    <div class="col-lg-8">
                        <div class="bs-component">
                             <textarea class="form-control" id="contentEditor5" name="brief" rows="3"><?php echo e($data->brief); ?></textarea>
                                      </div>
                    </div>
                </div> 
                
                
                
                
                  <div class="form-group">
                    <label class="col-lg-2 control-label" for="banner">Video</label>
                    <div class="col-lg-6">
                      <div class="bs-component">
                        <input type="text" class="form-control" name="video" value="<?php echo e($data->video); ?>" placeholder="-KxR0JY2vJ0"/>
                        <br> ( Video ID: https://youtu.be/ <b>-KxR0JY2vJ0</b> )
                      </div>
                    </div>
                  </div>
                <div class="form-group">
                    <label class="col-lg-2 control-label" for=""></label>
                    <div class="col-lg-6">
                        <div class="bs-component">
                            <input type="submit" class="form-control btn btn-primary" name="submit" value="Submit"/>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>    
</form>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
    <script type="text/javascript">
        (function ($) {
            $('#remove_thumbnail').on('click', function (e) {
                e.preventDefault();
                if (confirm('Are you sure to delete??')) {
                    var csrf = $('meta[name="csrf-token"]').attr('content');
                    var id = $(this).attr('href');
                    var url = '<?php echo e(route("pic1-destroy",["id"=>':id'])); ?>';

                    url = url.replace(':id', id);
                    $.ajax({
                        type: 'delete',
                        url: url,
                        data: {_token: csrf},
                        success: function (data) {
                            $('.thumbnail' + id).remove();
                        },
                        error: function (data) {
                            alert('Error occurred!');
                        }
                    });
                }
            });

        }(jQuery));
        (function ($) {
            $('#remove_image').on('click', function (e) {
                e.preventDefault();
                if (confirm('Are you sure to delete??')) {
                    var csrf = $('meta[name="csrf-token"]').attr('content');
                    var id = $(this).attr('href');
                    var url = '<?php echo e(route("pic2-destroy",["id"=>':id'])); ?>';

                    url = url.replace(':id', id);
                    $.ajax({
                        type: 'delete',
                        url: url,
                        data: {_token: csrf},
                        success: function (data) {
                            $('.image' + id).remove();
                        },
                        error: function (data) {
                            alert('Error occurred!');
                        }
                    });
                }
            });

        }(jQuery));
        (function ($) {
            $('#remove_pic').on('click', function (e) {
                e.preventDefault();
                if (confirm('Are you sure to delete??')) {
                    var csrf = $('meta[name="csrf-token"]').attr('content');
                    var id = $(this).attr('href');
                    var url = '<?php echo e(route("pic3-destroy",["id"=>':id'])); ?>';

                    url = url.replace(':id', id);
                    $.ajax({
                        type: 'delete',
                        url: url,
                        data: {_token: csrf},
                        success: function (data) {
                            $('.pic' + id).remove();
                        },
                        error: function (data) {
                            alert('Error occurred!');
                        }
                    });
                }
            });

        }(jQuery));
        (function ($) {
            $('#video').on('click', function (e) {
                e.preventDefault();
                if (confirm('Are you sure to delete??')) {
                    var csrf = $('meta[name="csrf-token"]').attr('content');
                    var id = $(this).attr('href');
                    var url = '<?php echo e(route("video_delete",["id"=>':id'])); ?>';

                    url = url.replace(':id', id);
                    $.ajax({
                        type: 'delete',
                        url: url,
                        data: {_token: csrf},
                        success: function (data) {
                            $('.video' + id).remove();
                        },
                        error: function (data) {
                            alert('Error occurred!');
                        }
                    });
                }
            });

        }(jQuery));
    </script>:
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/lhakpa/public_html/resources/views/admin/homeBrief/homeBrief.blade.php ENDPATH**/ ?>