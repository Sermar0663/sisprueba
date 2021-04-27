<?php 
namespace App\Models;

use CodeIgniter\Model;

class Producto extends Model{
    protected $table      = 'productos';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'id';
    protected $allowedFields=['Nombre_articulo','presentacion','volumen','unidadxcaja','costo_unitario','precio_venta','SKU','fecha_creacion'];
}

