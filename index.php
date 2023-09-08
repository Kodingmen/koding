<?php
session_start();
define('LIBRARIES', './libraries/');
define('SOURCES', './sources/');
define('LAYOUT', 'layout/');
define('THUMBS', 'thumbs');
define('WATERMARK', 'watermark');

/* Config */
require_once LIBRARIES . "config.php";
require_once LIBRARIES . "config-type.php";
require_once LIBRARIES . 'autoload.php';

$autoloader = new AutoLoad();
$func = new Functions();

$autoloader->instance('func', $func);

require_once LIBRARIES . "router.php";

include "systems/gateway.php";