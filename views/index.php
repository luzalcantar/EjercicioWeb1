<h2>Lista de productos</h2>
<?php
    foreach ($datos as $dato) {
        $iva = $dato['precio']*0.16;
        $piva = $dato['precio']*1.16;
        echo "Producto: ".$dato["producto"]." - Precio: $".$dato["precio"]." - IVA: $".$iva." - Precio+IVA: $".$piva."<br/>";
        echo "<a href='index.php?a=productos&id=".$dato['id_producto']."' class='btn btn-primary'>Editar</a>";
        echo "<button class='btn btn-primary btnEliminar' id-producto='".$dato['id_producto']."'>Eliminar</button>";
    }
?>