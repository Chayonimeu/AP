<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Aashepashe | Add User</title>
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
                                    <div class="panel-heading panel-style"><i class="fa fa-clone"></i> Add New User</div>
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="col-md-6">
                                                    <form role="form" class="" method="POST" action="<?php echo e(URL::to('portal/merchant/user/store')); ?>" enctype="multipart/form-data">
                                                        <?php echo e(csrf_field()); ?>

                                                        <div class="form-group">
                                                            <label for="name">Name <b style="color: red">*</b></label>
                                                            <input type="text" maxlength="100" placeholder="Enter Name" name="name" id="name" class="form-control" value="<?php echo e(old('name')); ?>" required/>
                                                            <?php if($errors->has('name')): ?>
                                                            <span class="help-block">
                                                                <strong><i class="fa fa-warning"></i> <?php echo e($errors->first('name')); ?></strong>
                                                            </span>
                                                            <?php endif; ?>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="email">Email Address <b style="color: red">*</b></label>
                                                            <input type="email" maxlength="100" placeholder="Enter Email Address" name="email" id="email" class="form-control" value="<?php echo e(old('email')); ?>" required/>
                                                            <?php if($errors->has('email')): ?>
                                                            <span class="help-block">
                                                                <strong><i class="fa fa-warning"></i> <?php echo e($errors->first('email')); ?></strong>
                                                            </span>
                                                            <?php endif; ?>
                                                        </div>
                                                        <label class="control-label" for="phone">Phone Number <b style="color: red">*</b></label>
                                                        <div class="row">
                                                            <div class="col-sm-2 col-xs-4 col-md-4">
                                                                <select class="form-control select2" name="country_code" id="country_code" required="required">
                                                                    <option value="">--</option>
                                                                    <?php $__currentLoopData = $country_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $country): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                    <option value="<?php echo e($country->code); ?>"<?php echo e((old('country_code') == $country->code) ? 'selected' : ''); ?>><?php echo e($country->name); ?> (<?php echo e($country->code); ?>)</option>
                                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                </select>
                                                            </div>
                                                            <div class="col-sm-10 col-xs-8 col-md-8">
                                                                <div class="form-group">
                                                                    <input type="text" required="required" class="form-control" placeholder="Enter Phone Number" id="phone" name="phone" value="<?php echo e(old('phone')); ?>" />
                                                                    <?php if($errors->has('phone')): ?>
                                                                    <span class="help-block">
                                                                        <strong><i class="fa fa-warning"></i> <?php echo e($errors->first('phone')); ?></strong>
                                                                    </span>
                                                                    <?php endif; ?>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="password">Password <b style="color: red">*</b></label>
                                                            <input type="password" maxlength="255" placeholder="Enter Password" name="password" id="password" class="form-control" value="" required/>
                                                            <?php if($errors->has('password')): ?>
                                                            <span class="help-block">
                                                                <strong><i class="fa fa-warning"></i> <?php echo e($errors->first('password')); ?></strong>
                                                            </span>
                                                            <?php endif; ?>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="re_password">Retype Password <b style="color: red">*</b></label>
                                                            <input type="password" maxlength="255" placeholder="Retype Password" name="re_password" id="re_password" class="form-control" value="" required/>
                                                            <?php if($errors->has('re_password')): ?>
                                                            <span class="help-block">
                                                                <strong><i class="fa fa-warning"></i> <?php echo e($errors->first('re_password')); ?></strong>
                                                            </span>
                                                            <?php endif; ?>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="status">Status <b style="color: red">*</b></label>
                                                            <select class="form-control select2" name="status" id="status" required>
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
            $("#merchant_user_active").addClass("active");
            $("#merchant_user_active").parent().parent().addClass("treeview active");
            $("#merchant_user_active").parent().addClass("in");
        </script>
    </body>
</html>
