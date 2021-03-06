<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Aashepashe | Account Information</title>
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
                                    <div class="panel-heading panel-style"><i class="fa fa-clone"></i> Account Information</div>
                                    <div class="panel-body">
                                        <?php echo $__env->make('backend.layout.message', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="box box-primary">
                                                    <div class="box-body box-profile">
                                                        <?php if(Auth::guard('admin')->user()->avatar == ''): ?>
                                                        <img src="<?php echo e(asset('backend/images/default.jpg')); ?>" alt="Image" class="profile-user-img img-responsive img-circle"/>
                                                        <?php else: ?>
                                                        <img src="<?php echo e(asset('upload/admin/avatar/'.Auth::guard('admin')->user()->avatar)); ?>" class="profile-user-img img-responsive img-circle" alt="Image"/>
                                                        <?php endif; ?>
                                                        <center>
                                                            <a href="javascript:void(0);" data-toggle="modal" data-target="#avatar<?php echo e(Auth::guard('admin')->user()->admin_id); ?>" style="font-size: 12px"><i class="fa fa-image"></i> Change Avatar</a>
                                                        </center>
                                                        <h3 class="profile-username text-center"><?php echo e(Auth::guard('admin')->user()->name); ?></h3>
                                                        <ul class="list-group list-group-unbordered">
                                                            <li class="list-group-item">
                                                                <small><i class="fa fa-envelope-square"></i> Email address</small><br>
                                                                <b><?php echo e(Auth::guard('admin')->user()->email); ?></b>
                                                            </li>
                                                            <li class="list-group-item">
                                                                <small><i class="fa fa-phone-square"></i> Phone Number</small><br>
                                                                <b><?php echo e(Auth::guard('admin')->user()->phone); ?></b>
                                                            </li>
                                                            <li class="list-group-item">
                                                                <small><i class="fa fa-filter"></i> Account Type</small><br>
                                                                <b><?php echo e(Auth::guard('admin')->user()->type); ?></b>
                                                            </li>
                                                        </ul>
                                                        <a href="<?php echo e(URL::to('portal/logout')); ?>" class="btn btn-primary btn-block btn-xs"><b><i class="fa fa-sign-out"></i> Sign Out</b></a>
                                                    </div>
                                                    <div id="avatar<?php echo e(Auth::guard('admin')->user()->admin_id); ?>" class="modal fade" role="dialog">
                                                        <div class="modal-dialog modal-md">
                                                            <div class="modal-content">
                                                                <form method="POST" enctype="multipart/form-data" action="<?php echo e(URL::to('portal/profile/avatar')); ?>">
                                                                    <?php echo e(csrf_field()); ?>

                                                                    <div class="modal-header">
                                                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                        <input type="hidden" name="admin_id" value="<?php echo e(Auth::guard('admin')->user()->admin_id); ?>" />
                                                                        <h4 class="modal-title">Change Your Profile Picture</h4>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <div class="form-group">
                                                                            <label for="avatar">Choose Image <b style="color: red">*</b></label>
                                                                            <input name="avatar" class="form-control" type="file" required="required">
                                                                        </div>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="submit" class="btn btn-primary"><i class="fa fa-check"></i> Submit</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="nav-tabs-custom">
                                                    <ul class="nav nav-tabs">
                                                        <li class="active"><a href="<?php echo e(url::to('portal/profile')); ?>">Change Information</a></li>
                                                        <li><a href="<?php echo e(url::to('portal/password')); ?>">Change Password</a></li>
                                                    </ul>
                                                    <div class="tab-content">
                                                        <div class="active tab-pane">
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <form action="<?php echo e(url('portal/profile/update')); ?>" method="post" enctype="multipart/form-data">
                                                                        <?php echo e(csrf_field()); ?>

                                                                        <input type="hidden" name="admin_id" value="<?php echo e(Auth::guard('admin')->user()->admin_id); ?>" />
                                                                        <div class="form-group">
                                                                            <label for="name">Name <b style="color: red">*</b></label>
                                                                            <input type="text" class="form-control" id="name" name="name" value="<?php echo e(Auth::guard('admin')->user()->name); ?>" required="required">
                                                                            <?php if($errors->has('name')): ?>
                                                                            <span class="help-block">
                                                                                <strong><i class="fa fa-warning"></i> <?php echo e($errors->first('name')); ?></strong>
                                                                            </span>
                                                                            <?php endif; ?>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="email">Email Address <b style="color: red">*</b></label>
                                                                            <input type="email" class="form-control" id="email" name="email" value="<?php echo e(Auth::guard('admin')->user()->email); ?>" readonly>
                                                                            <small style="color: darkred"><i class="fa fa-info-circle"></i> Email address not editable</small>
                                                                            <?php if($errors->has('email')): ?>
                                                                            <span class="help-block">
                                                                                <strong><i class="fa fa-warning"></i> <?php echo e($errors->first('email')); ?></strong>
                                                                            </span>
                                                                            <?php endif; ?>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="phone">Phone Number <b style="color: red">*</b></label>
                                                                            <input type="text" class="form-control" id="phone" name="phone" value="<?php echo e(Auth::guard('admin')->user()->phone); ?>" required="required">
                                                                            <?php if($errors->has('phone')): ?>
                                                                            <span class="help-block">
                                                                                <strong><i class="fa fa-warning"></i> <?php echo e($errors->first('phone')); ?></strong>
                                                                            </span>
                                                                            <?php endif; ?>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <button type="submit" class="btn btn-primary"><i class="fa fa-check"></i> Submit</button>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
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
    </body>
</html>
