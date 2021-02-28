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
        require_once("views/header.php");
        require_once("views/index.php");
        require_once("views/footer.php");

    }
    function productos(){
        $data=NULL;
        if(isset($_REQUEST['id'])){
            $data=$this->modelo->get_id_producto($_REQUEST['id']);    
        }
        require_once("views/header.php");
        require_once("views/productos_view.php");
        require_once("views/footer.php");
    }
    
    function get_datos(){
        // $data['id']=$_REQUEST['in_id'];
        $data['producto']=$_REQUEST['in_producto'];
        $data['precio']=$_REQUEST['in_precio'];

        if($_REQUEST['id']==""){
            $this->modelo->agregar($data);
        }
        if($_REQUEST['id']!=""){
            $date=$_REQUEST['id'];
            $this->modelo->actualizar($data,$date);
        }

        header("Location:index.php");

    }
}

?>
