<div class="title-main"><span><?= $rowDetail['name' . $lang] ?></span></div>
<div class="time-main"><i class="fas fa-calendar-week"></i><span><?= ngaydang ?>: <?= $func->humanTiming($rowDetail['date_created']) ?></span></div>
<?php if (!empty($rowDetail['content' . $lang])) { ?>
    <div class="content-main autoHeight w-clear"><?= $func->decodeHtmlChars($rowDetail['content' . $lang]) ?></div>
<?php } else { ?>
    <div class="alert alert-warning w-100" role="alert">
        <strong><?= noidungdangcapnhat ?></strong>
    </div>
<?php } ?>
<?php if (!empty($news)) { ?>
    <div class="share othernews mb-3">
        <b><?= baivietkhac ?>:</b>
        <ul class="list-news-other">
            <?php foreach ($news as $k => $v) { ?>
                <li><a class="text-decoration-none" href="<?= $v[$sluglang] ?>" title="<?= $v['name' . $lang] ?>"><?= $v['name' . $lang] ?> - <?= date("d/m/Y", $v['date_created']) ?></a></li>
            <?php } ?>
        </ul>
        <div class="pagination-home w-100"><?= (!empty($paging)) ? $paging : '' ?></div>
    </div>
<?php } ?>