<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AlumnoController extends Controller
{
    public function index()
    {
        return view('alumno.index', ['alumnos' => Alumno::all()]);
    }

    public function create()
    {
        return view('alumno.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'codigo' => 'required',
            'apellido_paterno' => 'required',
            'apellido_materno' => 'required',
            'nombres' => 'required',
            'direccion' => 'required',
            'fecha_nacimiento' => 'required',
        ]);
        Alumno::create([
            'codigo' => $request->codigo,
            'apellido_paterno' => $request->apellido_paterno,
            'apellido_materno' => $request->apellido_materno,
            'nombres' => $request->nombres,
            'direccion' => $request->direccion,
            'fecha_nacimiento' => $request->fecha_nacimiento,
            'edad' => Carbon::parse($request->fecha_nacimiento)->age
        ]);
        return redirect()->route('alumno.index');
    }

    public function edit(Alumno $alumno)
    {
        return view('alumno.edit', compact('alumno'));
    }

    public function update(Alumno $alumno, Request $request)
    {
        $request->validate([
            'codigo' => 'required',
            'apellido_paterno' => 'required',
            'apellido_materno' => 'required',
            'nombres' => 'required',
            'direccion' => 'required',
            'fecha_nacimiento' => 'required',
        ]);
        $alumno->update([
            'codigo' => $request->codigo,
            'apellido_paterno' => $request->apellido_paterno,
            'apellido_materno' => $request->apellido_materno,
            'nombres' => $request->nombres,
            'direccion' => $request->direccion,
            'fecha_nacimiento' => $request->fecha_nacimiento,
            'edad' => Carbon::parse($request->fecha_nacimiento)->age
        ]);
        return redirect()->route('alumno.index');
    }

    public function destroy(Alumno $alumno)
    {
        $alumno->delete();
        return redirect()->route('alumno.index');
    }

    public function show(Alumno $alumno)
    {
        return view('alumno.show', compact('alumno'));
    }
}
