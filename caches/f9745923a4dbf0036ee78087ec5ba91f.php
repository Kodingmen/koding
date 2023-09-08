

<?php $__env->startSection("content"); ?>
    <div class="block py-4">
        <div class="container">
            <div class="title-main">
                <h3 class="inherit">
                    <span><?php echo e($item->namevi ?? $titleMain); ?></span>
                </h3>
            </div>
            <div class="block-content mb-4">
                <?php echo html_entity_decode($item->contentvi); ?>

            </div>
            <div class="block-other-content">
                <div class="title-main">
                    <h3 class="inherit">
                        <span>CÁC BÀI VIẾT KHÁC</span>
                    </h3>
                </div>
                <ul class="otherNewsItems list-unstyled p-0">
                    <?php $__currentLoopData = $otherItems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $other): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li class="pb-2 mb-2 border-bottom hover text-effect">
                            <a href="<?php echo e($other->slugvi); ?>" class="text-decoration-none ">
                                <span><i class="fa fs-6 fa-0 fa-chevron-right me-1"></i></span>
                                <span><?php echo e($other->namevi); ?></span>
                            </a>
                        </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("base", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\WWW_MULTI_PLATFORM\tuanphuong\views/news/news_detail.blade.php ENDPATH**/ ?>