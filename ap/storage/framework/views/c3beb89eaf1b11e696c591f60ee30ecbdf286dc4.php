<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Aashepashe | Property Category (Hotel)</title>
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
                                    <div class="panel-heading panel-style"><i class="fa fa-clone"></i> Property Category (Hotel)</div>
                                    <div class="panel-body">
                                        <?php echo $__env->make('backend.layout.message', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                                        <div class="row">
                                            <div class="col-md-12 table-responsive">
                                                <table id="table" class="table table-bordered table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th>Name</th>
                                                            <th>Short Details</th>
                                                            <th>Status</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php $__currentLoopData = $data_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <tr>
                                                            <td style="width: 20%"><?php echo e($data->name); ?></td>
                                                            <td style="width: 50%"><?php echo e($data->details); ?></td>
                                                            <td style="width: 20%">
                                                                <?php if($data->status == 'Active'): ?>
                                                                <span class="label label-primary"><?php echo e($data->status); ?></span>
                                                                <?php else: ?>
                                                                <span class="label label-warning"><?php echo e($data->status); ?></span>
                                                                <?php endif; ?>
                                                            </td>
                                                            <td style="width: 10%">
                                                                <a class="action_style" href="<?php echo e(URL::to('portal/property/edit/'.$data->property_id)); ?>"><i class="fa fa-edit"></i> Edit</a>
                                                            </td>
                                                        </tr>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </tbody>
                                                    <tfoot>
                                                        <tr>
                                                            <td class="text-center" colspan="3"></td>
                                                            <td class="text-left" colspan="1">
                                                                <a href="<?php echo e(URL::to('portal/property/add/')); ?>">
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
            $("#property_active").addClass("active");
            $("#property_active").parent().parent().addClass("treeview active");
            $("#property_active").parent().addClass("in");
        </script>
    </body>
</html>
