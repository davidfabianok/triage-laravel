<?php

namespace App\Http\Controllers;

use App\NivelDeUrgencia;
use Illuminate\Http\Request;

class NivelDeUrgenciaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function listar()
    {
        return NivelDeUrgencia::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function obtenerUno($id)
    {
        return NivelDeUrgencia::find($id);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function save(Request $request)
    {
        $obj = new NivelDeUrgencia();
        // color
        $obj->color = $request->color;
        // tipo_urgencia
        $obj->tipo_urgencia = $request->tipo_urgencia;
        // tiempo_espera_max
        $obj->tiempo_espera_max = $request->tiempo_espera_max;

        $obj->save();
        return $obj;
    }

    /**
     *  update resource
     *
     * @param  \App\NivelDeUrgencia  $nivelDeUrgencia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $obj = NivelDeUrgencia::find($id);
        // color
        $obj->color = $request->color;
        // tipo_urgencia
        $obj->tipo_urgencia = $request->tipo_urgencia;
        // tiempo_espera_max
        $obj->tiempo_espera_max = $request->tiempo_espera_max;

        $obj->save();
        return $obj;

    }

    /**
     * Show the form for deleted the specified resource.
     *
     * @param  \App\NivelDeUrgencia  $nivelDeUrgencia
     * @return \Illuminate\Http\Response
     */
    public function deleted($id)
    {
        $obj = NivelDeUrgencia::find($id);
        $obj->delete();
    }

}
