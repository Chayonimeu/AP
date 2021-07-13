<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Aashepashe | Merchant Account Information</title>
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <?php echo $__env->make('backend.layout.header_script', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
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
                                    <div class="panel-heading panel-style"><i class="fa fa-clone"></i> Account Information</div>
                                    <div class="panel-body">
                                        <?php echo $__env->make('backend.layout.panel.message', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="box box-primary">
                                                    <div class="box-body box-profile">
                                                        <?php if(Auth::guard('merchant')->user()->avatar == ''): ?>
                                                        <img src="<?php echo e(asset('backend/images/default.jpg')); ?>" alt="Image" class="profile-user-img img-responsive img-circle"/>
                                                        <?php else: ?>
                                                        <img src="<?php echo e(asset('upload/merchant/avatar/'.Auth::guard('merchant')->user()->avatar)); ?>" class="profile-user-img img-responsive img-circle" alt="Image"/>
                                                        <?php endif; ?>
                                                        <center>
                                                            <a href="javascript:void(0);" data-toggle="modal" data-target="#avatar<?php echo e(Auth::guard('merchant')->user()->merchant_id); ?>" style="font-size: 10px"><i class="fa fa-image"></i> Change Avatar</a>
                                                        </center>
                                                        <h3 class="profile-username text-center"><?php echo e(Auth::guard('merchant')->user()->name); ?></h3>
                                                        <ul class="list-group list-group-unbordered">
                                                            <li class="list-group-item">
                                                                <small><i class="fa fa-envelope-square"></i> Email address</small><br>
                                                                <b><?php echo e(Auth::guard('merchant')->user()->email); ?></b>
                                                            </li>
                                                            <li class="list-group-item">
                                                                <small><i class="fa fa-phone-square"></i> Phone Number</small><br>
                                                                <b><?php echo e(Auth::guard('merchant')->user()->phone); ?></b>
                                                            </li>
                                                            <?php if(Auth::guard('merchant')->user()->is_branch_user == 'No'): ?>
                                                            <li class="list-group-item">
                                                                <small><i class="fa fa-home"></i> Company Name</small><br>
                                                                <b><?php echo e(Auth::guard('merchant')->user()->company_name); ?></b>
                                                            </li>
                                                            <li class="list-group-item">
                                                                <small><i class="fa fa-home"></i> Company Logo</small><br>
                                                                <?php if(Auth::guard('merchant')->user()->company_logo == ''): ?>
                                                                <img src="<?php echo e(asset('frontend/images/default.jpg')); ?>" alt="Image" class="img-responsive img-circle" style="height: 80px"/>
                                                                <?php else: ?>
                                                                <img src="<?php echo e(asset('upload/merchant/logo/'.Auth::guard('merchant')->user()->company_logo)); ?>" class="img-responsive img-circle" style="height: 80px" alt="Image"/>
                                                                <?php endif; ?>
                                                                <a href="javascript:void(0);" data-toggle="modal" data-target="#logo<?php echo e(Auth::guard('merchant')->user()->merchant_id); ?>" style="font-size: 10px"><i class="fa fa-edit"></i> Change Logo</a>
                                                            </li>
                                                            <li class="list-group-item">
                                                                <small><i class="fa fa-filter"></i> Business Type</small><br>
                                                                <b><?php echo e(Auth::guard('merchant')->user()->get_business_type->name); ?></b>
                                                            </li>
                                                            <li class="list-group-item">
                                                                <small><i class="fa fa-map-marker"></i> Company Address</small><br>
                                                                <b><?php echo e(Auth::guard('merchant')->user()->company_address); ?></b>
                                                            </li>
                                                            <?php endif; ?>
                                                        </ul>
                                                        <a href="<?php echo e(URL::to('portal/merchant/logout')); ?>" class="btn btn-primary btn-block btn-xs"><b><i class="fa fa-sign-out"></i> Sign Out</b></a>
                                                    </div>
                                                    <!-- Avatar -->
                                                    <div id="avatar<?php echo e(Auth::guard('merchant')->user()->merchant_id); ?>" class="modal fade" role="dialog">
                                                        <div class="modal-dialog modal-md">
                                                            <div class="modal-content">
                                                                <form method="POST" enctype="multipart/form-data" action="<?php echo e(URL::to('portal/merchant/profile/avatar')); ?>">
                                                                    <?php echo e(csrf_field()); ?>

                                                                    <div class="modal-header">
                                                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                        <input type="hidden" name="merchant_id" value="<?php echo e(Auth::guard('merchant')->user()->merchant_id); ?>" />
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
                                                    <!-- Avatar -->
                                                    <!-- Logo -->
                                                    <div id="logo<?php echo e(Auth::guard('merchant')->user()->merchant_id); ?>" class="modal fade" role="dialog">
                                                        <div class="modal-dialog modal-md">
                                                            <div class="modal-content">
                                                                <form method="POST" enctype="multipart/form-data" action="<?php echo e(URL::to('portal/merchant/logo')); ?>">
                                                                    <?php echo e(csrf_field()); ?>

                                                                    <div class="modal-header">
                                                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                        <input type="hidden" name="merchant_id" value="<?php echo e(Auth::guard('merchant')->user()->merchant_id); ?>" />
                                                                        <h4 class="modal-title">Change Your Company Logo</h4>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <div class="form-group">
                                                                            <label for="company_logo">Choose Image <b style="color: red">*</b></label>
                                                                            <input name="company_logo" class="form-control" type="file" required="required">
                                                                        </div>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="submit" class="btn btn-primary"><i class="fa fa-check"></i> Submit</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Logo -->
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="nav-tabs-custom">
                                                    <ul class="nav nav-tabs">
                                                        <li class="active"><a href="<?php echo e(url::to('portal/merchant/profile')); ?>">Change Information</a></li>
                                                        <li><a href="<?php echo e(url::to('portal/merchant/password')); ?>">Change Password</a></li>
                                                    </ul>
                                                    <div class="tab-content">
                                                        <div class="active tab-pane">
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <form action="<?php echo e(url('portal/merchant/profile/update')); ?>" method="post" enctype="multipart/form-data">
                                                                        <?php echo e(csrf_field()); ?>

                                                                        <input type="hidden" name="merchant_id" value="<?php echo e(Auth::guard('merchant')->user()->merchant_id); ?>" />
                                                                        <input type="hidden" name="is_branch_user" value="<?php echo e(Auth::guard('merchant')->user()->is_branch_user); ?>" />
                                                                        <div class="form-group">
                                                                            <label for="name">Name <b style="color: red">*</b></label>
                                                                            <input type="text" class="form-control" id="name" name="name" value="<?php echo e(Auth::guard('merchant')->user()->name); ?>" required="required">
                                                                            <?php if($errors->has('name')): ?>
                                                                            <span class="help-block">
                                                                                <strong><i class="fa fa-warning"></i> <?php echo e($errors->first('name')); ?></strong>
                                                                            </span>
                                                                            <?php endif; ?>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="email">Email Address <b style="color: red">*</b></label>
                                                                            <input type="email" class="form-control" id="email" name="email" value="<?php echo e(Auth::guard('merchant')->user()->email); ?>" readonly="readonly">
                                                                            <small style="color: darkred"><i class="fa fa-info-circle"></i> Email address not editable</small>
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
                                                                                    <option value="<?php echo e($country->code); ?>"<?php echo e((Auth::guard('merchant')->user()->country_code == $country->code) ? 'selected' : ''); ?>><?php echo e($country->name); ?> (<?php echo e($country->code); ?>)</option>
                                                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                                </select>
                                                                            </div>
                                                                            <div class="col-sm-10 col-xs-8 col-md-8">
                                                                                <div class="form-group">
                                                                                    <input type="text" required="required" class="form-control" placeholder="Enter Phone Number" id="phone" name="phone" value="<?php echo e(Auth::guard('merchant')->user()->phone); ?>" />
                                                                                    <?php if($errors->has('phone')): ?>
                                                                                    <span class="help-block">
                                                                                        <strong><i class="fa fa-warning"></i> <?php echo e($errors->first('phone')); ?></strong>
                                                                                    </span>
                                                                                    <?php endif; ?>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <?php if(Auth::guard('merchant')->user()->is_branch_user == 'No'): ?>
                                                                        <div class="form-group">
                                                                            <label class="control-label" for="company_name">Company Name <b style="color: red">*</b></label>
                                                                            <input maxlength="100" type="text" required="required" class="form-control" placeholder="Enter Company Name" id="company_name" name="company_name" value="<?php echo e(Auth::guard('merchant')->user()->company_name); ?>" />
                                                                            <?php if($errors->has('company_name')): ?>
                                                                            <span class="help-block">
                                                                                <strong><i class="fa fa-warning"></i> <?php echo e($errors->first('company_name')); ?></strong>
                                                                            </span>
                                                                            <?php endif; ?>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label class="control-label" for="company_address">Address <b style="color: red">*</b></label>
                                                                            <textarea class="form-control" id="company_address" name="company_address" required="required"><?php echo e(Auth::guard('merchant')->user()->company_address); ?></textarea>
                                                                        </div>
                                                                        <?php endif; ?>
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
            <?php echo $__env->make('backend.layout.panel.footer', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </div>
        <?php echo $__env->make('backend.layout.panel.footer_script', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </body>
</html>
