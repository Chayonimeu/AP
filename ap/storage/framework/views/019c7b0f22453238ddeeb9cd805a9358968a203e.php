<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Aashepashe | Hotel Images</title>
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
                                        <i class="fa fa-clone"></i> Hotel Images For <?php echo e($data_list->name); ?>

                                    </div>
                                    <div class="panel-body">
                                        <?php echo $__env->make('backend.layout.panel.message', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="box">
                                                    <div class="box-header with-border">
                                                        <h3 class="box-title">Add More Hotel Images</h3>
                                                    </div>
                                                    <div class="box-body">
                                                        <small style="color: darkred"><i class="fa fa-info-circle"></i> You can choose 10 images at a time</small><br>
                                                        <small style="color: darkred"><i class="fa fa-info-circle"></i> Only .jpg, .png, .gif are supported</small><br>
                                                        <small style="color: darkred"><i class="fa fa-info-circle"></i> Images should not have watermark or other text and should be filled under the proper category</small><br>
                                                        <small style="color: darkred"><i class="fa fa-info-circle"></i> Violent, pornographic and other types of illegal images or information is not permitted</small><br>
                                                        <form role="form" class="form-inline" method="POST" action="<?php echo e(URL::to('portal/merchant/hotel/images/store')); ?>" enctype="multipart/form-data">
                                                            <?php echo e(csrf_field()); ?>

                                                            <input type="hidden" name="hotel_info_id" value="<?php echo e($data_list->hotel_info_id); ?>" />
                                                            <div class="form-group">
                                                                <label for="image">Choose Multiple Image <b style="color: red">*</b></label>
                                                                <input type="file" multiple="multiple" accept="image/png, image/jpeg, image/gif" name="image[]" id="image" class="form-control" required/>
                                                                <?php if($errors->has('image')): ?>
                                                                <span class="help-block">
                                                                    <strong><i class="fa fa-warning"></i> <?php echo e($errors->first('image')); ?></strong>
                                                                </span>
                                                                <?php endif; ?>
                                                            </div>
                                                            <button type="submit" class="btn btn-primary"><i class="fa fa-check"></i> Submit</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="box">
                                                    <div class="box-header with-border">
                                                        <h3 class="box-title">Hotel Images</h3>
                                                    </div>
                                                    <div class="box-body">
                                                        <div class="row">
                                                            <div class="col-md-3">
                                                                <img style="height: 150px;width: 100%" src="<?php echo e(url('upload/hotel/'.$data_list->hotel_image)); ?>" alt="Image" class="img img-responsive img-thumbnail">
                                                                <a href=""><i class="fa fa-edit"></i>Edit</a>&nbsp;
                                                                <a href="#"><i class="fa fa-trash"></i>Delete</a>
                                                            </div>
                                                            <?php $__currentLoopData = $hotel_image; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <div class="col-md-3">
                                                                <img style="height: 150px;width: 100%" src="<?php echo e(url('upload/hotel/'.$image->image)); ?>" alt="Image" class="img img-responsive img-thumbnail">
                                                                <a href=""><i class="fa fa-edit"></i>Edit</a>&nbsp;
                                                                <a href="#"><i class="fa fa-trash"></i>Delete</a>
                                                            </div>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
