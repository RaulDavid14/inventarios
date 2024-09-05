<?php
    $root_path = str_replace('\\', '/', dirname(__FILE__,2));
    
    define('ROOT_PATH', $root_path);
    define('CLASS_CONTROLLER', $root_path.'/includes/tools/controller.php');