<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index(){//metodo encargado de mostrar la pagina principal
        return view('cursos.index');
    }

    public function create(){//metodo encargado de crear un elemento
        return view('cursos.create');
    }

    public function show($curso){//metodo encargado de mostrar un elemento
        return view('cursos.show',compact('curso'));
    }
}
