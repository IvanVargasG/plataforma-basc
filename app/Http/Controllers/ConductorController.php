<?php

namespace App\Http\Controllers;

use App\Models\ConductoresModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class ConductorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('conductor.crear-conductor');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      if (!ConductoresModel::find($request->documento)) {
        $conductor = new ConductoresModel;
        $conductor->documento = $request->documento;
        $conductor->nombres = $request->nombres;
        $conductor->apellidos = $request->apellidos;
        $conductor->email = $request->email;
        $conductor->dirrecion = $request->direccion;
        $conductor->telefono = $request->telefono;

        if ($conductor->save()) {
          return redirect(
            route('conductor.show', [$request->documento])
          )->with('message', 'Conductor creado exitosamente');;
        } else {
          dd("No se pudo guardar");
        }

      } else {
        return back()->withInput($request->all())->with('message', 'Ya existe este conductor');
      }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ConductoresModel  $conductor
     * @return \Illuminate\Http\Response
     */
    public function show(ConductoresModel $conductor)
    {
        return view('conductor.conductor', $conductor);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ConductoresModel  $conductor
     * @return \Illuminate\Http\Response
     */
    public function edit(ConductoresModel $conductor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ConductoresModel  $conductor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ConductoresModel $conductor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ConductoresModel  $conductor
     * @return \Illuminate\Http\Response
     */
    public function destroy(ConductoresModel $conductor)
    {
        //
    }
}
