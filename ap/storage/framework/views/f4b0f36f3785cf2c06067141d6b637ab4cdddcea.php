<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Aashepashe | Terms & Conditions</title>
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
                                    <div class="panel-heading panel-style"><i class="fa fa-clone"></i> System Settings | Terms & Conditions</div>
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
                                                        <li><a href="<?php echo e(URL::to('portal/system')); ?>">General Info</a></li>
                                                        <li><a href="<?php echo e(URL::to('portal/about')); ?>">About Us</a></li>
                                                        <li><a href="<?php echo e(URL::to('portal/privacy')); ?>">Privacy & Policy</a></li>
                                                        <li  class="active"><a href="<?php echo e(URL::to('portal/terms')); ?>">Terms & Conditions</a></li>
                                                        <li><a href="#">Contact Us</a></li>
                                                    </ul>
                                                    <div class="tab-content">
                                                        <div class="active tab-pane">
                                                            <div class="box box-primary">
                                                                <div class="box-header with-border">
                                                                    <h3 class="box-title">Terms & Conditions</h3>
                                                                </div>
                                                                <div class="box-body">
                                                                    <form class="" action="<?php echo e(url('portal/terms/update')); ?>" method="post" enctype="multipart/form-data">
                                                                        <?php echo e(csrf_field()); ?>

                                                                        <input type="hidden" name="system_settings_id" value="<?php echo e($system_info->system_settings_id); ?>">
                                                                        <div class="form-group">
                                                                            <label for="terms" class="control-label">Terms & Conditions <b style="color: red">*</b></label>
                                                                            <textarea class="form-control" name="terms" id="terms" required="required"><?php echo e($system_info->terms); ?></textarea>
                                                                            <?php if($errors->has('terms')): ?>
                                                                            <span class="help-block">
                                                                                <strong><i class="fa fa-warning"></i> <?php echo e($errors->first('terms')); ?></strong>
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
        <script src="https://adminlte.io/themes/AdminLTE/bower_components/ckeditor/ckeditor.js">
        </script>
        <script>
            $(document).ready(function () {
                CKEDITOR.replace('terms');
            });
        </script>
        <script type="text/javascript">
            $("#system_active").addClass("active");
            $("#system_active").parent().parent().addClass("treeview active");
            $("#system_active").parent().addClass("in");
        </script>
    </body>
</html>
