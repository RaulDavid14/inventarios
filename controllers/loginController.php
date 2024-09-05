<?php

require_once CLASS_CONTROLLER;
require_once ROOT_PATH . '/includes/components/field.php';

    class LoginController extends Controller
    {
        public function index()
        {
            $this->load_view('/login');
        }

        public function validate()
        {
            if ($_SERVER['REQUEST_METHOD'] == 'POST')
            {
                $usuario = $_POST['usuario'];
                $password = $_POST['password'];
                
                header('Location: /inventarios/home/');
            }
            else
            {
                http_response_code(403);
                echo "<h2>Acceso no permitido</h2>";
            }
        }
    }