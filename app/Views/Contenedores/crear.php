<?=$head?>

<body>
    <h1>Sistema de Inventarios</h1>
    <h2>Formulario Lista de Contenedores en Transito</h2>

    <h3>Ingreso de Nuevo Contenedor</h3>
    
        <form method="post" action="<?=site_url('/grabar')?>" enctype="multipart/form-data">

            <div class="container-sm">
                <span class="input-group-text">NIT</span>
                <input id="nit"  type="text" name="nit" size="90">
            </div>
            <div class="container-sm">
                <span class="input-group-text">Nombre_proveedor Articulos</span>
                <input id="nombre_proveedor"  type="text" name="Nombre_proveedor" size="90">
            </div>            
            <div class="container-sm">
                <span class="input-group-text">Direccion</span>
                <input id="direccion"  type="text" name="direccion" size="40">
            </div>
            <div class="container-sm">
                <span class="input-group-text">Pais</span>
                <input id="pais"  type="number" name="pais" size = "10" >
            </div>
            <div class="container-sm">
                <span class="input-group-text">Fecha de creacion</span>
                <input id="fecha_creacion" type="date" name="fecha_creacion" size = "10" >
            </div>

            <div class="container-sm">
                <button class="btn btn-success" type="submit">Grabar</button>
            </div>

        </form>

</body>
</html>

<?=$foot?>
