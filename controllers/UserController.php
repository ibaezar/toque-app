<?php

require_once 'models/User.php';

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

    public function saveUser(){
        if(isset($_POST)){
            $usuario = new User();
            $usuario->setName($_POST['nombre']);
            $usuario->setLastName($_POST['apellido']);
            $usuario->setEmail($_POST['email']);
            $usuario->setPassword($_POST['password2']);

            $save = $usuario->save();

            if($save){
                $_SESSION['registro'] = 'correcto';
            }else{
                $_SESSION['registro'] = 'incorrecto';
            }
        }else{
            $_SESSION['registro'] = 'incorrecto';
        }
        //header("Location:".base_url.'User/register');
        echo '<script>window.location="'.base_url.'User/register"</script>';
    }
}