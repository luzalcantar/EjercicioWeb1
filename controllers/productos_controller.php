<?php
//Llamada al modelo
require_once("models/producto.php");

class productos_controller{
    private $modelo;
    
    function __construct(){
        $this->modelo= new productos_model();
    }
    function index(){
        $datos=$this->modelo->get_productos();
        require_once("views/productos_view.php");

    }
}

?>
