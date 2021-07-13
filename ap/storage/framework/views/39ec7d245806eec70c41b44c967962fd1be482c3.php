<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Aashepashe | Branch List</title>
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
                                    <div class="panel-heading panel-style"><i class="fa fa-clone"></i> Branch List</div>
                                    <div class="panel-body">
                                        <?php echo $__env->make('backend.layout.panel.message', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                                        <div class="row">
                                            <div class="col-md-12 table-responsive">
                                                <table id="table" class="table table-bordered table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th>Name</th>
                                                            <th>Area</th>
                                                            <th>Contact Info</th>
                                                            <th>Status</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php $__currentLoopData = $data_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <tr>
                                                            <td><?php echo e($data->name); ?></td>
                                                            <td>
                                                                <b>Address:</b> <?php echo e($data->address); ?><br>
                                                                <?php if($data->sub_area_id != ''): ?>
                                                                <b>Sub Area:</b> <?php echo e($data->get_branch_sub_area->name); ?><br>
                                                                <?php endif; ?>
                                                                <b>City:</b> <?php echo e($data->get_branch_city->name); ?><br>
                                                                <b>Country:</b> <?php echo e($data->get_branch_country->name); ?>

                                                            </td>
                                                            <td>
                                                                <?php if($data->contact_name != ''): ?>
                                                                <i class="fa fa-user"></i> <?php echo e($data->contact_name); ?><br>
                                                                <?php endif; ?>
                                                                <?php if($data->contact_email != ''): ?>
                                                                <i class="fa fa-envelope"></i> <?php echo e($data->contact_email); ?><br>
                                                                <?php endif; ?>
                                                                <?php if($data->contact_phone != ''): ?>
                                                                <i class="fa fa-phone"></i> <?php echo e($data->contact_phone); ?>

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
                                                                <a href="<?php echo e(URL::to('portal/merchant/branch/edit/'.$data->branch_id)); ?>" class="action_style"><i class="fa fa-edit"></i> Edit</a>
                                                            </td>
                                                        </tr>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </tbody>
                                                    <tfoot>
                                                        <tr>
                                                            <td class="text-center" colspan="4"></td>
                                                            <td class="text-left" colspan="1">
                                                                <a href="<?php echo e(URL::to('portal/merchant/branch/add')); ?>">
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
            $("#branch_active").addClass("active");
            $("#branch_active").parent().parent().addClass("treeview active");
            $("#branch_active").parent().addClass("in");
        </script>
    </body>
</html>
