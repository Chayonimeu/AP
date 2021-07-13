<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Aashepashe | Edit Hotel (<?php echo e($data_list->name); ?>)</title>
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <?php echo $__env->make('backend.layout.panel.header_script', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <!--CSRF token-->
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
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
                                    <div class="panel-heading panel-style"><i class="fa fa-clone"></i> Edit Hotel (<?php echo e($data_list->name); ?>)</div>
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <form role="form" class="" method="POST" action="<?php echo e(URL::to('portal/merchant/hotel/update')); ?>" enctype="multipart/form-data">
                                                    <?php echo e(csrf_field()); ?>


                                                    <input type="hidden" name="root_id" value="<?php echo e(Auth::guard('merchant')->user()->merchant_id); ?>" />
                                                    <input type="hidden" name="hotel_info_id" value="<?php echo e($data_list->hotel_info_id); ?>" />
                                                    <fieldset class="col-md-12">    	
                                                        <legend>Basic Information</legend>
                                                        <div class="panel panel-default">
                                                            <div class="panel-body">
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="branch_id">Branch <b style="color: red">*</b></label>
                                                                            <select class="form-control select2" name="branch_id" id="branch_id" required>
                                                                                <option value="">Choose Branch</option>
                                                                                <?php $__currentLoopData = $branch_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $branch): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                                <option value="<?php echo e($branch->branch_id); ?>"<?php echo e($data_list->branch_id == $branch->branch_id ? 'selected' : ''); ?>><?php echo e($branch->name); ?></option>
                                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                            </select>
                                                                            <?php if($errors->has('branch_id')): ?>
                                                                            <span class="help-block">
                                                                                <strong><i class="fa fa-warning"></i> <?php echo e($errors->first('branch_id')); ?></strong>
                                                                            </span>
                                                                            <?php endif; ?>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="property_id">Property Category <b style="color: red">*</b></label>
                                                                            <select class="form-control select2" name="property_id" id="property_id" required>
                                                                                <option value="">Choose Property</option>
                                                                                <?php $__currentLoopData = $property_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $property): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                                <option value="<?php echo e($property->property_id); ?>"<?php echo e($data_list->property_id == $property->property_id ? 'selected' : ''); ?>><?php echo e($property->name); ?></option>
                                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                            </select>
                                                                            <?php if($errors->has('property_id')): ?>
                                                                            <span class="help-block">
                                                                                <strong><i class="fa fa-warning"></i> <?php echo e($errors->first('property_id')); ?></strong>
                                                                            </span>
                                                                            <?php endif; ?>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="name">Hotel Name <b style="color: red">*</b></label>
                                                                            <input type="text" placeholder="Enter Hotel Name" name="name" id="name" class="form-control" value="<?php echo e($data_list->name); ?>" required/>
                                                                            <?php if($errors->has('name')): ?>
                                                                            <span class="help-block">
                                                                                <strong><i class="fa fa-warning"></i> <?php echo e($errors->first('name')); ?></strong>
                                                                            </span>
                                                                            <?php endif; ?>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="address">Hotel Address <b style="color: red">*</b></label>
                                                                            <input type="text" placeholder="Enter Hotel Address" name="address" id="address" class="form-control" value="<?php echo e($data_list->address); ?>" required/>
                                                                            <?php if($errors->has('address')): ?>
                                                                            <span class="help-block">
                                                                                <strong><i class="fa fa-warning"></i> <?php echo e($errors->first('address')); ?></strong>
                                                                            </span>
                                                                            <?php endif; ?>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="latitude">Latitude</label>
                                                                            <input type="text" placeholder="Enter Latitude" name="latitude" id="latitude" class="form-control" value="<?php echo e($data_list->latitude); ?>"/>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="longitude">Longitude</label>
                                                                            <input type="text" placeholder="Enter Longitude" name="longitude" id="longitude" class="form-control" value="<?php echo e($data_list->longitude); ?>"/>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="opening_date">Opening Date <span style="color: red">*</span></label>
                                                                            <div class="input-group date">
                                                                                <div class="input-group-addon">
                                                                                    <i class="fa fa-calendar"></i>
                                                                                </div>
                                                                                <input type="text" class="form-control pull-right" id="datepicker" name="opening_date" value="<?php echo e($data_list->opening_date); ?>" required="required">
                                                                                <?php if($errors->has('opening_date')): ?>
                                                                                <span class="help-block">
                                                                                    <strong><i class="fa fa-warning"></i> <?php echo e($errors->first('opening_date')); ?></strong>
                                                                                </span>
                                                                                <?php endif; ?>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="renovation_date">Renovation Date</label>
                                                                            <div class="input-group date">
                                                                                <div class="input-group-addon">
                                                                                    <i class="fa fa-calendar"></i>
                                                                                </div>
                                                                                <input type="text" class="form-control pull-right" id="datepicker" name="renovation_date" value="<?php echo e($data_list->renovation_date); ?>">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </fieldset>
                                                    <fieldset class="col-md-12">    	
                                                        <legend>Hotel Details</legend>
                                                        <div class="panel panel-default">
                                                            <div class="panel-body">
                                                                <div class="row">
                                                                    <div class="col-md-4">
                                                                        <div class="form-group">
                                                                            <label for="star_rating">Rating <b style="color: red">*</b></label>
                                                                            <select class="form-control select2" name="star_rating" id="star_rating" required>
                                                                                <option value="">Choose Rating</option>
                                                                                <option value="1"<?php echo e(($data_list->star_rating == '1') ? 'selected' : ''); ?>>1 Star</option>
                                                                                <option value="2"<?php echo e(($data_list->star_rating == '2') ? 'selected' : ''); ?>>2 Star</option>
                                                                                <option value="3"<?php echo e(($data_list->star_rating == '3') ? 'selected' : ''); ?>>3 Star</option>
                                                                                <option value="4"<?php echo e(($data_list->star_rating == '4') ? 'selected' : ''); ?>>4 Star</option>
                                                                                <option value="5"<?php echo e(($data_list->star_rating == '5') ? 'selected' : ''); ?>>5 Star</option>
                                                                                <option value="0"<?php echo e(($data_list->star_rating == '0') ? 'selected' : ''); ?>>Not Rated</option>
                                                                            </select>
                                                                            <?php if($errors->has('star_rating')): ?>
                                                                            <span class="help-block">
                                                                                <strong><i class="fa fa-warning"></i> <?php echo e($errors->first('star_rating')); ?></strong>
                                                                            </span>
                                                                            <?php endif; ?>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <div class="form-group">
                                                                            <label for="total_room">No of Rooms <b style="color: red">*</b></label>
                                                                            <input type="number" min="1" placeholder="Enter Total No of Rooms" name="total_room" id="total_room" class="form-control" value="<?php echo e($data_list->total_room); ?>" required/>
                                                                            <?php if($errors->has('total_room')): ?>
                                                                            <span class="help-block">
                                                                                <strong><i class="fa fa-warning"></i> <?php echo e($errors->first('total_room')); ?></strong>
                                                                            </span>
                                                                            <?php endif; ?>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <div class="form-group">
                                                                            <label for="website">Official Website</label>
                                                                            <input type="url" placeholder="Enter Valid URL" name="website" id="website" class="form-control" value="<?php echo e($data_list->website); ?>"/>
                                                                            <?php if($errors->has('website')): ?>
                                                                            <span class="help-block">
                                                                                <strong><i class="fa fa-warning"></i> <?php echo e($errors->first('website')); ?></strong>
                                                                            </span>
                                                                            <?php endif; ?>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="form-group">
                                                                            <label class="control-label" for="details">Details <b style="color: red">*</b></label>
                                                                            <textarea class="form-control" name="details" id="details" required><?php echo e($data_list->details); ?></textarea>
                                                                            <?php if($errors->has('details')): ?>
                                                                            <span class="help-block">
                                                                                <strong><i class="fa fa-warning"></i> <?php echo e($errors->first('details')); ?></strong>
                                                                            </span>
                                                                            <?php endif; ?>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </fieldset>
                                                    <fieldset class="col-md-12">    	
                                                        <legend>Contact Information</legend>
                                                        <div class="panel panel-default">
                                                            <div class="panel-body">
                                                                <div class="row">
                                                                    <div class="col-md-4">
                                                                        <div class="form-group">
                                                                            <label for="contact_name">Contact Name</label>
                                                                            <input type="text" placeholder="Enter Contact Person Name" name="contact_name" id="contact_name" class="form-control" value="<?php echo e($data_list->contact_name); ?>"/>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <div class="form-group">
                                                                            <label for="contact_phone">Contact Phone</label>
                                                                            <input type="text" placeholder="Enter Contact Person Phone" name="contact_phone" id="contact_phone" class="form-control" value="<?php echo e($data_list->contact_phone); ?>"/>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <div class="form-group">
                                                                            <label for="contact_email">Contact Email</label>
                                                                            <input type="email" placeholder="Enter Contact Person Email" name="contact_email" id="contact_email" class="form-control" value="<?php echo e($data_list->contact_email); ?>"/>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </fieldset>
                                                    <div class="col-md-12" style="margin-top: 10px">
                                                        <button type="submit" class="btn btn-primary pull-right"><i class="fa fa-check"></i> Submit</button>
                                                    </div>
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
