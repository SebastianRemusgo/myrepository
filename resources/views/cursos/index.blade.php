@extends('layouts.plantilla')
@section('title','Cursos')
@section('content')
    <!--<div class="container">
        <div class="grid grid-cols-4 grid-rows-2 gap-4">
            <div class="bg-blue-100">A</div>
            <div class="bg-blue-200">B</div>
            <div class="bg-blue-300 col-span-2 row-span-2">C</div>
            <div class="bg-blue-400">D</div>
            <div class="bg-blue-500">E</div>
            <div class="bg-blue-600">F</div>
            <div class="bg-blue-100">A</div>
            <div class="bg-blue-200">B</div>
            <div class="bg-blue-300">C</div>
            <div class="bg-blue-400">D</div>
            <div class="bg-blue-500">E</div>
            <div class="bg-blue-600">F</div>
        </div>
    </div>
    <div class="container">
        <div class="grid grid-flow-col grid-rows-3 grid-cols-4">
            <div class="bg-blue-100">1</div>
            <div class="bg-blue-200">2</div>
            <div class="bg-blue-300">3</div>
            <div class="bg-blue-400">4</div>
            <div class="bg-blue-500">5</div>
            <div class="bg-blue-600">6</div>
            <div class="bg-blue-700">7</div>
            <div class="bg-blue-800">8</div>
            <div class="bg-blue-900">9</div>
        </div>
    </div>-->
    <h1>Bienvenido a la pagina cursos</h1>
    <a href="{{route('cursos.create')}}">Crear Curso</a>
    <ul>
        @foreach ($cursos as $curso)
            <li>
                <a href="{{route('cursos.show',$curso)}}">{{$curso->name}}</a>
            </li>
        @endforeach
    </ul>

    {{$cursos->links()}}
@endsection
