<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index(){//metodo encargado de mostrar la pagina principal
        
        $cursos = Curso::paginate();

        return view('cursos.index',compact('cursos'));
    }

    public function create(){//metodo encargado de crear un elemento
        return view('cursos.create');
    }

    public function show($id){//metodo encargado de mostrar un elemento
        
        $curso = Curso::find($id);

        return view('cursos.show',compact('curso'));
    }
}
