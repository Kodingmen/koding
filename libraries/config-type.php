<?php

/* Config type - Group */
// $config['group'] = array(
//     "Group Sản Phẩm" => array(
//         "product" => array("san-pham"),
//         "tags" => array("san-pham"),
//         "static" => array("gioi-thieu-san-pham"),
//         "photo" => array("slide-product"),
//         "photo_static" => array("watermark"),
//         "newsletter" => array("dangkybaogia")
//     ),
//     "Group Tin Tức" => array(
//         "news" => array("tin-tuc", "tuyen-dung"),
//         "tags" => array("tin-tuc"),
//         "photo_static" => array("watermark-news"),
//         "newsletter" => array("dangkytuyendung")
//     )
// );

/* Config type - Product */
require_once LIBRARIES . 'type/config-type-product.php';

/* Config type - Tags */
// require_once LIBRARIES . 'type/config-type-tags.php';

/* Config type - Newsletter */
require_once LIBRARIES . 'type/config-type-newsletter.php';

/* Config type - News */
require_once LIBRARIES . 'type/config-type-news.php';

/* Config type - Static */
require_once LIBRARIES . 'type/config-type-static.php';

/* Config type - Photo */
require_once LIBRARIES . 'type/config-type-photo.php';

/* Seo page */
$config['seopage']['page'] = array(
    "khoa-hoc" => "Khóa Học",
    "kien-thuc" => "Kiến Thức",
    "video" => "Video",
    "kinh-nghiem" => "Kinh Nghiệm",
    // "thu-vien-anh" => "Thư viện ảnh",
    // "video" => "Video",
    "kenh-ban-hang" => "Kênh Bán Hàng"
);
$config['seopage']['width'] = 300;
$config['seopage']['height'] = 200;
$config['seopage']['thumb'] = '300x200x1';
$config['seopage']['img_type'] = '.jpg|.gif|.png|.jpeg|.gif';

/* Setting */
$config['setting']['address'] = true;
$config['setting']['address2'] = true;
$config['setting']['phone'] = true;
$config['setting']['hotline'] = true;
$config['setting']['zalo'] = true;
$config['setting']['oaidzalo'] = true;
$config['setting']['email'] = true;
$config['setting']['website'] = true;
$config['setting']['fanpage'] = true;
// $config['setting']['coords'] = true;
$config['setting']['coords_iframe'] = true;
// $config['setting']['colorSite'] = false;

/* Quản lý import */
$config['import']['images'] = false;
$config['import']['thumb'] = '100x100x1';
$config['import']['img_type'] = ".jpg|.gif|.png|.jpeg|.gif";

/* Quản lý export */
$config['export']['category'] = false;

/* Quản lý tài khoản */
$config['user']['active'] = true;
$config['user']['admin'] = false;
$config['user']['check_admin'] = array("hienthi" => "Kích hoạt");
$config['user']['member'] = false;
$config['user']['birthday'] = false;
$config['user']['check_member'] = array("hienthi" => "Kích hoạt");

/* Quản lý phân quyền */
$config['permission']['active'] = false;
$config['permission']['check'] = array("hienthi" => "Kích hoạt");

/* Quản lý liên lệ */
$config['contact']['check'] = array("hienthi" => "Xác nhận");

/* Quản lý địa điểm */
$config['places']['active'] = CARTSITE;
$config['places']['check_city'] = array("hienthi" => "Hiển thị");
$config['places']['check_district'] = array("hienthi" => "Hiển thị");
$config['places']['check_ward'] = array("hienthi" => "Hiển thị");
$config['places']['placesship'] = false;

/* Quản lý giỏ hàng */
$config['order']['active'] = CARTSITE;
$config['order']['search'] = true;
$config['order']['coupon'] = CARTPROSITE;
$config['order']['advance'] = CARTPROSITE;
$config['order']['excel'] = true;
$config['order']['word'] = true;
$config['order']['excelall'] = false;
$config['order']['wordall'] = false;
$config['order']['thumb'] = '55x55x2';

/* Quản lý thông báo đẩy */
$config['onesignal'] = false;