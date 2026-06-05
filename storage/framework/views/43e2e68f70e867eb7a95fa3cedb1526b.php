<?php $__env->startSection('title', 'Post Type'); ?>
<?php $__env->startSection('breadcrumb'); ?>
    <a href="<?php echo e(route('type.posttype.index', Request::segment(2))); ?>" class="btn btn-primary btn-sm">List</a>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <form class="form-horizontal" role="form" action="<?php echo e(route('type.posttype.store', Request::segment(2))); ?>" method="post"
        enctype="multipart/form-data">
        <?php echo e(csrf_field()); ?>

        <div class="col-md-9">
            <!-- Input Fields -->
            <div class="panel">
                <div class="panel-heading">
                    <span class="panel-title">New Post Type</span>
                </div>
                <div class="panel-body">
                    <div class="form-group">
                        <label for="inputStandard" class="col-lg-3 control-label">Post Type</label>
                        <div class="col-lg-8">
                            <div class="bs-component">
                                <input type="text" id="post_type" name="post_type" class="form-control" placeholder="" required/>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputStandard" class="col-lg-3 control-label"> Uri</label>
                        <div class="col-lg-8">
                            <div class="bs-component">
                                <input type="text" id="uri" name="uri" class="form-control" placeholder="" />
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputStandard" class="col-lg-3 control-label">Post Subtitle</label>
                        <div class="col-lg-8">
                            <div class="bs-component">
                                <input type="text" id="sub_title" name="sub_title" class="form-control" placeholder="" />
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputStandard" class="col-lg-3 control-label"> Associated Title</label>
                        <div class="col-lg-8">
                            <div class="bs-component">
                                <input type="text" id="uri" name="associated_title" class="form-control" placeholder="" />
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputStandard" class="col-lg-3 control-label"> Ordering </label>
                        <div class="col-lg-8">
                            <div class="bs-component">
                                <input type="text" id="ordering" name="ordering" class="form-control"
                                    value="<?php echo e($ordering); ?>" />
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputStandard" class="col-lg-3 control-label"> Is Menu ? </label>
                        <div class="col-lg-8">
                            <div class="bs-component">
                                <select name="is_menu" class="form-control input-sm">
                                    <option value="0"> No </option>
                                    <option value="1"> Yes </option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-3 control-label" for="textArea3">Content </label>
                        <div class="col-lg-8">
                            <div class="bs-component">
                                <textarea class="my-editor form-control" id="editor2" name="content" rows="3"> </textarea>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="admin-form">

                <div class="sid_bvijay mb10">
                    <div class="hd_show_con">
                        <div class="publice_edi">
                            Status:
                            <a href="avoid:javascript;" data-toggle="collapse" data-target="#publish_1">
                                Active
                            </a>
                        </div>
                    </div>
                    <footer>
                        <div id="publishing-action">
                            <input type="submit" class="btn btn-primary btn-lg" value="Publish" />
                        </div>
                        <div class="clearfix"></div>
                    </footer>
                    <div class="clearfix"></div>
                </div>

                <div class="sid_bvijay mb10">
                    <label class="field select">
                        <select id="nav_type" name="nav_type" required>
                            <option value="" selected hidden>Select Type</option>
                            <option value="about">Company & Information</option>
                            <option value="about">Services & Support</option>
                            <option value="about">Media & Team</option>
                        </select>
                        <i class="arrow"></i>
                    </label>
                </div>
                <div class="sid_bvijay mb10">
                    <label class="field select">
                        <select id="template" name="template">
                            <?php $__currentLoopData = $templates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $template): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($key); ?>"><?php echo e(ucfirst($template)); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                        <i class="arrow"></i>
                    </label>
                </div>

                <div class="sid_bvijay mb10">
                    <h4> Image </h4>
                    <div class="hd_show_con">
                        <div id="xedit-demo">
                            <input type="file" name="banner" />
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </form>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
    <script type="text/javascript">
        $(document).ready(function () {
            var post_type;
            $('#post_type').on('keyup', function () {
                post_type = $('#post_type').val();
                post_type = post_type.replace(/[^a-zA-Z0-9 ]+/g, "");
                post_type = post_type.replace(/\s+/g, "-");
                $('#uri').val(post_type);
            });
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Lhakpa_june\resources\views/admin/post-type/create.blade.php ENDPATH**/ ?>