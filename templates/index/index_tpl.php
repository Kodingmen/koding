<!-- Highlight products list -->
<?php foreach ($splistnb as $key => $list) {
    $spcatnb = $d->rawQuery("select name$lang, slugvi, id, photo from #_product_cat where type = ? and find_in_set('hienthi',status) and find_in_set('noibat',status) and id_list = ? order by numb,id desc",array('san-pham', $list['id']));
    $products = $d->rawQuery("select name$lang, slugvi, id, photo from #_product where type = ? and find_in_set('hienthi',status) and find_in_set('noibat',status) and id_list = ? order by numb,id desc",array('san-pham', $list['id']));
?>
    <div class="homelight-product wrap-content">
        <div class="list-wrapper">
            <div class="list-title d-flex justify-content-between">
                <div class="parent-list col">
                    <img class="lazy" alt="<?= $optsetting["name$lang"] ?>" data-src="<?= THUMBS ?>/54x29x1/<?= UPLOAD_PHOTO_L . $logo['photo'] ?>"
                        onerror="this.src='<?= THUMBS ?>/54x29x1/assets/images/noimage.png';">
                    &nbsp;
                    <a href="<?=$list["slug$lang"]?>"><?=$list["name$lang"]?></a>
                </div>
                <?php for ($i=0;$i<4;$i++) { ?>
                    <div class="child-cat col d-none d-lg-flex justify-content-center align-items-center">
                        <a href="<?=$spcatnb[$i]["slug$lang"]?>"><?=$spcatnb[$i]["name$lang"]?></a>
                    </div>
                <?php } ?>
            </div>
            <div class="list-gallery row no-gutters">
                <div class="col parent-list__img d-none d-lg-block">
                    <a href="<?=$list["slug$lang"]?>">
                        <img class="lazy" alt="<?= $list["name$lang"] ?>" data-src="<?= THUMBS ?>/337x505x1/<?= UPLOAD_PRODUCT_L . $list['photo'] ?>"
                            onerror="this.src='<?= THUMBS ?>/337x505x1/assets/images/noimage.png';">
                    </a>
                </div>
                <div class="col child-cat__gallery row no-gutters">
                    <?php for ($i=0;$i<6;$i++) { 
                        if (isset($products[$i])) { ?>
                            <div class="cat-wrapper col-4">
                                <div class="cat-inner-wrapper pb-1">
                                    <a href="<?=$products[$i]["slug$lang"]?>">
                                        <p class="scale-img mb-1">
                                            <img class="lazy" alt="<?= $products[$i]["name$lang"] ?>" data-src="<?= THUMBS ?>/398x217x1/<?= UPLOAD_PRODUCT_L . $products[$i]['photo'] ?>"
                                                onerror="this.src='<?= THUMBS ?>/398x217x1/assets/images/noimage.png';">
                                        </p>
                                    </a>
                                    <a class="cat-gallery__title text-split txt-split-1" href="<?=$products[$i]["slug$lang"]?>"><?=$products[$i]["name$lang"]?></a>
                                </div>
                            </div>
                        <?php }
                        } ?>
                </div>
            </div>
        </div>
    </div>
<?php } ?>
<!-- Subscribe -->
<div class="container-fluid subscribe-wrapper">
    <div class="wrap-content d-flex justify-content-center justify-content-lg-end align-items-center">
        <div class="subscribe col-12 col-lg-9">
            <div class="title">
                <img class="lazy" alt="<?= $optsetting["name$lang"] ?>" data-src="<?= THUMBS ?>/190x104x1/<?= UPLOAD_PHOTO_L . $logo['photo'] ?>"
                    onerror="this.src='<?= THUMBS ?>/190x104x1/assets/images/noimage.png';">
                <p>NHẬP THÔNG TIN ĐỂ NHẬN KHUYẾN MÃI</p>
            </div>
            <form class="validation-contact" id="subscibe-info" novalidate action="" method="post">
                <div class="form-group d-flex flex-wrap mb-0">
                    <div class="contact-input col-12 col-sm-6 col-md-3">
                        <input class="form-control" type="text" name="dataContact[fullname]" placeholder="Họ và tên" required>
                        <div class="invalid-feedback"><?= vuilongnhaphoten ?></div>
                    </div>
                    <div class="contact-input col-12 col-sm-6 col-md-3">
                        <input class="form-control" type="text" name="dataContact[email]" placeholder="Email" required>
                        <div class="invalid-feedback"><?= vuilongnhapdiachiemail ?></div>
                    </div>
                    <div class="contact-input col-12 col-sm-6 col-md-3">
                        <input class="form-control" type="text" name="dataContact[phone]" placeholder="Số điện thoại" required>
                        <div class="invalid-feedback"><?= vuilongnhapsodienthoai ?></div>
                    </div>
                    <div class="contact-input col-12 col-sm-6 col-md-3">
                        <input class="form-control" type="text" name="dataContact[content]" placeholder="Ghi chú">
                    </div>
                </div>
                <div class="text-center">
                    <button id="info-submit">ĐĂNG KÝ</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- News & Videos -->
