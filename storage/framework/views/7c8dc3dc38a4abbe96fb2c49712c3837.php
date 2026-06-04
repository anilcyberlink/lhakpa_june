<div class="row">
<div class="col-md-8">
    <!-- Input Fields -->
    <div class="panel">
        <div class="panel-heading">
            <span class="panel-title">New Trip</span>
        </div>
        <div class="panel-body">
            <div class="form-group">
                <div class="col-lg-12">
                    <div class="bs-component">
                        <input type="text" id="trip_title" name="trip_title" class="form-control"
                            value="<?php echo e($data->trip_title); ?>" placeholder="Trip Title" />
                        <input type="hidden" id="uri" name="uri" value="<?php echo e($data->uri); ?>" />
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="col-lg-12">
                    <div class="bs-component">
                        <input type="text" id="sub_title" name="sub_title" class="form-control"
                            value="<?php echo e($data->sub_title); ?>" placeholder="Sub Title" />
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="bs-component">
                    <label>Slogan</label>
                    <input type="text" name="discount" class="form-control" value="<?php echo e($data->discount); ?>" />
                </div>
            </div>
            <div class="col-lg-12">
                <div class="bs-component">
                    <label>Overview</label>
                    <input type="text" name="route" class="form-control" value="<?php echo e($data->route); ?>"/>
                </div>
            </div>
        </div>
    </div>

    <div class="panel">
        <div class="panel-heading">
            <span class="panel-title"> Trip Details </span>
        </div>
        <div class="panel-body">
            <div class="form-group">
                <div class="col-lg-6">
                    <div class="bs-component ">
                        <label>Trip Difficulty</label>
                        <?php if($trek->count() > 0): ?>
                            <select class="form-control" name="trip_grade">
                                
                                <?php $__currentLoopData = $trek; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($row->id); ?>"
                                    <?php echo e($row->id == $data->trip_grade ? 'selected' : ''); ?>><?php echo e($row->id); ?>

                                    </option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        <?php endif; ?>

                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="bs-component">
                        <label>Reference No:</label>
                        <input type="text" name="reference_no" class="form-control" value="<?php echo e($data->trip_code); ?>" required />
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="bs-component">
                        <label>Grade Message</label>
                        
                        <textarea class="my-editor form-control" value="<?php echo e($data->status_text); ?>" name="status_text"><?php echo e($data->status_text); ?></textarea>
                    </div>
                </div>                 
                         <div class="col-lg-6">
                    <div class="bs-component">
                        <label>Max Elevation</label>
                        <input type="text" name="max_altitude" class="form-control"
                            value="<?php echo e($data->max_altitude); ?>" />
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="bs-component">
                    <label>Transportation</label>
                        <input type="text" name="peak_name" class="form-control" value="<?php echo e($data->peak_name); ?>" />
                    </div>
                </div>
            </div>
              <div class="form-group">
           

           <div class="col-lg-6">
    <div class="bs-component">
        <label>Group Size</label>
        <input type="text" name="group_size" class="form-control"
            value="<?php echo e($data->group_size); ?>" />
    </div>
</div>
                
                <div class="col-lg-6">
                    <div class="bs-component">
                        <label>Start / End</label>
                        <input type="text" name="best_season" class="form-control"
                                value="<?php echo e($data->best_season); ?>" />
                       
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="col-lg-6">
                    <div class="bs-component">
                        <label>Price ($)</label>
                        <input type="number" min="1" name="price" class="form-control"
                            value="<?php echo e($data->price); ?>" />
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="bs-component">
                        <label>Price (€)</label>
                        <input type="number" min="1" name="price_euro" class="form-control"
                            value="<?php echo e($data->price_euro); ?>" />
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="bs-component">
                        <label>Flight Included?</label>
                         <select class="form-control" name="flight">
                            <option <?php if($data->flight==1): ?>selected <?php endif; ?> value="1">Yes</option>
                            <option <?php if($data->flight==0): ?>selected <?php endif; ?> value="0">No</option>
                        </select>
                    </div>
                </div>
                 <div class="col-lg-6">
                    <div class="bs-component">
                        <label>Duration (In Days)</label>
                        <input type="number" min="1" name="duration" class="form-control" value="<?php echo e($data->duration); ?>" />
                    </div>
                </div>
            </div>
          <div class="form-group">
    <div class="col-lg-6">
        <div class="bs-component">
            <label>Accommodation</label>
            <input type="text" name="accommodation" class="form-control"
                value="<?php echo e($data->accommodation); ?>" />
        </div>
    </div>
      <div class="col-lg-6">
        <div class="bs-component">
            <label>Daily Activity</label>
            <input type="text" name="walking_per_day" class="form-control" value="<?php echo e($data->walking_per_day); ?>" />
        </div>
    </div>
