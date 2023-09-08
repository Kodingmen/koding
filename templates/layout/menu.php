<div class="menu">
    <div class="wrap-content">
        <div class="menu_logo">
            <a href="/"><img src="<?=THUMBS . '/100x70x2/' . UPLOAD_PHOTO_L . $logo['photo']?>" alt="<?= $setting['name' . $lang] ?>"></a>
        </div>
        <ul class="menu-main">
            <li><a class="<?php if ($com == '' || $com == 'index' || $com == 'gioi-thieu') echo 'active'; ?> transition" href="gioi-thieu" title="<?= gioithieu ?>"><?= gioithieu ?></a></li>
            <li><a class="<?php if ($com == 'kinh-nghiem-kinh-doanh') echo 'active'; ?> transition" href="<?= $config['website']['comlang']['kinh-nghiem-kinh-doanh'][$lang] ?>" title="<?= kinhnghiemkinhdoanh ?>"><?= kinhnghiemkinhdoanh ?></a></li>
            <li><a class="<?php if ($com == 'khoa-hoc') echo 'active'; ?> transition" href="<?= $config['website']['comlang']['khoa-hoc'][$lang] ?>" title="<?= khoahoc ?>"><?= khoahoc ?></a></li>
            <li><a class="<?php if ($com == 'video') echo 'active'; ?> transition" href="<?= $config['website']['comlang']['video'][$lang] ?>" title="<?= video ?>"><?= video ?></a></li>
            <li><a class="<?php if ($com == 'kien-thuc') echo 'active'; ?> transition" href="<?= $config['website']['comlang']['kien-thuc'][$lang] ?>" title="<?= kienthuc ?>"><?= kienthuc ?></a></li>
            <li><a class="<?php if ($com == 'kenh-ban-hang') echo 'active'; ?> transition" href="<?= $config['website']['comlang']['kenh-ban-hang'][$lang] ?>" title="<?= kenhbanhang ?>"><?= kenhbanhang ?></a></li>
            <li>
                <div class="search">
                    <span onclick="toggleSearch();"><i class="fas fa-search" style="color: #fff"></i></span>
                    <div class="keyword-autocomplete" style="display: none;">
                        <input class="" type="text" id="keyword" placeholder="<?= nhaptukhoatimkiem ?>" onkeypress="doEnter(event,'keyword');" />
                    </div>
                </div>
            </li>
        </ul>
    </div>
</div>