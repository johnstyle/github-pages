<?php

use \sJo\View\Helper;

?>
<header id="header" class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="./"><?php echo WEBSITE_TITLE; ?></a>
        </div>
        <div class="navbar-collapse collapse">
            <?php Helper\Menu::top()->display(); ?>
        </div>
    </div>
</header>