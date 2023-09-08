<?php
$router = new AltoRouter();


$router->map('GET|POST', '/', 'index', 'home');
$router->map('GET|POST', 'index.php', 'index', 'index');
$router->map('GET|POST', '/sitemap.xml', 'sitemap', 'sitemap');
$router->map('GET|POST', '[a:com]', 'allpage', 'show');
$router->map('GET|POST', '[a:com]/[a:lang]/', 'allpagelang', 'lang');
$router->map('GET|POST', '[a:com]/[a:action]', 'account', 'account');



# Enable extension=php_gd.dll in php.ini to resize images

$router->map('GET', 'thumbs/[i:w]x[i:h]x[i:z]/[**:src]', function ($w, $h, $z, $src) {
    app("func")->createThumb($w, $h, $z, $src, null, "thumbs");
}, 'thumb');

$router->map('GET', WATERMARK . '/product/[i:w]x[i:h]x[i:z]/[**:src]', function ($w, $h, $z, $src) {
    $wtm = cache()->remember("watermark" . implode("_", [$w, $h, $z, $src, 'product']), function (){
        return \Illuminate\Support\Facades\DB::table("table_photo")
            ->where('type', '=', 'watermark')
            ->where('act', '=', 'photo_static')
            ->select(['status', 'photo', 'options'])
            ->first();
    });
    app("func")->createThumb($w, $h, $z, $src, $wtm, "product");
}, 'watermark');
$router->map('GET', WATERMARK . '/news/[i:w]x[i:h]x[i:z]/[**:src]', function ($w, $h, $z, $src) {
    $wtm = cache()->remember("watermark" . implode("_", [$w, $h, $z, $src, 'news']), function (){
        return \Illuminate\Support\Facades\DB::table("table_photo")
            ->where('type', '=', 'watermark-news')
            ->where('act', '=', 'photo_static')
            ->select(['status', 'photo', 'options'])
            ->first();
    });
    app("func")->createThumb($w, $h, $z, $src, $wtm, "news");
}, 'watermarkNews');

/* Router match */
$match = $router->match();
/* Router check */
if (is_array($match)) {
    if (is_callable($match['target'])) {
        call_user_func_array($match['target'], $match['params']);
    } else {
        $com = (!empty($match['params']['com'])) ? htmlspecialchars($match['params']['com']) : htmlspecialchars($match['target']);
        $getPage = !empty($_GET['p']) ? htmlspecialchars($_GET['p']) : 1;
    }
} else {
    header('HTTP/1.0 404 Not Found', true, 404);
    include("404.php");
    exit;
}

//
//
///* Lang */
//if (!empty($match['params']['lang'])) $_SESSION['lang'] = $match['params']['lang'];
//else if (empty($_SESSION['lang']) && empty($match['params']['lang'])) $_SESSION['lang'] = $optsetting['lang_default'];
//
//$lang = $_SESSION['lang'];
//
///* Check lang */
//$weblang = (!empty($config['website']['lang'])) ? array_keys($config['website']['lang']) : array();
//
//if (!in_array($lang, $weblang)) {
//    $_SESSION['lang'] = 'vi';
//    $lang = $_SESSION['lang'];
//}
//
//if($_SESSION['lang'] == 'en') {
//    $com = array(
//        'about-us' => 'gioi-thieu',
//        'products' => 'san-pham',
//        'news' => 'tin-tuc',
//        'support' => 'ho-tro',
//        'recruitment' => 'tuyen-dung',
//        'contact' => 'lien-he',
//    )[$com] ?? $com;
//}
//
///* Slug lang */
//// $sluglang = 'slugvi';
//$sluglang = 'slug'.$_SESSION['lang'];
//
///* SEO Lang */
//$seolang = $_SESSION['lang'];
//
///* Require datas lang */
//require_once LIBRARIES . "lang/$lang.php";

