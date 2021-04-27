<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Contenedor;
class Contenedor extends Controller{

    
    public function index(){

        $contenedor= new Producto();
        $datos['contenedor']=$contenedor->orderBy('id','ASC')->findAll(); 

        $datos['head']= view('templates/encabezado'); 
        $datos['foot']= view('templates/piedepagina'); 

        return view('Contenedores/listar',$datos);

    }

    public function crear(){
        
        $datos['head']= view('templates/encabezado'); 
        $datos['foot']= view('templates/piedepagina'); 

        return view('Contenedores/crear', $datos);

    }

    public function grabar(){

        $contenedor = new Contenedor(); 

        $datos=[ 
            'numerocontenedor'=>$this->request->getvar('numerocontenedor'),
            'nitproveedor'=>$this->request->getvar('nitproveedor'),
            'fecha_arribo'=>$this->request->getvar('fecha_arribo'),
            'SKU'=>$this->request->getvar('SKU'),
            'cantidad'=>$this->request->getvar('cantidad') ,
            'status_importacion'=>$this->request->getvar('status_importacion')                         
            'fecha_creacion'=>$this->request->getvar('fecha_creacion')                             
        ];                        

        $datos['head']= view('templates/encabezado'); 
        $datos['foot']= view('templates/piedepagina'); 

        $Contenedor->insert($datos);

        echo "Contenedor nuevo fue Ingresado!!asdas    asdasds asdasd!! ";

    }   

    public function borrar($id=null){

        $contenedor= new Contenedor(); 
        $datositem=$Contenedor->where('id',$id)->first(); 

        $Contenedor->where('id',$id)->delete($id); 

        echo "Borrar registro, !! ";

        return $this->response->redirect(site_url('/listar'));

    }


    public function updateTest($id, $stat, $title) {
        $this->asArray()->where(['id' => 2])->protect(false)->update([
          'stat' => $stat,
          'title'=> $title]);
     } 

}

