<?php

require_once 'config/database.php';

class Comercio{

    private $id;
    private $nombre;
    private $database;

    function __construct(){
        //Conexion a la base de datos
        $this->database = Database::connect();
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    //Mostrar todos los comercios
    public function getAll(){
        $result = false;
        $show = $this->database->query("SELECT * FROM comercio ORDER BY id ASC");
        if($show){
            $result = $show;
        }
        return $result;
    }

    public function getOne(){
        $resul = false;
        $show = $this->database->query("SELECT * FROM comercio WHERE id = {$this->getId()}");
        if($show){
            $resul = $show->fetch_object();
        }
        return $resul;
    }
}