<?php if (!empty($static)) { ?>
    <div class="title-main"><span><?= $static['name' . $lang] ?></span></div>
    <div class="content-main autoHeight w-clear wrap-content"><?= $func->decodeHtmlChars($static['content' . $lang]) ?></div>
    <?php if (!empty($static['photo'])) { ?>
        <div><?= $func->getImage(['class' => 'lazy w-100', 'upload' => UPLOAD_NEWS_L, 'image' => $static['photo'], 'alt' => $v['name' . $lang]]) ?></div>
    <?php } ?>
<?php } else { ?>
    <div class="alert alert-warning mt-3" role="alert">
        <strong><?= dangcapnhatdulieu ?></strong>
    </div>
<?php } ?>