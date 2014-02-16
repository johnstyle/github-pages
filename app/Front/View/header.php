<?php

use sJo\View\Helper\Style;
use sJo\Libraries as Lib;

?><!DOCTYPE html>
<html lang="<?php echo Lib\I18n::country(); ?>">
<head>
    <meta charset="<?php echo SJO_CHARSET; ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <base href="<?php echo SJO_BASEHREF; ?>" />
    <title><?php echo WEBSITE_TITLE; ?></title>
    <?php Style::display(); ?>
</head>
<body>

    <div id="wrap">

        <?php self::inc('parts/navbar-top'); ?>

        <section id="main" class="container">

