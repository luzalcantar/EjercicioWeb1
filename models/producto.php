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

    //Obtener datos de BD
    public function get_productos(){
        $consulta=$this->db->query("select * from productos where bandeliminar=1;");

        while($filas=$consulta->fetch_assoc()){
            $this->productos[]=$filas;
        }
        return $this->productos;
    }

    //Obtener datos de un Producto
    public function get_id_producto($id){
        $consulta =$this->db->query("select * from productos where id_producto = ".$id.";");
        while($row=$consulta->fetch_assoc()){
            $this->data[]=$row;
        }
        return $this->data;
    }

    //Agregar Producto a Tabla
    public function agregar($datos){
        $sql="INSERT INTO productos(producto, precio) VALUES ('".$datos['producto']."','".$datos['precio']."');";
        $consulta = $this->db->query($sql);
    }

    //Actualizar Producto Existente
    public function actualizar($datos, $id){
        $sql="UPDATE productos SET producto='".$datos['producto']."', precio='".$datos['precio']."' WHERE id_producto=".$id.";";
        $consulta = $this->db->query($sql);
    }

    //Borrado Logico de Producto
    public function eliminar($id){
        $sql="UPDATE productos SET bandeliminar=0 WHERE id_producto=".$id.";";
        $consulta = $this->db->query($sql);
    }
}
?>
