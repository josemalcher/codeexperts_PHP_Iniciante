<?php

chdir(dirname(__DIR__));
require 'src/config.php';

$page = isset($_GET['url']) ? $_GET['url'] : 'home';

if (!file_exists($page = VIEWS . '/' . $page . '.phtml')) {
    print VIEWS . '/404.phtml';
    die;
}

require $page;