<?php
require_once CLASS_CONTROLLER;
require_once ROOT_PATH . '/includes/components/field.php';

class CapturarController extends Controller
{
    public function index()
    {
        $this->load_view('capturar/');
    }
}