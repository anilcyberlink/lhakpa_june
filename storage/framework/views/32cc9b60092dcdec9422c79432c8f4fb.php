<div class="col-md-12">
    <div class="panel">
        <div class="panel-heading">
            <span class="panel-title"> Guidelines </span>
            <a class="btn btn-primary pull-right add-guide" data-added="0"><i class="glyphicon glyphicon-plus"></i> Add Row </a>
        </div>

        <div class="panel-body" id="row_guide_body">
            <?php if($guidelines->count() > 0): ?>
                <?php $__currentLoopData = $guidelines; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="row" id="guide-rec-<?php echo e($loop->iteration); ?>">
                        <input type="hidden" name="guide_id[]" value="<?php echo e($row->id); ?>" />
                        <div class="row">
                            <div class="col-md-1"><label>Ordering</label></div>
                            <div class="col-md-10"><label>Title</label></div>
                        </div> 
                        <div class="col-md-1">
                            <input type="number" min="1" max="2000" name="guide_ordering[]" value="<?php echo e($row->ordering); ?>" class="form-control" placeholder="" />
                        </div>
                        <div class="col-md-10">
                            <input type="text" name="guide_title[]" value="<?php echo e($row->title); ?>" class="form-control" placeholder="" />
                        </div>
                        <div class="col-md-10"><label>Content</label></div>
                        <div class="col-md-10">
                            <textarea class="my-editor form-control" name="guide_content[]" value="<?php echo e($row->content); ?>" placeholder=""><?php echo e($row->content); ?></textarea>
                        </div>
                      
                        <div class="col-md-1"><button class="btn btn-danger delete-guide" guide-rowid="<?php echo e($row->id); ?>" guide-data-id="<?php echo e($loop->iteration); ?>"><i class="glyphicon glyphicon-trash"></i></button></div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
        </div>

        <div style="display:none;">
            <div id="row_guide_additional">
                <div class="row">
                    <input type="hidden" name="guide_id[]" value="" />
                    <div class="col-md-12">
                        <div class="col-md-1"><label>Ordering</label></div>
                        <div class="col-md-10"><label>Title</label></div>
                    </div> 
                    <div class="col-md-1">
                        <input type="number" min="1" max="2000" name="guide_ordering[]" class="form-control" placeholder="" />
                    </div>
                    <div class="col-md-10">
                        <input type="text" name="guide_title[]" class="form-control" placeholder="" />
                    </div>
                    <div class="col-md-10"><label>Content</label></div>
                    <div class="col-md-10">
                        <textarea class="form-control" name="guide_content[]" placeholder=""></textarea>
                    </div>
                    
                    <div class="col-md-1"><button class="btn btn-danger delete-guide" guide-data-id="0"><i class="glyphicon glyphicon-trash"></i></button></div>
                </div>
            </div>
        </div>


    </div>


</div>
<?php /**PATH /home/lhakpa/public_html/resources/views/admin/trips/edit/edit-guide.blade.php ENDPATH**/ ?>