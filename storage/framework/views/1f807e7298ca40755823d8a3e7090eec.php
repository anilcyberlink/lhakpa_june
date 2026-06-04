
<?php $__env->startSection('title','Banner'); ?>
<?php $__env->startSection('breadcrumb'); ?>
<a href="admin/banner" class="btn btn-primary btn-sm">List</a>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

<form class="form-horizontal" role="form" action="<?php echo e(url('admin/banner', $data->id)); ?>" method="post" enctype="multipart/form-data">
<?php echo e(csrf_field()); ?>   
<input type="hidden" name="_method" value="PUT" />          
<div class="col-md-12">
<!-- Input Fields -->
<div class="panel">
  <div class="panel-heading">
    <span class="panel-title">Edit Banner</span>
  </div>
  <div class="panel-body"> 
 
      <div class="form-group">
        <label for="inputStandard" class="col-lg-2 control-label">Title</label>
        <div class="col-lg-6">
          <div class="bs-component">
            <input type="text" id="inputStandard" name="title" class="form-control" placeholder="" value="<?php echo e($data->title); ?>" />
          </div>
        </div>
      </div>  

     <div class="form-group">
        <label for="inputStandard" class="col-lg-2 control-label">Caption</label>
        <div class="col-lg-6">
          <div class="bs-component">
            <input type="text" id="inputStandard" name="caption" class="form-control" placeholder=""  value="<?php echo e($data->caption); ?>"/>
          </div>
        </div>
      </div>              
    
      <div class="form-group">
        <label class="col-lg-2 control-label" for="banner">Banner</label>
        <div class="col-lg-6">
          <div class="bs-component">
            <input type="file" class="form-control" name="picture"/>
          </div> <br />
            ( Width: 1350px, Height:550px all time fix size )
        </div>
        
      </div>

      <?php if($data->picture != '' OR $data->picture != null): ?>
      <div class="form-group">
        <label class="col-lg-2 control-label" for="banner"></label>
        <div class="col-lg-6">
          <div class="bs-component">
              <a href="#<?php echo e($data->id); ?>" class="picturedelete">X</a>
            <img src="<?php echo e(url(env('PUBLIC_PATH').'uploads/banners/' . $data->picture )); ?>" width="70%" />
          </div>
        </div>
      </div>                    
      <?php endif; ?>

    <div class="form-group">
        <label class="col-lg-2 control-label" for="banner">Video</label>
        <div class="col-lg-6">
          <div class="bs-component">
            <input type="file" class="form-control" name="video"/>
          </div><br />
           ( Video Size: Less than 20MB )
        </div>
      </div>  
      <?php if($data->video != '' OR $data->video != null): ?>
      <div class="form-group">
        <label class="col-lg-2 control-label" for="banner"></label>
        <div class="col-lg-6">
          <div class="bs-component">
              <a href="#<?php echo e($data->id); ?>" class="bannerdelete">X</a>
            <video uk-video uk-cover preload="auto" width="100%" height="auto" loop playsinline
               autoplay muted data-setup='{"fluid": true,"controls": false,"loop":true}'>
               <source src="<?php echo e(asset('uploads/banners/'.$data->video)); ?>" type="video/mp4" muted>
            </video>
          </div>
        </div>
      </div>                    
      <?php endif; ?>
      
     <div class="form-group">
       <label class="col-lg-2 control-label" for="link">Youtube ID</label>
       <div class="col-lg-6">
        <div class="bs-component">
           <input type="text" class="form-control" name="youtube_link" placeholder="Unique Video ID of youtube video" value="<?php echo e($data->youtube_link); ?>" /> <br /> https://youtu.be/<b>iwhpS4ow7Zc</b>     
         </div>
       </div>
    </div>           

     <div class="form-group">
        <label class="col-lg-2 control-label" for="link">Button Link</label>
        <div class="col-lg-6">
          <div class="bs-component">
            <input type="text" class="form-control" name="link" value="<?php echo e($data->link); ?>" placeholder="http://www.google.com" /> <br />
           
          </div>
        </div>
      </div> 
     
      <div class="form-group">
        <label class="col-lg-2 control-label" for=""></label>
        <div class="col-lg-6">
          <div class="bs-component">
            <input type="submit" class="form-control btn btn-primary" name="submit" value="Submit" />
          </div>
        </div>
      </div> 
    
  </div>
</div>          
</div>


</form>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
          <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script type="text/javascript">
          $('.bannerdelete').on('click',function(e){
            e.preventDefault();
            if(!confirm('Are you sure to delete?')) return false;
            var csrf = $('meta[name="csrf-token"]').attr('content');
            var str = $(this).attr('href');
            var id = str.slice(1);
            $.ajax({
              type:'delete',
              url:"<?php echo e(url('delete_video') . '/'); ?>" + id,
              data:{_token:csrf},
              success:function(data){
                $('span.banner_id' + id ).remove();
                location.reload();
              },
              error:function(data){
                alert(data + 'Error!');
              }
            });
          });
        </script>
        <script type="text/javascript">
          $('.picturedelete').on('click',function(e){
            e.preventDefault();
            if(!confirm('Are you sure to delete?')) return false;
            var csrf = $('meta[name="csrf-token"]').attr('content');
            var str = $(this).attr('href');
            var id = str.slice(1);
            $.ajax({
              type:'delete',
              url:"<?php echo e(url('delete_pic') . '/'); ?>" + id,
              data:{_token:csrf},
              success:function(data){
                $('span.banner_id' + id ).remove();
                location.reload();
              },
              error:function(data){
                alert(data + 'Error!');
              }
            });
          });
        </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/lhakpa/public_html/resources/views/admin/banner/edit.blade.php ENDPATH**/ ?>