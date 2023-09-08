<?php
include "Middlewares/Shared.php";
include "Middlewares/Seo.php";
include "Models/Home.php";
include "Models/News.php";
include "Models/Video.php";
include "Models/Contact.php";
include "Models/About.php";
/** @var string $com */
/** @var string $source */
/** @var string $template */

$app = Application::getInstance();

$through =  [Shared::class];

$singleBase = [
    'index' => [
        Home::class
    ],
    'news' => [
        News::class
    ],
    'video' => [
        Video::class
    ],
    'contact' => [
        Contact::class
    ],

    'static' => [
        About::class
    ]
][$source];

$through = array_merge($through, $singleBase);



$request = (new \Illuminate\Pipeline\Pipeline($app))->send(
    array_merge([
    'com' => $com ?? 'index',
    'source' => $source ?? 'index',
    'template' => $template,
    'titleMain' => $titleMain ?? ''
], $_GET ?? [], $_POST ?? [])
)->through($through)->via("handle")
    ->thenReturn();

    
echo view($template, $request)->render();