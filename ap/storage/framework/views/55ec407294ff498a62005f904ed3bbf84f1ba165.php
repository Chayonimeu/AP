<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Aashepashe | Hotel Rooms</title>
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
                                        <i class="fa fa-clone"></i> Hotel Rooms For <?php echo e($data_list->name); ?>

                                        <a href="<?php echo e(URL::to('portal/merchant/hotel/rooms/add/'. $data_list->hotel_info_id)); ?>" class="pull-right" style="font-size: 12px;border: 1px solid #48a0d6;border-radius: 5px;padding: 3px 10px 3px 10px;color: #48a0d6"><i class="fa fa-plus"></i> Add New</a>
                                    </div>
                                    <div class="panel-body">
                                        <?php echo $__env->make('backend.layout.panel.message', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <?php if(count($room_list)): ?>
                                                <?php $__currentLoopData = $room_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $room): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <div class="col-md-3">
                                                    <img style="height: 150px;width: 100%" src="<?php echo e(url('upload/hotel/room/'.$room->image)); ?>" alt="Image" class="img img-responsive img-thumbnail">
                                                    <h5><b><?php echo e($room->get_room_type->name); ?></b></h5>
                                                    <h6><b>Standard Occupancy: <?php echo e($room->occupancy); ?></b></h6>
                                                    <h6><b>No of Rooms: <?php echo e($room->total_room); ?></b></h6>
                                                    <a href="#"><i class="fa fa-edit"></i>Edit</a>&nbsp;
                                                    <a href="#"><i class="fa fa-trash"></i>Delete</a>
                                                </div>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                <?php else: ?>
                                                <div class="panel panel-default" style="margin-bottom: 5px">
                                                    <div class="panel-heading">
                                                        <h4 class="panel-title">
                                                            <a href="javascript:void(0)">No data found</a>
                                                        </h4>
                                                    </div>
                                                </div>
                                                <?php endif; ?>
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
