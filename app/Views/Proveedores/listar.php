<?=$head?>


<body>
    <h1>Sistema de Cuentas por Pagar</h1>
    <h2>Formulario Lista de Proveedores</h2>
    <!--<?php print_r($proveedoreses); ?> -->
 
        <div class="container">
            <a href="<?=base_url('crear')?>">Ingresar Nuevo Proveedor</a>
            <table class="table table-light">
                <thead class="thead-light">
                    <tr>
                            <th>#REG</th>
                            <th>NIT Proveedor</th>
                            <th>Direccion</th>                            
                            <th>Volumen</th>   
                            <th>Pais</th>                                                                                                                                                               
                    </tr>

                </thead>
                <tbody>

                    <?php foreach($proveedor as $item): ?>


                        <tr>
                            <td><?=$item['idproveedores']?></td>
                            <td><?=$item['NIT']?></td>
                            <td><?=$item['Nombre del Proveedor']?></td>                            
                            <td><?=$item['Direccion']?></td>    
                            <td><?=$item['Pais']?></td>                           
                            <td>Editar/<a href="<?=base_url('borrar/'.$item['id']);?>" class="btn btn-danger" type="button">Borrar</a> </td>    
                                            
                        </tr>


                            
                    <?php endforeach; ?>

                </tbody>
            </table>

        </div>
</body>
</html>

<?=$foot?>
