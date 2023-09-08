<meta charset="UTF-8">
<meta name="viewport"
      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title><?php echo e($setting->namevi); ?></title>
<?php if(isset($seo)): ?>
<meta name="keywords" content="<?php echo e($seo->get("keywords")); ?>" />
<meta name="description" content="<?php echo e($seo->get("description")); ?>" />
<?php endif; ?>
<!-- Robots -->
<meta name="robots" content="<?php echo e(($source=='search' or $source=='user' or $source=='order') ? 'nofollow, noindex' : 'index,follow'); ?>" />

<!-- Favicon -->
<link href="<?php echo e(asset("thumbs/32x32x1/upload/photo/" . $favicon->photo)); ?>" rel="shortcut icon" type="image/x-icon" />

<!-- Webmaster Tool -->
<?php echo e(func()->decodeHtmlChars($setting->mastertool)); ?>

        <!-- GEO -->
<meta name="geo.region" content="VN" />
<meta name="geo.placename" content="Hồ Chí Minh" />
<meta name="geo.position" content="10.823099;106.629664" />
<meta name="ICBM" content="10.823099, 106.629664" />

<!-- Author - Copyright -->
<meta name='revisit-after' content='1 days' />
<meta name="author" content="<?php echo e($setting->namevi); ?>" />
<meta name="copyright" content="<?php echo e($setting->namevi); ?> - <?php echo e($optsetting->get('email')); ?>" />
<?php if(isset($seo)): ?>
<!-- Open Graph -->
<meta property="og:type" content="<?php echo e($seo->get('type')); ?>" />
<meta property="og:site_name" content="<?php echo e($setting->namevi); ?>" />
<meta property="og:title" content="<?php echo e($seo->get('title')); ?>" />
<meta property="og:description" content="<?php echo e($seo->get('description')); ?>" />

<meta property="og:url" content="<?php echo e(func()->getCurrentPageURL()); ?>" />

<meta property="og:image" content="<?php echo e($seo->get('photo')); ?>" />
<meta property="og:image:alt" content="<?php echo e($seo->get('title')); ?>" />
<meta property="og:image:type" content="<?php echo e($seo->get('photo:type')); ?>" />
<meta property="og:image:width" content="<?php echo e($seo->get('photo:width')); ?>" />
<meta property="og:image:height" content="<?php echo e($seo->get('photo:height')); ?>" />
<?php endif; ?>
<!-- Twitter -->
<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="<?php echo e($optsetting->get("website")); ?>" />
<meta name="twitter:creator" content="<?php echo e($setting->namevi); ?>" />

<!-- Canonical -->
<link rel="canonical" href="<?php echo e(func()->getCurrentPageURL()); ?>" />

<!-- Avoid IOS color correction -->
<meta name="format-detection" content="telephone=no"><?php /**PATH D:\WWW_MULTI_PLATFORM\tuanphuong\views/layouts/head.blade.php ENDPATH**/ ?>