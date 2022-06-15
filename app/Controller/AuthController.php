<?php

namespace App\Controller;

use Core\Controller\AuthController as ControllerAuthController;

class AuthController extends ControllerAuthController
{

    public function index() {
        //require 'views/auth/subscription.php';
        $this->render('auth.index');
    }

}