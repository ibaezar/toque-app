<?php

require_once 'config/database.php';

class User{
    private $id;
    private $name;
    private $lastName;
    private $email;
    private $password;
    private $rol;
    private $date;
    private $database;

    function __construct(){
        //Conexion a la base de datos
        $this->database = Database::connect();
    }

    function getId(){
        return $this->id;
    }

    function setId($id): void{
        $this->id = (int)$id;
    }

    function getName(){
        return $this->name;
    }

    function setName($name): void {
        $this->name = $this->database->real_escape_string($name);
    }

    function getLastName(){
        return $this->lastName;
    }

    function setLastName($lastName): void {
        $this->lastName = $this->database->real_escape_string($lastName);
    }

    function getEmail() {
        return $this->email;
    }

    function setEmail($email): void {
        $this->email = $this->database->real_escape_string($email);
    }

    function getPassword() {
        return $this->password;
    }

    function setPassword($password): void {
        $this->password = $password;
    }

    function getRol() {
        return $this->rol;
    }

    function setRol($rol): void {
        $this->rol = $rol;
    }

    function getDate(){
        return $this->date;
    }

    function setDate($date): void{
        $this->date = $date;
    }

    public function getOne(){
        $result = false;
        $sql = "SELECT * FROM usuarios WHERE id = {$this->getId()}";
        $get = $this->database->query($sql);
        if($get){
            $result = $get;
        }
        return $result;
    }

    //Registrar usuarios
    public function save(){
        //cifrar contraseña
        $password_cifrada = password_hash($this->database->real_escape_string($this->password), PASSWORD_BCRYPT, ['cost' => 4]);
        $sql = "INSERT INTO usuarios VALUES("
        ."null," 
        ."'{$this->getName()}'," 
        ."'{$this->getLastName()}'," 
        ."'{$this->getEmail()}'," 
        ."'{$password_cifrada}'," 
        ."'user'," 
        ."CURDATE()"
        .");";
        
        $save = $this->database->query($sql);

        $result = false;
        if($save){
            $result = true;
        }
        return $result;

    }

    function loginDB($email, $password){
        $result = false;
        //Comprobar si existe el usuario en la bd
        $sql = "SELECT * FROM usuarios WHERE email = '$email'";
        $login = $this->database->query($sql);
    
        if($login && $login->num_rows == 1){
            $usuario = $login->fetch_object();
            //Verificar la contraseña
            $verify = password_verify($password, $usuario->password);
    
            if($verify){
                $result = $usuario;
            }
        }
        return $result;
    }

    public function edit(){
        $result = false;
        $sql = "UPDATE usuarios SET nombre = '{$this->getName()}', apellido = '{$this->getLastName()}' WHERE id = {$this->getId()}";
        $update = $this->database->query($sql);
        if($update){
            $result = $update;
        }
        return $result;
    }
}