<?php

namespace App\Controller;

use Core\Controller\AuthController;

class AppController extends AuthController
{

    protected $template = 'default';

    public function __construct()
    {
        $this->viewPath = ROOT . '/app/views/';
    }

}