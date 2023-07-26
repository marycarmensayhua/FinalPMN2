<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AcercadeController extends Controller
{
    public function index()
    {
        $apellidosNombres = 'mary carmen cichuirumi sayhua';
        $carreraProfesional = 'DSI';
        $nivelCicloEstudios = 'IV semestre';
        $turno = 'Turno';

        return view('acercade', compact('apellidosNombres', 'carreraProfesional', 'nivelCicloEstudios', 'turno'));
    }
}
