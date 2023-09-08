<div id="top">
    <div class="container d-none d-lg-block">
        <div class="w-100 d-flex flex-wrap justify-content-center justify-content-lg-between align-items-center">
            <div id="logo">
                <a href="/">
                    <img src="thumbs/110x100x1/upload/photo/<?php echo e($logo->photo); ?>" alt="logo" class="img-fluid">
                </a>
            </div>
            <div id="menu">
                <ul class="list-unstyled d-flex justify-content-end mb-0">
                    <li <?php if($source == 'index'): ?> class="active" <?php endif; ?>>
                        <a href="/"><span>GIỚI THIỆU</span></a>
                    </li>
                    <li <?php if($com == 'kinh-nghiem'): ?> class="active" <?php endif; ?>>
                        <a href="kinh-nghiem"><span>KINH NGHIỆM KINH DOANH</span></a>
                    </li>
                    <li <?php if($com == 'khoa-hoc'): ?> class="active" <?php endif; ?>>
                        <a href="khoa-hoc"><span>KHÓA HỌC</span></a>
                        <ul>
                            <?php $__currentLoopData = $khoahocList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $list): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li>
                                    <a href="<?php echo e($list->slugvi); ?>"><span><?php echo e($list->namevi); ?></span></a>
                                </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </li>
                    <li <?php if($com == 'video'): ?> class="active" <?php endif; ?>>
                        <a href="video"><span>VIDEO</span></a>
                        <ul>
                            <?php $__currentLoopData = $videoList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $list): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li>
                                    <a href="<?php echo e($list->slugvi); ?>"><span><?php echo e($list->namevi); ?></span></a>
                                </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </li>
                    <li>
                        <a href="kien-thuc"><span>KIẾN THỨC</span></a>
                        <ul>
                            <?php $__currentLoopData = $kienthucList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $list): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li>
                                    <a href="<?php echo e($list->slugvi); ?>"><span><?php echo e($list->namevi); ?></span></a>
                                </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </li>
                    <li>
                        <a href="kenh-ban-hang"><span>KÊNH BÁN HÀNG</span></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container d-flex d-lg-none justify-content-between align-items-center">
        <div id="logo">
            <a href="/">
                <img src="thumbs/110x100x1/upload/photo/<?php echo e($logo->photo); ?>" alt="logo" class="img-fluid">
            </a>
        </div>
        <a href="#menu-mobile" class="d-block text-black">
            <i class="fa fa-bars"></i>
        </a>
    </div>
</div>
<div id="menu-mobile" class="d-lg-none d-block">
    <ul>
        <li <?php if($source == 'index'): ?> class="active" <?php endif; ?>>
            <a href="/"><span>GIỚI THIỆU</span></a>
        </li>
        <li <?php if($com == 'kinh-nghiem'): ?> class="active" <?php endif; ?>>
            <a href="kinh-nghiem"><span>KINH NGHIỆM KINH DOANH</span></a>
        </li>
        <li <?php if($com == 'khoa-hoc'): ?> class="active" <?php endif; ?>>
            <a href="khoa-hoc"><span>KHÓA HỌC</span></a>
        </li>
        <li <?php if($com == 'video'): ?> class="active" <?php endif; ?>>
            <a href="video"><span>VIDEO</span></a>
        </li>
        <li>
            <a href="kien-thuc"><span>KIẾN THỨC</span></a>
        </li>
        <li>
            <a href="kenh-ban-hang"><span>KÊNH BÁN HÀNG</span></a>
        </li>
    </ul>
</div><?php /**PATH /home/tltkythuat/domains/php8.demotlt.com/public_html/public/views/layouts/header.blade.php ENDPATH**/ ?>