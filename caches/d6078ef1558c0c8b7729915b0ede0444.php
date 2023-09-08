<footer class="bg-footer">
    <div id="footer" class="py-5">
        <div class="container">
            <a href="/">
                <img src="thumbs/110x100x1/upload/photo/<?php echo e($logo->photo); ?>" alt="logo" class="img-fluid">
            </a>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-12">
                    <h2 class="h2-title mb-3">
                        THÔNG TIN LIÊN HỆ
                    </h2>
                    <div class="ft-info mb-3">
                        <span class="me-2"><i class="fa fa-phone"></i></span>
                        <span>
                            <?php echo e($optsetting->get("phone")); ?>

                        </span>
                    </div>
                    <div class="ft-info mb-3">
                        <span class="me-2"><i class="fa fa-envelope"></i></span>
                        <span>
                            <?php echo e($optsetting->get("email")); ?>

                        </span>
                    </div>
                    <div class="ft-info mb-3">
                        <span class="me-2"><i class="fa fa-globe"></i></span>
                        <span>
                            <?php echo e($optsetting->get("website")); ?>

                        </span>
                    </div>
                    <h2 class="h2-title">
                        MẠNG XÃ HỘI
                    </h2>
                    <ul class="list-unstyled d-flex">
                        <li>
                            <a target="_blank" href="<?php echo e($optsetting->get("youtube")); ?>"><img src="/assets/images/images/mxh_youtube.png" alt="mxh_youtube"></a>
                        </li>
                        <li class="mx-3">
                            <a target="_blank" href="<?php echo e($optsetting->get("fanpage")); ?>"><img src="/assets/images/images/mxh_fb.png" alt="mxh_fb"></a>
                        </li>
                        <li>
                            <a target="_blank" href="<?php echo e($optsetting->get("google")); ?>"><img src="/assets/images/images/mxh_gg.png" alt="mxh_gg"></a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4 col-12">
                    <h2 class="h2-title mb-3">
                        CHƯƠNG TRÌNH ĐÀO TẠO
                    </h2>
                    <ul class="ft-list list-unstyled p-0">
                        <?php $__currentLoopData = $khoahocList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li>
                                <a href="<?php echo e($item->slugvi); ?>">
                                    <?php echo e($item->namevi); ?>

                                </a>
                            </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
                <div class="col-md-4 col-12">
                    <h2 class="h2-title">
                        KIẾN THỨC
                    </h2>
                    <ul class="ft-list list-unstyled p-0">
                        <?php $__currentLoopData = $kienthucList ?? []; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li>
                                <a href="<?php echo e($item->slugvi); ?>">
                                    <?php echo e($item->namevi); ?>

                                </a>
                            </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div id="copyright" class="py-4">
        <div class="container text-center">
            2023 Copyright © <?php echo e($setting->namevi); ?>. All rights reserved.Design by TLTVietnam.vn
        </div>
    </div>


</footer><?php /**PATH D:\Source_Code\LARAGON_PHP_092023\tuanphuong\views/layouts/footer.blade.php ENDPATH**/ ?>