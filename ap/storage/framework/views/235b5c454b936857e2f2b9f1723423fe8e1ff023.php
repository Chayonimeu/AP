<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Aashepashe | Hotel Information</title>
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
                                        <i class="fa fa-clone"></i> Hotel Information
                                        <a href="<?php echo e(URL::to('portal/merchant/hotel/add')); ?>" class="pull-right" style="font-size: 12px;border: 1px solid #48a0d6;border-radius: 5px;padding: 3px 10px 3px 10px;color: #48a0d6"><i class="fa fa-plus"></i> Add New</a>
                                    </div>
                                    <div class="panel-body">
                                        <?php echo $__env->make('backend.layout.panel.message', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <?php $__currentLoopData = $data_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <div class="box">
                                                    <div class="box-header with-border">
                                                        <h3 class="box-title"><?php echo e($data->name); ?></h3>
                                                        <?php if($data->website != ''): ?>
                                                        <br><small><i class="fa fa-link"></i> Website <a href="<?php echo e($data->website); ?>"><?php echo e($data->website); ?></a></small>
                                                        <?php endif; ?>
                                                        <div class="box-tools pull-right">
                                                            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="" data-original-title="Collapse">
                                                                <i class="fa fa-minus"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <div class="box-body" style="">
                                                        <div class="col-md-9 table-responsive">
                                                            <table class="table table-responsive table-striped table-bordered">
                                                                <tr>
                                                                    <th style="width: 30%">Hotel Branch</th>
                                                                    <td style="width: 70%"><?php echo e($data->get_hotel_branch->name); ?></td>
                                                                </tr>
                                                                <tr>
                                                                    <th style="width: 30%">Property Category</th>
                                                                    <td style="width: 70%"><?php echo e($data->get_hotel_property->name); ?></td>
                                                                </tr>
                                                                <tr>
                                                                    <th style="width: 30%">Country</th>
                                                                    <td style="width: 70%"><?php echo e($data->get_hotel_branch->get_branch_country->name); ?></td>
                                                                </tr>
                                                                <tr>
                                                                    <th style="width: 30%">City</th>
                                                                    <td style="width: 70%"><?php echo e($data->get_hotel_branch->get_branch_city->name); ?></td>
                                                                </tr>
                                                                <tr>
                                                                    <th style="width: 30%">Sub Area</th>
                                                                    <?php if($data->get_hotel_branch->get_branch_sub_area != ''): ?>
                                                                    <td style="width: 70%"><?php echo e($data->get_hotel_branch->get_branch_sub_area->name); ?></td>
                                                                    <?php else: ?>
                                                                    <td style="width: 70%"></td>
                                                                    <?php endif; ?>
                                                                </tr>
                                                                <tr>
                                                                    <th style="width: 30%">Branch Address</th>
                                                                    <?php if($data->get_hotel_branch->get_branch_sub_area != ''): ?>
                                                                    <td style="width: 70%"><?php echo e($data->get_hotel_branch->get_branch_sub_area->address); ?></td>
                                                                    <?php else: ?>
                                                                    <td style="width: 70%"></td>
                                                                    <?php endif; ?>
                                                                </tr>
                                                                <tr>
                                                                    <th style="width: 30%">Hotel Address</th>
                                                                    <td style="width: 70%"><?php echo e($data->address); ?></td>
                                                                </tr>
                                                                <tr>
                                                                    <th style="width: 30%">Latitude</th>
                                                                    <td style="width: 70%"><?php echo e($data->latitude); ?></td>
                                                                </tr>
                                                                <tr>
                                                                    <th style="width: 30%">Longitude</th>
                                                                    <td style="width: 70%"><?php echo e($data->longitude); ?></td>
                                                                </tr>
                                                                <tr>
                                                                    <th style="width: 30%">Opening Date</th>
                                                                    <td style="width: 70%"><?php echo e($data->opening_date); ?></td>
                                                                </tr>
                                                                <tr>
                                                                    <th style="width: 30%">Renovation Date</th>
                                                                    <td style="width: 70%"><?php echo e($data->renovation_date); ?></td>
                                                                </tr>
                                                                <tr>
                                                                    <th style="width: 30%">Ratings</th>
                                                                    <td style="width: 70%"><?php echo e($data->star_rating); ?> Star</td>
                                                                </tr>
                                                                <tr>
                                                                    <th style="width: 30%">Total Room</th>
                                                                    <td style="width: 70%"><?php echo e($data->total_room); ?></td>
                                                                </tr>
                                                                <tr>
                                                                    <th style="width: 30%">Details</th>
                                                                    <td style="width: 70%"><?php echo e($data->details); ?></td>
                                                                </tr>
                                                                <tr>
                                                                    <th style="width: 30%">Contact Info</th>
                                                                    <td style="width: 70%">
                                                                        <?php if($data->contact_name != ''): ?>
                                                                        <span><i class="fa fa-user"></i> <?php echo e($data->contact_name); ?></span><br>
                                                                        <?php endif; ?>    
                                                                        <?php if($data->contact_phone != ''): ?>
                                                                        <span><i class="fa fa-phone"></i> <?php echo e($data->contact_phone); ?></span><br>
                                                                        <?php endif; ?>    
                                                                        <?php if($data->contact_email != ''): ?>
                                                                        <span><i class="fa fa-envelope"></i> <?php echo e($data->contact_email); ?></span>
                                                                         <?php endif; ?>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <a href="<?php echo e(URL::to('portal/merchant/hotel/edit/'.$data->hotel_info_id)); ?>" style="font-size: 14px"><i class="fa fa-circle"></i> Edit Information</a><br>
                                                            <a href="<?php echo e(URL::to('portal/merchant/hotel/images/'.$data->hotel_info_id)); ?>"><i class="fa fa-circle"></i> Hotel Images</a><br>
                                                            <a href="<?php echo e(URL::to('portal/merchant/hotel/facilities/'.$data->hotel_info_id)); ?>"><i class="fa fa-circle"></i> Hotel Facilities</a><br>
                                                            <a href="<?php echo e(URL::to('portal/merchant/hotel/activity/facilities/'.$data->hotel_info_id)); ?>"><i class="fa fa-circle"></i> Activity Facilities</a><br>
                                                            <a href="<?php echo e(URL::to('portal/merchant/hotel/rooms/'.$data->hotel_info_id)); ?>"><i class="fa fa-circle"></i> Room Details</a><br>
                                                            <a href=""><i class="fa fa-circle"></i> Hotel Policies</a><br>
                                                            <a href=""><i class="fa fa-circle"></i> Payment Policies</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
