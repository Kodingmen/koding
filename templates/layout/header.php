<div class="header">
    <div class="wrap-content">
        <div class="col-12 col-sm-6 col-md-3 text-center">
            <a href="">
                <img class="lazy" alt="<?= $optsetting["name$lang"] ?>" data-src="<?= THUMBS ?>/190x104x1/<?= UPLOAD_PHOTO_L . $logo['photo'] ?>"
                    onerror="this.src='<?= THUMBS ?>/322x175x1/assets/images/noimage.png';">
            </a>
        </div>
        <div class="col-6 d-none d-md-block header__center">
            <p class="header__center__top text--stroke--shadow d-none d-lg-block">CÔNG TY TNHH KỸ THUẬT CƠ ĐIỆN TỰ ĐỘNG HOÁ</p>
            <p class="header__center__middle">LAN ANH</p>
            <p class="header__center__bottom text--stroke--shadow"><?= $slogan["name$lang"] ?></p>
        </div>
        <div class="col-6 col-md-3 d-none d-sm-flex header__right">
            <img class="lazy" data-src="<?= THUMBS ?>/26x27x1/assets/images/icon-hotline.png" alt="Hotline" onerror="this.src='<?= THUMBS ?>/26x27x1/assets/images/noimage.png'">
            <p class="header__right__text text--stroke--shadow">Hotline: <?= ($optsetting['hotline']) ?></p>
        </div>
    </div>
</div>