<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Aashepashe | General Information</title>
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
                                    <div class="panel-heading panel-style"><i class="fa fa-clone"></i> System Settings | General Information</div>
                                    <div class="panel-body">
                                        <?php echo $__env->make('backend.layout.message', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="box box-primary">
                                                    <div class="box-body box-profile">
                                                        <center>
                                                            <?php if($system_info->logo == ''): ?>
                                                            <img src="<?php echo e(asset('backend/images/logo.png')); ?>" alt="Logo" class="img img-responsive" style="max-height: 100px"/>
                                                            <?php else: ?>
                                                            <img src="<?php echo e(url('upload/'.$system_info->logo)); ?>" alt="Logo" class="img img-responsive" style="max-height: 100px;" />
                                                            <?php endif; ?>
                                                        </center>
                                                        <h4 class="text-center"><?php echo e($system_info->name); ?></h4>
                                                        <h5 class="text-center" style="color: darkred;font-weight: bold"><?php echo e($system_info->short_name); ?></h5>
                                                        <ul class="list-group list-group-unbordered">
                                                            <li class="list-group-item">
                                                                <small><i class="fa fa-envelope-square"></i> Sales Email</small><br>
                                                                <b><?php echo e($system_info->sales_email); ?></b><br>
                                                                <small><i class="fa fa-phone-square"></i> Sales Phone</small><br>
                                                                <b><?php echo e($system_info->sales_phone); ?></b>
                                                            </li>
                                                            <li class="list-group-item">
                                                                <small><i class="fa fa-envelope-square"></i> Support Email</small><br>
                                                                <b><?php echo e($system_info->support_email); ?></b><br>
                                                                <small><i class="fa fa-phone-square"></i> Support Phone</small><br>
                                                                <b><?php echo e($system_info->support_phone); ?></b>
                                                            </li>
                                                            <li class="list-group-item">
                                                                <small><i class="fa fa-envelope-square"></i> Billing Email</small><br>
                                                                <b><?php echo e($system_info->billing_email); ?></b><br>
                                                                <small><i class="fa fa-phone-square"></i> Billing Phone</small><br>
                                                                <b><?php echo e($system_info->billing_phone); ?></b>
                                                            </li>
                                                            <li class="list-group-item">
                                                                <small><i class="fa fa-location-arrow"></i> Company Address</small><br>
                                                                <b><?php echo e($system_info->address); ?></b>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="box box-primary">
                                                    <div class="box-header with-border">
                                                        <h3 class="box-title">Social Media</h3>
                                                    </div>
                                                    <div class="box-body">
                                                        <strong><i class="fa fa-facebook-square"></i> Facebook</strong>
                                                        <p class="text-muted"><?php echo e($system_info->facebook); ?></p>
                                                        <strong><i class="fa fa-google-plus-square"></i> Google+</strong>
                                                        <p class="text-muted"><?php echo e($system_info->google); ?></p>
                                                        <strong><i class="fa fa-youtube-square"></i> Youtube</strong>
                                                        <p class="text-muted"><?php echo e($system_info->youtube); ?></p>
                                                        <strong><i class="fa fa-linkedin-square"></i> Linkedin</strong>
                                                        <p class="text-muted"><?php echo e($system_info->linkedin); ?></p>
                                                        <strong><i class="fa fa-twitter-square"></i> Twitter</strong>
                                                        <p class="text-muted"><?php echo e($system_info->twitter); ?></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="nav-tabs-custom">
                                                    <ul class="nav nav-tabs">
                                                        <li class="active"><a href="<?php echo e(URL::to('portal/system')); ?>">General Info</a></li>
                                                        <li><a href="<?php echo e(URL::to('portal/about')); ?>">About Us</a></li>
                                                        <li><a href="<?php echo e(URL::to('portal/privacy')); ?>">Privacy & Policy</a></li>
                                                        <li><a href="<?php echo e(URL::to('portal/terms')); ?>">Terms & Conditions</a></li>
                                                        <li><a href="#">Contact Us</a></li>
                                                    </ul>
                                                    <div class="tab-content">
                                                        <div class="active tab-pane">
                                                            <div class="box box-primary">
                                                                <div class="box-header with-border">
                                                                    <h3 class="box-title">Edit General Information</h3>
                                                                </div>
                                                                <div class="box-body">
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <form class="" action="<?php echo e(url('portal/system/update')); ?>" method="post" enctype="multipart/form-data">
                                                                                <?php echo e(csrf_field()); ?>

                                                                                <input type="hidden" name="system_settings_id" value="<?php echo e($system_info->system_settings_id); ?>">
                                                                                <div class="form-group">
                                                                                    <label for="name">Name <b style="color: red">*</b></label>
                                                                                    <input type="text" maxlength="100" class="form-control" id="name" name="name" value="<?php echo e($system_info->name); ?>" required="required">
                                                                                    <?php if($errors->has('name')): ?>
                                                                                    <span class="help-block">
                                                                                        <strong><i class="fa fa-warning"></i> <?php echo e($errors->first('name')); ?></strong>
                                                                                    </span>
                                                                                    <?php endif; ?>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="short_name">Short Name <b style="color: red">*</b></label>
                                                                                    <input type="text" maxlength="15" class="form-control" id="short_name" name="short_name" value="<?php echo e($system_info->short_name); ?>" required="required">
                                                                                    <?php if($errors->has('short_name')): ?>
                                                                                    <span class="help-block">
                                                                                        <strong><i class="fa fa-warning"></i> <?php echo e($errors->first('short_name')); ?></strong>
                                                                                    </span>
                                                                                    <?php endif; ?>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="facebook">Facebook</label>
                                                                                    <input type="url" class="form-control" id="facebook" name="facebook" value="<?php echo e($system_info->facebook); ?>">
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="google">Google+</label>
                                                                                    <input type="url" class="form-control" id="google" name="google" value="<?php echo e($system_info->google); ?>">
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="youtube">YouTube</label>
                                                                                    <input type="url" class="form-control" id="youtube" name="youtube" value="<?php echo e($system_info->youtube); ?>">
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="linkedin">LinkedIn</label>
                                                                                    <input type="url" class="form-control" id="linkedin" name="linkedin" value="<?php echo e($system_info->linkedin); ?>">
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="twitter">Twitter</label>
                                                                                    <input type="url" class="form-control" id="twitter" name="twitter" value="<?php echo e($system_info->twitter); ?>">
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="sales_email">Sales Email</label>
                                                                                    <input type="email" maxlength="100" class="form-control" id="sales_email" name="sales_email" value="<?php echo e($system_info->sales_email); ?>">
                                                                                </div>                                                                
                                                                                <div class="form-group">
                                                                                    <label for="sales_phone">Sales Phone</label>
                                                                                    <input type="text" class="form-control" id="sales_phone" name="sales_phone" value="<?php echo e($system_info->sales_phone); ?>">
                                                                                </div>                                                                
                                                                                <div class="form-group">
                                                                                    <label for="support_email">Support Email</label>
                                                                                    <input type="email" maxlength="100" class="form-control" id="support_email" name="support_email" value="<?php echo e($system_info->support_email); ?>">
                                                                                </div>                                                                
                                                                                <div class="form-group">
                                                                                    <label for="support_phone">Support Phone</label>
                                                                                    <input type="text" class="form-control" id="support_phone" name="support_phone" value="<?php echo e($system_info->support_phone); ?>">
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="billing_email">Billing Email</label>
                                                                                    <input type="email" maxlength="100" class="form-control" id="billing_email" name="billing_email" value="<?php echo e($system_info->billing_email); ?>">
                                                                                </div>                                                                
                                                                                <div class="form-group">
                                                                                    <label for="billing_phone">Billing Phone</label>
                                                                                    <input type="text" class="form-control" id="billing_phone" name="billing_phone" value="<?php echo e($system_info->billing_phone); ?>">
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="address">Address</label>
                                                                                    <textarea class="form-control" name="address" id="address" rows="3"><?php echo e($system_info->address); ?></textarea>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="logo">Logo</label>
                                                                                    <input type="file" class="form-control" name="logo" id="logo">
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="is_phone_verification">Is Phone Verification Required?</label>
                                                                                    <select class="form-control select2" id="is_phone_verification" name="is_phone_verification">
                                                                                        <option value="Yes"<?php echo e($system_info->is_phone_verification == 'Yes' ? 'selected' : ''); ?>>Yes</option>
                                                                                        <option value="No"<?php echo e($system_info->is_phone_verification == 'No' ? 'selected' : ''); ?>>No</option>
                                                                                    </select>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="is_email_verification">Is Email Verification Required?</label>
                                                                                    <select class="form-control select2" id="is_email_verification" name="is_email_verification">
                                                                                        <option value="Yes"<?php echo e($system_info->is_email_verification == 'Yes' ? 'selected' : ''); ?>>Yes</option>
                                                                                        <option value="No"<?php echo e($system_info->is_email_verification == 'No' ? 'selected' : ''); ?>>No</option>
                                                                                    </select>
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
                        </div>
                    </div>
                </section>
            </div>
            <?php echo $__env->make('backend.layout.footer', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </div>
        <?php echo $__env->make('backend.layout.footer_script', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <script type="text/javascript">
            $("#system_active").addClass("active");
            $("#system_active").parent().parent().addClass("treeview active");
            $("#system_active").parent().addClass("in");
        </script>
    </body>
</html>
