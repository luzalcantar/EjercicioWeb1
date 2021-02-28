<?php
	//Conexion a BD
	require_once("config/conexion.php");
	//Controlador
	require_once("controllers/productos_controller.php");

	$controller= new productos_controller();
    
    if(!empty($_REQUEST['a'])){
        $action=$_REQUEST['a'];
        if (method_exists($controller, $action)) {
            $controller->$action();
        }else{
            $controller->index();
        }
    }else{
        $controller->index();
    }

?>