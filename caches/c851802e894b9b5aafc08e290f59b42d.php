<?php
    /** @var \Illuminate\Support\Collection $kienthuc */
    $item = $kienthuc->first();
?>
<div class="block py-4">
    <div class="container">
        <div class="title-main position-relative">
            <h3 class="inherit">
                <span>CHIA SẺ KIẾN THỨC</span>
            </h3>
            <a href="kien-thuc" class="title-more">Xem tất cả</a>
        </div>
        <div class="block-content">
            <div class="row">
                <div class="col-md-6 col-12 d-md-block d-none">
                    <div class="large-news-item news-item hover mb-3">
                        <div class="image mb-3">
                            <a href="<?php echo e($item->slugvi); ?>">
                                <img class="img-fluid"
                                     src="thumbs/590x385x1/upload/news/<?php echo e($item->photo); ?>"
                                     alt="<?php echo e($item->namevi); ?>"
                                     onerror="src='thumbs/590x385x1/assets/images/noimage.png'"
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
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <div class="row">
                        <?php $__currentLoopData = $kienthuc; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="col-12">
                                <div class="small-news-item news-item hover d-flex flex-wrap justify-content-between  mb-3">
                                    <div class="image">
                                        <a href="<?php echo e($item->slugvi); ?>">
                                            <img class="img-fluid"
                                                 src="thumbs/190x120x1/upload/news/<?php echo e($item->photo); ?>"
                                                 alt="<?php echo e($item->namevi); ?>"
                                                 onerror="src='thumbs/190x120x1/assets/images/noimage.png'"
                                            >
                                        </a>
                                    </div>
                                    <div class="content flex-grow-1 ps-2">
                                        <div class="_title">
                                            <a href="<?php echo e($item->slugvi); ?>" class="inherit text-decoration-none">
                                                <strong><?php echo e($item->namevi); ?></strong>
                                            </a>
                                        </div>
                                        <div class="_desc">
                                            <?php echo e($item->descvi); ?>

                                        </div>
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
<?php /**PATH D:\WWW_MULTI_PLATFORM\tuanphuong\views/home/chiase.blade.php ENDPATH**/ ?>