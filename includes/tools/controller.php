<?php
class Controller
{
    public function load_view($view_path, $data = [])
    {
        extract($data);
        
        ob_start();
        require_once ROOT_PATH . '/views' . $view_path . '/index.php';
        $body = ob_get_clean();
        
        require_once ROOT_PATH . '/views/layout/layout.php';
    }

}