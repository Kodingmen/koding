

<?php $__env->startSection("content"); ?>
    <div class="block py-4">
        <div class="container">
            <div class="title-main">
                <h3 class="inherit">
                    <span><?php echo e($titleMain); ?></span>
                </h3>
            </div>
            <div class="block-content mb-4">
                <div class="row">
                    <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-md-4 col-6">
                            <div class="news-item hover">
                                <div class="image mb-3">
                                    <a href="<?php echo e($item->slugvi); ?>">
                                        <img class="img-fluid"
                                             src="thumbs/390x280x2/upload/news/<?php echo e($item->photo); ?>"
                                             alt="<?php echo e($item->namevi); ?>"
                                             onerror="src='thumbs/390x280x1/assets/images/noimage.png'"
                                        >
                                    </a>
                                </div>
                                <div class="content">
                                    <div class="_title">
                                        <a href="<?php echo e($item->slugvi); ?>" class="inherit text-decoration-none">
                                            <strong><?php echo e($item->namevi); ?></strong>
                                        </a>
                                    </div>
                                    <div class="_desc text-split">
                                        <?php echo e($item->descvi); ?>

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
<?php echo $__env->make("base", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Source_Code\LARAGON_PHP_092023\tuanphuong\views/news/index.blade.php ENDPATH**/ ?>