</div>
                 
          
            <!--<div class="form-group">                -->
            <!--    <div class="col-lg-6">-->
            <!--        <div class="bs-component">-->
            <!--            <label>Start / End</label>-->
            <!--            <input type="text" name="start_date" class="form-control" value="<?php echo e($data->start_date); ?>"/>-->
            <!--        </div>-->
            <!--    </div>-->
            <!--</div>-->
          <div class="form-group">
   
</div>
            <!--    <div class="col-lg-6">-->
            <!--        <div class="bs-component">-->
            <!--            <label>Discount</label>-->
            <!--            <input type="text" name="discount" class="form-control"-->
            <!--                value="<?php echo e($data->discount); ?>" />-->
            <!--        </div>-->
            <!--    </div>-->
               
            <!--</div>-->
            <div class="form-group"> 
                <!--<div class="col-lg-6">-->
                <!--    <div class="bs-component">-->
                <!--        <label>Video ID</label>-->
                <!--       <input type="text" class="form-control" name="trip_video" value="<?php echo e($data->trip_video); ?>"-->
                <!--            placeholder="Trip Video" />-->
                <!--    </div>-->
                <!--</div>-->
               <div class="col-lg-6">
                    <div class="bs-component">
                        <label>Is Famous ?</label>
                         <select class="form-control" name="video_status">
                            <option <?php if($data->video_status==1): ?>selected <?php endif; ?> value="1">Yes</option>
                            <option <?php if($data->video_status==0): ?>selected <?php endif; ?> value="0">No</option>
                        </select>
                    </div>
                </div>
               <div class="col-lg-6">
                    <div class="bs-component">
                        <label>Last Moment trip</label>
                         <select class="form-control" name="show_in_home">
                            <option <?php if($data->show_in_home==1): ?>selected <?php endif; ?> value="1">Yes</option>
                            <option <?php if($data->show_in_home==0): ?>selected <?php endif; ?> value="0">No</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="form-group"> 
                <div class="col-lg-6">
                    <div class="bs-component">
                        <label>Guided trip</label>
                         <select class="form-control" name="guided">
                            <option <?php if($data->guided==1): ?>selected <?php endif; ?> value="1">Yes</option>
                            <option <?php if($data->guided==0): ?>selected <?php endif; ?> value="0">No</option>
                        </select>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="bs-component">
                        <label>Trip Rating</label>
                        <select class="form-control" name="rating">
                            <option value="1" <?php echo e(old('rating', $data->rating ?? 1) == 1 ? 'selected' : ''); ?>>1</option>
                            <option value="2" <?php echo e(old('rating', $data->rating ?? 1) == 2 ? 'selected' : ''); ?>>2</option>
                            <option value="3" <?php echo e(old('rating', $data->rating ?? 1) == 3 ? 'selected' : ''); ?>>3</option>
                            <option value="4" <?php echo e(old('rating', $data->rating ?? 1) == 4 ? 'selected' : ''); ?>>4</option>
                            <option value="5" <?php echo e(old('rating', $data->rating ?? 1) == 5 ? 'selected' : ''); ?>>5</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="panel">
        <div class="panel-heading">
            <span class="panel-title">Trip Tags</span>
        </div>
        <div class="panel-body">
            <div class="form-group">
                <div class="col-lg-12">
                    <div class="bs-component">
                        <select class="form-control tripTags" name="tripTags[]" multiple="multiple">
                            <?php $__currentLoopData = $tripsTags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($tag->id); ?>" 
                                <?php echo e(isset($data) && $data->tripTags->contains('id', $tag->id) ? 'selected' : ''); ?>>
                                <?php echo e($tag->title); ?>

                            </option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="panel">
       <div class="panel-heading">
           <span class="panel-title">Related Trips</span>
       </div>
       <div class="panel-body">
           <div class="form-group">
               <div class="col-lg-12">
                   <div class="bs-component">

                       <select class="form-control realted-trips" name="related_trips[]" multiple="multiple">
                           <?php if($all_trips->count() > 0): ?>
                               <?php $__currentLoopData = $all_trips; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                   <?php $__currentLoopData = $data->relatedtrips; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $_row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                       <?php if($row->id == $_row->pivot->related_trip_id): ?>
                                           <option value="<?php echo e($row->id); ?>" selected> <?php echo e($row->trip_title); ?>

                                           </option>
                                           <?php continue; ?>
                                       <?php endif; ?>
                                   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                   <option value="<?php echo e($row->id); ?>"><?php echo e($row->trip_title); ?></option>
                               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                           <?php endif; ?>
                       </select>
                   </div>
               </div>
           </div>
       </div>
    </div>

    <div class="panel">
    <div class="panel-heading">
     <span class="panel-title">Trip Highlights</span>
     </div>
    <div class="panel-body">
    <div class="form-group">
     <div class="col-lg-12">
    <div class="bs-component">
     <textarea class="my-editor form-control" id="trip_highlight" name="trip_highlight" rows="6"
     placeholder="Trip Highlights"><?php echo e($data->trip_highlight); ?></textarea>
     </div>
    </div>
     </div>
    </div>
    </div>
    <div class="panel">
    <div class="panel-heading">
    <span class="panel-title">Important notice</span>
    </div>
     <div class="panel-body">
         <div class="form-group">
    <div class="col-lg-12">
     <div class="bs-component">
    <textarea class="my-editor form-control" name="trip_excerpt" rows="3"
     placeholder="Trip Brief"><?php echo e($data->trip_excerpt); ?></textarea>
    </div>
    </div>
    </div>
    </div>
    </div>

    <div class="panel">
        <div class="panel-heading">
            <span class="panel-title">Trip Content</span>
        </div>
        <div class="panel-body">
            <div class="form-group">
                <div class="col-lg-12">
                    <div class="bs-component">
                        <textarea class="my-editor form-control" name="trip_content" id="trip_content"
                            placeholder="Trip Content" rows="9"><?php echo e($data->trip_content); ?></textarea>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="panel">
        <div class="panel-heading">
            <span class="panel-title">Latest Infromation</span>
        </div>
        <div class="panel-body">
            <div class="form-group">
                <div class="col-lg-12">
                    <div class="bs-component">
                        <textarea class="my-editor form-control" name="latest_info" id="latest_info"
                            placeholder="Latest Information" rows="9"><?php echo e($data->latest_info); ?></textarea>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="panel">
        <div class="panel-heading">
            <span class="panel-title"> Meta data </span>
        </div>
        <div class="panel-body">
            
            
            
            <div class="form-group">
                <div class="col-lg-12">
                    <div class="bs-component">
                        <input type="text" name="meta_key" class="form-control" value="<?php echo e($data->meta_key); ?>"
                            placeholder="Meta Key" />
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="col-lg-12">
                    <div class="bs-component">
                        <textarea class="form-control" name="meta_description" rows="3"
                            placeholder="Meta Description"><?php echo e($data->meta_description); ?></textarea>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-md-4">
    <div class="admin-form">
        
        <div class="sid_bvijay mb10">
            <h4> Locations </h4>
            <div class="hd_show_con">
                <div class="tab-content mb15">
                    <div id="tab1" class="tab-pane active">
                        <?php if($destinations->count() > 0): ?>
                            <ul class="ctgor">
                                <?php $__currentLoopData = $destinations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li>
                                        <label class="option">
                                            <input type="radio" name="destination[]" value="<?php echo e($row->id); ?>"
                                                <?php echo e(in_array($row->id, $checked_destinations) ? 'checked' : ''); ?>>
                                            <span class="checkbox"></span> <?php echo e($row->title); ?>

                                        </label>
                                    </li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>

    <div class="sid_bvijay mb10">
        <h4> Trip Type </h4>
        <div class="hd_show_con">
            <select class="form-control onchange-select" name="trip_type">
                <option value="0"> Select Trip Type </option>
                <?php if($trip_type->count(0 > 0)): ?>
                    <?php $__currentLoopData = $trip_type; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($row->trip_type == 'Trekking' || $row->trip_type == 'Expedition'): ?>
                            <?php if($row->trip_type == 'Trekking'): ?>
                                <option value="<?php echo e($row->id); ?>" <?php if($data->trip_type == $row->id ): ?> selected <?php endif; ?>> Destination </option>
                            <?php else: ?>
                                <option value="<?php echo e($row->id); ?>" <?php if($data->trip_type == $row->id ): ?> selected <?php endif; ?>> <?php echo e($row->trip_type); ?> </option>
                            <?php endif; ?>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
            </select>
        </div>
    </div>
    <?php /*
     <div class="sid_bvijay mb10 ">
        <h4> Regions </h4>
        <div class="hd_show_con">
         <div class=" has-feedback has-search">
              <input class="category-search form-control" type="text" placeholder="Search.."> 
              <span class="glyphicon glyphicon-search form-control-feedback"></span>
            </div>
            <div class="tab-content mb15">
                <div id="tab1" class="tab-pane active">
                    @if ($regions->count() > 0)
                        <ul class="ctgor category-list" style="height:200px">
                            @foreach ($regions as $row)
                                <li>
                                    <label class="option">
                                        <input type="checkbox" name="region[]" value="{{ $row->id }}"
                                            {{ in_array($row->id, $checked_regions) ? 'checked' : '' }}>
                                        <span class="checkbox"></span> {{ $row->title }}
                                    </label>
                                </li>
                            @endforeach
                        </ul>
                    @endif
                </div>
            </div>
        </div>
    </div> 
     <div class="sid_bvijay mb10">
            <h4> Trip Groups </h4>
            <div class="hd_show_con">
                <div class="tab-content mb15">
                    <div id="tab1" class="tab-pane active">
                        @if ($trip_groups->count() > 0)
                            <ul class="ctgor">
                                @foreach ($trip_groups as $row)
                                    <li>
                                        <label class="option">
                                            <input type="checkbox" name="tripgroup[]" value="{{ $row->id }}"
                                                {{ in_array($row->id, $checked_tripgroups) ? 'checked' : '' }}>
                                            <span class="checkbox"></span> {{ $row->title }}
                                        </label>
                                    </li>
                                @endforeach
                            </ul>
                        @endif
                    </div>
                </div>
            </div>
        </div> 
        */ ?>


    <div class="sid_bvijay mb10 onchange 1"> 
        <h4> Destinations  </h4>
        <div class="hd_show_con">
             <div class=" has-feedback has-search">
                  <input class="category-search1 form-control" type="text" placeholder="Search.."> 
                  <span class="glyphicon glyphicon-search form-control-feedback"></span>
                </div>
            <div class="tab-content mb15">
                <div id="tab1" class="tab-pane active">
                    <?php if( $trekking->count() > 0): ?>
                        <ul class="ctgor category-list1">
                            <?php $__currentLoopData = $trekking; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li>
                                    <label class="option">
                                        <input type="radio" class="activity-radio" name="activity[]" value="<?php echo e($row->id); ?>"
                                            <?php echo e(in_array($row->id, $checked_activities) ? 'checked' : ''); ?>>
                                        <span class="checkbox"></span> <?php echo e($row->title); ?>

                                    </label>
                                </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
    <div class="sid_bvijay mb10 onchange 2"> 
        <h4> Expedition </h4>
        <div class="hd_show_con">
             <!--<div class=" has-feedback has-search">-->
             <!--     <input class="category-search1 form-control" type="text" placeholder="Search.."> -->
             <!--     <span class="glyphicon glyphicon-search form-control-feedback"></span>-->
             <!--   </div>-->
            <div class="tab-content mb15">
                <div id="tab1" class="tab-pane active">
                    <?php if( $expeditions->count() > 0): ?>
                        <ul class="">
                            <?php $__currentLoopData = $expeditions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li>
                                    <label class="option">
                                        <input type="radio" class="activity-radio" name="activity[]" value="<?php echo e($row->id); ?>"
                                            <?php echo e(in_array($row->id, $checked_activities) ? 'checked' : ''); ?>>
                                        <span class="checkbox"></span> <?php echo e($row->title); ?>

                                    </label>
                                </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
    

    <div class="sid_bvijay mb10"> 
        <h4>  Activity Type </h4>
        <div class="hd_show_con">
             <!--<div class=" has-feedback has-search">-->
             <!--     <input class="category-search1 form-control" type="text" placeholder="Search.."> -->
             <!--     <span class="glyphicon glyphicon-search form-control-feedback"></span>-->
             <!--   </div>-->
            <div class="tab-content mb15">
                <div id="tab1" class="tab-pane active">
                    <?php if( $activity->count() > 0): ?>
                        <ul class="">
                            <?php $__currentLoopData = $activity; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li>
                                    <label class="option">
                                        <input type="checkbox" class="single-check" name="activity_type[]" value="<?php echo e($row->id); ?>" 
                                            <?php echo e(in_array($row->id, $checked_activities) ? 'checked' : ''); ?> >
                                        <span class="checkbox"></span> <?php echo e($row->title); ?>

                                    </label>
                                </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
    
    <div class="sid_bvijay mb10"> 
        <h4>  Travel Types </h4>
        <div class="hd_show_con">
             <!--<div class=" has-feedback has-search">-->
             <!--     <input class="category-search1 form-control" type="text" placeholder="Search.."> -->
             <!--     <span class="glyphicon glyphicon-search form-control-feedback"></span>-->
             <!--   </div>-->
            <div class="tab-content mb15">
                <div id="tab1" class="tab-pane active">
                    <?php if( $travels->count() > 0): ?>
                        <ul class="">
                            <?php $__currentLoopData = $travels; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li>
                                    <label class="option">
                                        <input type="radio" name="travel_type[]" value="<?php echo e($row->id); ?>"
                                            <?php echo e(in_array($row->id, $checked_activities) ? 'checked' : ''); ?>>
                                        <span class="checkbox"></span> <?php echo e($row->title); ?>

                                    </label>
                                </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
    
        <div class="sid_bvijay mb10">
            <h4> Trip Ordering </h4>
            <div class="hd_show_con">
                <label class="field text">
                    <input type="number" name="ordering" class="form-control" placeholder="Ordering"
                        value="<?php echo e($data->ordering); ?>" />
                </label>
            </div>
        </div>
         
         <!-- trip Thumbnail -->
        <div class="sid_bvijay mb10">
            <h4> Thumbnail </h4>
            <div class="hd_show_con">
                <div id="xedit" class="bs-component">
                 <label class="field prepend-icon append-button file mb20">
                    <span class="button btn btn-primary"><?php echo e($data->thumbnail?'Change':'Choose File'); ?></span>
                    <input type="file" class="gui-file" name="thumbnail" id="file1" onChange="document.getElementById('Thumbnail').value = this.value;">
                    <input type="text" class="gui-input" id="Thumbnail" placeholder="Please select a photo">
                    <label class="field-icon">
                      <i class="fa fa-upload"></i>
                    </label>
                  </label>
                </div>
                <?php if($data->thumbnail): ?>
                    <div class="delete-fe-image thumb_id<?php echo e($data->id); ?>">
                        <img src="<?php echo e(asset(env('PUBLIC_PATH') . 'uploads/original/' . $data->thumbnail)); ?>"
                            width="200px" />
                        <a href="#<?php echo e($data->id); ?>" class="thumbdelete">X</a>
                    </div>
                <?php endif; ?>
                 <small> (Width: 1500px Height: 1500px) </small>
            </div>
        </div>

        <!-- trip map -->
        <div class="sid_bvijay mb10">
            <h4> Trip Map </h4>
            <div class="hd_show_con">
                <div class="bs-component">
               <label class="field prepend-icon append-button file mb20">
                    <span class="button btn btn-primary"><?php echo e($data->trip_map?'Change':'Choose File'); ?></span>
                    <input type="file" class="gui-file" name="trip_map" id="file2" onChange="document.getElementById('trip_map').value = this.value;">
                    <input type="text" class="gui-input" id="trip_map" placeholder="Please select a photo">
                    <label class="field-icon">
                      <i class="fa fa-upload"></i>
                    </label>
                  </label>
                </div>
                <?php if($data->trip_map): ?>
                    <div class="delete-fe-image map_id<?php echo e($data->id); ?>">
                        <img src="<?php echo e(asset(env('PUBLIC_PATH') . 'uploads/original/' . $data->trip_map)); ?>"
                            width="200px" />
                        <a href="#<?php echo e($data->id); ?>" class="mapdelete">X</a>
                    </div>
                <?php endif; ?>
                 <small> (Width: 1500px Height: 1500px) </small>
            </div>
        </div>

         <!-- trip chart -->
         <!-- <div class="sid_bvijay mb10">
            <h4> Altitude Chart </h4>
            <div class="hd_show_con">
                <div class="bs-component">
               <label class="field prepend-icon append-button file mb20">
                    <span class="button btn btn-primary"><?php echo e($data->trip_chart?'Change':'Choose File'); ?></span>
                    <input type="file" class="gui-file" name="trip_chart" id="file2" onChange="document.getElementById('trip_chart').value = this.value;">
                    <input type="text" class="gui-input" id="trip_chart" placeholder="Please select a photo">
                    <label class="field-icon">
                      <i class="fa fa-upload"></i>
                    </label>
                  </label>
                </div>
                <?php if($data->trip_chart): ?>
                    <div class="delete-fe-image chart_id<?php echo e($data->id); ?>">
                        <img src="<?php echo e(asset(env('PUBLIC_PATH') . 'uploads/original/' . $data->trip_chart)); ?>"
                            width="200px" />
                        <a href="#<?php echo e($data->id); ?>" class="chartdelete">X</a>
                    </div>
                <?php endif; ?>
                  <small> (Width: 1500px Height: 1500px) </small>
            </div>
        </div> -->
          <!-- trip banner -->
        <div class="sid_bvijay mb10">
            <h4> Trip Banner </h4>
            <div class="hd_show_con">
                <div class="bs-component">
                 <label class="field prepend-icon append-button file mb20">
                    <span class="button btn btn-primary"><?php echo e($data->thumbnail?'banner':'Choose File'); ?></span>
                    <input type="file" class="gui-file" name="banner" id="file3" onChange="document.getElementById('banner').value = this.value;">
                    <input type="text" class="gui-input" id="banner" placeholder="Please select a photo">
                    <label class="field-icon">
                      <i class="fa fa-upload"></i>
                    </label>
                  </label>
                </div>
                <?php if($data->banner): ?>
                    <div class="delete-fe-image banner_id<?php echo e($data->id); ?>">
                        <img src="<?php echo e(asset(env('PUBLIC_PATH') . 'uploads/banners/' . $data->banner)); ?>"
                            width="200px" />
                        <a href="#<?php echo e($data->id); ?>" class="bannerdelete">X</a>
                    </div>
                <?php endif; ?>
                 <small> (Width: 1600px Height: 550px) </small>
            </div>
        </div>
        <div class="sid_bvijay mb10">
            <h4> Itinerary PDF </h4>
            <div class="hd_show_con">
                <div id="xedit" class="bs-component">
                     <label class="field prepend-icon append-button file mb20">
                    <span class="button btn btn-primary"><?php echo e($data->trip_pdf?'Change':'Choose File'); ?></span>
                    <input type="file" class="gui-file" name="upload_pdf" id="file1" onChange="document.getElementById('upload_pdf').value = this.value;">
                    <input type="text" class="gui-input" id="upload_pdf" placeholder="Please select a photo">
                    <label class="field-icon">
                      <i class="fa fa-upload"></i>
                    </label>
                  </label>
                </div>
                <?php if($data->trip_pdf): ?>
                    <div class="delete-fe-image pdf_id<?php echo e($data->id); ?>">
                        <embed src="<?php echo e(asset(env('PUBLIC_PATH') . 'uploads/pdf/' . $data->trip_pdf)); ?>"
                            width="200px" />
                        <a href="#<?php echo e($data->id); ?>" class="pdfdelete">X</a>
                    </div>
                <?php endif; ?>
                <small> (Less Than 2MB) </small>
            </div>

        </div>
    </div>
</div>
</div>
<script>
    document.querySelectorAll('.single-check').forEach((checkbox) => {
        checkbox.addEventListener('click', function () {
            if (this.checked) {
                // Uncheck all other checkboxes
                document.querySelectorAll('.single-check').forEach((cb) => {
                    if (cb !== this) cb.checked = false;
                });
            }
        });
    });
</script>

<script>
document.addEventListener("DOMContentLoaded", function () {
    const radios = document.querySelectorAll('.activity-radio');
    let lastChecked = null;

    radios.forEach(radio => {
        radio.addEventListener("click", function (e) {
            // If clicking the same radio again → uncheck it
            if (this === lastChecked) {
                this.checked = false;
                lastChecked = null;
                return;
            }

            // Otherwise normal behavior: uncheck all and check this one
            radios.forEach(r => r.checked = false);
            this.checked = true;
            lastChecked = this;
        });
    });
});
</script>
<?php /**PATH /home/lhakpa/public_html/resources/views/admin/trips/edit/edit-general.blade.php ENDPATH**/ ?>