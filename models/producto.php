<?php
class productos_model{
    private $db;
    private $productos;
    private $data;
 
    public function __construct(){
        $this->db=Conectar::conexion();
        $this->productos=array();
        $this->data=array();
    }
    public function get_productos(){
        $consulta=$this->db->query("select * from productos;");

        while($filas=$consulta->fetch_assoc()){
            $this->productos[]=$filas;
        }
        return $this->productos;
    }

    public function get_id_producto($id){
        $consulta =$this->db->query("select * from productos where id_producto = ".$id.";");
        while($row=$consulta->fetch_assoc()){
            $this->data[]=$row;
        }
        return $this->data;
    }

    public function agregar($datos){
        $sql="INSERT INTO productos(producto, precio) VALUES ('".$datos['producto']."','".$datos['precio']."');";
        $consulta = $this->db->query($sql);
    }

    public function actualizar($datos, $id){
        $sql="UPDATE productos SET producto='".$datos['producto']."', precio='".$datos['precio']."' WHERE id_producto=".$id.";";
        $consulta = $this->db->query($sql);
    }
}
?>
