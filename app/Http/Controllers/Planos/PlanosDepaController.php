<?php

namespace App\Http\Controllers\Planos;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\Producto;

class PlanosDepaController extends Controller {
    //

    public function index() {
        
        /// return view("layouts.plantillaFormatoHC");
        
        // DECLARAR UNA VARIABLE DE TIPO ARRAY AL MODEL QUE SE CREO
        $productos = Producto::all();

        return view("planos.planosDepartamentos", compact("productos"));
    }
    
}