<div class="block py-5">
    <div class="container">
        <div class="title-main position-relative">
            <h3 class="inherit">
                <span>KHÓA HỌC</span>
            </h3>
            <a href="khoa-hoc" class="title-more">Xem tất cả</a>
        </div>
        <div class="block-content">
            <div class="slick slick-khoahoc">
                    <?php $__currentLoopData = $khoahoc; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="px-2">
                            <?php echo $__env->make("home.items.news", ['item' => $item], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
</div>
<?php /**PATH D:\WWW_MULTI_PLATFORM\tuanphuong\views/home/khoahoc.blade.php ENDPATH**/ ?>