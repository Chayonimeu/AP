<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Aashepashe | Add Hotel Rooms For <?php echo e($data_list->name); ?></title>
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <?php echo $__env->make('backend.layout.panel.header_script', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </head>
    <body class="hold-transition skin-blue sidebar-mini">
        <div class="wrapper">
            <?php echo $__env->make('backend.layout.panel.header', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <?php echo $__env->make('backend.layout.panel.menu', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <div class="content-wrapper">
                <section class="content">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel-group">
                                <div class="panel panel-primary">
                                    <div class="panel-heading panel-style"> 
                                        <i class="fa fa-clone"></i> Add Hotel Rooms For <?php echo e($data_list->name); ?>

                                    </div>
                                    <div class="panel-body">
                                        <?php echo $__env->make('backend.layout.panel.message', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <?php echo $__env->make('backend.layout.message', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                                                <form role="form" method="POST" action="<?php echo e(URL::to('portal/merchant/hotel/rooms/store_rooms')); ?>" enctype="multipart/form-data">
                                                    <?php echo e(csrf_field()); ?>


                                                    <input type="hidden" name="hotel_id" value="<?php echo e($data_list->hotel_info_id); ?>" />
                                                    <fieldset class="col-md-12">
                                                        <legend>Room Type Info</legend>
                                                        <div class="panel panel-default">
                                                            <div class="panel-body">
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="room_type_id">Room Type <b style="color: red">*</b></label>
                                                                            <select class="form-control select2" name="room_type_id" id="room_type_id" required>
                                                                                <option value="">Choose Type</option>
                                                                                <?php $__currentLoopData = $room_type; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                                <option value="<?php echo e($type->room_type_id); ?>"<?php echo e((old('room_type_id') == $type->room_type_id) ? 'selected' : ''); ?>><?php echo e($type->name); ?></option>
                                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                            </select>
                                                                            <?php if($errors->has('room_type_id')): ?>
                                                                            <span class="help-block">
                                                                                <strong><i class="fa fa-warning"></i> <?php echo e($errors->first('room_type_id')); ?></strong>
                                                                            </span>
                                                                            <?php endif; ?>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label class="control-label" for="total_room">Total Rooms <b style="color: red">*</b> <small style="color: darkred"><i class="fa fa-info-circle"></i> Total no of rooms of this type</small></label>
                                                                            <input type="number" min="1" placeholder="Enter Number" class="form-control" name="total_room" id="total_room" value="<?php echo e(old('total_room')); ?>" required/>
                                                                            <?php if($errors->has('total_room')): ?>
                                                                            <span class="help-block">
                                                                                <strong><i class="fa fa-warning"></i> <?php echo e($errors->first('total_room')); ?></strong>
                                                                            </span>
                                                                            <?php endif; ?>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label class="control-label" for="area">Area <b style="color: red">*</b> <small style="color: darkred"><i class="fa fa-info-circle"></i> Area must be calculated as square meter format</small></label>
                                                                            <input type="text" class="form-control" placeholder="e.g. 25" name="area" id="area" value="<?php echo e(old('area')); ?>" required/>
                                                                            <?php if($errors->has('area')): ?>
                                                                            <span class="help-block">
                                                                                <strong><i class="fa fa-warning"></i> <?php echo e($errors->first('area')); ?></strong>
                                                                            </span>
                                                                            <?php endif; ?>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label class="control-label" for="floor">Floors <small style="color: darkred"><i class="fa fa-info-circle"></i> Floor number must be followed this 1,3, 2-5 format</small></label>
                                                                            <input type="text" class="form-control" placeholder="e.g. 1,3, 2-5" name="floor" id="floor" value="<?php echo e(old('floor')); ?>"/>
                                                                            <?php if($errors->has('floor')): ?>
                                                                            <span class="help-block">
                                                                                <strong><i class="fa fa-warning"></i> <?php echo e($errors->first('floor')); ?></strong>
                                                                            </span>
                                                                            <?php endif; ?>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label class="control-label" for="window">Window <b style="color: red">*</b></label>
                                                                            <div class="radio">
                                                                                <label class="radio-inline">
                                                                                    <input type="radio" name="window" value="With Window" required>With Window
                                                                                </label>
                                                                            </div>
                                                                            <div class="radio">
                                                                                <label class="radio-inline">
                                                                                    <input type="radio" name="window" value="Without Window" required>Without Window
                                                                                </label>
                                                                            </div>
                                                                            <div class="radio">
                                                                                <label class="radio-inline">
                                                                                    <input type="radio" name="window" value="Some Rooms With Window" required>Some Rooms With Window
                                                                                </label>
                                                                            </div>
                                                                            <?php if($errors->has('window')): ?>
                                                                            <span class="help-block">
                                                                                <strong><i class="fa fa-warning"></i> <?php echo e($errors->first('window')); ?></strong>
                                                                            </span>
                                                                            <?php endif; ?>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label class="control-label" for="smoking">Smoking <b style="color: red">*</b></label>
                                                                            <div class="radio">
                                                                                <label class="radio-inline">
                                                                                    <input type="radio" name="smoking" value="Not Allowed To Smoke" required>Not Allowed To Smoke
                                                                                </label>
                                                                            </div>
                                                                            <div class="radio">
                                                                                <label class="radio-inline">
                                                                                    <input type="radio" name="smoking" value="No Smoking Rooms Available" required>No Smoking Rooms Available
                                                                                </label>
                                                                            </div>
                                                                            <div class="radio">
                                                                                <label class="radio-inline">
                                                                                    <input type="radio" name="smoking" value="Can Arrange No smoking Zone" required>Can Arrange No smoking Zone
                                                                                </label>
                                                                            </div>
                                                                            <?php if($errors->has('smoking')): ?>
                                                                            <span class="help-block">
                                                                                <strong><i class="fa fa-warning"></i> <?php echo e($errors->first('smoking')); ?></strong>
                                                                            </span>
                                                                            <?php endif; ?>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label class="control-label" for="wifi">Internet WiFi <b style="color: red">*</b></label>
                                                                            <div class="radio">
                                                                                <label class="radio-inline">
                                                                                    <input type="radio" name="wifi" value="All Rooms (Free)" required>All Rooms (Free)
                                                                                </label>
                                                                            </div>
                                                                            <div class="radio">
                                                                                <label class="radio-inline">
                                                                                    <input type="radio" name="wifi" value="All Rooms (Charged)" required>All Rooms (Charged)
                                                                                </label>
                                                                            </div>
                                                                            <div class="radio">
                                                                                <label class="radio-inline">
                                                                                    <input type="radio" name="wifi" value="None" required>None
                                                                                </label>
                                                                            </div>
                                                                            <?php if($errors->has('wifi')): ?>
                                                                            <span class="help-block">
                                                                                <strong><i class="fa fa-warning"></i> <?php echo e($errors->first('wifi')); ?></strong>
                                                                            </span>
                                                                            <?php endif; ?>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label class="control-label" for="extra_bed">Extra Beds <b style="color: red">*</b></label>
                                                                            <div class="radio">
                                                                                <label class="radio-inline">
                                                                                    <input type="radio" name="extra_bed" value="No Extra Bed" required>No Extra Bed
                                                                                </label>
                                                                            </div>
                                                                            <div class="radio">
                                                                                <label class="radio-inline">
                                                                                    <input type="radio" name="extra_bed" value="Free Extra Bed" required>Free Extra Bed
                                                                                </label>
                                                                            </div>
                                                                            <div class="radio">
                                                                                <label class="radio-inline">
                                                                                    <input type="radio" name="extra_bed" value="With Extra Charged" required>With Extra Charged
                                                                                </label>
                                                                            </div>
                                                                            <?php if($errors->has('extra_bed')): ?>
                                                                            <span class="help-block">
                                                                                <strong><i class="fa fa-warning"></i> <?php echo e($errors->first('extra_bed')); ?></strong>
                                                                            </span>
                                                                            <?php endif; ?>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label class="control-label" for="occupancy">Standard Occupancy <b style="color: red">*</b> <small style="color: darkred"><i class="fa fa-info-circle"></i> Standard occupancy is for per person</small></label>
                                                                            <input type="number" min="1" placeholder="Enter Number" class="form-control" name="occupancy" id="occupancy" value="<?php echo e(old('occupancy')); ?>" required/>
                                                                            <?php if($errors->has('occupancy')): ?>
                                                                            <span class="help-block">
                                                                                <strong><i class="fa fa-warning"></i> <?php echo e($errors->first('occupancy')); ?></strong>
                                                                            </span>
                                                                            <?php endif; ?>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label class="control-label" for="image">Image <b style="color: red">*</b> <small style="color: darkred"><i class="fa fa-info-circle"></i> Provide clear image for bed in the room</small></label>
                                                                            <input type="file" class="form-control" name="image" id="image" value="" required/>
                                                                            <?php if($errors->has('image')): ?>
                                                                            <span class="help-block">
                                                                                <strong><i class="fa fa-warning"></i> <?php echo e($errors->first('image')); ?></strong>
                                                                            </span>
                                                                            <?php endif; ?>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </fieldset>
                                                    <fieldset class="col-md-12">    	
                                                        <legend>Bed Type <small style="color: darkred">Please tell us the existing beds in a room (excluding extra beds)</small></legend>
                                                        <div class="panel panel-default">
                                                            <div class="panel-body">
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <label class="control-label" for="bed_type_id">Bed Type <b style="color: red">*</b></label>
                                                                        <div class="form-group">
                                                                            <?php $__currentLoopData = $bed_type; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bed): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                            <div class="col-md-4">
                                                                                <div class="radio">
                                                                                    <label class="radio-inline">
                                                                                        <input type="radio" name="bed_type_id" value="<?php echo e($bed->bed_type_id); ?>" required><?php echo e($bed->name); ?> (<?php echo e($bed->size); ?>)
                                                                                    </label>
                                                                                </div>
                                                                            </div>
                                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                            <?php if($errors->has('bed_type_id')): ?>
                                                                            <span class="help-block">
                                                                                <strong><i class="fa fa-warning"></i> <?php echo e($errors->first('bed_type_id')); ?></strong>
                                                                            </span>
                                                                            <?php endif; ?>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </fieldset>
                                                    <fieldset class="col-md-12">    	
                                                        <legend>Price Information <small style="color: darkred">Please tell us the best price(including taxes and fees)</small></legend>
                                                        <div class="panel panel-default">
                                                            <div class="panel-body">
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label class="control-label" for="price">Price For Per Person <b style="color: red">*</b> <small style="color: darkred"><i class="fa fa-info-circle"></i> Must include taxes and fees</small></label>
                                                                            <input type="number" min="1" placeholder="Enter Price" class="form-control" name="price" id="price" value="<?php echo e(old('price')); ?>" required/>
                                                                            <?php if($errors->has('price')): ?>
                                                                            <span class="help-block">
                                                                                <strong><i class="fa fa-warning"></i> <?php echo e($errors->first('price')); ?></strong>
                                                                            </span>
                                                                            <?php endif; ?>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label class="control-label" for="available_from">Effective Date<b style="color: red">*</b> <small style="color: darkred"><i class="fa fa-info-circle"></i> Must include taxes and fees</small></label>
                                                                            <div class="input-group date">
                                                                                <div class="input-group-addon">
                                                                                    <i class="fa fa-calendar"></i>
                                                                                </div>
                                                                                <input type="text" class="form-control pull-right" id="datepicker" name="available_from" value="" required="required">
                                                                            </div>
                                                                            <?php if($errors->has('available_from')): ?>
                                                                            <span class="help-block">
                                                                                <strong><i class="fa fa-warning"></i> <?php echo e($errors->first('available_from')); ?></strong>
                                                                            </span>
                                                                            <?php endif; ?>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="form-group">
                                                                            <label class="control-label" for="available_days">Available Days <b style="color: red">*</b></label><br>
                                                                            
                                                                            <label class="checkbox-inline"><input type="checkbox" checked name="available_days[]" value="All Day">All Day</label>
                                                                            <label class="checkbox-inline"><input type="checkbox" name="available_days[]" value="Monday">Monday</label>
                                                                            <label class="checkbox-inline"><input type="checkbox" name="available_days[]" value="Tuesday">Tuesday</label>
                                                                            <label class="checkbox-inline"><input type="checkbox" name="available_days[]" value="Wednesday">Wednesday</label>
                                                                            <label class="checkbox-inline"><input type="checkbox" name="available_days[]" value="Thursday">Thursday</label>
                                                                            <label class="checkbox-inline"><input type="checkbox" name="available_days[]" value="Friday">Friday</label>
                                                                            <label class="checkbox-inline"><input type="checkbox" name="available_days[]" value="Saturday">Saturday</label>
                                                                            <label class="checkbox-inline"><input type="checkbox" name="available_days[]" value="Sunday">Sunday</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label class="control-label" for="breakfast">Breakfast <b style="color: red">*</b></label>
                                                                            <div class="radio">
                                                                                <label class="radio-inline">
                                                                                    <input type="radio" name="breakfast" value="Free Breakfast" required>Free Breakfast
                                                                                </label>
                                                                            </div>
                                                                            <div class="radio">
                                                                                <label class="radio-inline">
                                                                                    <input type="radio" name="breakfast" value="Breakfast With Charged" required>Breakfast With Charged
                                                                                </label>
                                                                            </div>
                                                                            <div class="radio">
                                                                                <label class="radio-inline">
                                                                                    <input type="radio" name="breakfast" value="No Breakfast" required>No Breakfast
                                                                                </label>
                                                                            </div>
                                                                            <?php if($errors->has('breakfast')): ?>
                                                                            <span class="help-block">
                                                                                <strong><i class="fa fa-warning"></i> <?php echo e($errors->first('breakfast')); ?></strong>
                                                                            </span>
                                                                            <?php endif; ?>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label class="control-label" for="cancellation_policy">Cancellation Policy <b style="color: red">*</b></label>
                                                                            <div class="radio">
                                                                                <label class="radio-inline">
                                                                                    <input type="radio" name="cancellation_policy" value="Free Cancellation" required>Free Cancellation
                                                                                </label>
                                                                            </div>
                                                                            <div class="radio">
                                                                                <label class="radio-inline">
                                                                                    <input type="radio" name="cancellation_policy" value="Cancellation With Charged" required>Cancellation With Charged
                                                                                </label>
                                                                            </div>
                                                                            <div class="radio">
                                                                                <label class="radio-inline">
                                                                                    <input type="radio" name="cancellation_policy" value="None" required>None
                                                                                </label>
                                                                            </div>
                                                                            <?php if($errors->has('cancellation_policy')): ?>
                                                                            <span class="help-block">
                                                                                <strong><i class="fa fa-warning"></i> <?php echo e($errors->first('cancellation_policy')); ?></strong>
                                                                            </span>
                                                                            <?php endif; ?>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </fieldset>

                                                    <button type="submit" class="btn btn-primary pull-right"><i class="fa fa-check"></i> Submit</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <?php echo $__env->make('backend.layout.panel.footer', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </div>
        <?php echo $__env->make('backend.layout.panel.footer_script', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <script type="text/javascript">
            $("#hotel_active").addClass("active");
            $("#hotel_active").parent().parent().addClass("treeview active");
            $("#hotel_active").parent().addClass("in");
        </script>
    </body>
</html>
