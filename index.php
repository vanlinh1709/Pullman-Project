<?php
    $app_path = dirname(__FILE__);
    //echo $app_path;
    define('APPPATH', $app_path);
    require_once './helper/define_path.php';
    require_once './helper/link.php';
    require COREPATH.DIRECTORY_SEPARATOR.'appload.php';
