<meta charset="UTF-8">
<meta name="viewport"
      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>{{ $setting->namevi}}</title>
@isset($seo)
<meta name="keywords" content="{{ $seo->get("keywords") }}" />
<meta name="description" content="{{ $seo->get("description") }}" />
@endisset
<!-- Robots -->
<meta name="robots" content="{{ ($source=='search' or $source=='user' or $source=='order') ? 'nofollow, noindex' : 'index,follow' }}" />

<!-- Favicon -->
<link href="{{ asset("thumbs/32x32x1/upload/photo/" . $favicon->photo) }}" rel="shortcut icon" type="image/x-icon" />

<!-- Webmaster Tool -->
{{ func()->decodeHtmlChars($setting->mastertool) }}
        <!-- GEO -->
<meta name="geo.region" content="VN" />
<meta name="geo.placename" content="Hồ Chí Minh" />
<meta name="geo.position" content="10.823099;106.629664" />
<meta name="ICBM" content="10.823099, 106.629664" />

<!-- Author - Copyright -->
<meta name='revisit-after' content='1 days' />
<meta name="author" content="{{ $setting->namevi }}" />
<meta name="copyright" content="{{ $setting->namevi }} - {{ $optsetting->get('email') }}" />
@isset($seo)
<!-- Open Graph -->
<meta property="og:type" content="{{ $seo->get('type') }}" />
<meta property="og:site_name" content="{{ $setting->namevi }}" />
<meta property="og:title" content="{{ $seo->get('title') }}" />
<meta property="og:description" content="{{ $seo->get('description') }}" />

<meta property="og:url" content="{{ func()->getCurrentPageURL() }}" />

<meta property="og:image" content="{{ $seo->get('photo') }}" />
<meta property="og:image:alt" content="{{ $seo->get('title') }}" />
<meta property="og:image:type" content="{{ $seo->get('photo:type') }}" />
<meta property="og:image:width" content="{{ $seo->get('photo:width') }}" />
<meta property="og:image:height" content="{{ $seo->get('photo:height') }}" />
@endisset
<!-- Twitter -->
<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="{{ $optsetting->get("website") }}" />
<meta name="twitter:creator" content="{{ $setting->namevi }}" />

<!-- Canonical -->
<link rel="canonical" href="{{ func()->getCurrentPageURL() }}" />

<!-- Avoid IOS color correction -->
<meta name="format-detection" content="telephone=no">