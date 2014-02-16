<?php

define('ROOT', realpath(__DIR__) . '/..');

/** Settings */
include ROOT . '/settings.php';

define('SJO_BASEHREF', WEBSITE_URL);

/** Autoload */
include ROOT . '/vendor/autoload.php';

/** Load Framework */
$Loader = new \sJo\Core\Loader();
$Loader->init();
$Loader->display();
