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

<?php if($id==""){ ?>
    <form action="index.php?a=get_datos" method="post">
<?php } ?>
<?php if($id!=""){ ?>
    <form action="index.php?a=get_datos&id=<?php echo $id;?>" method="post">
<?php } ?>

    <input type="text" name="in_id" value="<?php echo $id;?>">

    Producto: <input type="text" name="in_producto" value="<?php echo $producto;?>">
    <br>
    Precio: <input type="text" name="in_precio" value="<?php echo $precio; ?>">



    <?php if($id==""){ ?>
                        <input type="submit" class="btn btn-primary form-control" name="" value="Guardar">
                    <?php }  ?>
                    <?php if($id!=""){ ?>
                    <input type="submit" class="btn btn-primary form-control" name="" value="Actualizar">
                    <?php }  ?>
        <br><br>
</form>
    
