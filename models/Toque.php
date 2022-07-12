<?php

require_once 'config/database.php';

class Toque{

    private $id;
    private $usuario_id;
    private $comercio;
    private $boleta_factura;
    private $producto;
    private $tipo;
    private $fecha;
    private $estado;
    private $comentario;
    private $region_id;
    private $comuna_id;
    private $calle;
    private $num_calle;
    private $depto_block;
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
        $this->id = (int)$id;
    }

    public function getUsuario_id()
    {
        return $this->usuario_id;
    }

    public function setUsuario_id($usuario_id)
    {
        $this->usuario_id = (int)$usuario_id;
    }

    public function getComercio()
    {
        return $this->comercio;
    }

    public function setComercio($comercio)
    {
        $this->comercio = $this->database->real_escape_string($comercio);
    }

    public function getBoleta_factura()
    {
        return $this->boleta_factura;
    }

    public function setBoleta_factura($boleta_factura)
    {
        $this->boleta_factura = $this->database->real_escape_string($boleta_factura);
    }

    public function getProducto()
    {
        return $this->producto;
    }

    public function setProducto($producto)
    {
        $this->producto = $this->database->real_escape_string($producto);
    }

    public function getTipo()
    {
        return $this->tipo;
    }

    public function setTipo($tipo)
    {
        $this->tipo = $this->database->real_escape_string($tipo);
    }

    public function getFecha()
    {
        return $this->fecha;
    }

    public function setFecha($fecha)
    {
        $this->fecha = $this->database->real_escape_string($fecha);
    }

    public function getEstado()
    {
        return $this->estado;
    }

    public function setEstado($estado)
    {
        $this->estado = $this->database->real_escape_string($estado);
    }

    public function getComentario()
    {
        return $this->comentario;
    }

    public function setComentario($comentario)
    {
        $this->comentario = $this->database->real_escape_string($comentario);
    }

    public function getRegion_id()
    {
        return $this->region_id;
    }

    public function setRegion_id($region_id)
    {
        $this->region_id = (int)$region_id;
    }

    public function getComuna_id()
    {
        return $this->comuna_id;
    }

    public function setComuna_id($comuna_id)
    {
        $this->comuna_id = (int)$comuna_id;
    }

    public function getCalle()
    {
        return $this->calle;
    }

    public function setCalle($calle)
    {
        $this->calle = $this->database->real_escape_string($calle);
    }

    public function getNum_calle()
    {
        return $this->num_calle;
    }

    public function setNum_calle($num_calle)
    {
        $this->num_calle = $this->database->real_escape_string((int)$num_calle);
    }

    public function getDepto_block()
    {
        return $this->depto_block;
    }

    public function setDepto_block($depto_block)
    {
        $this->depto_block = $this->database->real_escape_string((int)$depto_block);
    }

    //Obtener listado de todos los toques
    public function getAll(){
        $result = false;
        $show = $this->database->query("SELECT * FROM toques ORDER BY id ASC");
        if($show){
            $result = $show;
        }
        return $result;
    }

    //Obtener listado de toques por Id de usuario
    public function getByUsuario(){
        $resul = false;
        $show = $this->database->query("SELECT * FROM toques WHERE usuario_id = {$this->getUsuario_id()}");
        if($show){
            $resul = $show->fetch_object();
        }
        return $resul;
    }

    //Guardar toques
    public function save(){
        $result = false;
        $sql = "INSERT INTO toques VALUES("
        ."null," 
        ."'{$this->getUsuario_id()}'," 
        ."'{$this->getComercio_id()}'," 
        ."'{$this->getBoleta_factura()}'," 
        ."'{$this->getproducto()}'," 
        ."'{$this->getTipo()}'," 
        ."CURDATE()" 
        ."'{$this->getEstado()}'," 
        ."'{$this->getComentario()}'," 
        ."'{$this->getRegion_id()}'," 
        ."'{$this->getComuna_id()}'," 
        ."'{$this->getCalle()}'," 
        ."'{$this->getNum_calle()}'," 
        ."'{$this->getDepto_block()}'," 
        .");";
        
        $save = $this->database->query($sql);

        if($save){
            $result = true;
        }
        return $result;

    }
}