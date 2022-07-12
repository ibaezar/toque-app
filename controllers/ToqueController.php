<?php

if(!isset($_SESSION)){
    session_start();
}

require_once 'models/Toque.php';

class ToqueController{

    public function save(){
        if(isset($_POST) && isset($_SESSION['login'])){
            $toque = new Toque();
            $toque->setUsuario_id($_SESSION['login']->id);
            $toque->setComercio($_POST['comercio']);
            $toque->setBoleta_factura($_POST['boleta_factura']);
            $toque->setProducto($_POST['producto']);
            $toque->setTipo($_POST['tipo']);
            $toque->setComentario($_POST['comentario']);
            $toque->setRegion_id($_POST['region_id']);
            $toque->setComuna_id($_POST['comuna_id']);
            $toque->setCalle($_POST['calle']);
            $toque->setNum_calle($_POST['num_calle']);
            $toque->setDepto_block($_POST['depto_block']);

            $crear = $toque->save();

            if($crear){
                var_dump($crear);
                echo '<script>window.location="'.base_url.'User/ingresoCorrecto"</script>';
            }else{
                echo "<script>alert('Error al crear el toque')</script>";
                echo '<script>window.location="'.base_url.'User/indexUser"</script>';
            }

        }else{
            echo "<script>alert('Error al crear el toque desde el post')</script>";
            echo '<script>window.location="'.base_url.'User/indexUser"</script>';
        }
    }
}