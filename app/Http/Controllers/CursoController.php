<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;
use App\Http\Requests\StoreCurso;

class CursoController extends Controller
{
    public function index(){//metodo encargado de mostrar la pagina principal
        
        $cursos = Curso::orderby('id','desc')->paginate();

        return view('cursos.index',compact('cursos'));
    }

    public function create(){//metodo encargado de crear un elemento
        return view('cursos.create');
    }

    public function show(Curso $curso){//metodo encargado de mostrar un elemento
        
        /*$curso = Curso::find($id);*/

        return view('cursos.show',compact('curso'));
    }

    public function store(StoreCurso $request){
        /*return $request->all();*/
        /*$curso = new Curso();
        $curso->name = $request->name;
        $curso->description = $request->descripcion;
        $curso->categoria = $request->categoria;

        $curso->save();*/
        
        $curso = Curso::create($request->all());

        return redirect()->route('cursos.show',$curso);
    }

    public function edit(Curso $curso){
        return view('cursos.edit',compact('curso'));
    }

    public function update(request $request,Curso $curso){
        /*return $request->all();*/
        
        $request->validate([
            'name'=>'required',
            'descripcion'=>'required',
            'categoria'=>'required'
        ]);
        
        /*$curso->name = $request->name;
        $curso->descripcion = $request->descripcion;
        $curso->categoria = $request->categoria;
        $curso->save();*/

        $curso->update($request->all());

        return redirect()->route('cursos.show',$curso);
    }

    public function destroy(Curso $curso){
        $curso->delete();

        return redirect()->route('cursos.index');
    }
}
