<?=$head?>

<body>
    <h1>Sistema de Inventarios</h1>
    <h2>Formulario de Lista de Articulos</h2>

    <h3>Ingreso de Nuevo Articulo</h3>
    
        <form method="post" action="<?=site_url('/grabar')?>" enctype="multipart/form-data">

            <div class="container-sm">
                <span class="input-group-text">Nombre Articulos</span>
                <input id="Nombre_articulo"  type="text" name="Nombre_articulo" size="90">
            </div>
            <div class="container-sm">
                <span class="input-group-text">presentacion</span>
                <input id="presentacion"  type="text" name="presentacion" size="40">
            </div>
            <div class="container-sm">
                <span class="input-group-text">Volumen</span>
                <input id="volumen"  type="number" name="volumen" size = "10" >
            </div>
            <div class="container-sm">
                <span class="input-group-text">Unidad x Caja</span>
                <input id="Unidadxcaja" type="number" name="Unidadxcaja" size = "10" >
            </div>
            <div class="container-sm">
                <span class="input-group-text">Costo Unitario</span>
                <input id="costo_unitario"  type="number" name="costo_unitario" size = "10" >
            </div>
            <div class="container-sm">
                <span class="input-group-text">precio de Venta</span>
                <input id="precio_venta"  type="number" name="precio_venta" size = "10" >
            </div>
            <div class="container-sm">
                <span class="input-group-text">SKU</span>    
                <input id="SKU"  type="text" name="SKU" size = "10" >         
            </div>

            <div class="container-sm">
                <button class="btn btn-success" type="submit">Grabar</button>
            </div>

        </form>

</body>
</html>

<?=$foot?>
