<?php

namespace App\Http\Controllers;

use App\Models\Participante;
use Illuminate\Http\Request;

class ValidadorParticipanteController extends Controller
{
    public function index()
    {
        return view('auth.login2');
    }

    public function consultarUsuario(Request $request)
    {
        $informacion_usuario =  Participante::where('numero_documento', $request->input('numero_documento'))->first();
        $CC = $request->input('numero_documento');
        if ($informacion_usuario) {
            if ($informacion_usuario->estado_registro == "Pre-matricula") {
                $mensaje = "Estimado usuario, en este momento aun no has diligenciado la prueba de conocimiento, por favor realícela en el siguiente botón.";
                dd($mensaje);
            } else if ($informacion_usuario->estado_registro == "Inscripción") {
                return redirect()->route('userQuizHome');
                dd();
            } else if ($informacion_usuario->estado_registro == "Matricula") {
                $mensaje = "Estimado usuario, Ya confirmaste matrícula, estaremos informando a tu correo la fecha de inicio";

                dd($mensaje);
            } else if ($informacion_usuario->estado_registro == "Pos-matriculado") {
                $mensaje = "Estimado usuario, por temas de manejo de información, para que su matrícula sea validada, por favor cargue el tipo de documento solicitado en el siguiente botón.";

                dd($mensaje);
            }
        } else {
            $mensaje = "Estimado usuario, en este momento no se encuentra inscrito, por favor regístrese en el siguiente botón.";

            dd($mensaje);
        }
    }
}