<?php if(count($newsnb) || count($videonb)) { ?>
<div class="box-tintuc-video">
    <div class="wrap-content">
        <div class="wrap-tin-video">
            <div class="left-intro">
                <div class="title">
                    <p class="title-intro">Tin tức - sự kiện</p>
                    <p>Cập nhật tin tức mới nhất cho khách hàng</p>
                </div>
                <div class="newshome-intro w-clear">
                    <a class="newshome-best text-decoration-none" href="<?=$newsnb[0][$sluglang]?>" title="<?=$newsnb[0]['name'.$lang]?>">
                        <p class="pic-newshome-best scale-img"><img onerror="this.src='<?=THUMBS?>/360x200x2/assets/images/noimage.png';" src="<?=THUMBS?>/360x200x1/<?=UPLOAD_NEWS_L.$newsnb[0]['photo']?>" alt="<?=$newsnb[0]['name'.$lang]?>" width="360" height="200"></p>
                        <div class="px-1">
                            <h3 class="name-newshome text-split"><?=$newsnb[0]['name'.$lang]?></h3>
                            <p class="time-newshome">Ngày đăng: <?=date("d/m/Y",$newsnb[0]['date_created'])?></p>
                            <p class="desc-newshome text-split"><?=$newsnb[0]['desc'.$lang]?></p>
                        </div>
                        <span class="view-newshome transition"><?=xemthem?></span>
                        <?php // $optchinhanh = (isset($newsnb[0]['options']) && $newsnb[0]['options'] != '') ? json_decode($newsnb[0]['options'],true) : null;
                        //echo $optchinhanh["chucvu"]; ?>
                    </a>
                    <div class="newshome-scroll">
                        <div class="news-slideshow" id="news-slideshow">
                            <?php foreach($newsnb as $v) {?>
                                <a class="newshome-normal text-decoration-none w-clear" href="<?=$v[$sluglang]?>" title="<?=$v['name'.$lang]?>">
                                    <p class="pic-newshome-normal scale-img"><img onerror="this.src='<?=THUMBS?>/150x120x2/assets/images/noimage.png';" src="<?=THUMBS?>/150x120x1/<?=UPLOAD_NEWS_L.$v['photo']?>" alt="<?=$v['name'.$lang]?>" width="150" height="120"></p>
                                    <div class="info-newshome-normal">
                                        <h3 class="name-newshome text-split"><?=$v['name'.$lang]?></h3>
                                        <?php /*
                                        <p class="time-newshome"><?=ngaydang?>: <?=date("d/m/Y",$v['date_created'])?></p>
                                        */ ?>
                                        <p class="desc-newshome text-split"><?=$v['desc'.$lang]?></p>
                                    </div>
                                </a>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="right-intro">
                <div class="title">
                    <p class="title-intro">Thư viện video - hình ảnh</p>
                    <p>Uy tín - Chất lượng tạo nên thương hiệu</p>
                </div>
                <div class="videohome-intro">
                    <?php // echo $addons->set('video-fotorama', 'video-fotorama', 4); ?>
                    <?php echo $addons->set('photo-video-fotorama', 'photo-video-fotorama', 4); ?>
                    <?php // echo $addons->set('video-slick', 'video-slick', 4); ?>
                    <?php // echo $addons->set('video-thumbnail-slick', 'video-thumbnail-slick', 4); ?>
                    <?php // echo $addons->set('video-select', 'video-select', 4); ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php } ?>