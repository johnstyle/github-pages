<?php

use sJo\Libraries\I18n;
use sJo\View\Helper;

Helper\Style::register(array(
    'bower_components/bootstrap/dist/css/bootstrap.min.css',
    'http://fonts.googleapis.com/css?family=Droid+Sans:400,700'
));

Helper\Menu::top()->register(array(
    'type' => 'navbar',
    'pull' => 'right'
));

Helper\Menu::top()->addItem(array(
    'title' => I18n::__('My GitHub'),
    'link' => 'https://github.com/' . GITHUB_USER
));