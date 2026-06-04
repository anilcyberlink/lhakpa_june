<div class="col-md-12">
    <div class="panel">
        <div class="panel-heading">
            <span class="panel-title"> Trip Itinerary </span>
            <a class="btn btn-primary pull-right add-itinerary" data-added="0"><i
                    class="glyphicon glyphicon-plus"></i> Add Row </a>
        </div>

        <div class="panel-body" id="row_body">
            <div class="row">
                <div class="col-lg-12">
                <div class="col-md-1"> <label>Ordering </label></div>
                <div class="col-md-1"> <label>Days</label></div>
                <div class="col-md-5"> <label>Title</label></div>
                <div class="col-md-2"> <label>Max Altitude</label></div>
                <!--<div class="col-md-2"> <label>Distance</label></div>-->
                <div class="col-md-2"> <label>Duration</label></div>
                <div class="col-md-1"> </div>
            </div>
            </div>
            <?php if($itineraries->count() > 0): ?>
                <?php $__currentLoopData = $itineraries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <div class="row" id="rec-<?php echo e($loop->iteration); ?>">
                          <input type="hidden" name="itinerary_id[]" value="<?php echo e($row->id); ?>" />
                    <div class="col-lg-12">
                    <div class="col-md-1"> <input type="number" min="1" max="2000" name="itinerary_ordering[]" value="<?php echo e($row->ordering); ?>" class="form-control" placeholder="" /></div>
                            
                    <div class="col-md-1"><input type="text" name="itinerary_days[]" value="<?php echo e($row->days); ?>" class="form-control" placeholder="Day" /></div>
                            
                    <div class="col-md-5"><input type="text" name="itinerary_title[]" value="<?php echo e($row->title); ?>" class="form-control" placeholder="Title" /></div>
                            
                     <div class="col-md-2"><input type="text" name="itinerary_max_altitude[]" value="<?php echo e($row->max_altitude); ?>" class="form-control" placeholder="Max Altitude" /></div>
                    
                     <!--<div class="col-md-2"><input type="text" name="itinerary_distance[]" value="<?php echo e($row->distance); ?>" class="form-control" placeholder="Distance" /></div>-->
                    
                     <div class="col-md-2"><input type="text" name="itinerary_duration[]" value="<?php echo e($row->duration); ?>" class="form-control" placeholder="Duration" /></div>
                    
                     <div class="col-md-1"><button class="btn btn-danger delete-itinerary" itinerary-rowid="<?php echo e($row->id); ?>" itinerary-data-id="<?php echo e($loop->iteration); ?>"><i class="glyphicon glyphicon-trash"></i></button></div>
                    </div>
                    <div class="col-lg-12">
                    <div class="col-md-12"><textarea name="itinerary_content[]" class="textarea form-control" placeholder="Content Goes Here" > <?php echo e($row->content); ?> </textarea></div>
                    </div>
                    <div class="clearfix"></div>
                    <hr>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
        </div>

        <div style="display:none;">
            <div id="row_additional">
                  <div class="row">
                      <input type="hidden" name="itinerary_id[]" value="" />
                    <div class="col-lg-12">
                    <div class="col-md-1"> <input type="number" min="1" max="2000" name="itinerary_ordering[]" class="form-control" placeholder="SN" /></div>
                            
                    <div class="col-md-1"><input type="text" name="itinerary_days[]" class="form-control" placeholder="Day" /></div>
                            
                    <div class="col-md-5"><input type="text" name="itinerary_title[]" class="form-control" placeholder="Title" /></div>
                            
                     <div class="col-md-2"><input type="text" name="itinerary_max_altitude[]" class="form-control" placeholder="Max Altitude" /></div>
                    
                     <!--<div class="col-md-2"><input type="text" name="itinerary_distance[]" class="form-control" placeholder="Distance" /></div>-->
                    
                     <div class="col-md-2"><input type="text" name="itinerary_duration[]" class="form-control" placeholder="Duration" /></div>
                    
                   <div class="col-md-1"><button class="btn btn-danger delete-itinerary" itinerary-data-id="0"><i class="glyphicon glyphicon-trash"></i></button></div>
                    </div>
                    <div class="col-lg-12">
                    <div class="col-md-12"><textarea name="itinerary_content[]" class="form-control" placeholder="Content Goes Here" ></textarea></div>
                    </div>
                    <div class="clearfix"></div>
                    <hr>
                </div>
            </div>
        </div>

    </div>
</div>
<?php /**PATH /home/lhakpa/public_html/resources/views/admin/trips/edit/edit-itinerary.blade.php ENDPATH**/ ?>