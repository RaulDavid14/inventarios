<?php

require_once CLASS_CONTROLLER;

class HomeController extends Controller
{

    public function index()
    {   
        
        $data = array(
            'title' => 'Bienvenidos'
            
        );

        $this->load_view('/home', $data);
    }

}