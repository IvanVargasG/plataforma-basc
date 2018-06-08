<?php

namespace App\Http\Controllers;

use App\Models\ProveedoresModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class ProveedorController extends Controller
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
        return view ('proveedor.crear-proveedor');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      if (!ProveedoresModel::find($request->nombre)) {
        $proveedor = new ProveedoresModel;
        $proveedor->nombre = $request->nombre;

        if ($proveedor->save()) {
          return redirect(route('proveedor.show', [$request->nombre])
          )->with('message', 'Proveedor creado exitosamente');;
        } else {
          dd("No se pudo guardar el proveedor");
        }

      } else {
        return back()->withInput($request->all())->with('message', 'Ya existe este proveedor');
      }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProveedoresModel $proveedor
     * @return \Illuminate\Http\Response
     */
    public function show(ProveedoresModel $proveedor)
    {
        return view('Proveedor.Proveedor', $proveedor);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\ProveedoresModel $proveedor
     * @return \Illuminate\Http\Response
     */
    public function edit(ProveedoresModel $proveedor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ProveedoresModel $proveedor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProveedoresModel $proveedor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  app\Models\ProveedoresModel\ $proveedor
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProveedoresModel $proveedor)
    {
        //
    }
}
