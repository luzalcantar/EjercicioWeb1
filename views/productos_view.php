<?php
    if(isset($_REQUEST['id'])){
        foreach ($data as $dato) {
            $id = $dato['id_producto'];
            $producto = $dato['producto'];
            $precio = $dato['precio'];
        }
    }else{
        $id = "";
        $producto = "";
        $precio = "";
    }
?>
<div class="panel panel-default">
    <div class="panel-heading">
        <?php 
            if($id==""){
                echo "<h2>Agregar Producto</h2>";
            } else if($id!=""){
                echo "<h2>Editar Producto</h2>";
            }
        ?>
    </div>
    <div class="panel-body table-responsive">
        <?php 
            if($id==""){
                echo "<form action='index.php?a=get_datos' method='post'>";
            } else if($id!=""){
                echo "<form action='index.php?a=get_datos&id=".$id."' method='post'>";
            }
        ?>
        <div class="in_div">
            <label for="in_producto">Producto:</label>   
            <input type="text" class="form-control" name="in_producto" value="<?php echo $producto;?>" required>
            <label for="in_precio">Precio:</label>
            <input type="number" class="form-control" name="in_precio" value="<?php echo $precio; ?>" min="0.1" step="0.01"required>
        </div>

        <?php 
            if($id==""){
                echo "<input type='submit' class='btn btn-primary form-control btn-save' value='Guardar'>";
            } else if($id!=""){
                echo "<input type='submit' class='btn btn-primary form-control btn-save' value='Actualizar'>";
            }
        ?>
        </form>
    </div>
</div>