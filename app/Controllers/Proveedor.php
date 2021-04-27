<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Proveedor;
class Proveedor extends Controller{

    public function index(){

        $productos= new Producto();
        $datos['productos']=$productos->orderBy('id','ASC')->findAll(); 

        $datos['head']= view('templates/encabezado'); 
        $datos['foot']= view('templates/piedepagina'); 

        return view('Proveedores/listar',$datos);

    }

    public function crear(){
        
        $datos['head']= view('templates/encabezado'); 
        $datos['foot']= view('templates/piedepagina'); 

        return view('Proveedores/crear', $datos);

    }

    public function grabar(){

        $proveedor = new Proveedor(); 

        $datos=[ 
            'nit'=>$this->request->getvar('nit'),
            'nombre_proveedor'=>$this->request->getvar('nombre_proveedor'),
            'direccion'=>$this->request->getvar('direccion'),
            'Pais'=>$this->request->getvar('Pais'),
            'fecha_creacion'=>$this->request->getvar('fecha_creacion')                             
        ];                        

        $datos['head']= view('templates/encabezado'); 
        $datos['foot']= view('templates/piedepagina'); 

        $proveedor->insert($datos);

        echo "Proveedor nuevo fue Ingresado ";

    }   

    public function borrar($id=null){

        $proveedor= new Proveedor(); 
        $datositem=$proveedor->where('id',$id)->first(); 

        $proveedor->where('id',$id)->delete($id); 

        echo "Borrar registro, !! ";

        return $this->response->redirect(site_url('/listar'));

    }


    public function updateTest($id, $stat, $title) {
        $this->asArray()->where(['id' => 2])->protect(false)->update([
          'stat' => $stat,
          'title'=> $title]);
     } 

}

