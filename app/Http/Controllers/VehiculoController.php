<?php

namespace App\Http\Controllers;

use App\Models\VehiculosModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\_token;

class VehiculoController extends Controller
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
        return view('vehiculo.crear-vehiculo');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*if (!VehiculosModel::find($request->placa)) {
            $vehiculo = new VehiculosModel;
            $vehiculo->placa = $request->placa;
            $vehiculo->kilometraje = $request->kilometraje;

            if ($vehiculo->save()) {
                return redirect(route('vehiculo.show', [$request->placa]));
            }

            return back()->withInput($request->all())->with('message', 'No se pudo guardar');
        } else {
            return back()->withInput($request->all())->with('message', 'Ya existe este vehículo');
        }*/

        $count = VehiculosModel::where('placa', $request->placa)
            ->count("placa");

        if ($count == 0) {
            $vehiculo = new VehiculosModel;
            $vehiculo->placa = $request->placa;
            $vehiculo->kilometraje = $request->kilometraje;

            if ($vehiculo->save()) {
                return redirect(route('vehiculo.show', [$vehiculo->id]));
            }

            return back()->withInput($request->all())->with('message', 'No se pudo guardar');
        } else {
            return back()->withInput($request->all())->with('message', 'Ya existe este vehículo');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\VehiculosModel  $vehiculo
     * @return \Illuminate\Http\Response
     */
    public function show(VehiculosModel $vehiculo)
    {
      return view('vehiculo.vehiculo', $vehiculo);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\VehiculosModel  $vehiculo
     * @return \Illuminate\Http\Response
     */
    public function edit(VehiculosModel $vehiculo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\VehiculosModel  $vehiculo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, VehiculosModel $vehiculo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\VehiculosModel  $vehiculo
     * @return \Illuminate\Http\Response
     */
    public function destroy(VehiculosModel $vehiculo)
    {
        //
    }
}
