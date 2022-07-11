<?php

if(!isset($_SESSION)){
    session_start();
}

require_once 'models/User.php';

class UserController{

    public function index(){
        require_once 'views/layout/index.php';
    }


    public function indexUser(){
        require_once 'views/layout/indexUser.php';
    }

    public function misDatos(){
        require_once 'views/user/misDatos.php';
    }

    public function misToques(){
        require_once 'views/user/misToques.php';
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

    public function sigIn(){
        if(isset($_POST['email']) && isset($_POST['password1'])){
            $user = new User();
            $email = $_POST['email'];
            $password = $_POST['password1'];

            $identity = $user->loginDB($email, $password);
        
            if($identity && is_object($identity)){
        
                $_SESSION['login'] = $identity;
        
                //crear sesion admin en caso de ser necesario
                if($identity->rol == 'admin'){
                    $_SESSION['admin'] = true;
                }
                //header("Location:".base_url);
                echo "<script>alert('Usuario correcto')</script>";
                echo '<script>window.location="'.base_url.'User/indexUser"</script>';
            }else{
                //header("Location:".base_url."Usuario/access");
                echo "<script>alert('Usuario incorrecto')</script>";
                echo '<script>window.location="'.base_url.'User/login"</script>';
            }
        }else{
            //header("Location:".base_url."Usuario/access");
            echo '<script>window.location="'.base_url.'Usuario/access"</script>';
            $_SESSION['login_error'] = 'Datos incorrectos';
        }
    }

    //Cerrar sesión
    public function logout(){
        if(isset($_SESSION['login'])){
            unset($_SESSION['login']);
            unset($_SESSION['admin']);
        }
        
        //header("Location:".base_url);
        echo '<script>window.location="'.base_url.'"</script>';
    }
    
}