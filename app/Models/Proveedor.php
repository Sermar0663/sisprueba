<?php 
namespace App\Models;

use CodeIgniter\Model;

class Proveedor extends Model{
    protected $table      = 'proveedores';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'idproveedores';
    protected $allowedFields=['nit','nombre_proveedor','direccion','Pais','fecha_creacion'];
}

