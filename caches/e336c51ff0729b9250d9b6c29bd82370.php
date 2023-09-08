<div class="block py-5">
    <div class="container">
        <div class="title-main my-5">
            <h3 class="inherit">
                <span>CHIA SẺ SỰ NGHIỆP</span>
            </h3>
        </div>
        <div class="block-content">
            <div class="slick slick-sunghiep">
                    <?php $__currentLoopData = $sunghiep; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="px-2 item-sunghiep">
                            <div class="news-item hover">
                                <div class="_image image mb-3">
                                    <a href="<?php echo e($item->slugvi); ?>">
                                        <img class="img-fluid"
                                             src="thumbs/370x280x1/upload/news/<?php echo e($item->photo); ?>"
                                             alt="<?php echo e($item->namevi); ?>"
                                             onerror="src='thumbs/370x280x1/assets/images/noimage.png'"
                                        >
                                    </a>
                                </div>
                                <div class="content">
                                    <div class="_title">
                                        <a href="<?php echo e($item->slugvi); ?>" class="inherit text-decoration-none">
                                            <strong><?php echo e($item->namevi); ?></strong>
                                        </a>
                                    </div>
                                    <div class="_desc text-truncate text-truncate-3">
                                        <?php echo e($item->descvi); ?>

                                    </div>
                                    <div class="_more">
                                        <a href="<?php echo e($item->slugvi); ?>" class="link-more">
                                            <span>Xem thêm</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
</div>
<?php /**PATH /home/tltkythuat/domains/php8.demotlt.com/public_html/public/views/home/sunghiep.blade.php ENDPATH**/ ?>