/* Tối ưu link */
$requick = array(
    /* Sản phẩm */
    array("tbl" => "product_list", "field" => "idl", "source" => "product", "com" => "san-pham", "type" => "san-pham"),
    array("tbl" => "product_cat", "field" => "idc", "source" => "product", "com" => "san-pham", "type" => "san-pham"),
    array("tbl" => "product_item", "field" => "idi", "source" => "product", "com" => "san-pham", "type" => "san-pham"),
    array("tbl" => "product_sub", "field" => "ids", "source" => "product", "com" => "san-pham", "type" => "san-pham"),
    array("tbl" => "product_brand", "field" => "idb", "source" => "product", "com" => "thuong-hieu", "type" => "san-pham"),
    array("tbl" => "product", "field" => "id", "source" => "product", "com" => "san-pham", "type" => "san-pham", "menu" => true),

    /* Tags */
    array("tbl" => "tags", "tbltag" => "product", "field" => "id", "source" => "tags", "com" => "tags-san-pham", "type" => "san-pham", "menu" => true),
    array("tbl" => "tags", "tbltag" => "news", "field" => "id", "source" => "tags", "com" => "tags-tin-tuc", "type" => "tin-tuc", "menu" => true),

    /* Thư viện ảnh */
    array("tbl" => "product", "field" => "id", "source" => "product", "com" => "thu-vien-anh", "type" => "thu-vien-anh", "menu" => true),

    /* Video */
//    array("tbl" => "photo", "field" => "id", "source" => "video", "com" => "video", "type" => "video", "menu" => true),

    /* Tin tức */
    array("tbl" => "news_list", "field" => "idl", "source" => "news", "com" => "tin-tuc", "type" => "tin-tuc"),
    array("tbl" => "news_cat", "field" => "idc", "source" => "news", "com" => "tin-tuc", "type" => "tin-tuc"),
    array("tbl" => "news_item", "field" => "idi", "source" => "news", "com" => "tin-tuc", "type" => "tin-tuc"),
    array("tbl" => "news_sub", "field" => "ids", "source" => "news", "com" => "tin-tuc", "type" => "tin-tuc"),
    array("tbl" => "news", "field" => "id", "source" => "news", "com" => "tin-tuc", "type" => "tin-tuc", "menu" => true),


    array("tbl" => "news_list", "field" => "idl", "source" => "news", "com" => "khoa-hoc", "type" => "khoa-hoc"),
    array("tbl" => "news_cat", "field" => "idc", "source" => "news", "com" => "khoa-hoc", "type" => "khoa-hoc"),
    array("tbl" => "news_item", "field" => "idi", "source" => "news", "com" => "khoa-hoc", "type" => "khoa-hoc"),
    array("tbl" => "news_sub", "field" => "ids", "source" => "news", "com" => "khoa-hoc", "type" => "khoa-hoc"),
    array("tbl" => "news", "field" => "id", "source" => "news", "com" => "khoa-hoc", "type" => "khoa-hoc", "menu" => true),

    array("tbl" => "news_list", "field" => "idl", "source" => "news", "com" => "kien-thuc", "type" => "kien-thuc"),
    array("tbl" => "news_cat", "field" => "idc", "source" => "news", "com" => "kien-thuc", "type" => "kien-thuc"),
    array("tbl" => "news_item", "field" => "idi", "source" => "news", "com" => "kien-thucc", "type" => "kien-thuc"),
    array("tbl" => "news_sub", "field" => "ids", "source" => "news", "com" => "kien-thuc", "type" => "kien-thuc"),
    array("tbl" => "news", "field" => "id", "source" => "news", "com" => "kien-thuc", "type" => "kien-thuc", "menu" => true),

    array("tbl" => "news_list", "field" => "idl", "source" => "news", "com" => "kinh-nghiem", "type" => "kinh-nghiem"),
    array("tbl" => "news_cat", "field" => "idc", "source" => "news", "com" => "kinh-nghiem", "type" => "kinh-nghiem"),
    array("tbl" => "news_item", "field" => "idi", "source" => "news", "com" => "kinh-nghiem", "type" => "kinh-nghiem"),
    array("tbl" => "news_sub", "field" => "ids", "source" => "news", "com" => "kinh-nghiem", "type" => "kinh-nghiem"),
    array("tbl" => "news", "field" => "id", "source" => "news", "com" => "kinh-nghiem", "type" => "kinh-nghiem", "menu" => true),

    array("tbl" => "news_list", "field" => "idl", "source" => "news", "com" => "su-nghiep", "type" => "su-nghiep"),
    array("tbl" => "news_cat", "field" => "idc", "source" => "news", "com" => "su-nghiep", "type" => "su-nghiep"),
    array("tbl" => "news_item", "field" => "idi", "source" => "news", "com" => "su-nghiep", "type" => "su-nghiep"),
    array("tbl" => "news_sub", "field" => "ids", "source" => "news", "com" => "su-nghiep", "type" => "su-nghiep"),
    array("tbl" => "news", "field" => "id", "source" => "news", "com" => "su-nghiep", "type" => "su-nghiep", "menu" => true),

    array("tbl" => "news_list", "field" => "idl", "source" => "news", "com" => "video", "type" => "video"),
    array("tbl" => "news_cat", "field" => "idc", "source" => "news", "com" => "video", "type" => "video"),
    array("tbl" => "news_item", "field" => "idi", "source" => "news", "com" => "video", "type" => "video"),
    array("tbl" => "news_sub", "field" => "ids", "source" => "news", "com" => "video", "type" => "video"),
    array("tbl" => "news", "field" => "id", "source" => "news", "com" => "video", "type" => "video", "menu" => true),


    /* Services */
    array("tbl" => "news", "field" => "id", "source" => "news", "com" => "dich-vu", "type" => "dich-vu", "menu" => true),

    /* Bài viết */
    array("tbl" => "news", "field" => "id", "source" => "news", "com" => "tuyen-dung", "type" => "tuyen-dung", "menu" => true),
    array("tbl" => "news", "field" => "id", "source" => "news", "com" => "chinh-sach", "type" => "chinh-sach", "menu" => false),

    /* Trang tĩnh */
    array("tbl" => "static", "field" => "id", "source" => "static", "com" => "gioi-thieu", "type" => "gioi-thieu", "menu" => true),
    array("tbl" => "static", "field" => "id", "source" => "static", "com" => "ho-tro", "type" => "ho-tro", "menu" => true),

    /* Liên hệ */
    array("tbl" => "", "field" => "id", "source" => "", "com" => "lien-he", "type" => "", "menu" => true),
);




