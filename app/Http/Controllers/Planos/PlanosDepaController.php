<?php

namespace App\Http\Controllers\Planos;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\Foto;
use App\Models\Producto;

class PlanosDepaController extends Controller {
    //

    public function index() {
        
        /// return view("layouts.plantillaFormatoHC");
        
        // DECLARAR UNA VARIABLE DE TIPO ARRAY AL MODEL QUE SE CREO
        // $productos = Producto::all();
        $productos = Producto::orderBy('nombre', 'ASC')->paginate();

        return view("planos.planosDepartamentos", compact("productos"));
    }

    // MÉRTODO PARA RECIBIR DATOS DE UN FORMUARIO
    // RECIBIENDO UN OBJETO DE TIPO REQUEST
    public function store(Request $request ) {

        // MOSTRAR DATOS DEL DE NUESTRO REQUEST
        // return $request->all();

        // CREACION DE UN OBJETO QUE APUNTE AL MODELO DE LA TABLA A INSERTAR REGISTROS NUEVOS
        // $planoImg = new Foto();

        // $planoImg->ruta_foto = $request->fotoPlano;

        //Recibimos el archivo y lo guardamos en la carpeta storage/app/public
        // $request->file('archivo')->store('public');

        // MOSTRAR EL OBJETO, SABER QUE DEBUELVE LA VARIABLE DE TIPO OBJETO
        // return $planoImg;
        // dd($request->file('fotoPlano'));

        // $planoImg->save();

        // VARIABLE DE TIPO ARRAY
        $entrada = $request->all();

        if($archivo = $request->file('fotoPlano')){

            // VARIABLE PARA ALMACENAR NUESTRA RUTA DE ARCHIVO
            $nombre = $archivo->getClientOriginalName();

            // CREAR CARPETA EN EL SERVIDOR
            $archivo->move('img', $nombre);

            // ALMACENAR LA IMAGEN EN LA BBDD
            $foto = Foto::create(['ruta_foto'=>$nombre]);

            // ASIGNAR UN ID
            $entrada['ruta_foto'] = $foto->id;
        }else{
            
        }

    }   
}