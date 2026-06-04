
<?php $__env->startSection('title','Trip Booking'); ?>
<?php $__env->startSection('breadcrumb'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="tray tray-center" style="height: 647px;">
        <div class="panel">
            <div class="panel-body ph20">
                <div class="tab-content">
                    <div id="users" class="tab-pane active">
                        <div class="table-responsive mhn20 mvn15">
                            <table class="table admin-form table-striped dataTable" id="datatable3">
                                <thead>
                                <tr class="bg-light">
                                    <th class="">SN</th>  
                                    <th>Name</th>                                 
                                    <th class="">Email</th>
                                    <th class="">Trip / REF ID</th>
                                    <th>Departure Type</th>
                                    <th  class="text-center align-middle">Trip Status</th>
                                    <th class="text-left">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php if(count($book) > 0): ?>
                                <?php $__currentLoopData = $book; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr class="bg-light">
                                  <td class=""><?php echo e($key+=1); ?></td>  
                                  <td>
                                    <a href="<?php echo e(route('view-trip-booking',$row->id)); ?>"><?php echo e($row->full_name); ?></a>
                                  </td>
                                  <td class="">
                                    <?php echo e($row->email); ?> 
                                  </td>
                                  <td class="">
                                    <?php echo e($row->title); ?><br/>
                                    <?php echo e(tripdetail($row->trip_id)->trip_code); ?>

                                  </td>
                                  <td>
                                    <?php echo e($row->depature_type == 1 ? 'Fixed Departure' : 'Normal Booking'); ?>

                                  </td>
                                  <td id="status-<?php echo e($row->id); ?>" class="text-center align-middle">
                                    <?php if($row->paid_status == 1): ?>
                                        <span class="text-success">Completed</span> <br>
                                        <!--<button onclick="updateStatus(<?php echo e($row->id); ?>)" class="btn btn-xs btn-warning mt-1">Mark as Ongoing</button>-->
                                    <?php else: ?>
                                        <span class="text-danger">Ongoing</span> <br>
                                        <button onclick="updateStatus(<?php echo e($row->id); ?>)" class="btn btn-xs btn-success  mt-1">Mark as Completed</button>
                                    <?php endif; ?>
                                  </td>
                                  <td class="text-left">
                                    <a href="<?php echo e(route('view-trip-booking',$row->id)); ?>">View</a> |
                                    <span class="trash"><a href="<?php echo e(route('delete-booking',$row->id)); ?>" onclick="return confirm('Confirm Delete?')" class="btn-btn-danger">Delete</a></span> 
                                    
                                  </td>
                                </tr>

                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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

<?php $__env->startSection('libraries'); ?>
<!-- Datatables -->
<script src="<?php echo e(asset('vendor/plugins/datatables/media/js/jquery.dataTables.js')); ?>"></script>

<!-- Datatables Tabletools addon -->
<script src="<?php echo e(asset('vendor/plugins/datatables/extensions/TableTools/js/dataTables.tableTools.min.js')); ?>"></script>

<!-- Datatables ColReorder addon -->
<script src="<?php echo e(asset('vendor/plugins/datatables/extensions/ColReorder/js/dataTables.colReorder.min.js')); ?>"></script>

<!-- Datatables Bootstrap Modifications  -->
<script src="<?php echo e(asset('vendor/plugins/datatables/media/js/dataTables.bootstrap.js')); ?>"></script>

<script type="text/javascript">

/************/
  $('#datatable3').dataTable({
    "aoColumnDefs": [{
      'bSortable': true,
      'aTargets': [-1]

    }],
    "oLanguage": {
      "oPaginate": {
        "sPrevious": "Previous",
        "sNext": "Next"
      }
    },
    "iDisplayLength": 20,
    "aLengthMenu": [
    [5, 10, 25, 50, -1],
    [5, 10, 25, 50, "All"]
    ],
    "sDom": '<"dt-panelmenu clearfix"Tfr>t<"dt-panelfooter clearfix"ip>',
    "oTableTools": {
      "sSwfPath": "<?php echo e(asset('vendor/plugins/datatables/extensions/TableTools/swf/copy_csv_xls_pdf.swf')); ?>"
    }
  });
  </script>

<script>
  function updateStatus(id) {
      if (!confirm("Are you sure you want to change the status?")) {
          return; // Stop if user clicks Cancel
      }
      fetch(`/bookings/${id}/update-status`, {
          method: 'POST',
          headers: {
              'X-CSRF-TOKEN': '<?php echo e(csrf_token()); ?>',
              'Content-Type': 'application/json'
          }
      })
      .then(response => response.json())
      .then(data => {
          location.reload();
      })
      .catch(error => console.error('Error:', error));
  }
</script>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/lhakpa/public_html/resources/views/admin/trip-booking/index.blade.php ENDPATH**/ ?>