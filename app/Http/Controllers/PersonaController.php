<?php

namespace App\Http\Controllers;

use App\Persona;
use Illuminate\Http\Request;

class PersonaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function listar()
    {
        return Persona::where('fecha_egreso', null)
            ->with('nivelDeUrgencia')
            ->get();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function obtenerUno($id)
    {
        return Persona::where('fecha_egreso', null)
            ->with('nivelDeUrgencia')
            ->find($id);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function save(Request $request)
    {
        $obj = new Persona;
        $obj->nombre = $request->nombre;
        $obj->apellido = $request->apellido;
        $obj->edad = $request->edad;
        $obj->descripcion_estado = $request->descripcion_estado;
        $obj->fecha_ingreso = date('Y-m-d h:i:s');
        $obj->nivel_urgencia_id = $request->nivel_urgencia_id;

        $obj->save();
        return $obj;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $obj = Persona::find($id);
        $obj->nombre = $request->nombre;
        $obj->apellido = $request->apellido;
        $obj->edad = $request->edad;
        $obj->descripcion_estado = $request->descripcion_estado;
        $obj->fecha_egreso = $request->fecha_egreso;
        $obj->nivel_urgencia_id = $request->nivel_urgencia_id;

        $obj->save();
        return $obj;

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function deleted(int $id)
    {
        $obj = Persona::find($id);
        $obj->delete();

    }

}
