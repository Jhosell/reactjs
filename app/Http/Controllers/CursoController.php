<?php

namespace App\Http\Controllers;

use App\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{

    public function index()
    {
        return Curso::with([
            'niveles'
        ])->get();
    }

    public function create()
    {
        return view('cursos.crearcurso');
    }

    public function store(Request $request)
    {
        $curso = new Curso();
        $curso->curso = $request['curso'];
        $curso->descripcion = $request['descripcion'];
        $curso->imagen = $request['imagen'];
        $curso->save();
        return redirect('cursos/lista');
    }

    public function show(Curso $curso)
    {
        $curso->load([
            'niveles',
        ]);
        return $curso;
    }

    public function edit(Curso $curso)
    {
        return view('cursos.editarcurso', ['curso'=>$curso]);
    }

    public function update(Request $request, Curso $curso)
    {
        $curso->curso = $request['curso'];
        $curso->descripcion = $request['descripcion'];
        $curso->imagen = $request['imagen'];
        $curso->save();

        return redirect('cursos/lista');
    }

    public function destroy(Curso $curso)
    {
        $curso->delete();
        return redirect('cursos/lista');
    }

    public function list()
    {
        $rs = $this->index();
        return view('cursos.listacurso', ['rs' => $rs]);
    }
}
