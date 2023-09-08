<div class="content-main video_page_container">
    <div class="videos_list_wrapper">
        <?php if (!empty($highlightCourses)) {
            echo $func->lay_video_highlight($highlightCourses,THUMBS.'/1100x500x1/');
        } else { ?>
            <div class="col-12">
                <div class="alert alert-warning w-100" role="alert">
                    <strong><?= khongtimthayketqua ?></strong>
                </div>
            </div>
        <?php } ?>
    </div>
    <div class="course_container">
        <?php // if (!empty($news)) { 
            //css_baiviet_ngang: thể hiện 4 bài viết 1 hàng  
            // Đóng dấu:   WATERMARK.'/news/355x266x1/'
            //echo $func->lay_baiviet($news,'news',THUMBS.'/400x300x1/');
        // } ?>
        <?php foreach ($courseList as $key => $list) {
            $childCourses = $d->rawQuery("select name$lang, slugvi, desc$lang, photo, link_video from #_news where type = ? and find_in_set('hienthi',status) and id_list = ? order by numb,id desc",array('khoa-hoc', $list['id']));
        ?>
            <p class="list_name"><?=$list["name$lang"]?></p>
            <div class="courses_wrapper d-flex flex-wrap">
                <?php foreach ($childCourses as $v) {
                    if (isset($v)) { ?>
                        <div class="course col-12 col-sm-6 col-md-4">
                            <a class="text-decoration-none w-clear" href="<?=$v["slug$lang"]?>" title="<?=$v["name$lang"]?>">
                            <p class="video-thumbnail scale-img"><img onerror="this.src='<?=THUMBS?>assets/images/noimage.png';" src="https://img.youtube.com/vi/<?=$func->getYoutube($v['link_video']);?>/0.jpg" alt="<?=$v["name$lang"]?>"/></p>
                                <div class="info-course">
                                    <h3 class="name-news line-clamp-1"><?=$v["name$lang"]?></h3>
                                    <div class="desc-news text-split"><?=$v["desc$lang"]?></div>
                                </div>
                            </a>
                        </div>
                    <?php } ?>
                <?php } ?>
            </div>
        <?php } ?>
    </div>
    <div class="clear"></div>
    <div class="col-12">
        <div class="pagination-home w-100"><?= (!empty($paging)) ? $paging : '' ?></div>
    </div>
</div>