<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Producto;
class Productos extends Controller{

        public function index(){

            $productos= new Producto();
            $datos['productos']=$productos->orderBy('id','ASC')->findAll(); 

            $datos['head']= view('templates/encabezado'); 
            $datos['foot']= view('templates/piedepagina'); 

            return view('Productos/listar',$datos);

        }

        public function crear(){
            
            $datos['head']= view('templates/encabezado'); 
            $datos['foot']= view('templates/piedepagina'); 

            return view('Productos/crear', $datos);

        }

        public function grabar(){

            $articulo = new Producto(); 

            $datos=[ 
                'Nombre_articulo'=>$this->request->getvar('Nombre_articulo'),
                'presentacion'=>$this->request->getvar('presentacion'),
                'volumen'=>$this->request->getvar('volumen'),
                'imagenproducto'=>$this->request->getvar('unidadxcaja'),
                'unidadxcaja'=>$this->request->getvar('Unidadxcaja'),
                'costo_unitario'=>$this->request->getvar('costo_unitario'),
                'precio_venta'=>$this->request->getvar('precio_venta'),
                'SKU'=>$this->request->getvar('SKU'), 
                'fecha_operacion' =>date('y/m/d h:i:s')                              
            ];                        

            $datos['head']= view('templates/encabezado'); 
            $datos['foot']= view('templates/piedepagina'); 

            $articulo->insert($datos);

            echo "Articulo nuevo fue Ingresado ";

        }   
 
        public function borrar($id=null){

            $articulo= new Producto(); 
            $datositem=$articulo->where('id',$id)->first(); 

            $articulo->where('id',$id)->delete($id); 

            echo "Borrar registro, !! ";

            return $this->response->redirect(site_url('/listar'));

        }


        public function updateTest($id, $stat, $title) {
            $this->asArray()->where(['id' => 2])->protect(false)->update([
              'stat' => $stat,
              'title'=> $title]);
         } 

}