/* Find data */
if (!empty($com) && !in_array($com, ['tim-kiem', 'account', 'sitemap'])) {
    foreach ($requick as $k => $v) {
        $urlTbl = (!empty($v['tbl'])) ? $v['tbl'] : '';
        $urlTblTag = (!empty($v['tbltag'])) ? $v['tbltag'] : '';
        $urlType = (!empty($v['type'])) ? $v['type'] : '';
        $urlField = (!empty($v['field'])) ? $v['field'] : '';
        $urlCom = (!empty($v['com'])) ? $v['com'] : '';
        
        if (!empty($urlTbl) && !in_array($urlTbl, ['static', 'photo'])) {
            $row = \Illuminate\Support\Facades\DB::table("table_". $urlTbl)
                ->where("slugvi", "=", $com)
                ->where("type", "=", $urlType)
                ->whereRaw("find_in_set('hienthi',status)")
                ->select(["id", "namevi", "slugvi", "type"])
                ->first();
                
            if (isset($row->id)) {
                $_GET[$urlField] = $row->id;
                $_GET['row'] = $row;
                $com = $urlCom;
                break;
            }
        }
    }
}

/* Switch coms */
switch ($com) {
    case 'lien-he':
        $source = "contact";
        $template = "contact.index";
        $titleMain = "Liên Hệ";
        break;

    case 'gioi-thieu':
        $source = "static";
        $template = "static.index";
        $type = $com;
//        $seo->set('type', 'article');
        $titleMain = "Giới Thiệu";
        break;

    // case 'ho-tro':
    //     $source = "static";
    //     $template = "static/static";
    //     $type = $com;
    //     $seo->set('type', 'article');
    //     $titleMain = hotro;
    //     break;

    case 'dich-vu':
        $source = "news";
        $template = isset($_GET['id']) ? "news.news_detail" : "news.index";
        $type = $com;
        break;

    case 'tin-tuc':
        $source = "news";
        $template = isset($_GET['id']) ? "news.news_detail" : "news.index";
//        $seo->set('type', isset($_GET['id']) ? "article" : "object");
        $type = $com;
        break;

    case 'kenh-ban-hang':
        $source = "news";
        $template = isset($_GET['id']) ? "news.news_detail" : "news.index";
        $type = $com;
        $titleMain = "KÊNH BÁN HÀNG";
        break;
    case 'su-nghiep':
        $source = "news";
        $template = isset($_GET['id']) ? "news.news_detail" : "news.index";
        $type = $com;
        $titleMain = "Sự Nghiệp";
        break;
    case 'khoa-hoc':
        $source = "news";
        $template = isset($_GET['id']) ? "news.news_detail" : "news.index";
        $type = $com;
        $titleMain = "KHÓA HỌC";
        break;
    case 'kien-thuc':
        $source = "news";
        $template = isset($_GET['id']) ? "news.news_detail" : "news.index";
        $type = $com;
        $titleMain = "KIẾN THỨC";
        break;
    case 'kinh-nghiem':
        $source = "news";
        $template = isset($_GET['id']) ? "news.news_detail" : "news.index";
        $type = $com;
        $titleMain = "KINH NGHIỆM KINH DOANH";
        break;
    case 'tuyen-dung':
        $source = "news";
        $template = isset($_GET['id']) ? "news/news_detail" : "news/news";
        $seo->set('type', isset($_GET['id']) ? "article" : "object");
        $type = $com;
        $titleMain = tuyendung;
        break;

    case 'chinh-sach':
        $source = "news";
        $template = isset($_GET['id']) ? "news/news_detail" : "";
        $seo->set('type', 'article');
        $type = $com;
        $titleMain = null;
        break;

    case 'thuong-hieu':
        $source = "product";
        $template = "product/product";
        $seo->set('type', 'object');
        $type = 'san-pham';
        $titleMain = null;
        break;

    case 'yeu-thich':
        if(!LIKESITE) $func->redirect('index.php');
        $source = "product";
        $template = isset($_GET['id']) ? "product/product_detail" : "product/product";
        $seo->set('type', isset($_GET['id']) ? "article" : "object");
        $type = $com;
        $titleMain = sanpham;
        break;

    case 'san-pham':
        $source = "product";
        $template = isset($_GET['id']) ? "product/product_detail" : "product/product";
        $seo->set('type', isset($_GET['id']) ? "article" : "object");
        $type = $com;
        $titleMain = sanpham;
        break;

    case 'tim-kiem':
        $source = "search";
        $template = "product/product";
        $seo->set('type', 'object');
        $titleMain = timkiem;
        break;

    case 'tags-san-pham':
        $source = "tags";
        $template = "product/product";
        $type = $urlType;
        $table = $urlTblTag;
        $seo->set('type', 'object');
        $titleMain = null;
        break;

    case 'tags-tin-tuc':
        $source = "tags";
        $template = "news/news";
        $type = $urlType;
        $table = $urlTblTag;
        $seo->set('type', 'object');
        $titleMain = null;
        break;


    case 'video':
        $source = "video";
        $template = isset($_GET['id']) ? "video.video_detail" : "video.index";
        $titleMain = "Video";
        break;

    case 'sitemap':
        include_once LIBRARIES . "sitemap.php";
        exit();

    case '':
    case 'index':
        $source = "index";
        $template = "home.index";
//        $seo->set('type', 'website');
        break;

    default:
        header('HTTP/1.0 404 Not Found', true, 404);
        include("404.php");
        exit();
}
/* Include sources */
if (empty($template)) {
    header('HTTP/1.0 404 Not Found', true, 404);
    include("404.php");
    exit();
}