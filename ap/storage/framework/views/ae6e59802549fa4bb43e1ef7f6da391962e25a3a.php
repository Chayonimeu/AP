<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Aashepashe | Merchant User List</title>
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <?php echo $__env->make('backend.layout.panel.header_script', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
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
                                    <div class="panel-heading panel-style"><i class="fa fa-clone"></i> User List</div>
                                    <div class="panel-body">
                                        <?php echo $__env->make('backend.layout.panel.message', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                                        <div class="row">
                                            <div class="col-md-12 table-responsive">
                                                <table id="table" class="table table-bordered table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th>Name</th>
                                                            <th>Email</th>
                                                            <th>Phone</th>
                                                            <th>Image</th>
                                                            <th>Status</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php $__currentLoopData = $data_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <tr>
                                                            <td><?php echo e($data->name); ?></td>
                                                            <td><?php echo e($data->email); ?></td>
                                                            <td><?php echo e($data->country_code); ?><?php echo e($data->phone); ?></td>
                                                            <td>
                                                                <?php if(!empty($data->avatar)): ?>
                                                                <img src="<?php echo e(asset('upload/merchant/avatar/'.$data->avatar)); ?>" alt="Image" class="img img-circle img-responsive" style="width: 40px;height: 30px"/>
                                                                <?php else: ?>
                                                                <img src="<?php echo e(asset('backend/images/default.jpg')); ?>" alt="Image" class="img img-circle img-responsive" style="width: 40px;height: 30px"/>
                                                                <?php endif; ?>
                                                            </td>
                                                            <td>
                                                                <?php if($data->status == 'Active'): ?>
                                                                <span class="label label-primary"><?php echo e($data->status); ?></span>
                                                                <?php else: ?>
                                                                <span class="label label-warning"><?php echo e($data->status); ?></span>
                                                                <?php endif; ?>
                                                            </td>
                                                            <td>
                                                                <a href="#"><i class="fa fa-edit"></i> Edit</a><br>
                                                                <a href="javascript:void(0)" data-toggle="modal" data-target="#assign<?php echo e($data->merchant_id); ?>"><i class="fa fa-exchange"></i> Assign Branch</a>
                                                                <!-- Assign -->
                                                                <div id="assign<?php echo e($data->merchant_id); ?>" class="modal fade" role="dialog">
                                                                    <div class="modal-dialog modal-md">
                                                                        <div class="modal-content">
                                                                            <form method="POST" enctype="multipart/form-data" action="<?php echo e(URL::to('portal/merchant/assign')); ?>">
                                                                                <?php echo e(csrf_field()); ?>

                                                                                <div class="modal-header">
                                                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                                    <input type="hidden" name="merchant_id" value="<?php echo e($data->merchant_id); ?>" />
                                                                                    <h4 class="modal-title">Assign Branch To <?php echo e($data->name); ?></h4>
                                                                                </div>
                                                                                <div class="modal-body">
                                                                                    <?php if(count($branch_list) > 0): ?>
                                                                                    <div class="form-group">
                                                                                        <label for="branch_id">Choose Branch <b style="color: red">*</b></label><br>
                                                                                        <?php $__currentLoopData = $branch_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $branch): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                                        <?php $branch_check = App\BranchWiseUserModel::where('merchant_id', $data->merchant_id)->where('branch_id', $branch->branch_id)->select('branch_id')->first(); ?>
                                                                                        <?php if($branch_check['branch_id'] == $branch->branch_id): ?>
                                                                                        <input type="checkbox" checked name="branch_id[]" value="<?php echo e($branch->branch_id); ?>" />&nbsp;<?php echo e($branch->name); ?><br>
                                                                                        <?php else: ?>
                                                                                        <input type="checkbox" name="branch_id[]" value="<?php echo e($branch->branch_id); ?>" />&nbsp;<?php echo e($branch->name); ?><br>
                                                                                        <?php endif; ?>
                                                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                                    </div>
                                                                                    <?php else: ?>
                                                                                    <div class="callout callout-danger">
                                                                                        <h4>Warning!</h4>
                                                                                        <p>No branch found. Please add branch first</p>
                                                                                    </div>
                                                                                    <?php endif; ?>
                                                                                </div>
                                                                                <div class="modal-footer">
                                                                                    <button type="submit" class="btn btn-primary"><i class="fa fa-check"></i> Submit</button>
                                                                                </div>
                                                                            </form>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- Assign -->
                                                            </td>
                                                        </tr>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </tbody>
                                                    <tfoot>
                                                        <tr>
                                                            <td class="text-center" colspan="5"></td>
                                                            <td class="text-left" colspan="1">
                                                                <a href="<?php echo e(URL::to('portal/merchant/user/add')); ?>">
                                                                    <button class="btn btn-primary btn-xs">
                                                                        <i class="fa fa-plus"></i>&nbsp;Add New
                                                                    </button>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                    </tfoot>
                                                </table>
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
        <script>
            $(document).ready(function () {
                $('#table').DataTable({
                    "aaSorting": [[0, "asc"]]
                });
            });
        </script>
        <script type="text/javascript">
            $("#merchant_user_active").addClass("active");
            $("#merchant_user_active").parent().parent().addClass("treeview active");
            $("#merchant_user_active").parent().addClass("in");
        </script>
    </body>
</html>
