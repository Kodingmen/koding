<div class="footer">
    <div class="footer-article">
        <div class="wrap-content px-0">
            <div class="wap_footer">
                <div class="footer-news">
                    <h5 class="footer-title"><?= $footer["name$lang"] ?></h5>
                    <div class="d-flex flex-wrap no-gutters">
                        <div class="footer-info col-6 col-lg-12"><?= $func->decodeHtmlChars($footer["content$lang"]) ?></div>
                        <div class="col-6 col-lg-12">
                            <ul class="social social-footer">
                                <?php for($i=0;$i<count($social);$i++) { ?>
                                    <li><a href="<?=$social[$i]['link']?>" target="_blank"><img src="<?=UPLOAD_PHOTO_L.$social[$i]['photo']?>" alt="<?=$social[$i]['name'.$lang]?>" width="40" height="40"></a></li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="footer-news d-flex flex-wrap">
                    <div class="col-12 col-sm-6">
                        <h5 class="footer-title">Fanpage facebook</h5>
                        <?= $addons->set('fanpage-facebook', 'fanpage-facebook', 2); ?>
                    </div>
                    <div class="col-12 col-sm-6">
                        <h5 class="footer-title">GOOGLE MAPS</h5>
                        <?= $addons->set('footer-map', 'footer-map', 6); ?>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <div class="footer-powered">
        <div class="wrap-content d-flex justify-content-end">
            <div class="col-12 col-xl-9 flex-wrap d-flex justify-content-between">
                <div class="powered col-7">
                    <p>Copyright © 2022 LAN ANH.&nbsp;</p>
                    <p>All rights reserved.&nbsp;</p>
                    <p>Design by <a href="//tltvietnam.vn" target="_blank">TLT</a>.</p>
                </div>
                <div class="statistic col-5">
                    <p><?= dangonline ?>: <?= $online ?></p>
                    <p><?= tongtruycap ?>: <?= $counter['total'] ?></p>
                </div>
            </div>
        </div>
    </div>
    <?= $addons->set('messages-facebook', 'messages-facebook', 2); ?>
</div>
<a class="btn-zalo btn-frame text-decoration-none" target="_blank" href="https://zalo.me/<?= preg_replace('/[^0-9]/', '', $optsetting['zalo']); ?>">
    <div class="animated infinite zoomIn kenit-alo-circle"></div>
    <div class="animated infinite pulse kenit-alo-circle-fill"></div>
    <i><?= $func->getImage(['size-error' => '35x35x2', 'upload' => 'assets/images/', 'image' => 'zl.png', 'alt' => 'Zalo']) ?></i>
</a>
<a class="btn-phone btn-frame text-decoration-none" href="tel:<?= preg_replace('/[^0-9]/', '', $optsetting['hotline']); ?>">
    <div class="animated infinite zoomIn kenit-alo-circle"></div>
    <div class="animated infinite pulse kenit-alo-circle-fill"></div>
    <i><?= $func->getImage(['size-error' => '35x35x2', 'upload' => 'assets/images/', 'image' => 'hl.png', 'alt' => 'Hotline']) ?></i>
</a>