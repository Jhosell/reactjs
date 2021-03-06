<?php

namespace App\Http\Controllers;

use App\Nivel;
use Illuminate\Http\Request;
use App\Curso;

class NivelController extends Controller
{
    public function index()
    {
        return Nivel::with([
            'curso',
        ])->get();
    }

    public function create()
    {
        $cursos = Curso::all();
        return view('niveles.crearniveles',compact('cursos'));
    }

    public function store(Request $request)
    {
        $nivel = new Nivel();
        $nivel->nivel = $request['nivel'];
        $nivel->descripcion = $request['descripcion'];
        $nivel->curso_id = $request['curso_id'];
        $nivel->save();

        return redirect('niveles/lista');
    }

    public function show(Nivel $nivel)
    {
        return $nivel;
    }

    public function edit(Nivel $nivel)
    {
        $cursos = Curso::all();
        return view('niveles.editarniveles',['nivel' => $nivel], compact('cursos'));
    }

    public function update(Request $request, Nivel $nivel)
    {
        $nivel->nivel = $request['nivel'];
        $nivel->descripcion = $request['descripcion'];
        $nivel->curso_id = $request['curso_id'];
        $nivel->save();

        return redirect('niveles/lista');
    }

    public function list()
    {
        $nv = $this->index();
        return view('niveles.listaniveles', ['nv' => $nv]);
    }

    public function destroy(Nivel $nivel)
    {
        $nivel->delete();
        return redirect('niveles/lista');
    }
}
