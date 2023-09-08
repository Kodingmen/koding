<?php
$config = array(
    'arrayDomainSSL' => array(),
    'database' => array(
        'driver' => 'mysql',
        'server-name' => $_SERVER["SERVER_NAME"],
        'url' => '/',
        'type' => 'mysql',
        'host' => '127.0.0.1',
//        'username' => 'tltkythuat_tmmo',
//        'dbname' => 'tltkythuat_tmmo',
//        'password' => 'K9UQ4Zplpl',
        'dbname' => 'tuanphuong',
        'username' => 'root',
        'password' => '',
        'port' => 3306,
        'unix_socket' => '',
        'prefix' => '',
        'charset' => 'utf8mb4',
        'collation' => 'utf8mb4_unicode_ci',
        'prefix_indexes' => true,
        'strict' => true,
        'engine' => null,
    ),
    'website' => array(
        'error-reporting' => false,
        'secret' => '$admin@',
        'salt' => 'swKJjeS!t',
        'debug-developer' => true,
        'debug-css' => true, // Compress CSS
        'debug-js' => true, // Compress Js
        'debug-html' => true, // Compress HTML
        'index' => false,
        'image' => array(
            'hasWebp' => false,
        ),
        'video' => array(
            'extension' => array('mp4', 'mkv'),
            'poster' => array(
                'width' => 700,
                'height' => 610,
                'extension' => '.jpg|.png|.jpeg'
            ),
            'allow-size' => '100Mb',
            'max-size' => 100 * 1024 * 1024
        ),
        'upload' => array(
            'max-width' => 1600,
            'max-height' => 1600
        ),
        'lang' => array(
            'vi' => 'Tiếng Việt',
            // 'en' => 'Tiếng Anh'
        ),
        'lang-doc' => 'vi|en',
        'slug' => array(
            'vi' => 'Tiếng Việt',
            // 'en' => 'Tiếng Anh'
        ),
        'seo' => array(
            'vi' => 'Tiếng Việt',
            // 'en' => 'Tiếng Anh'
        ),
        'comlang' => array(
        )
    ),

    'view' => [
        'paths' => [dirname(__DIR__) . "/views"],
        'compiled' => dirname(__DIR__) . "/caches"
    ],
    'app' => [
        'locale' => 'vi',
        'fallback_locale' => 'vi',
        'key' => 'base64:7rnYw473h2weMGK4IVvARSlhw0wRkxSuoDmWUt8nCUc=',
        'url' => 'https://php8.demotlt.com/'
    ],
    'session' => [
        'driver' => 'file',
        'lifetime' => 120,
        'expire_on_close' => false,
        'encrypt' => false,
        'files' => dirname(__DIR__) . "/caches/sessions",
        'lottery' => [2,100],
        'connection' => null,
        'table' => 'sessions',
        'cookie' => 'tuezy_session',
        'path' => '/',
        'domain' => null,
        'http_only' => true,
        'same_site' => 'lax',
    ],
    'cache' => [
        'default' => 'file',
        'stores' => [
            'apc' => [
                'driver' => 'apc',
            ],

            'array' => [
                'driver' => 'array',
                'serialize' => false,
            ],

            'database' => [
                'driver' => 'database',
                'table' => 'cache',
                'connection' => null,
                'lock_connection' => null,
            ],

            'file' => [
                'driver' => 'file',
                'path' => dirname(__DIR__) . "/caches/data",
                'lock_path' => dirname(__DIR__) . "/caches/data",
            ],

            'redis' => [
                'driver' => 'redis',
                'connection' => 'cache',
                'lock_connection' => 'default',
            ],

            'octane' => [
                'driver' => 'octane',
            ],

        ],
        'prefix' => 'tuezy_cache_',
    ],
    'author' => array(
        'name' => '',
        'email' => '',
        'timefinish' => ''
    ),
    'order' => array(
        'ship' => false
    ),
    'login' => array(
        'admin' => 'LoginAdmin' . NN_CONTRACT,
        'member' => 'LoginMember' . NN_CONTRACT,
        'attempt' => 5,
        'delay' => 15
    ),
    'googleAPI' => array(
        'recaptcha' => array(
            'active' => false,
            'urlapi' => 'https://www.google.com/recaptcha/api/siteverify',
            'sitekey' => '6LezS5kUAAAAAF2A6ICaSvm7R5M-BUAcVOgJT_31',
            'secretkey' => '6LezS5kUAAAAAGCGtfV7C1DyiqlPFFuxvacuJfdq'
        )
    ),
    'oneSignal' => array(
        'active' => false,
        'id' => 'af12ae0e-cfb7-41d0-91d8-8997fca889f8',
        'restId' => 'MWFmZGVhMzYtY2U0Zi00MjA0LTg0ODEtZWFkZTZlNmM1MDg4'
    ),
    'license' => array(
        'version' => "8.0.0",
        'powered' => "dev@gmail.com"
    )
);

$config['database']['database'] = $config['database']['dbname']; //patch for eloquent

return $config;