

<?php $__env->startSection("content"); ?>
    <div class="block py-4">
        <div class="container">
            <div class="title-main">
                <h3 class="inherit">
                    <span>VIDEO</span>
                </h3>
            </div>
            <div class="block-content mb-4">
                <div class="row g-6">
                    <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-md-4 col-6">
                        <div class="video_wrapper news-item mb-4">
                            <div class="video text-decoration-none" data-fancybox="video" data-src="<?php echo e($v->link_video); ?>" title="<?php echo e($v->namevi); ?>">
                                <p class="position-relative pic-video scale-img"><img onerror="this.src='thumbs/400x400x1/assets/images/noimage.png';" src="https://img.youtube.com/vi/<?php echo e(func()->getYoutube($v->link_video)); ?>/0.jpg" alt="<?php echo e($v->namevi); ?>"/></p>
                                <div class="content">
                                    <h3 class="_title text-split"><?php echo e($v->namevi); ?></h3>
                                </div>
                            </div>
                        </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                <div class="row">
                    <?php echo e($items->links()); ?>

                </div>
            </div>

        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php $__env->startPush("css"); ?>
    <style>
        .fancybox-active.compensate-for-scrollbar{
            margin: auto;
        }
        .video_wrapper{
            position: relative;
        }
        .video_wrapper .pic-video:after{
            content: url("assets/images/play.png");
            position: absolute;
            top:0;
            bottom:0;
            left: 0;
            right: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            pointer-events: none;

        }
    </style>
<?php $__env->stopPush(); ?>
<?php echo $__env->make("base", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Source_Code\LARAGON_PHP_092023\tuanphuong\views/video/index.blade.php ENDPATH**/ ?>