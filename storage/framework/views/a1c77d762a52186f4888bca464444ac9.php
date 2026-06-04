
<?php $__env->startSection('title', 'Post Category'); ?>
<?php $__env->startSection('breadcrumb'); ?>
    <?php if(Request::segment(3)): ?>
        <a href="<?php echo e(url('admin/associated/' . Request::segment(3) . '/' . $data->post_id)); ?>"
            class="btn btn-primary btn-sm">Go
            Back</a>
    <?php endif; ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <form class="form-horizontal" role="form"
        action="<?php echo e(url('admin/associated/' . Request::segment(3) . '/' . Request::segment(4))); ?>" method="post"
        enctype="multipart/form-data">
        <?php echo e(csrf_field()); ?>

        <input type="hidden" name="_method" value="PUT" />
        <div class="col-md-12">
            <!-- Input Fields -->
            <div class="panel">
                <div class="panel-heading">
                    <span class="panel-title">Create Associated Post</span>
                </div>
                <div class="panel-body">
                    <input type="hidden" name="post_id" value="<?php echo e(Request::segment(4)); ?>" />
                    <div class="form-group">
                        <label for="title" class="col-lg-2 control-label">Name</label>
                        <div class="col-lg-9">
                            <div class="bs-component">
                                <input type="text" id="title" name="title" class="form-control"
                                    value="<?php echo e($data->title); ?>" />
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputStandard" class="col-lg-2 control-label">Designation</label>
                        <div class="col-lg-9">
                            <div class="bs-component">
                                <div class="bs-component">
                                    
                                    <input class="form-control" id="" name="brief" rows="3" autocomplete="off" value="<?php echo e($data->brief); ?>"/>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputStandard" class="col-lg-2 control-label">Message</label>
                        <div class="col-lg-9">
                            <div class="bs-component">
                                <div class="bs-component">
                                    <textarea class="form-control my-editor" id="" name="content" rows="4" autocomplete="off"><?php echo e($data->content); ?></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="title" class="col-lg-2 control-label">Ordering</label>
                        <div class="col-lg-9">
                            <div class="bs-component">
                                <input type="number" id="ordering" name="ordering" class="form-control"
                                    value="<?php echo e($data->ordering); ?>" />
                            </div>
                        </div>
                    </div>

             <div class="form-group">
                  <label for="title" class="col-lg-2 control-label">Show in home</label>
                    <div class="col-lg-9">
                        <div class="bs-component">
                        <input type="checkbox" name="show_in_home"
                               value="<?php echo e($data->show_in_home); ?>" <?php echo e(($data->show_in_home == 1)?'checked':''); ?> />
                        <!--Show in home <br>-->
                        </div>
                    </div>
                </div>
                
                <?php if(Request::segment(3) == 'international-team'): ?>
                <div class="form-group">
                    <label for="inputStandard" class="col-lg-2 control-label">Languages</label>
                    <div class="col-lg-9">
                        <div class="bs-component">
                            <div class="bs-component">
                                <input class="form-control" name="language" rows="3" autocomplete="off" value="<?php echo e($data->language); ?>"/>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                  <label for="title" class="col-lg-2 control-label">Show in detail</label>
                    <div class="col-lg-9">
                        <div class="bs-component">
                        <input type="checkbox" name="in_detail"
                               value="<?php echo e($data->in_detail); ?>" <?php echo e(($data->in_detail == 1)?'checked':''); ?> />
                        </div>
                    </div>
                </div>
                <?php endif; ?>
                
                    <div class="form-group">
                        <label for="inputStandard" class="col-lg-2 control-label">Photo</label>
                        <div class="col-lg-9">
                            <div class="bs-component">
                                <div class="bs-component">
                                    <div id="xedit-demo">
                                        <?php if($data->thumbnail): ?>
                                            <span class="id<?php echo e($data->id); ?>">
                                                <a href="#<?php echo e($data->id); ?>" class="imagedelete"></a>
                                                <img src="<?php echo e(asset(env('PUBLIC_PATH') . 'uploads/associated/' . $data->thumbnail)); ?>"
                                                    width="150" />
                                            </span>
                                            <hr>
                                        <?php endif; ?>
                                        <input type="file" name="thumbnail" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-2 control-label" for=""> </label>
                        <div class="col-lg-9">
                            <div class="bs-component">
                                <input type="submit" class="btn btn-primary btn-lg" value="Submit" />
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>

        <div class="col-md-4"> </div>
    </form>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/lhakpa/public_html/resources/views/admin/associated-post/edit.blade.php ENDPATH**/ ?>