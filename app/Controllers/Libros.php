<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Libro;
class Libros extends Controller{

    public function index(){


        $libros= new Libro();
        $datos['libros']= $libros->orderBy('id','ASC')->findAll();

        return view('libros/listar',$datos);


    }

    public function crear (){

        return view ('libros/crear');
    }

    public function guardar(){

        $libro= new Libro();

       
        
        if($imagen=$this->request->getfile('imagen')){
                $nuevoNombre= $imagen->getRandomName();
                $imagen->move('../public/uploads/',$nuevoNombre);
                
                $datos=[ 
                    'nombre'=> $this->request-> getVar ('nombre'),
                    'imagen'=>$nuevoNombre
                ];
                $libro->insert($datos);

        }


        echo "Ingresado a la BD";

    }

}