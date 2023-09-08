<?php $__env->startSection("content"); ?>
    <div class="wrap-content py-5">
        <div class="container">
            <h2 class="title-main fs-36 text-start">
                NHỮNG LÍ DO BẠN NÊN THAM GIA KIẾM TIỀN VỚI MMO
            </h2>
            <div class="w-100">
                <?php if($videoLido->link_video): ?>
            <div id="video-youtube-frame" class="mb-4">
                <div class="ratio ratio-16x9">
                    <iframe src="https://www.youtube.com/embed/<?php echo e(func()->getYoutube($videoLido->link_video)); ?>"  title="YouTube video" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
            </div>
            <?php endif; ?>
            </div>
        </div>
        <div class="container">
            <?php $__currentLoopData = $videoList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $list): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="block-video mb-4">
                    <div class="title-video-list title-main text-start">
                        <?php echo e($list->namevi); ?>

                    </div>
                    <?php
                $items = \Illuminate\Support\Facades\DB::table("table_news")
                ->select([
                    "id", "type", "slugvi", "namevi","descvi", "photo", "link_video"
                ])
                ->where("id_list", "=", $list->id)
                ->whereIn('type', [
                    'video'
                ])
                ->whereRaw("FIND_IN_SET('hienthi',status)")
                ->take(12)
                ->get();
                    ?>
                    <?php if($items): ?>
                    <div class="video_content">
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
                                    <div class="_desc text-truncate text-truncate-3">
                                        <?php echo e($item->descvi); ?>

                                    </div>
                                </div>
                            </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                    <?php endif; ?>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("base", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/tltkythuat/domains/php8.demotlt.com/public_html/public/views/video/index.blade.php ENDPATH**/ ?>