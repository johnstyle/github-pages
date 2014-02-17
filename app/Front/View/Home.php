<?php

use sJo\View\Helper;

self::header();

$repoList = Model\Repository::getList();

$panels = array();

foreach($repoList as $repository=>$info) {
    $panels = array(
        'col' => 4,
        'container' => array(
            'tagname' => 'a',
            'attr' => array(
                'href' => './repository/' . $repository . '/'
            )
        ),
        'title' => $info->name,
        'type' => 'primary',
        'elements' => $info->description . '<br />' . \sJo\Libraries\I18n::__('Version: %s', $info->version)
    );
    Helper\Panel::create($panels)->display();
}


self::footer();
