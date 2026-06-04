<div class="col-md-12">
    <div class="panel">
        <div class="panel-heading">
            <span class="panel-title"> Document</span>
            <a class="btn btn-primary pull-right add-banner" data-added="0"><i class="glyphicon glyphicon-plus"></i> Add
                Row </a>
        </div>

        <div class="panel-body" id="row_banner_body">
            
            <?php if($banner->count() > 0): ?>
                <?php $__currentLoopData = $banner; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="row" id="banner-rec-<?php echo e($loop->iteration); ?>">
                        <input type="hidden" name="banner_id[]" value="<?php echo e($row->id); ?>" />
                        
                        <!--<div class="col-md-4">-->
                        <!--    <input type="text" name="banner_video[]" value="<?php echo e($row->video); ?>" class="form-control"-->
                        <!--        placeholder="" />-->
                        <!--</div>-->
                        
                        <div class="row">
                            <div class="col-md-1"><label>Ordering</label></div>
                            <div class="col-md-10"><label>Title</label></div>
                        </div> 
                        <div class="col-md-1">
                            <input type="number" min="1" max="2000" name="banner_ordering[]" value="<?php echo e($row->ordering); ?>" class="form-control" placeholder="" />
                        </div>
                        <div class="col-md-10">
                            <input type="text" name="banner_title[]" value="<?php echo e($row->title); ?>" class="form-control" placeholder="" />
                        </div>
                        <div class="col-md-10"><label>Content</label></div>
                        <div class="col-md-10">
                            <textarea class="my-editor form-control" name="banner_content[]" value="<?php echo e($row->content); ?>" placeholder=""><?php echo e($row->content); ?></textarea>
                        </div>

                        <div class="col-md-1"><button class="btn btn-danger delete-banner" banner-rowid="<?php echo e($row->id); ?>" banner-data-id="<?php echo e($loop->iteration); ?>"><i class="glyphicon glyphicon-trash"></i></button></div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
        </div>

        <div style="display:none;">
            <div id="row_banner_additional">
                <div class="row">
                    <input type="hidden" name="banner_id[]" value="" />
                    
                    <div class="col-md-12">
                        <div class="col-md-1"><label>Ordering</label></div>
                        <div class="col-md-10"><label>Title</label></div>
                    </div> 
                    <div class="col-md-1">
                        <input type="number" min="1" max="2000" name="banner_ordering[]" class="form-control" placeholder="" />
                    </div>
                    <div class="col-md-10">
                        <input type="text" name="banner_title[]" class="form-control" placeholder="" />
                    </div>
                    <div class="col-md-10"><label>Content</label></div>
                    <div class="col-md-10">
                        <textarea class="form-control" name="banner_content[]" placeholder=""></textarea>
                    </div>
                    
                    <div class="col-md-1"><button class="btn btn-danger delete-banner" banner-data-id="0"><i class="glyphicon glyphicon-trash"></i></button></div>
                </div>
            </div>
        </div>


    </div>


</div>
<?php /**PATH /home/lhakpa/public_html/resources/views/admin/trips/edit/edit-banner.blade.php ENDPATH**/ ?>