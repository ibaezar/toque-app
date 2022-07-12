<?php

require_once 'config/database.php';

class Comuna{

    private $id;
    private $region_id;
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

    public function getRegion_id()
    {
        return $this->region_id;
    }

    public function setRegion_id($region_id)
    {
        $this->region_id = $region_id;

        return $this;
    }

    function getNombre(){
        return $this->nombre;
    }

    function setNombre($nombre): void {
        $this->nombre = $this->database->real_escape_string($nombre);
    }

    //Mostrar todas las comunas
    public function getAll(){
        $result = false;
        $show = $this->database->query("SELECT * FROM comunas ORDER BY id ASC");
        if($show){
            $result = $show;
        }
        return $result;
    }

    //Mostrar comuna por id de región
    public function getByRegion(){
        $resul = false;
        $show = $this->database->query("SELECT * FROM comunas WHERE region_id = {$this->getRegion_id()}");
        if($show){
            $resul = $show->fetch_object();
        }
        return $resul;
    }

}