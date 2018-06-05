<?php

namespace App\Http\Controllers;

use App\Models\VehiculosModel;
use Illuminate\Http\Request;

class VehiculoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return "Lista de Vehículos";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\VehiculosModel  $vehiculo
     * @return \Illuminate\Http\Response
     */
    public function show(VehiculosModel $vehiculo)
    {
        return view('vehiculo', [
          "vehiculo" => $vehiculo,
          "title" => "Mostrando Vehículo: "
        ]);
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
