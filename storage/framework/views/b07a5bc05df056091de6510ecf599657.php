<div class="col-md-12">
    <div class="panel">
        <div class="panel-heading">
            <span class="panel-title"> Equipment </span>
            <a class="btn btn-primary pull-right add-info" data-added="0"><i class="glyphicon glyphicon-plus"></i> Add
                Row </a>
        </div>

        <div class="panel-body" id="row_info_body">
            
            <?php if($costexcludes->count() > 0): ?>
                <?php $__currentLoopData = $costexcludes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="row" id="info-rec-<?php echo e($loop->iteration); ?>">
                        <input type="hidden" name="info_id[]" value="<?php echo e($row->id); ?>" />
                        <div class="row">
                            <div class="col-md-1"><label>Ordering</label></div>
                            <div class="col-md-10"><label>Title</label></div>
                        </div> 
                        <div class="col-md-1">
                            <input type="number" min="1" max="2000" name="info_ordering[]" value="<?php echo e($row->ordering); ?>" class="form-control" placeholder="" />
                        </div>
                        <div class="col-md-10">
                            <input type="text" name="info_title[]" value="<?php echo e($row->title); ?>" class="form-control" placeholder="" />
                        </div>
                        <div class="col-md-10"><label>Content</label></div>
                        <div class="col-md-10">
                            <textarea class="my-editor form-control" name="info_content[]" value="<?php echo e($row->content); ?>" placeholder=""><?php echo e($row->content); ?></textarea>
                        </div>
                      
                        <div class="col-md-1"><button class="btn btn-danger delete-info" info-rowid="<?php echo e($row->id); ?>" info-data-id="<?php echo e($loop->iteration); ?>"><i class="glyphicon glyphicon-trash"></i></button></div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
        </div>

        <div style="display:none;">
            <div id="row_info_additional">
                <div class="row">
                    <input type="hidden" name="info_id[]" value="" />
                    
                    <div class="col-md-12">
                        <div class="col-md-1"><label>Ordering</label></div>
                        <div class="col-md-10"><label>Title</label></div>
                    </div> 
                    <div class="col-md-1">
                        <input type="number" min="1" max="2000" name="info_ordering[]" class="form-control" placeholder="" />
                    </div>
                    <div class="col-md-10">
                        <input type="text" name="info_title[]" class="form-control" placeholder="" />
                    </div>
                    <div class="col-md-10"><label>Content</label></div>
                    <div class="col-md-10">
                        <textarea class="form-control" name="info_content[]" placeholder=""></textarea>
                    </div>
                    
                    <div class="col-md-1"><button class="btn btn-danger delete-info" info-data-id="0"><i class="glyphicon glyphicon-trash"></i></button></div>
                </div>
            </div>
        </div>


    </div>


</div>
<?php /**PATH /home/lhakpa/public_html/resources/views/admin/trips/edit/edit-cost-excludes.blade.php ENDPATH**/ ?>