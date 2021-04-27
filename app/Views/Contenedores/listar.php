<?=$head?>


<body>
    <h1>Sistema de Inventarios</h1>
    <h2>Formulario de Lista de Articulos</h2>
    <!--<?php print_r($productos); ?> -->
 
        <div class="container">
            <a href="<?=base_url('crear')?>">Ingresar Nuevo Articulo</a>
            <table class="table table-light">
                <thead class="thead-light">
                    <tr>
                            <th>#REG</th>
                            <th>Descripcion del Articulo</th>
                            <th>Presentacion</th>                            
                            <th>Volumen</th>   
                            <th>unid x caja</th>    
                            <th>Costo unidad</th>   
                            <th>Precio Venta</th>  
                            <th>SKU</th>   
                            <th>Accion</th>                                                                                                                                                             
                    </tr>
                </thead>
                <tbody>

                    <?php foreach($productos as $item): ?>

                        <tr>
                            <td><?=$item['id']?></td>
                            <td><?=$item['Nombre_articulo']?></td>
                            <td><?=$item['presentacion']?></td>                            
                            <td><?=$item['volumen']?></td>    
                            <td><?=$item['unidadxcaja']?></td>
                            <td><?=$item['costo_unitario']?></td>
                            <td><?=$item['precio_venta']?></td>                            
                            <td><?=$item['SKU']?></td>                             
                            <td>Editar/<a href="<?=base_url('borrar/'.$item['id']);?>" class="btn btn-danger" type="button">Borrar</a> </td>    
                                            
                        </tr>
                            
                    <?php endforeach; ?>

                </tbody>
            </table>

        </div>
</body>
</html>

<?=$foot?>
