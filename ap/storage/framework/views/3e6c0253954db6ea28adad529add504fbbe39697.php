<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Aashepashe | Add New Branch</title>
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
                                    <div class="panel-heading panel-style"><i class="fa fa-clone"></i> Add New Branch
                                        <a href="<?php echo e(url()->previous()); ?>" class="pull-right"><i class="fa fa-arrow-circle-left"></i> Go Back</a>
                                    </div>
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="col-md-6">
                                                    <form role="form" class="" method="POST" action="<?php echo e(URL::to('portal/merchant/branch/store')); ?>" enctype="multipart/form-data">
                                                        <?php echo e(csrf_field()); ?>

                                                        <div class="form-group">
                                                            <label for="name">Name <b style="color: red">*</b></label>
                                                            <input type="text" placeholder="Enter Branch Name" name="name" id="name" class="form-control" value="<?php echo e(old('name')); ?>" required/>
                                                            <?php if($errors->has('name')): ?>
                                                            <span class="help-block">
                                                                <strong><i class="fa fa-warning"></i> <?php echo e($errors->first('name')); ?></strong>
                                                            </span>
                                                            <?php endif; ?>
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="country_id">Country <b style="color: red">*</b></label>
                                                            <select class="form-control" name="country_id" id="country_id" required="required" onchange="javascript:get_city(this.value);">
                                                                <option value="">Select Country</option>
                                                                <?php $__currentLoopData = $country_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $country): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <option value="<?php echo e($country->country_id); ?>"<?php echo e((old('country_id') == $country->country_id) ? 'selected' : ''); ?>><?php echo e($country->name); ?></option>
                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                            </select>
                                                            <?php if($errors->has('country_id')): ?>
                                                            <span class="help-block">
                                                                <strong><i class="fa fa-warning"></i> <?php echo e($errors->first('country_id')); ?></strong>
                                                            </span>
                                                            <?php endif; ?>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="city_id">City <b style="color: red">*</b></label>
                                                            <span id="city_div">
                                                                <select class="form-control" name="city_id" id="city_id" required="required" onchange="javascript:get_sub_area(this.value);">
                                                                    <option value="">Select City</option>
                                                                </select>
                                                            </span>
                                                            <?php if($errors->has('city_id')): ?>
                                                            <span class="help-block">
                                                                <strong><i class="fa fa-warning"></i> <?php echo e($errors->first('city_id')); ?></strong>
                                                            </span>
                                                            <?php endif; ?>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="sub_area_id">Sub Area</label>
                                                            <span id="sub_area_div">
                                                                <select class="form-control" name="sub_area_id" id="sub_area_id">
                                                                    <option value="">Select Sub Area</option>
                                                                </select>
                                                            </span>
                                                            <?php if($errors->has('sub_area_id')): ?>
                                                            <span class="help-block">
                                                                <strong><i class="fa fa-warning"></i> <?php echo e($errors->first('sub_area_id')); ?></strong>
                                                            </span>
                                                            <?php endif; ?>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="address">Address <b style="color: red">*</b></label>
                                                            <textarea class="form-control" id="address" name="address" required="required"><?php echo e(old('address')); ?></textarea>
                                                            <?php if($errors->has('address')): ?>
                                                            <span class="help-block">
                                                                <strong><i class="fa fa-warning"></i> <?php echo e($errors->first('address')); ?></strong>
                                                            </span>
                                                            <?php endif; ?>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="contact_name">Contact Name</label>
                                                            <input type="text" placeholder="Enter Contact Name" name="contact_name" id="contact_name" class="form-control" value="<?php echo e(old('contact_name')); ?>"/>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="contact_email">Contact Email</label>
                                                            <input type="email" placeholder="Enter Contact Email" name="contact_email" id="contact_email" class="form-control" value="<?php echo e(old('contact_email')); ?>"/>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="contact_phone">Contact Phone</label>
                                                            <input type="text" placeholder="Enter Contact Phone" name="contact_phone" id="contact_phone" class="form-control" value="<?php echo e(old('contact_phone')); ?>"/>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="status">Status <b style="color: red">*</b></label>
                                                            <select class="form-control" name="status" id="status" required>
                                                                <option value="Active"<?php echo e((old('status') == 'Active') ? 'selected' : ''); ?>>Active</option>
                                                                <option value="Inactive"<?php echo e((old('status') == 'Inactive') ? 'selected' : ''); ?>>Inactive</option>
                                                            </select>
                                                            <?php if($errors->has('status')): ?>
                                                            <span class="help-block">
                                                                <strong><i class="fa fa-warning"></i> <?php echo e($errors->first('status')); ?></strong>
                                                            </span>
                                                            <?php endif; ?>
                                                        </div>
                                                        <button type="submit" class="btn btn-primary"><i class="fa fa-check"></i> Submit</button>
                                                    </form>
                                                </div>
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
            $("#branch_active").addClass("active");
            $("#branch_active").parent().parent().addClass("treeview active");
            $("#branch_active").parent().addClass("in");
        </script>
    </body>
</html>
