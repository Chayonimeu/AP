<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Aashepashe | Hotel Facilities</title>
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
                                    <div class="panel-heading panel-style"> 
                                        <i class="fa fa-clone"></i> Hotel Facilities For <?php echo e($data_list->name); ?>

                                    </div>
                                    <div class="panel-body">
                                        <?php echo $__env->make('backend.layout.panel.message', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <form role="form" class="" method="POST" action="<?php echo e(URL::to('portal/merchant/hotel/facilities/store')); ?>" enctype="multipart/form-data">
                                                    <?php echo e(csrf_field()); ?>

                                                    <input type="hidden" name="hotel_id" value="<?php echo e($data_list->hotel_info_id); ?>" />
                                                    <?php $__currentLoopData = $hotel_facility; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $facility): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <div class="col-md-4">
                                                        <?php $hotel_facility_check = App\HotelWiseFacilityModel::where('hotel_id', $data_list->hotel_info_id)->where('facility_id', $facility->hotel_facility_id)->select('facility_id')->first(); ?>
                                                       
                                                        <?php if($hotel_facility_check['facility_id'] == $facility->hotel_facility_id): ?>
                                                        <input type="checkbox" checked name="facility_id[]" value="<?php echo e($facility->hotel_facility_id); ?>" />&nbsp; <?php echo e($facility->name); ?>

                                                        <?php else: ?>
                                                        <input type="checkbox" name="facility_id[]" value="<?php echo e($facility->hotel_facility_id); ?>" />&nbsp; <?php echo e($facility->name); ?>

                                                        <?php endif; ?>
                                                    </div>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <div class="col-md-12" style="margin-top: 10px">
                                                        <button type="submit" class="btn btn-primary"><i class="fa fa-check"></i> Submit</button>
                                                    </div>
                                                </form>
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
        <script type="text/javascript">
            $("#hotel_active").addClass("active");
            $("#hotel_active").parent().parent().addClass("treeview active");
            $("#hotel_active").parent().addClass("in");
        </script>
    </body>
</html>
