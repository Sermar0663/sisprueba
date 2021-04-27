<?php 
namespace App\Models;

use CodeIgniter\Model;

class Contenedor extends Model{
    protected $table      = 'contenedores';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'idcontenedores';
    protected $allowedFields=['numerocontenedor','nitproveedor','fecha_arribo','SKU','cantidad','status_importacion','fecha_creacion'];

}
