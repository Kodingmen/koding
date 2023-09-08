

<?php $__env->startSection("content"); ?>
    <?php if($slides->isNotEmpty()): ?>
        <?php echo $__env->make("home.slide", ['slides' => $slides], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>
    <?php if($khoahoc->isNotEmpty()): ?>
        <?php echo $__env->make("home.khoahoc", ['khoahoc' => $khoahoc], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>
    <?php if($kienthuc && $kienthuc->isNotEmpty()): ?>
        <?php echo $__env->make("home.chiase", ['kienthuc' => $kienthuc], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>

    <?php if($lastestNews && $lastestNews->isNotEmpty()): ?>
        <?php echo $__env->make("home.lastestNews", ['lastestNews' => $lastestNews], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>

    <?php if($sunghiep && $sunghiep->isNotEmpty()): ?>
        <?php echo $__env->make("home.sunghiep", ['sunghiep' => $sunghiep], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("base", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\WWW_MULTI_PLATFORM\tuanphuong\views/home/index.blade.php ENDPATH**/ ?>