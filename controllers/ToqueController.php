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
            $toque->setComercio_id($_POST['comercio_id']);
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

    public function eliminar(){

        if(isset($_GET['id'])){
            
            $toque_id = $_GET['id'];
            $toque = new Toque();
            $toque->setId($toque_id);

            $eliminar = $toque->eliminar();
            if($eliminar){
                echo "<script>alert('Solicitud Cancelada')</script>";
                echo '<script>window.location="'.base_url.'User/misToques"</script>';
            }else{
                echo "<script>alert('Error al cancelar la solicitud')</script>";
                echo '<script>window.location="'.base_url.'User/misToques"</script>';
            }
        }else{
            echo '<script>window.location="'.base_url.'User/misToques"</script>';
        }
    }
}