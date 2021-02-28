<?php
class productos_model{
    private $db;
    private $productos;
 
    public function __construct(){
        $this->db=Conectar::conexion();
        $this->produto=array();
    }
    public function get_productos(){
        $consulta=$this->db->query("select * from productos;");

        while($filas=$consulta->fetch_assoc()){
            $this->productos[]=$filas;
        }
        return $this->productos;
    }
}
?>
