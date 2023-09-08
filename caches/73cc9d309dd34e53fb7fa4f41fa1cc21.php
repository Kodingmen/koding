










<?php if($staticGioiThieu): ?>
<div id="gioithieu">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div class="__content">
                    <div class="__wrap">
                        <div class="__wrap-content">
                            <?php echo html_entity_decode($staticGioiThieu->descvi); ?>

                        </div>
                        <div class="position-relative">
                            <a href="gioi-thieu" class="title-more text-black">Xem thêm</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 position-relative">
                <div class="__image">
                    <img class="img-fluid position-absolute bottom-0" src="thumbs/300x445x1/upload/news/<?php echo e($staticGioiThieu->photo); ?>" alt="<?php echo e($staticGioiThieu->namevi ?? ''); ?>">
                </div>
            </div>
        </div>
    </div>
</div>
<?php endif; ?><?php /**PATH /home/tltkythuat/domains/php8.demotlt.com/public_html/public/views/home/slide.blade.php ENDPATH**/ ?>