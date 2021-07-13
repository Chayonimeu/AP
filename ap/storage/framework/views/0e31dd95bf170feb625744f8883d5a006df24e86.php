<!DOCTYPE html>
<html>
    <head>
        <title>Aashepashe | System Login Area</title>
        <meta charset="UTF-8">
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <?php echo $__env->make('backend.layout.header_script', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </head>
    <body class="login-page">
        <div class="login-box">
            <div class="login-logo">
                <center>
                    <img class="img img-responsive" src="<?php echo e(asset('backend/images/logo.png')); ?>" />
                    <h3>Admin Access Portal</h3>
                </center>
            </div>
            <div class="login-box-body">
                <?php echo $__env->make('backend.layout.message', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                <form role="form" action="<?php echo e(URL::to('portal/authenticate')); ?>" method="POST">
                    <?php echo e(csrf_field()); ?>

                    <div class="form-group">
                        <label for="email">Email Address <b style="color: red">*</b></label>
                        <input type="email" class="form-control" required="required" id="email" name="email" value="<?php echo e(old('email')); ?>" placeholder="Enter Email Address"/>
                        <?php if($errors->has('email')): ?>
                        <span class="help-block">
                            <strong><i class="fa fa-warning"></i> <?php echo e($errors->first('email')); ?></strong>
                        </span>
                        <?php endif; ?>
                    </div>
                    <div class="form-group">
                        <label for="password">Password <b style="color: red">*</b></label>
                        <input type="password" required="required" id="password" name="password" class="form-control" placeholder="Enter Password" value=""/>
                        <?php if($errors->has('password')): ?>
                        <span class="help-block">
                            <strong><i class="fa fa-warning"></i> <?php echo e($errors->first('password')); ?></strong>
                        </span>
                        <?php endif; ?>
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                            <button name="btn" class="btn btn-primary btn-block"><i class="fa fa-check"></i> Sign In</button>
                        </div>
                    </div>
                </form>
                <div class="row">
                    <div class="col-xs-12">
                        <center><a href="#">Forgot Password?</a></center>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="col-xs-12" style="border: 1px solid #48a0d6">
                            <center><h5><b>Demo User</b></h5></center>
                            <center><span>Email: johndoe@gmail.com</span></center>
                            <center><span>Password: johndoe@gmail.com</span></center>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <p style="text-align: center;font-weight: bold">Copyright @ <?php echo e(date('Y')); ?>. Version 1.0.0</p>
                </div>
            </div>
        </div>
        <?php echo $__env->make('backend.layout.footer_script', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </body>
</html>