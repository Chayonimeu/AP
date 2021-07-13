<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Aashepashe | Faq</title>
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
                                    <div class="panel-heading panel-style"><i class="fa fa-clone"></i> Faq
                                        <a href="<?php echo e(URL::to('portal/faq/add')); ?>" class="pull-right"><i class="fa fa-plus-circle"></i> Add New</a>
                                    </div>
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <?php echo $__env->make('backend.layout.message', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                                                <div class="panel-group" id="faqAccordion">
                                                    <?php if(count($data_list)): ?>
                                                    <?php $__currentLoopData = $data_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <div class="panel panel-default" style="margin-bottom: 5px">
                                                        <div class="panel-heading accordion-toggle question-toggle collapsed" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question<?php echo e($data->faqId); ?>">
                                                            <h4 class="panel-title">
                                                                <a href="javascript:void(0)">Q: <?php echo e($data->question); ?></a>
                                                            </h4>
                                                        </div>
                                                        <div id="question<?php echo e($data->faqId); ?>" class="panel-collapse collapse" style="height: 0px;">
                                                            <div class="panel-body">
                                                                <p><?php echo $data->answer; ?></p>
                                                                <?php if($data->status == 'Active'): ?>
                                                                <span class="label label-primary"><?php echo e($data->status); ?></span>
                                                                <?php else: ?>
                                                                <span class="label label-warning"><?php echo e($data->status); ?></span>
                                                                <?php endif; ?>
                                                                <a href="<?php echo e(URL::to('portal/faq/edit/'.$data->faq_id)); ?>"><i class="fa fa-edit action_style" data-toggle="tooltip" data-original-title="Edit"></i></a>
                                                                <a href="javascript:void(0);" data-toggle="modal" data-target="#delete_faq<?php echo e($data->faq_id); ?>"><i class="fa fa-trash-o action_style" data-toggle="tooltip" data-original-title="Delete"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Delete -->
                                                    <div id="delete_faq<?php echo e($data->faq_id); ?>" class="modal fade" role="dialog">
                                                        <div class="modal-dialog modal-sm">
                                                            <div class="modal-content">
                                                                <form method="POST" action="<?php echo e(URL::to('portal/faq/delete')); ?>">
                                                                    <?php echo e(csrf_field()); ?>

                                                                    <div class="modal-header">
                                                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                        <input type="hidden" name="faq_id" value="<?php echo e($data->faq_id); ?>" />
                                                                        <h4 class="modal-title" style="color: #f8ac59;"><i class="fa fa-warning"></i> Warning</h4>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <p>Are you sure want to delete? Click "Yes" to delete.</p>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="submit" class="btn btn-primary" name="btn"><i class="fa fa-check"></i> Yes</button>
                                                                        <button type="button" class="btn btn-primary btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> No</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Delete -->
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
                                                <span class="pull-right"><?php echo e($data_list->links()); ?></span>
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
        <script type="text/javascript">
            $("#faq_active").addClass("active");
            $("#faq_active").parent().parent().addClass("treeview active");
            $("#faq_active").parent().addClass("in");
        </script>
    </body>
</html>
