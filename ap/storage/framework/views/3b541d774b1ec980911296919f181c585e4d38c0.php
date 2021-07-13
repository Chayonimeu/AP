<header class="main-header">
    <a href="#" class="logo">
        <span class="logo-mini"><b>AP</b></span>
        <span class="logo-lg" style="font-size: 15px;"><b>System Admin Panel</b></span>
    </a>
    <nav class="navbar navbar-static-top" role="navigation">
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <?php if(Auth::guard('admin')->user()->avatar == ''): ?>
                        <img src="<?php echo e(asset('backend/images/default.jpg')); ?>" alt="Image" class="user-image"/>
                        <?php else: ?>
                        <img src="<?php echo e(asset('upload/admin/avatar/'.Auth::guard('admin')->user()->avatar)); ?>" class="user-image" alt="Image"/>
                        <?php endif; ?>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="user-header">
                            <?php if(Auth::guard('admin')->user()->avatar == ''): ?>
                            <img src="<?php echo e(asset('backend/images/default.jpg')); ?>" alt="Image" class="img-circle"/>
                            <?php else: ?>
                            <img src="<?php echo e(asset('upload/admin/avatar/'.Auth::guard('admin')->user()->avatar)); ?>" class="img-circle" alt="Image"/>
                            <?php endif; ?>
                            <p>
                                <?php echo e(Auth::guard('admin')->user()->name); ?>

                                <?php $last_login = App\SessionActivityModel::where('user_id', Auth::guard('admin')->user()->admin_id)->where('user_type', 'Admin')->first(); ?>
                                <small>Last Login - <?php echo e($last_login->last_login); ?></small>
                                <small>Member Since - <?php echo e(Auth::guard('admin')->user()->created_at->format('l jS, F')); ?></small>
                            </p>
                        </li>
                        <li class="user-footer">
                            <div class="pull-left">
                                <a href="<?php echo e(URL::to('portal/profile')); ?>" class="btn btn-primary btn-sm"><i class="fa fa-check"></i> Profile</a>
                            </div>
                            <div class="pull-right">
                                <a href="<?php echo e(URL::to('portal/logout')); ?>" class="btn btn-primary btn-sm"><i class="fa fa-sign-out"></i> Sign out</a>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>