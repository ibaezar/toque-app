<?php

class UserController{

    public function index(){
        require_once 'views/layout/index.php';
    }

    public function login(){
        require_once 'views/user/login.php';
    }

    public function register(){
        require_once 'views/user/register.php';
    }

    public function forget(){
        require_once 'views/user/forget.php';
    }
}