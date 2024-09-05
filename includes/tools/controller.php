<?php
class Controller
{

    public function load_view($view_path, $data = null)
    {
        
        require_once ROOT_PATH."/views/".$view_path."/index.php";
    }


    public function load($view_path, $data = null)
    {
        require_once ROOT_PATH . '/views/' . $view_path. '/index.php';
        
        require_once ROOT_PATH . '/views/layout/layout.php';
    }

}