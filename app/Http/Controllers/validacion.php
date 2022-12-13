<?php

namespace App\Http\Controllers;

use App\Models\usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;


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

        $seguridad = $_POST['seguridad'];
        $c = array(1, 5);
        $seguridad  = array_map('intval', str_split($seguridad));

        array_pop($seguridad);

        $correct = true;

        for ($i = 0; $i < count($seguridad); $i++) {
            for ($j = 0; $j < count($seguridad) || $seguridad[$i] == $c[$j]; $j++) {
                if ($seguridad[$i] == $c[$j]) {
                    $correct = true;
                    break;
                } else {
                    $correct = false;
                }
            }
            if ($correct) {
                break;
            }
        }
        var_dump($correct);
        if (!$correct) {
            return Redirect::back()->withErrors(['seguridad' => 'el codigo de seguiridad no es correcto']);
        }

        if ((strlen($dni) != 9)) {
            return Redirect::back()->withErrors(['dni' => 'El dni no es correcto']);
        } elseif (!preg_match("/[a-z]/i", substr($dni, -1))) {

            return Redirect::back()->withErrors(['dni' => 'El dni no es correcto, falla la letra']);
        }

        if (strlen($direccion) != 24) {
            return Redirect::back()->withErrors(['direccion' => 'la direccion no es correcta']);
        }

        $rest = substr($direccion, -3);

        if ($rest != "net" && $rest != "com") {
            return Redirect::back()->withErrors(['direccion' => 'la direccion no es correcta']);
        }



        $validated = $request->validate([
            'nombre' => 'required|max:25',
            'apellido' => 'required|max:50',
            'sexo' => 'required'
        ]);

        $uuid = Str::uuid()->toString();

        $usuario = usuario::make([  

            'name' => $validated['nombre'],
            'lastName' => $validated['apellido'],
            'date' => $fecha_nacimiento,
            'DNI' => $dni,
            'email' => $direccion,
            'sexo' => $validated['sexo'],
            'Discapacidad' => $discapacidad

        ]);

        $usuario->save();
    }


    public function filmValidator(Request $pelicula)
    {
        $validated = $pelicula->validate([
            'nombre' => 'required|max:100',
            'director' => 'required|max:100',
            'actor1' => 'required|max:100',
            'actor2' => 'required|max:100',
            'fecha' => 'required',
            'genero' => 'required'
        ]);

        return View('paginas/Catalogo', ['pelicula' => $validated]);
    }


    public function llamar()
    {
        return view('formulario');
    }

    public function index()
    {
        $users = DB::table('usuario')->get();
        $result = json_decode($users, true);
        return view('users', ['users' => $result]);
    }
}
