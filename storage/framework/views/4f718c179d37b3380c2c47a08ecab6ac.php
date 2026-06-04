
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
                                <th class="">Details</th>
                                <th class="">Date</th>
                                <th class="">Country</th>
                                <th class="">Comments</th>
                                <th class="text-left">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php if(count($data) > 0): ?>
                                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr class="bg-light">
                                    <td class=""><?php echo e($key+=1); ?></td>
                                    <td class=""><?php echo e(ucfirst($row->full_name)); ?> <br> <?php echo e(($row->email)); ?> <br> <?php echo e($row->number); ?></td>
                                    <td><?php echo e($row->created_at->format('d M Y')); ?></td>
                                    <td class=""><?php echo e($row->country); ?></td>
                                    <td class=""><textarea><?php echo $row->message; ?></textarea></td> 
                                    <td class="text-left">
                                    <form action="<?php echo e(route('contact-us.destroy', $row->id)); ?>" method="POST">
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
<!-- Datatables -->
<script src="<?php echo e(asset('vendor/plugins/datatables/media/js/jquery.dataTables.js')); ?>"></script>

<!-- Datatables Tabletools addon -->
<script src="<?php echo e(asset('vendor/plugins/datatables/extensions/TableTools/js/dataTables.tableTools.min.js')); ?>"></script>

<!-- Datatables ColReorder addon -->
<script src="<?php echo e(asset('vendor/plugins/datatables/extensions/ColReorder/js/dataTables.colReorder.min.js')); ?>"></script>

<!-- Datatables Bootstrap Modifications  -->
<script src="<?php echo e(asset('vendor/plugins/datatables/media/js/dataTables.bootstrap.js')); ?>"></script>

<script type="text/javascript">
jQuery(document).ready(function() {
  $('.btn-delete').on('click',function(e){
    e.preventDefault();
    if(!confirm('Are you sure to delete?')) return false;
    var csrf = $('meta[name="csrf-token"]').attr('content');
    var str = $(this).attr('href');
    var id = str.slice(1);
    $.ajax({
      type:'DELETE',
      url:"<?php echo e(url('admin/teams') . '/'); ?>" + id,
      data:{_token:csrf},    
      success:function(data){ 
        $('tbody tr.id' + id ).remove();
      },
      error:function(data){       
       alert('Error occurred!');
     }
   });
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
    "iDisplayLength": 50,
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


<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/lhakpa/public_html/resources/views/admin/contact/index.blade.php ENDPATH**/ ?>