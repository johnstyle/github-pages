<?php

use sJo\View\Helper;

self::header();

Helper\Panel::create(array(
    'col' => 4,
    'container' => array(
        'tagname' => 'a',
        'attr' => array(
            'href' => './johnstyle/webremote/'
        )
    ),
    'title' => 'WebRemote',
    'type' => 'primary',
    'elements' => 'Mobile remote control website'
))->display();

self::footer();
