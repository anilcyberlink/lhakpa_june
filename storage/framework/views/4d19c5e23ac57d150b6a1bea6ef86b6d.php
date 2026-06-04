
<?php $__env->startSection('title', 'Setting'); ?>
<?php $__env->startSection('breadcrumb'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <form class="form-horizontal" action="<?php echo e(url('admin/settings', 1)); ?>" role="form" id="tripData" method="post"
        enctype="multipart/form-data">
        <?php echo method_field('PUT'); ?>
        <?php echo csrf_field(); ?>

        <section class="content">
            <div class="container-fluid">

                <footer>
                    <div id="publishing-action">
                        <button type="submit" name="submit" class="btn btn-success" value="publish"> Update </button>
                    </div>
                    <div class="clearfix"></div>
                </footer>

                <div class="row">
                    <div class="col-12">
                        <!-- Custom Tabs -->
                        <div class="card">
                            <div class="card-header d-flex p-0">
                                <ul class="nav nav-pills ml-auto p4 mb10 mt10 nav-custom">
                                    <li class="nav-item active"><a class="nav-link active" href="#tab_1"
                                            data-toggle="tab">Contact Information</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#tab_2" data-toggle="tab"> Social Media
                                            Links </a></li>
                                    <!-- <li class="nav-item"><a class="nav-link" href="#tab_3" data-toggle="tab"> Logo and
                                            Affiliated Logos </a></li> -->
                                    <!--<li class="nav-item"><a class="nav-link" href="#tab_4" data-toggle="tab"> Flight Information </a></li>-->
                                    <!--<li class="nav-item"><a class="nav-link" href="#tab_5" data-toggle="tab"> USA Details</a></li>-->
                                    <li class="nav-item"><a class="nav-link" href="#tab_6" data-toggle="tab"> Home Text</a></li>
                                </ul>
                            </div><!-- /.card-header -->
                            <div class="card-body">
                                <div class="tab-content">
                                    <div class="tab-pane active" id="tab_1">
                                        <?php echo $__env->make('admin.settings.contact', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                    </div>
                                    <div class="tab-pane" id="tab_2">
                                        <?php echo $__env->make('admin.settings.socialMedia', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                    </div>
                                    <div class="tab-pane" id="tab_3">
                                        <?php echo $__env->make('admin.settings.logo', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                    </div>
                                    <div class="tab-pane" id="tab_4">
                                        <?php echo $__env->make('admin.settings.flight', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                    </div>
                                    <div class="tab-pane" id="tab_5">
                                        <?php echo $__env->make('admin.settings.usaDetails', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                    </div>
                                    <div class="tab-pane" id="tab_6">
                                        <?php echo $__env->make('admin.settings.homeStatic', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                    </div>
                                </div>
                                <!-- /.tab-content -->
                            </div><!-- /.card-body -->
                        </div>
                        <!-- ./card -->
                    </div>
                    <!-- /.col -->
                </div>
            </div>
        </section>
    </form>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
    <script type="text/javascript">
        (function($) {
            $('#remove_logo').on('click', function(e) {
                e.preventDefault();
                if (confirm('Are you sure to delete??')) {
                    var csrf = $('meta[name="csrf-token"]').attr('content');
                    var id = $(this).attr('href');
                    var url = '<?php echo e(route('settings.destroy', ['setting' => ':id'])); ?>';

                    url = url.replace(':id', id);
                    $.ajax({
                        type: 'delete',
                        url: url,
                        data: {
                            _token: csrf
                        },
                        success: function(data) {
                            $('.logo' + id).remove();
                        },
                        error: function(data) {
                            alert('Error occurred!');
                        }
                    });
                }
            });

        }(jQuery));

        (function($) {
            $('#remove_worked_with').on('click', function(e) {
                e.preventDefault();
                if (confirm('Are you sure to delete??')) {
                    var csrf = $('meta[name="csrf-token"]').attr('content');
                    var id = $(this).attr('href');
                    var url = '<?php echo e(route('banner-destroy', ['id' => ':id'])); ?>';
                    // alert(url);
                    url = url.replace(':id', id);
                    $.ajax({
                        type: 'get',
                        url: url,
                        data: {
                            _token: csrf
                        },
                        success: function(data) {
                            $('.TTA1' + id).remove();
                        },
                        error: function(data) {
                            alert('Error occurred!');
                        }
                    });
                }
            });

        }(jQuery));

        (function($) {
            $('#Affiliated1').on('click', function(e) {
                e.preventDefault();
                if (confirm('Are you sure to delete??')) {
                    var csrf = $('meta[name="csrf-token"]').attr('content');
                    var id = $(this).attr('href');
                    var url = '<?php echo e(route('affiliated_destory', ['id' => ':id'])); ?>';
                    // alert(url);
                    url = url.replace(':id', id);
                    $.ajax({
                        type: 'get',
                        url: url,
                        data: {
                            _token: csrf
                        },
                        success: function(data) {
                            $('.Affiliated1' + id).remove();
                        },
                        error: function(data) {
                            alert('Error occurred!');
                        }
                    });
                }
            });

        }(jQuery));

        (function($) {
            $('#Affiliated2').on('click', function(e) {
                e.preventDefault();
                if (confirm('Are you sure to delete??')) {
                    var csrf = $('meta[name="csrf-token"]').attr('content');
                    var id = $(this).attr('href');
                    var url = '<?php echo e(route('affiliated_photo_destory', ['id' => ':id'])); ?>';
                    // alert(url);
                    url = url.replace(':id', id);
                    $.ajax({
                        type: 'get',
                        url: url,
                        data: {
                            _token: csrf
                        },
                        success: function(data) {
                            $('.Affiliated2' + id).remove();
                        },
                        error: function(data) {
                            alert('Error occurred!');
                        }
                    });
                }
            });

        }(jQuery));

        (function($) {
            $('#remove_affililiated_with').on('click', function(e) {
                e.preventDefault();
                if (confirm('Are you sure to delete??')) {
                    var csrf = $('meta[name="csrf-token"]').attr('content');
                    var id = $(this).attr('href');
                    var url = '<?php echo e(route('mob-banner-destroy', ['id' => ':id'])); ?>';
                    // alert(url);
                    url = url.replace(':id', id);
                    $.ajax({
                        type: 'get',
                        url: url,
                        data: {
                            _token: csrf
                        },
                        success: function(data) {
                            $('.TTA2' + id).remove();
                        },
                        error: function(data) {
                            alert('Error occurred!');
                        }
                    });
                }
            });

        }(jQuery));

        (function($) {
            $('#remove_flight').on('click', function(e) {
                e.preventDefault();
                if (confirm('Are you sure to delete??')) {
                    var csrf = $('meta[name="csrf-token"]').attr('content');
                    var id = $(this).attr('href');
                    var url = '<?php echo e(route('flight_photo_delete', ['id' => ':id'])); ?>';
                    // alert(url);
                    url = url.replace(':id', id);
                    $.ajax({
                        type: 'get',
                        url: url,
                        data: {
                            _token: csrf
                        },
                        success: function(data) {
                            $('.flight' + id).remove();
                        },
                        error: function(data) {
                            alert('Error occurred!');
                        }
                    });
                }
            });

        }(jQuery));
    </script>:
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/lhakpa/public_html/resources/views/admin/settings/setting.blade.php ENDPATH**/ ?>