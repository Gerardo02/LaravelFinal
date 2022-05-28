<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Datos;

class FuncionesController extends Controller
{
    public function index() {
        $funciones = Datos::all();
        $argumentos = array();
        $argumentos['funciones'] = $funciones;

        return view('index',$argumentos);
    }

    public function destroy($id){
        $registro = Datos::find($id);

        if($registro){
            if($registro -> delete()){
                return redirect() -> route('funciones.index') -> with('success', 'Registro eliminado');
            }
            return redirect() -> route('funciones.index') -> with('error', 'No se pudo borrar');
            
        }
        return redirect() -> route('funciones.index') -> with('error', 'No se encotro el registro');
    }
}
