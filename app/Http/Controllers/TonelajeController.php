<?php

namespace App\Http\Controllers;

use App\Models\TonelajesModel;
use Illuminate\Http\Request;
use App\Models\ProveedoresModel as Proveedores;

use Illuminate\Support\Facades\DB;


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
        if (!TonelajesModel::find($request->id_proveedor)){
            
            $tonelaje = new TonelajesModel;
            $tonelaje->tonelaje = $request->tonelaje;
            $tonelaje->id_proveedor = $request->id_proveedor;

            if ($tonelaje->save()){
                return redirect(route('tonelaje.show', [$tonelaje->id_proveedor])
            )->with('message', 'Tonelaje creado exitosamente');;
        }
        dd('No se pudo guardar');
        }else{
            return back()->withInput($request->all())->with('message', 'Ya existe tonelaje para el proveeor');
        }

    }

    /**
     * Display the specified resource.
     *

     * @param  \App\Models\TonelajesModel  $tonelaje
     * @return \Illuminate\Http\Response
     */
    public function show(TonelajesModel $tonelaje)
    {
        return view('tonelaje.tonelaje', $tonelaje);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TonelajesModel  $tonelaje
     * @return \Illuminate\Http\Response
     */    
   
   
    public function edit(TonelajesModel $tonelaje)

    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request

     * @param  \App\Models\TonelajesModel  $tonelaje
     * @return \Illuminate\Http\Response
     */
    
    public function update(Request $request, TonelajesModel $tonelajesModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *

     * @param  \App\Models\TonelajesModel  $tonelaje
     * @return \Illuminate\Http\Response
     */    
    public function destroy(TonelajesModel $tonelajesModel)

    {
        //
    }
}
