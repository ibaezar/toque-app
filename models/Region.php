<?php

require_once 'config/database.php';

class Region{

    private $id;
    private $nombre;
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

    function getNombre(){
        return $this->nombre;
    }

    function setNombre($nombre): void {
        $this->nombre = $this->database->real_escape_string($nombre);
    }

    //Mostrar todas las regiones
    public function getAll(){
        $result = false;
        $show = $this->database->query("SELECT * FROM regiones ORDER BY id ASC");
        if($show){
            $result = $show;
        }
        return $result;
    }
}