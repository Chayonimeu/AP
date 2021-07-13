<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Ashepashe | Business Area</title>
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <?php echo $__env->make('backend.layout.headerScript', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
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
                                    <div class="panel-heading panel-style"><i class="fa fa-clone"></i> Business Area (Cities)</div>
                                    <div class="panel-body">
                                        <?php echo $__env->make('backend.layout.message', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                                        <div class="row">
                                            <div class="col-md-12 table-responsive">
                                                <table id="divisionTable" class="table table-bordered table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th>Country</th>
                                                            <th>Name</th>
                                                            <th>Latitude</th>
                                                            <th>Longitude</th>
                                                            <th>Status</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php $__currentLoopData = $dataList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <tr>
                                                            <td><?php echo e($data->getCountry->countryName); ?></td>
                                                            <td><?php echo e($data->divisionName); ?></td>
                                                            <td><?php echo e($data->divisionLat); ?></td>
                                                            <td><?php echo e($data->divisionLong); ?></td>
                                                            <td>
                                                                <?php if($data->divisionStatus == 'Active'): ?>
                                                                <span class="label label-primary"><?php echo e($data->divisionStatus); ?></span>
                                                                <?php else: ?>
                                                                <span class="label label-warning"><?php echo e($data->divisionStatus); ?></span>
                                                                <?php endif; ?>
                                                            </td>
                                                            <td>
                                                                <a href="<?php echo e(URL::to('portal/division/edit/'.$data->divisionId)); ?>"><i class="fa fa-edit" style="font-size: 14px" data-toggle="tooltip" data-original-title="Edit"></i></a>
                                                                <a href="<?php echo e(URL::to('portal/division/subarea/'.$data->divisionId)); ?>"><i class="fa fa-list" style="font-size: 14px" data-toggle="tooltip" data-original-title="Sub Area"></i></a>
                                                            </td>
                                                        </tr>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </tbody>
                                                    <tfoot>
                                                        <tr>
                                                            <td class="text-center" colspan="5"></td>
                                                            <td class="text-left" colspan="1">
                                                                <a href="<?php echo e(URL::to('portal/division/add')); ?>">
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
        <?php echo $__env->make('backend.layout.footerScript', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <script>
            $(document).ready(function () {
                $('#divisionTable').DataTable({
                    "aaSorting": [[0, "asc"]]
                });
            });
        </script>
        <script type="text/javascript">
            $("#divisionActive").addClass("active");
            $("#divisionActive").parent().parent().addClass("treeview active");
            $("#divisionActive").parent().addClass("in");
        </script>
    </body>
</html>
