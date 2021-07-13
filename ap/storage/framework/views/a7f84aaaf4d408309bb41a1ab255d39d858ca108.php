<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Ashepashe | Add Business Area</title>
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
                                    <div class="panel-heading panel-style"><i class="fa fa-clone"></i> Add New Business Area</div>
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="col-md-6">
                                                    <form role="form" class="" method="POST" action="<?php echo e(URL::to('portal/division/store')); ?>" enctype="multipart/form-data">
                                                        <?php echo e(csrf_field()); ?>

                                                        <div class="form-group">
                                                            <label for="divisionCountryId">Country <b style="color: red">*</b></label>
                                                            <select class="form-control select2" name="divisionCountryId" id="divisionCountryId" required>
                                                                <option value="">Choose Country</option>
                                                                <?php $__currentLoopData = $countryList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $country): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <option value="<?php echo e($country->countryId); ?>"<?php echo e((old('divisionCountryId') == $country->countryId) ? 'selected' : ''); ?>><?php echo e($country->countryName); ?></option>
                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                            </select>
                                                            <?php if($errors->has('divisionCountryId')): ?>
                                                            <span class="help-block">
                                                                <strong><i class="fa fa-warning"></i> <?php echo e($errors->first('divisionCountryId')); ?></strong>
                                                            </span>
                                                            <?php endif; ?>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="divisionName">Name <b style="color: red">*</b></label>
                                                            <input type="text" placeholder="Enter Name" name="divisionName" id="divisionName" class="form-control" value="<?php echo e(old('divisionName')); ?>" required/>
                                                            <?php if($errors->has('divisionName')): ?>
                                                            <span class="help-block">
                                                                <strong><i class="fa fa-warning"></i> <?php echo e($errors->first('divisionName')); ?></strong>
                                                            </span>
                                                            <?php endif; ?>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="divisionLat">Latitude</label>
                                                            <input type="text" placeholder="Enter Latitude" name="divisionLat" id="divisionLat" class="form-control" value="<?php echo e(old('divisionLat')); ?>" />
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="divisionLong">Longitude</label>
                                                            <input type="text" placeholder="Enter Longitude" name="divisionLong" id="divisionLong" class="form-control" value="<?php echo e(old('divisionLong')); ?>" />
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="divisionStatus">Status <b style="color: red">*</b></label>
                                                            <select class="form-control select2" name="divisionStatus" id="divisionStatus" required>
                                                                <option value="Active"<?php echo e((old('divisionStatus') == 'Active') ? 'selected' : ''); ?>>Active</option>
                                                                <option value="Inactive"<?php echo e((old('divisionStatus') == 'Inactive') ? 'selected' : ''); ?>>Inactive</option>
                                                            </select>
                                                            <?php if($errors->has('divisionStatus')): ?>
                                                            <span class="help-block">
                                                                <strong><i class="fa fa-warning"></i> <?php echo e($errors->first('divisionStatus')); ?></strong>
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
