<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Ashepashe | Add Business Sub Area</title>
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
                                    <div class="panel-heading panel-style"><i class="fa fa-clone"></i> Add New Business Sub Area For <?php echo e($division->divisionName); ?></div>
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="col-md-6">
                                                    <form role="form" class="" method="POST" action="<?php echo e(URL::to('portal/division/subarea/store')); ?>" enctype="multipart/form-data">
                                                        <?php echo e(csrf_field()); ?>

                                                        <input type="hidden" name="districtDivisionId" value="<?php echo e($division->divisionId); ?>" />
                                                        <div class="form-group">
                                                            <label for="districtName">Name <b style="color: red">*</b></label>
                                                            <input type="text" placeholder="Enter Name" name="districtName" id="districtName" class="form-control" value="<?php echo e(old('districtName')); ?>" required/>
                                                            <?php if($errors->has('districtName')): ?>
                                                            <span class="help-block">
                                                                <strong><i class="fa fa-warning"></i> <?php echo e($errors->first('districtName')); ?></strong>
                                                            </span>
                                                            <?php endif; ?>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="districtLat">Latitude</label>
                                                            <input type="text" placeholder="Enter Latitude" name="districtLat" id="districtLat" class="form-control" value="<?php echo e(old('districtLat')); ?>" />
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="districtLong">Longitude</label>
                                                            <input type="text" placeholder="Enter Longitude" name="districtLong" id="districtLong" class="form-control" value="<?php echo e(old('districtLong')); ?>" />
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="districtStatus">Status <b style="color: red">*</b></label>
                                                            <select class="form-control select2" name="districtStatus" id="districtStatus" required>
                                                                <option value="Active"<?php echo e((old('districtStatus') == 'Active') ? 'selected' : ''); ?>>Active</option>
                                                                <option value="Inactive"<?php echo e((old('districtStatus') == 'Inactive') ? 'selected' : ''); ?>>Inactive</option>
                                                            </select>
                                                            <?php if($errors->has('districtStatus')): ?>
                                                            <span class="help-block">
                                                                <strong><i class="fa fa-warning"></i> <?php echo e($errors->first('districtStatus')); ?></strong>
                                                            </span>
                                                            <?php endif; ?>
                                                        </div>
                                                        <button type="submit" class="btn btn-primary"><i class="fa fa-check"></i> Submit</button>
                                                    </form>
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
        <?php echo $__env->make('backend.layout.footerScript', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>

        <script type="text/javascript">
            $("#divisionActive").addClass("active");
            $("#divisionActive").parent().parent().addClass("treeview active");
            $("#divisionActive").parent().addClass("in");
        </script>
    </body>
</html>
