<?php

namespace App\Controller;

class LoginController extends AbstractController
{
    public function login(): string
    {
        return $this->twig->render('Home/login.html.twig');
    }
}