<div class="block py-5 bg-grey">
    <div class="container">
        <div class="title-main my-5">
            <h3 class="inherit">
                <span>BÀI VIẾT MỚI NHẤT</span>
            </h3>
        </div>
        <div class="block-content">
                <div class="slick slick-lastestNews">
                    <!-- Slides -->
                    <?php $__currentLoopData = $lastestNews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="px-2">
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
                                    <div class="_desc">
                                        <?php echo e($item->descvi); ?>

                                    </div>
                                    <div class="_more text-center">
                                        <a href="<?php echo e($item->slugvi); ?>" class="btn btn-news-more btn-khoahoc-more">
                                            <span>ĐỌC NGAY</span>
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
<?php /**PATH D:\Source_Code\LARAGON_PHP_092023\tuanphuong\views/home/lastestNews.blade.php ENDPATH**/ ?>