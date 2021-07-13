<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Ashepashe | Edit Property Category</title>
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <?php echo $__env->make('backend.layout.header_script', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </head>
    <body class="hold-transition skin-blue sidebar-mini">
        <div class="wrapper">
            <?php echo $__env->make('backend.layout.header', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <?php echo $__env->make('backend.layout.menu', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <div class="content-wrapper">
                <section class="content">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel-group">
                                <div class="panel panel-primary">
                                    <div class="panel-heading panel-style"><i class="fa fa-clone"></i> Edit Property Category For Hotel
                                        <a href="<?php echo e(url()->previous()); ?>" class="pull-right"><i class="fa fa-arrow-circle-left"></i> Go Back</a>
                                    </div>
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="col-md-6">
                                                    <form role="form" class="" method="POST" action="<?php echo e(URL::to('portal/property/update')); ?>" enctype="multipart/form-data">
                                                        <?php echo e(csrf_field()); ?>

                                                        <input type="hidden" name="property_id" value="<?php echo e($data_list->property_id); ?>" />
                                                        <div class="form-group">
                                                            <label for="name">Name <b style="color: red">*</b></label>
                                                            <input type="text" placeholder="Enter Name" name="name" id="name" class="form-control" value="<?php echo e($data_list->name); ?>" required/>
                                                            <?php if($errors->has('name')): ?>
                                                            <span class="help-block">
                                                                <strong><i class="fa fa-warning"></i> <?php echo e($errors->first('name')); ?></strong>
                                                            </span>
                                                            <?php endif; ?>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="details">Short Details</label>
                                                            <textarea maxlength="255" class="form-control" id="details" name="details" ><?php echo e($data_list->details); ?></textarea>
                                                            <small style="color: darkred"><i class="fa fa-info-circle"></i> Short details must be less than 255 characters</small>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="status">Status <b style="color: red">*</b></label>
                                                            <select class="form-control select2" name="status" id="status" required>
                                                                <option value="Active"<?php echo e(($data_list->status == 'Active') ? 'selected' : ''); ?>>Active</option>
                                                                <option value="Inactive"<?php echo e(($data_list->status == 'Inactive') ? 'selected' : ''); ?>>Inactive</option>
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
            <?php echo $__env->make('backend.layout.footer', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </div>
        <?php echo $__env->make('backend.layout.footer_script', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>

        <script type="text/javascript">
            $("#property_active").addClass("active");
            $("#property_active").parent().parent().addClass("treeview active");
            $("#property_active").parent().addClass("in");
        </script>
    </body>
</html>
