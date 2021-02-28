<div class="panel panel-default">
    <div class="panel-heading">
        <h2>Lista de productos</h2>
    </div>
    <div class="panel-body table-responsive">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Producto</th>
                    <th scope="col">Precio</th>
                    <th scope="col">IVA</th>
                    <th scope="col">Precio + IVA</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach ($datos as $dato) {
                        $iva = $dato['precio']*0.16;
                        $piva = $dato['precio']*1.16;
                        echo "<tr>";
                            echo "<th scope='row'>".$dato['id_producto']."</th>";
                            echo "<td>".$dato["producto"]."</td>";
                            echo "<td>$ ".$dato["precio"]."</td>";
                            echo "<td>$ ".$iva."</td>";
                            echo "<td>$ ".$piva."</td>";
                            echo "<td><a href='index.php?a=productos&id=".$dato['id_producto']."' class='btn btn-primary btn-edit'><i class='fa fa-pencil'></i></a> <button class='btn btn-primary btnEliminar' id-producto='".$dato['id_producto']."'><i class='fa fa-trash'</button></td>";
                        echo "</tr>";
                    }
                ?>
            </tbody>
        </table>
    </div>
</div>
