<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Aashepashe | Merchant Details</title>
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
                                    <div class="panel-heading panel-style"><i class="fa fa-clone"></i> Merchant Details [<?php echo e($data_list->name); ?>]</div>
                                    <div class="panel-body">
                                        <?php echo $__env->make('backend.layout.message', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="box box-primary">
                                                    <div class="box-body box-profile">
                                                        <center>
                                                            <?php if($data_list->avatar == ''): ?>
                                                            <img src="<?php echo e(asset('frontend/images/default.jpg')); ?>" alt="Image" class="profile-user-img img-responsive img-circle" style="height: 80px"/>
                                                            <?php else: ?>
                                                            <img src="<?php echo e(asset('upload/merchant/avatar/'.$data_list->avatar)); ?>" class="profile-user-img img-responsive img-circle" style="height: 80px" alt="Image"/>
                                                            <?php endif; ?>
                                                            <h3 class="profile-username text-center"><?php echo e($data_list->name); ?></h3>
                                                            <small>Member Since - <?php echo e($data_list->created_at); ?></small>
                                                        </center>
                                                        <ul class="list-group list-group-unbordered">
                                                            <li class="list-group-item">
                                                                <small><i class="fa fa-envelope-square"></i> Owner Email</small><br>
                                                                <b><?php echo e($data_list->email); ?></b>
                                                            </li>
                                                            <li class="list-group-item">
                                                                <small><i class="fa fa-phone-square"></i> Owner Phone</small><br>
                                                                <b><?php echo e($data_list->phone); ?></b>
                                                            </li>
                                                            <li class="list-group-item">
                                                                <small><i class="fa fa-home"></i> Company Name</small><br>
                                                                <b><?php echo e($data_list->company_name); ?></b>
                                                            </li>
                                                            <li class="list-group-item">
                                                                <small><i class="fa fa-home"></i> Company Logo</small><br>
                                                                <?php if($data_list->company_logo == ''): ?>
                                                                <img src="<?php echo e(asset('frontend/images/default.jpg')); ?>" alt="Image" class="img-responsive img-circle" style="height: 80px"/>
                                                                <?php else: ?>
                                                                <img src="<?php echo e(asset('upload/merchant/logo/'.$data_list->company_logo)); ?>" class="img-responsive img-circle" style="height: 80px" alt="Image"/>
                                                                <?php endif; ?>
                                                            </li>
                                                            <li class="list-group-item">
                                                                <small><i class="fa fa-filter"></i> Business Type</small><br>
                                                                <b><?php echo e($data_list->get_business_type->name); ?></b>
                                                            </li>
                                                            <li class="list-group-item">
                                                                <small><i class="fa fa-map-marker"></i> Company Address</small><br>
                                                                <b><?php echo e($data_list->company_address); ?></b>
                                                            </li>
                                                        </ul>
                                                        <?php if($data_list->status == 'Inactive'): ?>
                                                        <a href="javascript:void(0)" role="button" data-toggle="modal" data-target="#activate<?php echo e($data_list->merchant_id); ?>" class="btn btn-primary btn-block btn-xs"><b><i class="fa fa-check"></i> Activate Account</b></a>
                                                        <?php else: ?>
                                                        <a href="javascript:void(0)" role="button" data-toggle="modal" data-target="#activate<?php echo e($data_list->merchant_id); ?>" class="btn btn-danger btn-block btn-xs"><b><i class="fa fa-close"></i> Deactivate Account</b></a>
                                                        <?php endif; ?>
                                                        <!-- Activate / Inactivate Merchant -->
                                                        <div id="activate<?php echo e($data_list->merchant_id); ?>" class="modal fade" role="dialog">
                                                            <div class="modal-dialog modal-sm">
                                                                <div class="modal-content">
                                                                    <form method="POST" action="<?php echo e(URL::to('portal/merchant/activate')); ?>">
                                                                        <?php echo e(csrf_field()); ?>

                                                                        <div class="modal-header">
                                                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                            <input type="hidden" name="merchant_id" value="<?php echo e($data_list->merchant_id); ?>" />
                                                                            <h4 class="modal-title" style="color: #f8ac59;"><i class="fa fa-warning"></i> Warning</h4>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <?php if($data_list->status == 'Inactive'): ?>
                                                                            <p>Are you sure you want to activate this merchant? Click "Yes" to activate account.</p>
                                                                            <input type="hidden" name="action_value" value="Active" />
                                                                            <?php else: ?>
                                                                            <p>Are you sure you want to deactivate this merchant? Click "Yes" to deactivate account.</p>
                                                                            <input type="hidden" name="action_value" value="Inactive" />
                                                                            <?php endif; ?>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="submit" class="btn btn-primary" name="btn"><i class="fa fa-check"></i> Yes</button>
                                                                            <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> No</button>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Activate / Inactivate Merchant -->
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="nav-tabs-custom">
                                                    <ul class="nav nav-tabs">
                                                        <li class="active"><a href="">Branch Info</a></li>
                                                        <li><a href="">Send Message</a></li>
                                                        <li><a href="">Recent Activity</a></li>
                                                    </ul>
                                                    <div class="tab-content">
                                                        <div class="active tab-pane">
                                                            <div class="row">
                                                                <div class="col-md-12 table-responsive">
                                                                    <table id="table" class="table table-bordered table-striped">
                                                                        <thead>
                                                                            <tr>
                                                                                <th>Name</th>
                                                                                <th>Area</th>
                                                                                <th>Contacts</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <?php $__currentLoopData = $branch_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $branch): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                            <tr>
                                                                                <td>
                                                                                    <?php echo e($branch->name); ?><br>
                                                                                    <?php if($branch->status == 'Active'): ?>
                                                                                    <b>Status:</b> <span class="label label-primary"><?php echo e($branch->status); ?></span>
                                                                                    <?php else: ?>
                                                                                    <b>Status:</b> <span class="label label-warning"><?php echo e($branch->status); ?></span>
                                                                                    <?php endif; ?>
                                                                                </td>
                                                                                <td>
                                                                                    <b>Address: </b><?php echo e($branch->address); ?><br>
                                                                                    <?php if($branch->sub_area_id != ''): ?>
                                                                                    <b>Sub Area: </b><?php echo e($branch->get_branch_sub_area->name); ?><br>
                                                                                    <?php endif; ?>
                                                                                    <b>City: </b><?php echo e($branch->get_branch_city->name); ?><br>
                                                                                    <b>Country: </b><?php echo e($branch->get_branch_country->name); ?>

                                                                                </td>
                                                                                <td>
                                                                                    <?php if($branch->contact_name != ''): ?>
                                                                                    <i class="fa fa-user"></i> <?php echo e($branch->contact_name); ?><br>
                                                                                    <?php endif; ?>
                                                                                    <?php if($branch->contact_email != ''): ?>
                                                                                    <i class="fa fa-envelope"></i> <?php echo e($branch->contact_email); ?><br>
                                                                                    <?php endif; ?>
                                                                                    <?php if($branch->contact_phone != ''): ?>
                                                                                    <i class="fa fa-phone"></i> <?php echo e($branch->contact_phone); ?>

                                                                                    <?php endif; ?>
                                                                                </td>
                                                                            </tr>
                                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                        </tbody>
                                                                    </table>
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
        <script>
            $(document).ready(function () {
                $('#table').DataTable({
                    "aaSorting": [[0, "asc"]]
                });
            });
        </script>
        <script type="text/javascript">
            $("#merchant_active").addClass("active");
            $("#merchant_active").parent().parent().addClass("treeview active");
            $("#merchant_active").parent().addClass("in");
        </script>
    </body>
</html>
