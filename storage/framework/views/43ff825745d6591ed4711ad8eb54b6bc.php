
<?php $__env->startSection('breadcrumb'); ?>
 <a href="<?php echo e(route('trip-booking')); ?>" class="btn btn-primary btn-sm">Go Back</a>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

	<div class="col-md-8">
		<!-- Input Fields -->
		<div class="panel">
			<div class="panel-body">  
				<div class="form-group">
				    <div class="col-lg-12">
						<div class="bs-component">  
						    <h3>Trip Information</h3>
						    <table class="table admin-form table-striped dataTable" id="datatable3">
                                <tbody>
                                    <tr>
                                        <td class=""> Trip Name</td>
                                        <td class=""><?php echo e($book->title); ?></td>
                                    </tr>
                                    <tr>
                                        <td class="">Trip Starts</td>
                                        <td class=""><?php echo e($book->trip_start_date); ?> </td>
                                    </tr>
                                    <?php if($book->trip_end_date): ?>
                                        <tr>
                                            <td class="">Trip Ends</td>
                                            <td class=""><?php echo e($book->trip_end_date); ?> </td>
                                        </tr>
                                    <?php endif; ?>
                                    <?php if($book->trip_days): ?>
                                        <tr>
                                            <td class="">Trip Days</td>
                                            <td class=""><?php echo e($book->trip_days); ?> </td>
                                        </tr>
                                    <?php endif; ?>
                                    <tr>
                                        <td class="">Num of people</td>
                                        <td class=""><?php echo e($book->total_travellers); ?> </td>
                                    </tr>
                                    <tr>
                                        <td class="">Departure Type</td>
                                        <td class=""><?php echo e($book->depature_type == 1 ? 'Fixed' : 'Normal'); ?></td>
                                    </tr>
                                    <?php if($book->price): ?>
                                        <tr>
                                            <td class="">Price</td>
                                            <td class=""><?php echo e($book->price ? $book->price : '-'); ?></td>
                                        </tr>
                                    <?php endif; ?>
                                    <tr>
                                        <td class="">Trip Status</td>
                                        <td class=""><?php echo e($book->paid_status == 1 ? 'Completed' : 'Ongoing'); ?></td>
                                    </tr>
                                </tbody>
                            </table>
						</div>
					</div>
					<div class="col-lg-12">
						<div class="bs-component">
						    <h3>Personal Information</h3>
						    <table class="table admin-form table-striped dataTable" id="datatable3">
                                <tbody>
                                    <tr>
                                        <td class="">Name</td>
                                        <td class=""><?php echo e($book->full_name); ?></td>
                                    </tr>
                                    
                                    <tr>
                                        <td class="">Meal</td>
                                        <td class=""><?php echo e($book->meal == 1 ? 'Yes' : 'No'); ?></td>
                                    </tr>
                                    <?php if($book->gender ): ?>
                                        <tr>
                                            <td class="">Gender</td>
                                            <td class=""><?php echo e($book->gender); ?></td>
                                        </tr>
                                    <?php endif; ?>
                                    <?php if($book->dob): ?>
                                        <tr>
                                            <td class="">D.O.B</td>
                                            <td class=""><?php echo e($book->dob); ?></td>
                                        </tr>
                                    <?php endif; ?>
                                    <?php if($book->nationality): ?>
                                        <tr>
                                            <td class="">Nationality</td>
                                            <td class=""><?php echo e($book->nationality); ?></td>
                                        </tr>
                                    <?php endif; ?>
                                </tbody>
                            </table>
                            
                           
						</div>
					</div>
                    <div class="col-lg-12">
						<div class="bs-component">
						    <h3>Contact Information</h3>
						    <table class="table admin-form table-striped dataTable" id="datatable3">
                                <tbody>
                                    <tr>
                                        <td class="">Email</td>
                                        <td class=""><?php echo e($book->email); ?></td>
                                    </tr>
                                    <tr>
                                        <td class="">Phone</td>
                                        <td class=""><?php echo e($book->phone); ?></td>
                                    </tr>
                                    <tr>
                                        <td class="">Country</td>
                                        <td class=""><?php echo e($book->country); ?></td>
                                    </tr>
                                    <?php if($book->address): ?>
                                        <tr>
                                            <td class="">Address</td>
                                            <td class=""><?php echo e($book->address); ?></td>
                                        </tr>
                                    <?php endif; ?>
                                    <?php if($book->zip): ?>
                                        <tr>
                                            <td class="">Zip/Postal.</td>
                                            <td class=""><?php echo e($book->zip); ?></td>
                                        </tr>
                                    <?php endif; ?>
                                </tbody>
                            </table>
						</div>
					</div>
				</div> 
			</div>
		</div> 
	</div>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/lhakpa/public_html/resources/views/admin/trip-booking/show.blade.php ENDPATH**/ ?>