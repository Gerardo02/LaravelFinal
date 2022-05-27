<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Datos;

class CapturasController extends Controller
{
    public function store(Request $request) {
        $respuesta = array();
        $respuesta['exito'] = false;

        $nuevaCaptura = new Datos();

        $nuevaCaptura -> marca = $request -> input('marca');
        $nuevaCaptura -> color = $request -> input('color');
        $nuevaCaptura -> tipo = $request -> input('tipo');
        $nuevaCaptura -> year = $request -> input('year');
        $nuevaCaptura -> nombre = $request -> input('nombre');
        $nuevaCaptura -> apellido = $request -> input('apellido');
        $nuevaCaptura -> direccion = $request -> input('direccion');
        $nuevaCaptura -> pais = $request -> input('pais');
        $nuevaCaptura -> estado = $request -> input('estado');
        $nuevaCaptura -> codigo_postal = $request -> input('codigo_postal');
        $nuevaCaptura -> correo_electronico = $request -> input('correo_electronico');
        $nuevaCaptura -> celular = $request -> input('celular');

        //$nuevaCaptura -> save();
        if($nuevaCaptura -> save()){
            $respuesta['exito'] = true;
        }

        return $respuesta;

    }
    

}
