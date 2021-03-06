<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Aashepashe | Merchant Account Verification</title>
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <link rel="stylesheet" href="<?php echo e(asset('frontend/assets/css/bootstrap_min.css')); ?>" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?php echo e(asset('frontend/assets/css/ion_icon.css')); ?>" />
        <link rel="stylesheet" href="<?php echo e(asset('frontend/assets/css/template_main.css')); ?>" />
        <link rel="stylesheet" href="<?php echo e(asset('frontend/assets/css/template_all_skin.css')); ?>" />
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    </head>
    <body class="hold-transition login-page" style="background-color: #FFF">
        <div class="login-box">
            <div class="login-logo">
                <center>
                    <img class="img img-responsive" src="<?php echo e(asset('frontend/images/logo.png')); ?>" />
                </center>
            </div>
            <div class="panel panel-primary" style="border: 1px solid #48a0d6">
                <div class="panel-heading" style="background: #48a0d6;font-weight: bold"><i class="fa fa-check"></i> Verify Your Account</div>
                <div class="panel-body">
                    <?php echo $__env->make('frontend.layout.message', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                    <form action="<?php echo e(URL::to('merchant/verification')); ?>" method="post">
                        <?php echo e(csrf_field()); ?>

                        <input type="hidden" name="random_code" value="<?php echo e($random_code); ?>" />
                        <div class="form-group has-feedback">
                            <input type="text" class="form-control" id="code" name="code" value="<?php echo e(old('code')); ?>" placeholder="Enter Verification Code" required="required">
                            <span class="glyphicon glyphicon-phone form-control-feedback"></span>
                            <?php if($errors->has('code')): ?>
                            <span class="help-block">
                                <strong><i class="fa fa-warning"></i> <?php echo e($errors->first('code')); ?></strong>
                            </span>
                            <?php endif; ?>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <button type="submit" class="btn btn-primary btn-block"><i class="fa fa-check"></i> Submit</button>
                            </div>
                        </div>
                    </form>
                    <br>
                    <center>
                        <a href="<?php echo e(URL::to('/')); ?>" style="font-size: 16px;text-align: center"><i class="fa fa-home"></i> Back Home</a><br>
                    </center>
                </div>
            </div>
        </div>
        <script src="<?php echo e(asset('frontend/assets/js/jquery.js')); ?>"></script>
        <script src="<?php echo e(asset('frontend/assets/js/bootstrap_min.js')); ?>"></script>
    </body>
</html>
