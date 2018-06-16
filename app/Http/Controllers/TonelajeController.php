<?php

namespace App\Http\Controllers;

use App\Models\TonelajesModel;
use Illuminate\Http\Request;
use App\Models\ProveedoresModel as Proveedores;

class TonelajeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $proveedores = Proveedores::all();

        return view ('tonelaje.crear-tonejaje', [
            'proveedores' => $proveedores
        ]);
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
     * @param  \App\Models\TonelajesModel  $tonelajesModel
     * @return \Illuminate\Http\Response
     */
    public function show(TonelajesModel $tonelajesModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TonelajesModel  $tonelajesModel
     * @return \Illuminate\Http\Response
     */
    public function edit(TonelajesModel $tonelajesModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TonelajesModel  $tonelajesModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TonelajesModel $tonelajesModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TonelajesModel  $tonelajesModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(TonelajesModel $tonelajesModel)
    {
        //
    }
}
