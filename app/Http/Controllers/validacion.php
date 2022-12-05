<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class validacion extends Controller
{
    public function validacion(Request $request)
    {
        $num = rand(0, 999);
        $s = substr(str_shuffle(str_repeat("abcdefghijklmnopqrstuvwxyz", 5)), 0, 3);
        $s = strtoupper($s);
        $num = strval($num);
        $id = $num . $s;

        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $dni = $_POST['dni'];
        $fecha_nacimiento = $_POST['fecha_nacimiento'];
        $direccion = $_POST['direccion'];
        $discapacidad = $_POST['discapacidad'];

        // if((strlen($dni) != 9)){
        //     return Redirect::back()->withErrors(['dni' => 'El dni no es correcto']);
        // }elseif(!preg_match("/[a-z]/i",substr($dni,-1))){

        //     return Redirect::back()->withErrors(['dni' => 'El dni no es correcto, falla la letra']);

        // }

        // if(strlen($direccion)!=23){
        //     return Redirect::back()->withErrors(['direccion' => 'la direccion no es correcta']);
        // }

        $rest = substr($direccion, -3);
   
        if ($rest != "net" && $rest != "com") {
            return Redirect::back()->withErrors(['direccion' => 'la direccion no es correcta']);
        }

        $validated = $request->validate([
            'nombre' => 'required|max:25',
            'apellido' => 'required|max:50'
        ]);
    }

    public function llamar()
    {
        return view('formulario');
    }
}
