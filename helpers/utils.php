<?php

class Utils{

    //Eliminar sesiones
    public static function eliminarSesion($nombre){
        if(isset($_SESSION[$nombre])){
            $_SESSION[$nombre] = null;
            unset($_SESSION[$nombre]);
        }
        return $nombre;
    }

    //Mostrar regiones
    public static function showRegion(){
        require_once 'models/Region.php';
        $region = new Region();
        $result = $region->getAll();
        return $result;
    }

    //Mostrar comunas
    public static function showComunas($region_id){
        require_once 'models/Comuna.php';
        $comunas = new Comuna();
        $comunas->setRegion_id($region_id);
        $result = $comunas->getByRegion();
        return $result;
    }

    //Mostrar toques
    public static function showToques($usuario_id){
        require_once 'models/Toque.php';
        $toques = new Toque();
        $toques->setUsuario_id($usuario_id);
        $result = $toques->getByUsuario();
        return $result;
    }

    //Mostrar comercios
    public static function showComercio(){
        require_once 'models/Comercio.php';
        $comercio = new Comercio();
        $result = $comercio->getAll();
        return $result;
    }

    //Mostrar comercios
    public static function showComercioById($comercio_id){
        require_once 'models/Comercio.php';
        $comercio = new Comercio();
        $comercio->setId($comercio_id);
        $result = $comercio->getOne();
        return $result;
    }
}