<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Ashepashe | Account Complete</title>
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
                <div class="panel-heading" style="background: #48a0d6;font-weight: bold"><i class="fa fa-thumbs-up"></i> Account Complete</div>
                <div class="panel-body">
                    <p style="font-size: 16px">Account verified successfully. Please wait for system admin approval. You will notify soon.</p>
                    <center>
                        <a href="<?php echo e(URL::to('/')); ?>" style="font-size: 16px"><i class="fa fa-home"></i> Back Home</a><br>
                    </center>
                </div>
            </div>
        </div>
        <script src="<?php echo e(asset('frontend/assets/js/jquery.js')); ?>"></script>
        <script src="<?php echo e(asset('frontend/assets/js/bootstrap_min.js')); ?>"></script>
    </body>
</html>
