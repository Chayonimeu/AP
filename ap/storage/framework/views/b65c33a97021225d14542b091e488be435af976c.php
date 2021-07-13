<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Aashepashe | Portal Users | Add New User</title>
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
                                    <div class="panel-heading panel-style"><i class="fa fa-clone"></i> Add New Portal User</div>
                                    <div class="panel-body">
                                        <?php echo $__env->make('backend.layout.message', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <form role="form" class="" method="POST" action="<?php echo e(URL::to('portal/admin/store')); ?>" enctype="multipart/form-data">
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
                                                        <input type="email" maxlength="100" placeholder="Enter Email" name="email" id="email" class="form-control" value="<?php echo e(old('email')); ?>" required/>
                                                        <?php if($errors->has('email')): ?>
                                                        <span class="help-block">
                                                            <strong><i class="fa fa-warning"></i> <?php echo e($errors->first('email')); ?></strong>
                                                        </span>
                                                        <?php endif; ?>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="password">Password (confidential) <b style="color: red">*</b></label>
                                                        <input type="password" placeholder="Enter Password" name="password" id="password" class="form-control" value="<?php echo e(old('password')); ?>" required />
                                                        <?php if($errors->has('password')): ?>
                                                        <span class="help-block">
                                                            <strong><i class="fa fa-warning"></i> <?php echo e($errors->first('password')); ?></strong>
                                                        </span>
                                                        <?php endif; ?>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="phone">Phone Number <b style="color: red">*</b></label>
                                                        <input type="text" placeholder="Enter Phone" name="phone" id="phone" class="form-control" value="<?php echo e(old('phone')); ?>" required />
                                                        <?php if($errors->has('phone')): ?>
                                                        <span class="help-block">
                                                            <strong><i class="fa fa-warning"></i> <?php echo e($errors->first('phone')); ?></strong>
                                                        </span>
                                                        <?php endif; ?>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="avatar">Image</label>
                                                        <input type="file" name="avatar" id="avatar" class="form-control"/>
                                                        <?php if($errors->has('avatar')): ?>
                                                        <span class="help-block">
                                                            <strong><i class="fa fa-warning"></i> <?php echo e($errors->first('avatar')); ?></strong>
                                                        </span>
                                                        <?php endif; ?>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="type">Type <b style="color: red">*</b></label>
                                                        <select class="form-control select2" name="type" id="type" required>
                                                            <option value="Admin"<?php echo e((old('type') == 'Admin') ? 'selected' : ''); ?>>Admin</option>
                                                            <option value="Employee"<?php echo e((old('type') == 'Employee') ? 'selected' : ''); ?>>Employee</option>
                                                        </select>
                                                        <?php if($errors->has('type')): ?>
                                                        <span class="help-block">
                                                            <strong><i class="fa fa-warning"></i> <?php echo e($errors->first('type')); ?></strong>
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
                </section>
            </div>
            <?php echo $__env->make('backend.layout.footer', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </div>
        <?php echo $__env->make('backend.layout.footer_script', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <script type="text/javascript">
            $("#admin_active").addClass("active");
            $("#admin_active").parent().parent().addClass("treeview active");
            $("#admin_active").parent().addClass("in");
        </script>
    </body>
</html>
