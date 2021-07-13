<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>AashePashe | Change Password</title>
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <link rel="stylesheet" href="<?php echo e(asset('frontend/assets/css/bootstrap_min.css')); ?>" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?php echo e(asset('frontend/assets/css/ion_icon.css')); ?>" />
        <link rel="stylesheet" href="<?php echo e(asset('frontend/assets/css/template_main.css')); ?>" />
        <link rel="stylesheet" href="<?php echo e(asset('frontend/assets/css/template_all_skin.css')); ?>" />
        <link rel="stylesheet" href="<?php echo e(asset('frontend/assets/css/custom_style.css')); ?>" />

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    </head>
    <body class="hold-transition skin-blue layout-top-nav">
        <div class="container">
            <div class="row" style="height: 30px;margin-top: 10px">
                <div class="col-md-12" style="">
                    <div class="col-md-6">
                        <span style="font-size: 16px"><i class="fa fa-map-marker "></i> Dhaka</span>
                        <a href="javascript:void(0)" style="font-size: 10px;border: 1px solid #ecf0f5;padding: 3px;border-radius: 5px">Switch City</a>
                    </div>
                    <div class="col-md-6 hidden-sm hidden-xs text-right">
                        <ul class="social-network social-circle">
                            <li><a href="#" class="icoRss" title="Rss"><i class="fa fa-rss"></i></a></li>
                            <li><a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#" class="icoGoogle" title="Google +"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="wrapper">
            <header class="main-header">
                <nav class="navbar navbar-static-top">
                    <div class="container">
                        <div class="navbar-header">
                            <a href="" class="navbar-brand"><img class="img img-responsive" src="<?php echo e(asset('frontend/images/logo.png')); ?>" /></a>
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
                                <i class="fa fa-bars"></i>
                            </button>
                        </div>
                    </div>
                </nav>
            </header>
            <div class="content-wrapper">
                <div class="container">
                    <div class="row" style="margin-top: 20px">
                        <div class="col-md-12">
                            <div class="col-md-3">
                                <div class="box box-primary">
                                    <div class="box-body box-profile">
                                        <img src="<?php echo e(asset('frontend/images/default.jpg')); ?>" class="profile-user-img img-responsive img-circle" alt="Image">
                                        <center>
                                            <a href="javascript:void(0);" data-toggle="modal" data-target="#avatar1" style="font-size: 10px"><i class="fa fa-image"></i> Change Avatar</a>
                                            <br><small>Last login 20/12/2019</small>
                                        </center>
                                        <div class="profile-usermenu">
                                            <ul class="nav">
                                                <li><a href="<?php echo e(URL::to('dashboard')); ?>"><i class="fa fa-user"></i> Account Information</a></li>
                                                <li class="active"><a href="<?php echo e(URL::to('change/password')); ?>"><i class="fa fa-lock"></i> Change Password</a></li>
                                                <li><a href="#"><i class="fa fa-cart-plus"></i>Order History</a></li>
                                                <li><a href="#"><i class="fa fa-heart"></i>Favourites</a></li>
                                            </ul>
                                        </div>                                    
                                        <a href="" class="btn btn-primary btn-block btn-xs"><b><i class="fa fa-sign-out"></i> Sign Out</b></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="box box-primary" style="min-height: 370px">
                                    <div class="panel panel-primary">
                                        <div class="panel-heading">Change Password</div>
                                        <div class="panel-body">
                                            <?php echo $__env->make('frontend.layout.message', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <form action="<?php echo e(URL::to('/update/password')); ?>" method="POST">
                                                        <?php echo e(csrf_field()); ?>

                                                        <div class="form-group has-feedback">
                                                            <label for="password">Current Password <b style="color: red">*</b></label>
                                                            <input type="password" class="form-control" id="password" name="password" value="" required="required" placeholder="Enter Current Password">
                                                            <?php if($errors->has('password')): ?>
                                                            <span class="help-block">
                                                                <strong><i class="fa fa-warning"></i> <?php echo e($errors->first('password')); ?></strong>
                                                            </span>
                                                            <?php endif; ?>
                                                        </div>
                                                        <div class="form-group has-feedback">
                                                            <label for="newPassword">New Password <b style="color: red">*</b></label>
                                                            <input type="password" class="form-control" id="newPassword" name="newPassword" required="required" placeholder="Enter New Password">
                                                            <?php if($errors->has('newPassword')): ?>
                                                            <span class="help-block">
                                                                <strong><i class="fa fa-warning"></i> <?php echo e($errors->first('newPassword')); ?></strong>
                                                            </span>
                                                            <?php endif; ?>
                                                        </div>
                                                        <div class="form-group has-feedback">
                                                            <label for="rePassword">Retype Password <b style="color: red">*</b></label>
                                                            <input type="password" class="form-control" id="rePassword" name="rePassword" required="required" placeholder="Retype Password">
                                                            <?php if($errors->has('rePassword')): ?>
                                                            <span class="help-block">
                                                                <strong><i class="fa fa-warning"></i> <?php echo e($errors->first('rePassword')); ?></strong>
                                                            </span>
                                                            <?php endif; ?>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-xs-12">
                                                                <button type="submit" class="btn btn-primary"><i class="fa fa-check"></i> Submit</button>
                                                            </div>
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
            <footer class="main-footer">
                <div class="container">
                    <?php echo $__env->make('frontend.layout.footer', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                </div>
            </footer>
        </div>
        <script src="<?php echo e(asset('frontend/assets/js/jquery.js')); ?>"></script>
        <script src="<?php echo e(asset('frontend/assets/js/bootstrap_min.js')); ?>"></script>
        <script src="<?php echo e(asset('frontend/assets/js/slimscroll.min.js')); ?>"></script>
        <script src="<?php echo e(asset('frontend/assets/js/fastclick.min.js')); ?>"></script>
        <script src="<?php echo e(asset('frontend/assets/js/app_min.js')); ?>"></script>
        <script src="<?php echo e(asset('frontend/assets/js/custom.js')); ?>"></script>
    </body>
</html>
