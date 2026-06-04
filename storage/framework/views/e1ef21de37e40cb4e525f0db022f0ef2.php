
<?php $__env->startSection('title','Trip Inquiry'); ?>
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
                        <th class="">Full Name</th>
                        <th class="">Trip</th> 
                        <th class="">Email</th>
                        <th class="">Message</th>
                        <th class="">Contact Details</th>
                        <th class="text-left">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                      
                        <?php if(count($inquiry) > 0): ?>
                            <?php $__currentLoopData = $inquiry; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                           <tr class="bg-light">
                            <td class=""><?php echo e($key+=1); ?></td>                               
                            <td class=""><?php echo e(ucfirst($row->name)); ?><br><?php echo e($row->created_at->format('d M Y')); ?><br>Country:<?php echo e($row->country); ?></td>
                            <td class=""><?php echo e(tripname($row->trip_id)); ?></td>                 
                            <td class=""><?php echo e($row->email); ?></td> 
                            <td class=""><textarea><?php echo $row->message; ?></textarea></td> 
                            <td class=""><?php echo e($row->number); ?></td>
                            <td class="text-left">
                              <form action="<?php echo e(route('trip-inquiry.destroy', $row->id)); ?>" method="POST">
                                <?php echo e(method_field('DELETE')); ?>

                                <?php echo e(csrf_field()); ?>

                                <button class="fa fa-trash form-control" style="color:red;"></button>
                              </form>
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
<script src="<?php echo e(asset('vendor/plugins/datatables/media/js/jquery.dataTables.js')); ?>"></script>

<!-- Datatables Tabletools addon -->
<script src="<?php echo e(asset('vendor/plugins/datatables/extensions/TableTools/js/dataTables.tableTools.min.js')); ?>"></script>

<!-- Datatables ColReorder addon -->
<script src="<?php echo e(asset('vendor/plugins/datatables/extensions/ColReorder/js/dataTables.colReorder.min.js')); ?>"></script>

<!-- Datatables Bootstrap Modifications  -->
<script src="<?php echo e(asset('vendor/plugins/datatables/media/js/dataTables.bootstrap.js')); ?>"></script>
    <script type="text/javascript">
        

/********/
  $('document').ready(function(){
    $('#checkAll').on('click',function(e){
      if($(this).is(':checked', true)){
        $('.check_box').prop('checked', true);
      }else{
        $('.check_box').prop('checked', false);
      }
    });
    $('.deleteAll').on(function(){

    });
  });


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
    "iDisplayLength": 10,
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

<?php $__env->stopSection(); ?>


<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/lhakpa/public_html/resources/views/admin/trip-inquiry/index.blade.php ENDPATH**/ ?>