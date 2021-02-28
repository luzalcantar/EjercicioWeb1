<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
</head>
<body>
    Producto: <input type="text">
    <br>
    Precio: <input type="text">
    <button>Guardar</button>
        <br><br>
    <?php
        foreach ($datos as $dato) {
            $iva = $dato['precio']*0.16;
            $piva = $dato['precio']*1.16;
            echo "Producto: ".$dato["producto"]." - Precio: $".$dato["precio"]." - IVA: $".$iva." - Precio+IVA: $".$piva."<br/>";
        }
    ?>
</body>
</html>