<div class="col-md-12">
    <!-- Input Fields -->
    <div class="panel">
        <div class="panel-heading">
            <span class="panel-title">Flight Information</span>
        </div>
        <div class="panel-body">
            <div class="form-group">
                <label for="inputStandard" class="col-lg-2 control-label">Link</label>
                <div class="col-lg-8">
                    <div class="bs-component">
                        <input type="text" id="" name="flight_link" class="form-control" placeholder=""
                               value="<?php echo e($data->flight_link); ?>"/>
                    </div>
                </div>
            </div>
            
            <div class="form-group">
                <label for="inputStandard" class="col-lg-2 control-label">Photo</label>
                <div class="col-lg-8">
                    <div class="bs-component">
                        <?php if($data->flight_photo): ?>
                        <span class="flight<?php echo e($data->id); ?>">
                            <a href="<?php echo e($data->id); ?>" id="remove_flight"><span>X</span></a>
                               <a href="<?php echo e(asset('uploads/original/'.$data->flight_photo)); ?>" target="_blank"><img src="<?php echo e(asset('uploads/original/'.$data->flight_photo)); ?>" name="logo" width="150"/></a>
                              <hr>
                              </span>
                        <?php endif; ?> 
                        <input type="file" id="" name="flight_photo" class="form-control" placeholder=""
                               />
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><?php /**PATH /home/lhakpa/public_html/resources/views/admin/settings/flight.blade.php ENDPATH**/ ?>