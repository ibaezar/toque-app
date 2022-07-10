<?php

require_once 'config/database.php';

class User{
    private $id;
    private $name;
    private $lastName;
    private $email;
    private $password;
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

    function getDate(){
        return $this->date;
    }

    function setDate($date): void{
        $this->date = $date;
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
        ."CURDATE()"
        .");";
        
        $save = $this->database->query($sql);

        $result = false;
        if($save){
            $result = true;
        }
        return $result;

    }
}